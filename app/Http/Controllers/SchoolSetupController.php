<?php

namespace App\Http\Controllers;

use App\Models\backend\SchoolSetup;
use Illuminate\Http\Request;
use File;

class SchoolSetupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $school = SchoolSetup::all();
        return view('backend.pages.school_setup', compact('school'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
                'school_name' => 'required',
                'school_tagline' => 'required',
                'school_phone_number' => 'required',
                'school_email' => 'required',
                'school_eiin_number' => 'required',
                'school_mpo_number' => 'required',
                'school_avater' => 'required|mimes:jpg,jpeg,png',
                'school_description' => 'required',
            ],
            [
                'school_name.required' => 'Please Insert School Name',
                'school_tagline.required' => 'Please Insert School Tagline',
                'school_phone_number.required' => 'Please Insert School Phone Number',
                'school_email.required' => 'Please Insert School Email',
                'school_eiin_number.required' => 'Please Insert School EIIN Number',
                'school_mpo_number.required' => 'Please Insert School MPO Number',
                'school_avater.required' => 'Please Insert School Avater',
                'school_avater.mimes' => 'Please Insert Only jpg,jpeg,png,gif',
                'school_description.required' => 'Please Insert School Description',
            ]
        );
        // $setup  = SchoolSetup::create($request->all());
        $rows = SchoolSetup::select('*')->count();
        if ($rows == 0) {
            $setup = new SchoolSetup();
            $setup->school_name = $request->school_name;
            $setup->school_tagline = $request->school_tagline;
            $setup->school_phone_number = $request->school_phone_number;
            $setup->school_email = $request->school_email;
            $setup->school_eiin_number = $request->school_eiin_number;
            $setup->school_mpo_number = $request->school_mpo_number;
            if($request->hasFile('school_avater')){
                $file = $request->school_avater;
                $extention = $file->getClientOriginalExtension();
                $fileName = hexdec(uniqid()).'.'.$extention;

                $file->move('backend/assets/images/school/avater', $fileName);
                $setup->school_avater = $fileName;
            }
            $setup->school_description = $request->school_description;
            $setup->save();
            return redirect()->route('school-setup.index')->with('success', 'School info Added Successfully');
        }elseif($rows > 0){
            $update = SchoolSetup::latest()->first();
            $update->school_name = $request->school_name;
            $update->school_tagline = $request->school_tagline;
            $update->school_phone_number = $request->school_phone_number;
            $update->school_email = $request->school_email;
            $update->school_eiin_number = $request->school_eiin_number;
            $update->school_mpo_number = $request->school_mpo_number;

            if($request->hasFile('school_avater')){
                $oldFile = 'backend/assets/images/school/avater/'.$update->school_avater;

                if(File::exists(public_path($oldFile))){
                    File::delete(public_path($oldFile));
                }
                $file = $request->school_avater;
                $extention = $file->getClientOriginalExtension();
                $fileName = hexdec(uniqid()).'.'.$extention;

                $file->move('backend/assets/images/school/avater', $fileName);
                $update->school_avater = $fileName;
            }
            $update->school_description = $request->school_description;

            $update->update();
            return redirect()->route('school-setup.index')->with('success', 'School info Updated Successfully');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\backend\SchoolSetup  $schoolSetup
     * @return \Illuminate\Http\Response
     */
    public function show(SchoolSetup $schoolSetup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\backend\SchoolSetup  $schoolSetup
     * @return \Illuminate\Http\Response
     */
    public function edit(SchoolSetup $schoolSetup)
    {
        return view('backend.pages.school_update', compact('schoolSetup'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\backend\SchoolSetup  $schoolSetup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SchoolSetup $schoolSetup)
    {
            // $update = SchoolSetup::latest()->first();
            $request->validate(
                [
                    'school_name' => 'required',
                    'school_tagline' => 'required',
                    'school_phone_number' => 'required',
                    'school_email' => 'required',
                    'school_eiin_number' => 'required',
                    'school_mpo_number' => 'required',
                    'school_avater' => 'mimes:jpg,jpeg,png',
                    'school_description' => 'required',
                ],
                [
                    'school_name.required' => 'Please Insert School Name',
                    'school_tagline.required' => 'Please Insert School Tagline',
                    'school_phone_number.required' => 'Please Insert School Phone Number',
                    'school_email.required' => 'Please Insert School Email',
                    'school_eiin_number.required' => 'Please Insert School EIIN Number',
                    'school_mpo_number.required' => 'Please Insert School MPO Number',
                    'school_avater.mimes' => 'Please Insert Only jpg,jpeg,png,gif',
                    'school_description.required' => 'Please Insert School Description',
                ]
            );
            $schoolSetup->school_name = $request->school_name;
            $schoolSetup->school_tagline = $request->school_tagline;
            $schoolSetup->school_phone_number = $request->school_phone_number;
            $schoolSetup->school_email = $request->school_email;
            $schoolSetup->school_eiin_number = $request->school_eiin_number;
            $schoolSetup->school_mpo_number = $request->school_mpo_number;

            if($request->hasFile('school_avater')){
                $oldFile = 'backend/assets/images/school/avater/'.$schoolSetup->school_avater;

                if(File::exists(public_path($oldFile))){
                    File::delete(public_path($oldFile));
                }
                $file = $request->school_avater;
                $extention = $file->getClientOriginalExtension();
                $fileName = hexdec(uniqid()).'.'.$extention;

                $file->move('backend/assets/images/school/avater', $fileName);
                $schoolSetup->school_avater = $fileName;
            }
            $schoolSetup->school_description = $request->school_description;

            $schoolSetup->update();
            return redirect()->route('school-setup.index')->with('success', 'School info Updated Successfully');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\backend\SchoolSetup  $schoolSetup
     * @return \Illuminate\Http\Response
     */
    public function destroy(SchoolSetup $schoolSetup)
    {
        if($schoolSetup !== ''){
            $file = 'backend/assets/images/school/avater/'.$schoolSetup->school_avater;

            if(File::exists(public_path($file))){
                File::delete(public_path($file));
            }
            $schoolSetup->delete();

            return redirect()->route('school-setup.index')->with('error', 'School info Deleted Successfully');;
        }
    }
}
