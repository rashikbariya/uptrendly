<?php

namespace App\Http\Controllers\brand\setting;

use App\BrandInfo;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Helpers;

class GeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public $email;
    public function index()
    {
        $getGeneralBrandInfo = BrandInfo::select('id')->where('user_id', Helpers::getUserID())->get(); //get
        //dd($getGeneralBrandInfo);
        foreach ($getGeneralBrandInfo as $brandInfo) {
            $brandData = BrandInfo::findOrFail($brandInfo->id);
        }

        //dd($brandData->user->email);
        return view('brand.setting.general',compact('brandData'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function saveGeneralData(Request $request)
    {
        $this->validate($request, [
            'brand_name' => 'required',
            'brand_website_url' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required'

        ]);
       // dd($request->all());
        $getGeneralBrandInfo = BrandInfo::select('id')->where('user_id', Helpers::getUserID())->get(); //get brandinfo according to user_id;

        //dd($getGeneralBrandInfo);
        foreach ($getGeneralBrandInfo as $brandInfo) {
            $brandData = BrandInfo::findOrFail($brandInfo->id);
            if($brandData->user->email!=$request->input('email')){
               $brandAcc = User::findOrFail(Helpers::getUserID());
               $brandAcc->email = $request->input('email');
               $brandAcc->save();
            }

            $brandData->brand_name = $request->input('brand_name');
            $brandData->brand_website_url= $request->input('brand_website_url');
            $brandData->first_name = $request->input('first_name');
            $brandData->last_name = $request->input('last_name');
            if( $brandData->save()){

            }
        }
        //dd($brandData->user->email);
        return redirect()->back()->with("success","!");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    }
}
