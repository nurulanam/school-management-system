<?php

namespace App\Http\Controllers;

use App\Models\backend\Banner;
use Illuminate\Http\Request;
use File;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::all();
        return view('backend.pages.frontpages.index.banner', compact('banners'));
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
                'banner_title' => 'required',
                'banner_details' => 'required',
                'banner_button_text' => 'required',
                'banner_image' => 'required|mimes:jpg,jpeg,png',
            ],
            [
                'banner_title.required' => 'Please Insert Banner Title',
                'banner_details.required' => 'Please Insert Banner Details',
                'banner_button_text.required' => 'Please Insert Banner Button Text',
                'banner_image.required' => 'Please Insert Banner Image',
                'banner_image.mimes' => 'Please Insert Only Jpg, Jpeg, PNG Images',
            ]
        );
        $banner = new Banner();
        $banner->banner_title = $request->banner_title;
        $banner->banner_details = $request->banner_details;
        $banner->banner_button_text = $request->banner_button_text;
        if ($request->hasFile('banner_image')) {
            $file = $request->banner_image;
            $extention = $file->getClientOriginalExtension();
            $fileName = hexdec(uniqid()).'.'.$extention;

            $file->move('backend/assets/images/school/banner', $fileName);
            $banner->banner_image = $fileName;
        }
        // dd($banner);
        $banner->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\backend\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\backend\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        return view('backend.pages.frontpages.index.banner_update', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\backend\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        $request->validate(
            [
                'banner_title' => 'required',
                'banner_details' => 'required',
                'banner_button_text' => 'required',
                'banner_image' => 'mimes:jpg,jpeg,png',
            ],
            [
                'banner_title.required' => 'Please Insert Banner Title',
                'banner_details.required' => 'Please Insert Banner Details',
                'banner_button_text.required' => 'Please Insert Banner Button Text',
                'banner_image.mimes' => 'Please Insert Only Jpg, Jpeg, PNG Images',
            ]
        );
        $banner->banner_title = $request->banner_title;
        $banner->banner_details = $request->banner_details;
        $banner->banner_button_text = $request->banner_button_text;
        if($request->hasFile('banner_image')){
            $oldFile = 'backend/assets/images/school/banner/'.$banner->banner_image;
            if(File::exists(public_path($oldFile))){
                File::delete(public_path($oldFile));
            }
            $file = $request->banner_image;
            $extention = $file->getClientOriginalExtension();
            $fileName = hexdec(uniqid()).'.'.$extention;

            $file->move('backend/assets/images/school/banner', $fileName);
            $banner->banner_image = $fileName;
        }
        $banner->update();
        return redirect()->route('banner.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\backend\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
       if ($banner !== '') {
            $oldFile = 'backend/assets/images/school/banner/'.$banner->banner_image;
            if (File::exists(public_path($oldFile))) {
                File::delete(public_path($oldFile));
            }
            $banner->delete();
            return redirect()->back();
       }
    }
}
