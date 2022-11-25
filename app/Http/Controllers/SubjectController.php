<?php

namespace App\Http\Controllers;

use App\Models\backend\Classes;
use App\Models\backend\Subject;
use App\Models\backend\Teacher;
use App\Models\User;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes = Classes::where('status', 'active')->get();
        // $users = User::where('role', 'teacher');
        // $teachers = Teacher::Where();
        $teachers = Teacher::all();
        if ($teachers->user_id) {
            
        }
        $subjects = Subject::all();
        return view('backend.pages.subject.subjects', compact('classes', 'teachers', 'subjects'));
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
                'class_id' => 'required',
                'subject_name' => 'required',
                'teacher_id' => 'required',
                'book_name' => 'required',
            ]
            );
        $subject = new Subject();
        $subject->class_id = $request->class_id;
        $subject->subject_name = $request->subject_name;
        $subject->teacher_id = $request->teacher_id;
        $subject->book_name = $request->book_name;
        $subject->save();
        return redirect()->back()->with('success', 'Subject Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\backend\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\backend\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject $subject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\backend\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function status($id){
        $class = Subject::find($id);
        if($class->status == 'active'){
            $class->status = 'inactive';
        }elseif($class->status == 'inactive'){
            $class->status = 'active';
        }else{
            return redirect()->back()->with('error', 'Please Check Your Value');
        }
        $class->update();
        return redirect()->back()->with('success', 'Status Updated Successfully');

    }
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'class_id' => 'required',
                'subject_name' => 'required',
                'teacher_id' => 'required',
                'book_name' => 'required'
            ]
        );
        $subject = Subject::find($id);
        $subject->class_id = $request->class_id;
        $subject->subject_name = $request->subject_name;
        $subject->teacher_id = $request->teacher_id;
        $subject->book_name = $request->book_name;
        $subject->update();
        return redirect()->back()->with('success', 'Subject Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\backend\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subject = Subject::find($id);
        $subject->delete();
        return redirect()->back()->with('info', 'Deleted successfully');
    }
}
