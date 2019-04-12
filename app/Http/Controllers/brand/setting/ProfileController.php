<?php

namespace App\Http\Controllers\brand\setting;

use App\BrandInfo;
use Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Helpers;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getGeneralBrandInfo = BrandInfo::select('id')->where('user_id', Helpers::getUserID())->get(); //get
        foreach ($getGeneralBrandInfo as $brandInfo) {
            $brandData = BrandInfo::findOrFail($brandInfo->id);
        }
        return view('brand.setting.profile', compact('brandData'));
    }


    public function saveProfileData(Request $request)
    {
        //
     //   dd($request->file('photo_name'));
        $getGeneralBrandInfo = BrandInfo::select('id')->where('user_id', Helpers::getUserID())->get(); //get
        foreach ($getGeneralBrandInfo as $brandInfo) {

            $brandData = BrandInfo::findOrFail($brandInfo->id);

             if($request->file('photo_name')){
               //  dd('asdas');
                 if ($brandData->photo_name!=''){
                     $path = public_path('/users/upload/brand/thumbnail/').$brandData->photo_name;
                     unlink($path);
                     $path2 = public_path('/users/upload/brand/image/').$brandData->photo_name;
                     unlink($path2);
                 }
                 $originalImage= $request->file('photo_name');
                 $getExtension=$originalImage->getClientOriginalExtension();

                 $thumbnailImage = Image::make($originalImage);
                 $thumbnailPath = public_path('/users/upload/brand/thumbnail/');
                 $originalPath = public_path('/users/upload/brand/image/');
                 $thumbnailImage->save($originalPath.time().$brandData->brand_name.'.'.$getExtension);
                 $thumbnailImage->resize(250,250);
                 $thumbnailImage->save($thumbnailPath.time().$brandData->brand_name.'.'.$getExtension);

                 $brandData->photo_name=time().$brandData->brand_name.'.'.$getExtension;
             }

            $brandData->about_brand=$request->input('about_brand');
            $brandData->category_id=$request->input('category_id');

            $brandData->save();
        }
        return redirect()->back()->with("success","Password changed successfully !");
    }
}

