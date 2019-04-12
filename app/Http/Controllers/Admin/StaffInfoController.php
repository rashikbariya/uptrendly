<?php

namespace App\Http\Controllers\Admin;

use App\Mail\sendPasswordToStaff;
use App\StaffInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\staffinfo as staffinfoResource;
use Illuminate\Mail\Mailer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;


class StaffInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.af-login.staffInfo.index');
    }


    protected function getAllStaffInfo()
    {
        $getStaffInfo = StaffInfo::orderBy('sort_order', 'ASC')->get();
        //return $getStaffInfo;
        return staffinfoResource::collection($getStaffInfo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Mailer $mailer)
    {

        $hashPass = str_random(10);
        $password = Hash::make($hashPass);

        if ($request->isMethod('put')) {
            $staffs = StaffInfo::findorFail($request->staff_id);
            if (($request->photo_path!=''))
            {
                if ($staffs->photo_path!=''){
                    $path = public_path('backend/assets/img/staffs').'/'.$staffs->photo_path;
                    unlink($path);
                }
                

                $exploded = explode(',', $request->photo_path);
                $decoded = base64_decode($exploded[1]);
                if (str_contains($exploded[0], 'jpge'))
                    $extension = 'jpg';
                else
                    $extension = 'png';

                $filename = explode(' ', $request->input('email'))[0] . '_' . str_random() . '.' . $extension;
                $path = public_path() . '/backend/assets/img/staffs/' . $filename;
                file_put_contents($path, $decoded);
                $staffs->photo_path = $filename;

            }
            else{
                $staffs->photo_path = $staffs->photo_path;
            }

        } else {
            $staffs = new StaffInfo;
            if (($request->photo_path!=''))
            {
                $exploded = explode(',', $request->photo_path);
                $decoded = base64_decode($exploded[1]);
                if (str_contains($exploded[0], 'jpge'))
                    $extension = 'jpg';
                else
                    $extension = 'png';

                $filename = explode(' ', $request->input('email'))[0] . '_' . str_random() . '.' . $extension;
                $path = public_path() . '/backend/assets/img/staffs/' . $filename;
                file_put_contents($path, $decoded);
                $staffs->photo_path = $filename;
            }
            else{
                $staffs->photo_path = Null;
            }

            $staffs->password=$password;
            $staffs->hash_password = $hashPass;


        }
        $staffs->fullname = $request->input('fullname');
        $staffs->email = $request->input('email');
        $staffs->phone_number = $request->input('phone_number');
        $staffs->dob = $request->input('dob');
        $staffs->phone_number = $request->input('phone_number');
        $staffs->designation = $request->input('designation');


        $staffs->linkedin_url = $request->input('linkedin_url');

        $staffs->sort_order = $request->input('sort_order');
        $staffs->status = $request->input('status');




        if ($staffs->save()) {

            return new staffinfoResource($staffs);
        }
    }

    public function sendPassword(Mailer $mailer, $email,$hashPassword){
        $mailer->to($email)->send(new sendPasswordToStaff($hashPassword));
    }

    protected function sendMail ($message,$email)
    {
//        $message->to($email)
    }

    public function uploadImage(Request $request){

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $removeStaffInfo = StaffInfo::findorFail($id);
        if ($removeStaffInfo->photo_path!=''){
            $path = public_path('backend/assets/img/staffs').'/'.$removeStaffInfo->photo_path;
            unlink($path);
        }
        if ($removeStaffInfo->delete()) {
            return new staffinfoResource($removeStaffInfo);
        }
    }
}
