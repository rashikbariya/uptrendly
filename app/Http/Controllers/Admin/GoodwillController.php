<?php

namespace App\Http\Controllers\Admin;

use App\GoodWillValue;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\GoodWill;
use Illuminate\Support\Facades\Session;

class GoodwillController extends Controller
{
    //
    public function index() {
        return view('admin.af-login.influencer.goodwill.good-will');
    }

    public function AddGoodwill() {
        return view('admin.af-login.influencer.goodwill.good-will-add');
    }
    
    public function save(Request $request) {
        $request->validate([
            'goodwill_title' => 'required|max:50|unique:ut_goodwill',
            'goodwill_status' => 'required',
            'goodwill_value' => 'required:number',
        ]);
        $goodWillId = date('ymdhis');
        $saveGoodWill = New GoodWill();
        $saveGoodWill->id = $goodWillId;
        $saveGoodWill->goodwill_title = $request->goodwill_title;
        $saveGoodWill->goodwill_status = $request->goodwill_status;
        if($saveGoodWill->save()){
            $saveGoodWillValue = New GoodWillValue();
            $saveGoodWillValue->goodwill_id = $goodWillId;
            $saveGoodWillValue->goodwill_amount = $request->goodwill_value;
            if($saveGoodWillValue->save()){
                Session::flash('message','Successfully Added');
                return redirect('/ut-admin/good-will');
            }
        }
        // return redirect()->route('your_url_where_you_want_to_redirect');
    }

    public function showGoodwillData(){
        $getGoodwillData = GoodWill::with('goodwillvalue','goodwillvalueall')->get();
       // dd($getGoodwillData);
        return view('admin.af-login.influencer.goodwill.good-will', compact('getGoodwillData'));
    }

    public function destroy($id){
        $delGoodWillData = GoodWill::find($id);
        $delGoodWillData->delete();
        Session::flash('message','Successfully Deleted');
        return redirect('/ut-admin/good-will');
    }

    public function edit($id) {
       //find customer
	    $goodWillData = GoodWill::find($id);
	    //show the edit form
	    return View('admin.af-login.influencer.goodwill.good-will-edit', compact('goodWillData'));
    }

    public function update(Request $request,$id) {
        //dd($request->change_goodwill_value);


        $request->validate([
            'goodwill_title' => 'required|max:50|unique:ut_goodwill,goodwill_title,'.$id,
            'goodwill_status' => 'required',
            'goodwill_value' => 'required:number',
        ]);
        $saveGoodWill = GoodWill::findOrFail($id);
        $saveGoodWill->goodwill_title = $request->goodwill_title;
        $saveGoodWill->goodwill_status = $request->goodwill_status;
        if($saveGoodWill->save()){

            $getGoodWillValue = GoodWillValue::orderBy('created_at','ASC')->get()->last();
            if($request->goodwill_value != $getGoodWillValue->goodwill_amount){


                if($request->change_goodwill_value==null){

                    $saveGoodWillValue = new GoodWillValue();
                    $saveGoodWillValue->goodwill_id = $saveGoodWill->id;
                    $saveGoodWillValue->goodwill_amount = $request->goodwill_value;
                    $saveGoodWillValue->save();
                }
                else{
                    $saveGoodWillValue = GoodWillValue::findOrfail($getGoodWillValue->id);
                    $saveGoodWillValue->goodwill_amount = $request->goodwill_value;
                    $saveGoodWillValue->save();
                }

            }
            Session::flash('message','Successfully Updated');
            return redirect('/ut-admin/good-will');

        }
    }
}
