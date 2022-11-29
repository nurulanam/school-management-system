<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\FrontAdmission;
use Illuminate\Http\Request;
use File;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admissions = FrontAdmission::all();
        return view('backend.pages.frontpages.index.admission.frontAdmission', compact('admissions'));
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
        $request->validate(
            [
                'title' => 'required',
                'bg_image' => 'required',
                'video_link' => 'required',
                'button_text' => 'required',
                'button_link' => 'required',
            ]
        );
        $rows = FrontAdmission::select('*')->count();
        if($rows == 0){
            $frontAdmission = new FrontAdmission();
            $frontAdmission->title = $request->title;
            $frontAdmission->top_description = $request->top_description;
            if($request->hasFile('bg_image')){
                $file = $request->bg_image;
                $extention = $file->getClientOriginalExtension();
                $fileName = hexdec(uniqid()).'.'.$extention;

                $file->move('frontend/assets/images/pages/home/admission/', $fileName);
                $frontAdmission->bg_image = $fileName;
            }
            $frontAdmission->video_link = $request->video_link;
            $frontAdmission->bottom_description = $request->bottom_description;
            $frontAdmission->button_text = $request->button_text;
            $frontAdmission->button_link = $request->button_link;
            $frontAdmission->save();

            return redirect()->back()->with('success', 'Admission Section Created Successfully');

        }elseif($rows > 0){
            $update = FrontAdmission::latest()->first();
            $update->title = $request->title;
            $update->top_description = $request->top_description;
            if($request->hasFile('bg_image')){
                $oldFile = 'frontend/assets/images/pages/home/admission/'.$update->bg_image;

                if(File::exists(public_path($oldFile))){
                    File::delete(public_path($oldFile));
                }

                $file = $request->bg_image;
                $extention = $file->getClientOriginalExtension();
                $fileName = hexdec(uniqid()).'.'.$extention;

                $file->move('frontend/assets/images/pages/home/admission/', $fileName);
                $update->bg_image = $fileName;
            }
            $update->video_link = $request->video_link;
            $update->bottom_description = $request->bottom_description;
            $update->button_text = $request->button_text;
            $update->button_link = $request->button_link;
            $update->update();

            return redirect()->back()->with('success', 'Admission Section Updated Successfully');

        };

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
        $data = FrontAdmission::find($id);
        return view('backend.pages.frontpages.index.admission.frontAdmissionEdit', compact('data'));
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
        $update = FrontAdmission::find($id);
        $update->title = $request->title;
        $update->top_description = $request->top_description;
        if($request->hasFile('bg_image')){
            $oldFile = 'frontend/assets/images/pages/home/admission/'.$update->bg_image;

            if(File::exists(public_path($oldFile))){
                File::delete(public_path($oldFile));
            }

            $file = $request->bg_image;
            $extention = $file->getClientOriginalExtension();
            $fileName = hexdec(uniqid()).'.'.$extention;

            $file->move('frontend/assets/images/pages/home/admission/', $fileName);
            $update->bg_image = $fileName;
        }
        $update->video_link = $request->video_link;
        $update->bottom_description = $request->bottom_description;
        $update->button_text = $request->button_text;
        $update->button_link = $request->button_link;
        $update->update();

        return redirect()->route('front-admission.index')->with('success', 'Admission Section Updated Successfully');

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
    }
}
