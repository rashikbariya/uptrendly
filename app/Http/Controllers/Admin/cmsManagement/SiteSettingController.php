<?php

namespace App\Http\Controllers\Admin\cmsManagement;

use App\SeoManagement;
use App\SocialMediaManagement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Rules\Admin\generalSetting as generalSettingResource;
use App\Http\Resources\Rules\Admin\seomanagement as seoManagementResource;
use Illuminate\Support\Facades\Session;
use App\GeneralSetting;
class SiteSettingController extends Controller
{
    //

    public function fetchGeneralSetting(){
        
        return view('admin.af-login.cmsManagement.siteSetting.general');
    }
    public function fetchSocialMedia(){
        return view('admin.af-login.cmsManagement.siteSetting.socialmedia');
    }
    public function fetchSeoManagement(){

        return view('admin.af-login.cmsManagement.siteSetting.seo');
    }

    public function fetchGoogleAnalytics(){
        return view('admin.af-login.cmsManagement.siteSetting.analytics');
    }





    public function analyticsManagement(){
        
    }

    public function updateGeneralData(generalSettingResource $generalSettingResource){
       $updateGeneralData_ = GeneralSetting::get()->last();
       $updateGeneralData = $updateGeneralData_!=''?GeneralSetting::get()->last():New GeneralSetting();
       $updateGeneralData->site_name = $generalSettingResource->input('site_name');
       $updateGeneralData->company_address= $generalSettingResource->input('company_address');
       $updateGeneralData->company_phone1 = $generalSettingResource->input('company_phone1');
       $updateGeneralData->company_phone2= $generalSettingResource->input('company_phone2');
       $updateGeneralData->company_email = $generalSettingResource->input('company_email');

       //$updateGeneralData->site_big_logo_path = $generalSettingResource->input('site_big_logo_path');
       if ($generalSettingResource->hasFile('site_small_logo_path')) {
        if($generalSettingResource->file('site_small_logo_path')->isValid()) {

            $fileSmall = $generalSettingResource->file('site_small_logo_path');
             if($updateGeneralData_!=''){

                 $pathofLogoSmall = public_path('img/website/logo').'/'.$updateGeneralData->site_small_logo_path;

                 unlink($pathofLogoSmall);
             }

            $logoSmallImageNmae = 'uptrendly_small_logo'.date('YMdhmms'). '.' . $fileSmall->getClientOriginalExtension();

                 $generalSettingResource->file('site_small_logo_path')->move("img/website/logo", $logoSmallImageNmae);


        }
    }

    if ($generalSettingResource->hasFile('site_big_logo_path')) {
        if($generalSettingResource->file('site_big_logo_path')->isValid()) {
            $fileBig= $generalSettingResource->file('site_big_logo_path');

            if($updateGeneralData_!=''){
                   $pathofLogoBig = public_path('img/website/logo').'/'.$updateGeneralData->site_big_logo_path;
                   unlink($pathofLogoBig);
               }
                $logoBigImageNmae = 'uptrendly_big_logo'.date('YMdhmms'). '.' . $fileBig->getClientOriginalExtension();
            $generalSettingResource->file('site_big_logo_path')->move("img/website/logo", $logoBigImageNmae);


        }
    }
       $updateGeneralData->site_small_logo_path =$logoSmallImageNmae;
       $updateGeneralData->site_big_logo_path =$logoBigImageNmae;
       if($updateGeneralData->save()){
        Session::flash('message', 'General Setting data has been successfully updated');
        Session::flash('alert-class', 'alert-success');
        return view('admin.af-login.cmsManagement.siteSetting.general');
    }
    else{

        Session::flash('message', 'Something wrong going on');
        Session::flash('alert-class', 'alert-danger');

    }
      
    }
    public function updateSocialMedia(Request $request){
          $updateSocialData = SocialMediaManagement::get()->last();
        $updateSocialData = $updateSocialData!=null?$updateSocialData:new SocialMediaManagement();
          $updateSocialData->facebook_link = $request->input('facebook_link');
        $updateSocialData->twitter_link = $request->input('twitter_link');
        $updateSocialData->instagram_link = $request->input('instagram_link');
        $updateSocialData->youtube_link = $request->input('youtube_link');
        $updateSocialData->google_link = $request->input('google_link');
        $updateSocialData->linkedin_link = $request->input('linkedin_link');


        if($updateSocialData->save()){
            Session::flash('message', 'Socail Media data has been successfully updated');
            Session::flash('alert-class', 'alert-success');
            return view('admin.af-login.cmsManagement.siteSetting.socialmedia');
        }
        else{

            Session::flash('message', 'Something wrong going on');
            Session::flash('alert-class', 'alert-danger');

        }

    }
    public function updateSeoManagement(seoManagementResource $request){

        $updateSeoData = SeoManagement::get()->last();
        $updateSeoData = $updateSeoData!=null?$updateSeoData:new SeoManagement();
        $updateSeoData->meta_title = $request->input('meta_title');
        $updateSeoData->meta_description = $request->input('meta_description');
        $updateSeoData->meta_keyword= $request->input('meta_keyword');
        if($updateSeoData->save()){
            Session::flash('message', 'Seo data has been successfully updated');
            Session::flash('alert-class', 'alert-success');
            return view('admin.af-login.cmsManagement.siteSetting.seo');
        }
        else{

            Session::flash('message', 'Something wrong going on');
            Session::flash('alert-class', 'alert-danger');

        }
    }

}
