<?php

namespace App\Http\Controllers\Admin;

use App\Career;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\career as careerResource;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.af-login.career.index');
    }

    protected function getAllCareerData()
    {
        $getAllCareerList = Career::orderBy('sort_order','ASC')->paginate(10);
        return careerResource::collection($getAllCareerList);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
      if ($request){
          $career= $request->isMethod('put')? Career::findorFail($request->career_id): new Career;
          $career->title = $request->input('title');
          $career->description = $request->input('description');
          $career->ended_date = $request->input('ended_date');
          $career->sort_order = $request->input('sort_order');
          $career->status = $request->input('status');

          if ($career->save()) {
              return new careerResource($career);
          }
      }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $removeCareerData= Career::findorFail($id);
        if ($removeCareerData->delete()) {
            return new careerResource($removeCareerData);
        }
    }
}
