<?php

namespace App\Http\Controllers\Admin\cmsManagement;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Faqs;
use App\Http\Resources\Faqs as faqsResource;
use function PHPSTORM_META\type;

class FaqsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.af-login.cmsManagement.faqs.index');
    }


    public function getFaqsList(Request $request)
    {

        $typeSerach = $request->type;
        if ($typeSerach != '') {
            $getFaqsList = Faqs::orderBy('sort_order', 'ASC')->where('type', $typeSerach)->paginate(10);

        } else {
            $getFaqsList = Faqs::orderBy('sort_order', 'ASC')->paginate(10);
        }
        return faqsResource::collection($getFaqsList);
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
        // dd($request);
        // die();
        $this->validate($request, [
            'question' => 'required',
            'answer' => 'required',
            'type' => 'required',
            'sort_order' => 'required',
            'status' => 'required'

        ]);
        $faqs = $request->isMethod('put') ? Faqs::findorFail($request->faq_id) : new Faqs;
        $faqs->question = $request->input('question');
        $faqs->answer = $request->input('answer');
        $faqs->type = $request->input('type');
        $faqs->sort_order = $request->input('sort_order');
        $faqs->status = $request->input('status');

        if ($faqs->save()) {
            return new faqsResource($faqs);
        }
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
        $removeFaqs = Faqs::findorFail($id);
        if ($removeFaqs->delete()) {
            return new faqsResource($removeFaqs);
        }
    }
}
