<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')->name('landingPage');
// Route::get('/career', 'Frontend\CareerController@index')->name('career');
Route::get('/faqs', 'Frontend\FaqsController@index')->name('faqs');
Route::get('/faqs/{type}', 'Frontend\FaqsController@singletypefaq')->name('faqs');
Route::get('/about-us', 'Frontend\AboutController@index')->name('about-us');
Route::get('/contact-us', 'Frontend\ContactController@index')->name('contact-us');
Route::get('/pricing', 'Frontend\PricingController@index')->name('pricing');
Route::get('/influencers','Frontend\InfluencersController@index')->name('influencers');
Route::get('/brands','Frontend\BrandsController@index')->name('brands');



Route::GET('choose-social-account', 'HomeController@choose_social_account');


//Route::GET('/login/facebook/callback','Auth\LoginController@handleProviderCallback');

Route::get('auth/{provider}', 'Auth\RegisterController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\RegisterController@handleProviderCallback');
Route::get('/influencer-signup/error/{message}', 'Auth\InfluencerSignUpController@errorMessage');

Route::get('influencer_signup/{provider}', 'Auth\InfluencerSignUpController@secondView');

Route::get('influencer-signup/{provider}', 'Auth\InfluencerSignUpController@signUp');
Route::POST('influencer-signup/{provider}', 'Auth\InfluencerSignUpController@register');



// admin route start Here
Route::GET('/ut-admin/home', 'AdminController@index');
Route::GET('/ut-admin', function () {
    return redirect('/ut-admin/login');
});
Route::GET('/ut-admin/login', 'Admin\Auth\LoginController@showLoginForm')->name('admin.auth.login');
Route::POST('/ut-admin/login', 'Admin\Auth\LoginController@login');
Route::GET('/ut-admin/logout', 'Admin\Auth\LoginController@logout')->name('admin.auth.logout');
Route::POST('/ut-admin/admin-password/email', 'Admin\Auth\ForgotPasswordController@sendResetLinkEmail')->name('admin.auth.password.email');
Route::GET('/ut-admin/admin-password/reset', 'Admin\Auth\showLinkRequestForm@showLinkRequestForm')->name('admin.auth.password.request');
Route::POST('/ut-admin/admin-password/reset', 'Admin\Auth\ResetPasswordController@reset');
Route::GET('/ut-admin/admin-password/reset{token}', 'Admin\Auth\RegisterController@showResetForm')->name('admin.auth.password.reset');
// admin route end here


// staff route start Here
Route::GET('/ut-staff/home', 'StaffController@index');
Route::GET('/ut-staff', function () {
    return redirect('/ut-staff/login');
});
Route::GET('/ut-staff/login', 'Staff\Auth\LoginController@showLoginForm')->name('staff.auth.login');
Route::POST('/ut-staff/login', 'Staff\Auth\LoginController@login');
Route::GET('/ut-staff/logout', 'Staff\Auth\LoginController@logout')->name('admin.auth.logout');
Route::POST('/ut-staff/admin-password/email', 'Staff\Auth\ForgotPasswordController@sendResetLinkEmail')->name('staff.auth.password.email');
Route::GET('/ut-staff/admin-password/reset', 'Staff\Auth\showLinkRequestForm@showLinkRequestForm')->name('staff.auth.password.request');
Route::POST('/ut-staff/admin-password/reset', 'Staff\Auth\ResetPasswordController@reset');
Route::GET('/ut-staff/admin-password/reset{token}', 'Staff\Auth\RegisterController@showResetForm')->name('staff.auth.password.reset');
// staff route end here


//brand signup

Route::GET('/login', 'Auth\LoginController@showLoginForm')->name('auth.login');
Route::POST('/login', 'Auth\LoginController@login')->name('auth.login');
Route::GET('/logout', 'Auth\LoginController@logout')->name('auth.logout');
Route::GET('/brand-signup', 'Auth\BrandRegisterController@index')->name('auth.brandregister');
Route::POST('/brand-signup', 'Auth\BrandRegisterController@register')->name('auth.registerbrand');
Route::GET('/brand-signup-success', function () {
    $getMessasge = \Illuminate\Support\Facades\Session::get('successMessage');
    if ($getMessasge == 'Success') {
        return view('landing.brand_signup_success');
    } else {
        return redirect('/brand-signup');
    }
});
Auth::routes();
Route::group(['middleware' => ['auth:brand'], 'prefix' => 'brand', 'as' => 'brand.'], function () {



    Route::GET('/', 'brand\HomeController@index')->name('brandhomaepage');

    Route::GET('/dashboard', function () {
        return view('brand.index');
    });

//    Route::GET('first_setup', function () {
//        return view('brand.first_setup');
//    });

    Route::GET('/campaign-list', function () {
        return view('brand.campaign.index');
    });

    Route::GET('/campaign/addnew','brand\CampaignController@create');

    Route::GET('/campaign/single/{id}', function () {
        return view('brand.campaign.single');
    });


    Route::GET('/campaign/single-running/{id}', function () {
        return view('brand.campaign.single_running');
    });


    Route::GET('/message', function () {
        return view('brand.message');
    });

    //rout for notification
    Route::GET('/notification', function () {
        return view('brand.notification');
    });

    Route::GET('/campaign/replace-influencer/{cam_id}/{inf_id}', function () {
        return view('brand.campaign.replace_influencer');
    });

    //search influencer from brand
   Route::GET('/search/influencer','brand\search\SearchInfluencerController@search');


    Route::group(['prefix' => 'settings', 'as' => 'settings.'], function () {
        Route::GET('/general', 'brand\setting\GeneralController@index')->name('settingGeneral');
        Route::POST('/general', 'brand\setting\GeneralController@saveGeneralData')->name('saveGeneralData');
        Route::GET('/profile', 'brand\setting\ProfileController@index')->name('settingProfile');
        Route::POST('/profile', 'brand\setting\ProfileController@saveProfileData')->name('saveProfileData');
//        Route::GET('/password', function () {
//
//        });
        Route::GET('/pricing', function () {
            return view('brand.setting.pricing');
        });
        Route::GET('/pricing/history','brand\setting\PricingHistoryController@getPricingPaiddata');
        Route::get('/password', 'brand\setting\ChangePasswordController@index');

        Route::post('/password', 'brand\setting\ChangePasswordController@changePassword')->name('changePassword');
    });


    Route::group(['prefix' => 'billing', 'as' => 'settings.'], function () {
        Route::GET('/dashboard', 'brand\billing\DashboardController@index')->name('settingGeneral');
        Route::GET('/plans', 'brand\billing\PlansController@index')->name('settingGeneral');
        Route::GET('/payment_history', 'brand\billing\PaymentHistoryController@index')->name('settingGeneral');
        Route::GET('/renew-plan/{id}', 'brand\billing\RenewSubscriptionController@renewPlan')->name('renewplan');
        Route::POST('/renew-plan/{id}', 'brand\billing\RenewSubscriptionController@addrenewplan')->name('addrenewplan');
        Route::GET('/change-plan/{id}', 'brand\billing\ChangePlanController@getPlan')->name('getPlan');
        Route::POST('/change-plan/{id}', 'brand\billing\ChangePlanController@changePlan')->name('changePlan');
    });

    Route::GET('/search','brand\search\SearchInfluencerController@search')->name('searchinfluencer');
});


Route::group(['middleware' => ['auth:admin'], 'prefix' => 'ut-admin', 'as' => 'admin.'], function () {

    Route::group(['prefix'=>'cms-management'],function (){
        Route::GET('featured-influencers', 'Admin\cmsManagement\TestimonialController@index')->name('featuredInfluencer');
        Route::GET('profession', 'Admin\cmsManagement\ProfessionController@index')->name('profession');
        Route::GET('faqs', 'Admin\cmsManagement\FaqsController@index')->name('faqs');
        Route::GET('testimonials', 'Admin\cmsManagement\TestimonialController@index')->name('testimonial');

        
        Route::GET('pricing','Admin\cmsManagement\PricingController@index');
        Route::GET('pricing/add','Admin\cmsManagement\PricingController@addPricing');
        

        Route::group(['prefix'=>'site-setting'],function (){
            Route::GET('/', function (){
               return redirect('ut-admin/cms-management/site-setting/general');
            });
            Route::GET('general', 'Admin\cmsManagement\SiteSettingController@fetchGeneralSetting')->name('general');
            Route::POST('general', 'Admin\cmsManagement\SiteSettingController@updateGeneralData')->name('update.general');
            Route::GET('social-media', 'Admin\cmsManagement\SiteSettingController@fetchSocialMedia')->name('socailmedia');
            Route::POST('social-media', 'Admin\cmsManagement\SiteSettingController@updateSocialMedia')->name('update.socailmedia');
            Route::GET('seo-management', 'Admin\cmsManagement\SiteSettingController@fetchSeoManagement')->name('seo');
            Route::POST('seo-management', 'Admin\cmsManagement\SiteSettingController@updateSeoManagement')->name('update.seo');
            Route::GET('google-analytics', 'Admin\cmsManagement\SiteSettingController@fetchGoogleAnalytics')->name('analytics');

        });
    });
       Route::GET('staff-info', 'Admin\StaffInfoController@index')->name('staffInfo');
    Route::GET('career', 'Admin\CareerController@index')->name('career');
    Route::GET('brand-info', 'Admin\Brand\BrandInfoController@getAllBrandInfoWeb')->name('brand-info');

    Route::GET('brand-info/{brand_name}/{csrf_token}',function (){
        return view('admin.af-login.brand.single_brand');
    });
    Route::GET('brand-info/{brand_name}/campaign/1', function () {
       return view('admin.af-login.brand.campaing_info');
    });
    Route::GET('influencer/','Admin\InfluencerController@index');
    Route::GET('influencer-info/{id}', function () {
        return view('admin.af-login.influencer.influencer_profile');
    });
    // Route::GET('good-will', 'Admin\GoodwillController@index');

    Route::GET('good-will', 'Admin\GoodwillController@showGoodwillData');

    Route::GET('good-will/delete/{id}', 'Admin\GoodwillController@destroy');

    Route::GET('good-will/edit/{id}', 'Admin\GoodwillController@edit');
    Route::POST('good-will/edit/{id}', 'Admin\GoodwillController@update');

    Route::GET('good-will/add', 'Admin\GoodwillController@AddGoodwill');
    Route::POST('good-will/add', 'Admin\GoodwillController@save');

    Route::GET('brand-info/{id}','Admin\Brand\BrandInfoController@getAllBrandSingleWeb');

});

Route::group(['middleware' => ['auth:staff'], 'prefix' => 'ut-staff', 'as' => 'staff.'], function () {
    Route::GET('daily-report', 'Staff\DailyReportController@index')->name('dailyReportHome');
//    Route::GET('cms-management/profession','Admin\cmsManagement\ProfessionController@index')->name('profession');
//    Route::GET('cms-management/faqs','Admin\cmsManagement\FaqsController@index')->name('faqs');
//    Route::GET('cms-management/testimonials','Admin\cmsManagement\TestimonialController@index')->name('testimonial');
//    Route::GET('staff-info','Admin\StaffInfoController@index')->name('staffInfo');
//    Route::GET('career','Admin\CareerController@index')->name('career');
});


Route::group(['middleware' => ['auth:influencer'],'prefix'=>'influencer','as '=>'influencer'],function(){

    Route::GET('/', function () {
        return view('influencer.index');
    });

    Route::GET('/campaign-list', function () {
        return view('influencer.campaign.index');
    });

    Route::GET('/completed-campaign', function () {
        return view('influencer.campaign.history');
    });

    Route::GET('/message', function () {
        return view('influencer.message');
    });

    Route::GET('settings', function () {
        return redirect('influencer/settings/general');
    });

    Route::GET('settings/general', function () {
        return view('influencer.setting.general');
    });


    Route::GET('/settings/password', function () {
        return view('influencer.setting.password');
    });

    Route::GET('settings/linked-accounts','Influencer\Setting\LinkedAccountController@getLinkedAccountData');


    Route::GET('campaign/single/{id}', function () {
        return view('influencer.campaign.single_campaign');
    });

    Route::GET('/notification', function () {
        return view('influencer.design');
    });

   

    Route::GET('/design', function () {
       return view('influencer.design');
    });

    //search brand from influencer
    Route::POST('/brandlist/search','influencer\SearchBrandController@search')->name('searchbrand');
    Route::GET('/brandlist','influencer\SearchBrandController@fetchallbranddata')->name('listofbrands');



});

//cronjob route
Route::GET('/senMailToBrand', 'brand\CrobjobPricingController@index')->name('sendmail');


Route::GET('/user/email-verification/{id}/{token}','Frontend\EmailVerificationController@verifiedEmail');


Route::get('/clear-cache',function(){
  $ex = Artisan::call('cache:clear');
  dd($ex);
 
});

Route::get('/config-cache',function(){
  $ex = Artisan::call('config:cache');
  dd($ex);
 
});

Route::get('/view-clear',function(){
  $ex = Artisan::call('view:clear');
  dd($ex);
 
});


Route::get('/route-clear',function(){
  $ex = Artisan::call('route:clear');
  dd($ex);
});

//for construction page
Route::GET('/construction', function(){
    return view('Landing.error.constructionpage');
});

//for error
Route::GET('pagenotfound',['as' => 'notfound','uses' => 'HomeController@pagenotfound']);










