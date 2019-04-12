<?php

namespace App\Http\Controllers\Admin\cmsManagement;

use App\Http\Resources\testimonial as testimonialResource;
use App\Testimonials;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.af-login.cmsManagement.testimonial.index');
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
    public function store(Request $request)
    {
        if ($request->isMethod('put')){
            $testimonial =  Testimonials::findorFail($request->testi_id);
            $imageName = $testimonial->photo_path;
            if($request->photo_path!=''){

                if ($testimonial->photo_path!=''){
                    $path = public_path('backend/assets/img/testimonials').'/'.$testimonial->photo_path;
                    unlink($path);
                }

                $exploded = explode(',', $request->photo_path);
                $decoded = base64_decode($exploded[1]);
                if (str_contains($exploded[0], 'jpge'))
                    $extension = 'jpg';
                else
                    $extension = 'png';

                $filename = explode(' ', $request->input('fullname'))[0] . '_' . str_random() . '.' . $extension;
                $path = public_path() . '/backend/assets/img/testimonials/' . $filename;
                file_put_contents($path, $decoded);
                $testimonial->photo_path = $filename;
            }
            else{
                $testimonial->photo_path = $testimonial->photo_path;
            }


        }
        else{


            $this->validate($request,[
               'fullname'=>'required',
                'description'=>'required',
                'profession_id'=>'required',
                'photo_path'=>'required',
                'sort_order'=>'required',
                'status'=>'required',

            ]);
            $testimonial = new Testimonials;
            $exploded = explode(',', $request->photo_path);
            $decoded = base64_decode($exploded[1]);
            if (str_contains($exploded[0], 'jpge'))
                $extension = 'jpg';
            else
                $extension = 'png';

            $filename = explode(' ', $request->input('fullname'))[0] . '_' . str_random() . '.' . $extension;
            $path = public_path() . '/backend/assets/img/testimonials/' . $filename;
            file_put_contents($path, $decoded);
            $testimonial->photo_path = $filename;
        }
        $testimonial->fullname = $request->input('fullname');
        $testimonial->description = $request->input('description');
        $testimonial->profession_id =$request->input('profession_id');
        $testimonial->sort_order = $request->input('sort_order');
        $testimonial->status = $request->input('status');

        if ($testimonial->save()) {
            return new testimonialResource($testimonial);
        }
    }


    public function getTestimonialList()
    {
        $testimonialData = Testimonials::orderBy('sort_order')->with('profession')->paginate(10);
        return testimonialResource::collection($testimonialData);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testimonials $testimonials
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonials $testimonials)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimonials $testimonials
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonials $testimonials)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Testimonials $testimonials
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonials $testimonials)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimonials $testimonials
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $removeTestimonial = Testimonials::findorFail($id);
        if ($removeTestimonial->photo_path!=''){
            $path = public_path('backend/assets/img/testimonials').'/'.$removeTestimonial->photo_path;
            unlink($path);
        }
        if ($removeTestimonial->delete()) {
            return new testimonialResource($removeTestimonial);
        }
    }
}
