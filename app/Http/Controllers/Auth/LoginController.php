<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public  $gard ='';


    public function __construct()
    {


        $this->middleware('guest:brand')->except('logout');
        $this->middleware('guest:influencer')->except('logout');
    }



    public function showLoginForm()
    {
        return view('landing.login');
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)

    {

        $this->gard ='brand';

        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect('/login');
    }


    public function login(Request $request)
    {



        $this->validateLogin($request);


        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }


    protected function attemptLogin(Request $request)
    {



        $user=User::where('email',$request->email)->get();
        foreach ($user as $userData){
            if($userData->user_type==0){
                $this->gard ='brand';
            }elseif($userData->user_type==1){
                $this->gard ='influencer';
            }
        }

        return $this->guard()->attempt(
            $this->credentials($request), $request->filled('remember')
        );
    }

    /**
     * Validate the user login request.
     *
     * @param  \Illuminate\Http\Request $request
     * @return void
     */
    protected function validateLogin(Request $request)
    {

        $this->validate($request, [
            $this->username() => 'required|string|email',
            'password' => 'required|string',
        ]);
    }




    protected function credentials(Request $request)
    {
        //dd($request->all());
       // return $request->only($this->username(), 'password');
        return ['email' => $request->email, 'password' => $request->password, 'status' => '1'];
    }

    protected function authenticated(Request $request, $user)
    {
        switch ($user->user_type){
            case 0 :
                $this->middleware('guest:brand')->except('logout');
                return redirect()->intended('/brand');
                break;

            case 1:
                $this->middleware('guest:influencer')->except('logout');
                return redirect()->intended('/influencer');
                break;
        }

    }


    protected function guard()
    {

        if($this->gard==''){
            return Auth::guard('brand');
        }
        else{
            return Auth::guard($this->gard);
        }



    }

    protected function redirectTo()
    {
        if(Auth::user()->user_type=='0'){
            return '/brand';
        }else{
            return '/influencer';
        }
    }


}
