<?php

namespace App\Http\Controllers\Admin\cmsManagement;

use App\Testimonials;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profession;
use App\Http\Resources\profession as professionResource;


class ProfessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.af-login.cmsManagement.profession.index');
    }

    public function getProfessionList()
    {
        return professionResource::collection(Profession::orderBy('title')->get());
    }

    public function getActiveProfessionList()
    {
        $getProfesionList = Profession::where('status','Active')->orderBy('title')->get();
        return professionResource::collection($getProfesionList);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        if($request->isMethod('put')){
            $id= $request->id;
            $this->validate($request,[
    'title'=>'required|string|unique:ut_profession,title,'.$id,
                'status'=>'required'
            ]);
          $profession = Profession::findorFail($id);
        }
        else{
            $this->validate($request,[
                'title'=>'required|string|unique:ut_profession,title',
                'status'=>'required'
            ]);
            $profession = new Profession;
        }


        $profession->title = $request->input('title');
        $profession->description = $request->input('description');
        $profession->status = $request->input('status');
        if ($profession->save()) {
            return new professionResource($profession);
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimonials $testimonials
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $removeProfession = Profession::findorFail($id);
        if ($removeProfession->delete()) {
            return new professionResource($removeProfession);
        }
    }
}
