<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\backend\Classes;
use App\Models\backend\Country;
use App\Models\backend\Student;
use Illuminate\Support\Facades\Hash;
use File;
use Intervention\Image\Facades\Image;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('backend.pages.student.manage', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        $classes = Classes::where('status', 'active')->get();
        return view('backend.pages.student.create', compact('countries','classes'));
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
                'student_avater' => 'required|mimes:jpeg,png,jpg',
                'name' => 'required',
                'date_of_birth' => 'required|date',
                'phone_number' => 'required',
                'blood_group' => 'required',
                'gender' => 'required',
                'street_address' => 'required',
                'city_name' => 'required',
                'country_id' => 'required',
                'pin_code' => 'required',
                'joining_date' => 'required',
                'class_id' => 'required',
                'roll_number' => 'required',
                'email' => 'required|unique:users',
                'password' => 'min:8|required_with:password_confirmation|same:password_confirmation',
                'password_confirmation' => 'min:8',
            ]
        );
        if($request->password != ''){
            $register = new User();
            $register->name = $request->name;
            $register->email = $request->email;
            $register->role = 'student';
            $register->status = 'active';
            $register->password = Hash::make($request->password);
            $register->save();
        };
        $student = new Student();
        $student->user_id = $register->id;
        if ($request->hasFile('student_avater')) {
            $file = $request->student_avater;
            $ext = $file->getClientOriginalExtension();
            $fileName = hexdec(uniqid()).'.'.$ext;
            $path = public_path('backend/assets/images/school/student/');
            $image = Image::make($file);
            $image->resize(300,300, function($img){
                $img->aspectRatio();
            })->save($path.$fileName);
            $student->student_avater = $fileName;
        };
        $student->name = $request->name;
        $student->date_of_birth = $request->date_of_birth;
        $student->phone_number = $request->phone_number;
        $student->blood_group = $request->blood_group;
        $student->gender = $request->gender;
        $student->street_address = $request->street_address;
        $student->city_name = $request->city_name;
        $student->country_id = $request->country_id;
        $student->pin_code = $request->pin_code;
        $student->joining_date = $request->joining_date;
        $student->class_id = $request->class_id;
        $student->roll_number = $request->roll_number;
        $student->save();
        return redirect()->route('student.index')->with('success', 'Student Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\backend\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\backend\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        $countries = Country::all();
        $classes = Classes::all();
        return view('backend.pages.student.edit', compact('student', 'countries', 'classes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\backend\Student  $student
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

    public function update(Request $request, Student $student)
    {
        $request->validate(
            [
                'student_avater' => 'mimes:jpeg,png,jpg',
                'name' => 'required',
                'date_of_birth' => 'required|date',
                'phone_number' => 'required',
                'blood_group' => 'required',
                'gender' => 'required',
                'street_address' => 'required',
                'city_name' => 'required',
                'country_id' => 'required',
                'pin_code' => 'required',
                'joining_date' => 'required',
                'class_id' => 'required',
                'roll_number' => 'required'
            ]
        );
        // $student = new Student();
        $student->user_id = $student->user_id;
        if ($request->hasFile('student_avater')) {

            $oldFile = 'backend/assets/images/school/student/'.$student->student_avater;
            if (File::exists(public_path($oldFile))) {
                    File::delete(public_path($oldFile));
            };
            $file = $request->student_avater;
            $ext = $file->getClientOriginalExtension();
            $fileName = hexdec(uniqid()).'.'.$ext;
            $path = public_path('backend/assets/images/school/student/');
            $image = Image::make($file);
            $image->resize(300,300, function($img){
                $img->aspectRatio();
            })->save($path.$fileName);
            $student->student_avater = $fileName;
        };
        $student->name = $request->name;
        $student->date_of_birth = $request->date_of_birth;
        $student->phone_number = $request->phone_number;
        $student->blood_group = $request->blood_group;
        $student->gender = $request->gender;
        $student->street_address = $request->street_address;
        $student->city_name = $request->city_name;
        $student->country_id = $request->country_id;
        $student->pin_code = $request->pin_code;
        $student->joining_date = $request->joining_date;
        $student->class_id = $request->class_id;
        $student->roll_number = $request->roll_number;
        $student->update();
        return redirect()->route('student.index')->with('success', 'Student Added Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\backend\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);

        $oldFile = 'backend/assets/images/school/student/'.$student->student_avater;
        if (File::exists(public_path($oldFile))) {
                File::delete(public_path($oldFile));
        };
        $student->delete();

        $user = User::find($student->user_id);
        $user->delete();
        return redirect()->back()->with('info','Status Deleted Successfully');
    }
}
