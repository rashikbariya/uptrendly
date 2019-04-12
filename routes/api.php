<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/admin', function (Request $request) {
    return $request->admin();


});
  Route::GET('cms-management/profession','Admin\cmsManagement\ProfessionController@getProfessionList')->name('profession'); //getProfessionListAPI
Route::GET('cms-management/profession/active','Admin\cmsManagement\ProfessionController@getActiveProfessionList')->name('profession'); //getActiveProfessionList
Route::DELETE('cms-management/profession/{id}','Admin\cmsManagement\ProfessionController@destroy')->name('deleteProfession'); //deleteProfessionData
Route::POST('cms-management/profession','Admin\cmsManagement\ProfessionController@store'); //SaveProfessionData
Route::PUT('cms-management/profession','Admin\cmsManagement\ProfessionController@store'); //UpdateProfessionData


Route::GET('cms-management/faqs','Admin\cmsManagement\FaqsController@getFaqsList')->name('faqs'); //getFaqsData
Route::DELETE('cms-management/faqs/{id}','Admin\cmsManagement\FaqsController@destroy')->name('deleteFaqs'); //DeleteFaqsData
Route::POST('cms-management/faqs','Admin\cmsManagement\FaqsController@store'); //SaveFaqsData
Route::PUT('cms-management/faqs','Admin\cmsManagement\FaqsController@store'); //UpdateFaqsData

Route::GET('cms-management/testimonials','Admin\cmsManagement\TestimonialController@getTestimonialList')->name('faqs'); //getFaqsData
Route::DELETE('cms-management/testimonials/{id}','Admin\cmsManagement\TestimonialController@destroy')->name('deleteFaqs'); //DeleteFaqsData
Route::POST('cms-management/testimonial','Admin\cmsManagement\TestimonialController@store'); //SaveFaqsData
Route::PUT('cms-management/testimonial','Admin\cmsManagement\TestimonialController@store'); //UpdateFaqsData

Route::GET('staff-info','Admin\StaffInfoController@getAllStaffInfo')->name('staffInfo'); //getstaffInfo
Route::DELETE('staff-info/{id}','Admin\StaffInfoController@destroy')->name('deletestaffInfo'); //DeletestaffInfo
Route::POST('staff-info','Admin\StaffInfoController@store'); //SavestaffInfo
Route::PUT('staff-info','Admin\StaffInfoController@store'); //UpdatestaffInfo


Route::GET('career','Admin\CareerController@getAllCareerData')->name('Career'); //getCareer
Route::DELETE('career/{id}','Admin\CareerController@destroy')->name('deleteCareer'); //DeleteCareer
Route::POST('career','Admin\CareerController@store'); //SaveCareer
Route::PUT('career','Admin\CareerController@store'); //UpdateCareer

Route::GET('brand-info','Admin\Brand\BrandInfoController@getAllBrandInfo')->name('BrandInfo'); //getBrandInfo

//getSingleBrandInfo
Route::GET('brand-info/{brand_name}/{csrf_token}','Admin\Brand\BrandInfoController@getSingleBrandInfo')->name('getSingleBrandInfo'); //getBrandInfo


Route::POST('daily-report','Staff\DailyReportController@store'); //SaveDaliyRreport




