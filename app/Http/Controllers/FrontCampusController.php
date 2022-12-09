<?php

namespace App\Http\Controllers;

use App\Models\frontend\FrontCampus;
use Illuminate\Http\Request;
use File;

class FrontCampusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $frontCampus = FrontCampus::latest()->first();
        $frontCampuses = FrontCampus::all();
        return view('backend.pages.frontpages.index.campus.frontCampus', compact('frontCampuses'));
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
                'campus_description' => 'required',
                'button_text' => 'required',
                'button_link' => 'required',
            ]
        );
        $rows = FrontCampus::select('*')->count();
        if($rows == 0){
            $frontCampus = new FrontCampus();
            $frontCampus->title = $request->title;
            $frontCampus->campus_description = $request->campus_description;
            if($request->hasFile('bg_image')){
                $file = $request->bg_image;
                $extention = $file->getClientOriginalExtension();
                $fileName = hexdec(uniqid()).'.'.$extention;

                $file->move('frontend/assets/images/pages/home/campus/', $fileName);
                $frontCampus->bg_image = $fileName;
            }
            $frontCampus->button_text = $request->button_text;
            $frontCampus->button_link = $request->button_link;
            // dd($frontCampus);
            $frontCampus->save();

            return redirect()->back()->with('success', 'Campus Section Created Successfully');

        }elseif($rows > 0){
            $update = FrontCampus::latest()->first();
            $update->title = $request->title;
            $update->campus_description = $request->campus_description;
            if($request->hasFile('bg_image')){
                $oldFile = 'frontend/assets/images/pages/home/campus/'.$update->bg_image;

                if(File::exists(public_path($oldFile))){
                    File::delete(public_path($oldFile));
                }

                $file = $request->bg_image;
                $extention = $file->getClientOriginalExtension();
                $fileName = hexdec(uniqid()).'.'.$extention;

                $file->move('frontend/assets/images/pages/home/campus/', $fileName);
                $update->bg_image = $fileName;
            }
            $update->button_text = $request->button_text;
            $update->button_link = $request->button_link;
            $update->update();

            return redirect()->back()->with('success', 'Campus Section Updated Successfully');

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
        $frontCampus = FrontCampus::find($id);
        return view('backend.pages.frontpages.index.campus.FrontCampusEdit', compact('frontCampus'));
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
        $request->validate(
            [
                'title' => 'required',
                'campus_description' => 'required',
                'button_text' => 'required',
                'button_link' => 'required',
            ]
        );
        $update = FrontCampus::find($id);
        $update->title = $request->title;
        $update->campus_description = $request->campus_description;
        if($request->hasFile('bg_image')){
            $oldFile = 'frontend/assets/images/pages/home/campus/'.$update->bg_image;

            if(File::exists(public_path($oldFile))){
                File::delete(public_path($oldFile));
            }

            $file = $request->bg_image;
            $extention = $file->getClientOriginalExtension();
            $fileName = hexdec(uniqid()).'.'.$extention;

            $file->move('frontend/assets/images/pages/home/campus/', $fileName);
            $update->bg_image = $fileName;
        }
        $update->button_text = $request->button_text;
        $update->button_link = $request->button_link;
        $update->update();

        return redirect()->route('front-campus.index')->with('success', 'Campus Section Updated Successfully');

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
