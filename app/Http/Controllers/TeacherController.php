<?php

namespace App\Http\Controllers;

use App\Models\backend\Country;
use App\Models\backend\Position;
use App\Models\backend\teacher;
use App\Models\User;
use Illuminate\Http\Request;
use File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = teacher::all();
        return view('backend.pages.teacher.manage', compact('teachers'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        $positions = Position::all();
        return view('backend.pages.teacher.create', compact('countries','positions'));
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
                'teacher_avater' => 'required|mimes:jpeg,png,jpg',
                'name' => 'required',
                'date_of_birth' => 'required|date',
                'phone_number' => 'required',
                'email' => 'required|unique:users',
                'blood_group' => 'required',
                'qualification' => 'required',
                'gender' => 'required',
                'street_address' => 'required',
                'city_name' => 'required',
                'country_id' => 'required',
                'pin_code' => 'required',
                'joining_date' => 'required',
                'position_id' => 'required',
                'password' => 'min:8|required_with:password_confirmation|same:password_confirmation',
                'password_confirmation' => 'min:8',
            ]
        );
        if($request->password != ''){
            $register = new User();
            $register->name = $request->name;
            $register->email = $request->email;
            $register->password = Hash::make($request->password);
            $register->save();
        }
        $teacher = new teacher();
        if ($request->hasFile('teacher_avater')) {
            $file = $request->teacher_avater;
            $ext = $file->getClientOriginalExtension();
            $fileName = hexdec(uniqid()).'.'.$ext;
            $path = public_path('backend/assets/images/school/teacher/');
            $image = Image::make($file);
            $image->resize(300,300, function($img){
                $img->aspectRatio();
            })->save($path.$fileName);

            $teacher->teacher_avater = $fileName;
        };
        $teacher->user_id = $register->id;
        $teacher->name = $request->name;
        $teacher->date_of_birth = $request->date_of_birth;
        $teacher->phone_number = $request->phone_number;
        $teacher->email = $request->email;
        $teacher->blood_group = $request->blood_group;
        $teacher->qualification = $request->qualification;
        $teacher->gender = $request->gender;
        $teacher->street_address = $request->street_address;
        $teacher->city_name = $request->city_name;
        $teacher->country_id = $request->country_id;
        $teacher->pin_code = $request->pin_code;
        $teacher->joining_date = $request->joining_date;
        $teacher->leaving_date = $request->leaving_date;
        $teacher->position_id = $request->position_id;
        $teacher->save();

        return redirect()->route('teacher.index')->with('success', 'Teacher Added Successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\backend\teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\backend\teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function status($id){
        $status = User::find($id);
        if ($status->status == 'inactive') {
            $status->status = 'active';
            $status->update();
        }elseif ($status->status == 'active') {
            $status->status = 'inactive';
            $status->update();
        }else{
            return redirect()->back()->with('error','Status Update Error');
        }
        return redirect()->back()->with('info','Status Updated Successfully');


    }

    public function edit(teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\backend\teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, teacher $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\backend\teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(teacher $teacher)
    {
        //
    }
}
