<?php

namespace App\Http\Controllers;

use App\Models\backend\Classes;
use App\Models\backend\Teacher;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::all();
        $classes = Classes::all();
        return view('backend.pages.class.manage', compact('teachers','classes'));
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
                'class_name' => 'required',
                'class_number' => 'required',
                'class_start' => 'required',
            ]
        );
        $class = new Classes();
        $class->class_name = $request->class_name;
        $class->class_number = $request->class_number;
        $class->class_teacher_id = $request->class_teacher_id;
        $class->class_start = $request->class_start;
        $class->class_end = $request->class_end;
        $class->save();
        return redirect()->back()->with('success', 'Class Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\backend\Classes  $classes
     * @return \Illuminate\Http\Response
     */
    public function show(Classes $classes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\backend\Classes  $classes
     * @return \Illuminate\Http\Response
     */
    public function edit(Classes $classes)
    {
        //
    }

    public function status($id){
        $class = Classes::find($id);
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\backend\Classes  $classes
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, Classes $classes)
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'class_name' => 'required',
                'class_number' => 'required',
                'class_start' => 'required',
            ]
        );
        $classes = Classes::find($id);
        $classes->class_name = $request->class_name;
        $classes->class_number = $request->class_number;
        $classes->class_teacher_id = $request->class_teacher_id;
        $classes->class_start = $request->class_start;
        if($request->class_end != ''){
             $classes->class_end = $request->class_end;
        }
        $classes->update();
        return redirect()->back()->with('success', 'Class Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\backend\Classes  $classes
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Classes $classes)
    public function destroy($id)
    {
        $classes = Classes::find($id);
        $classes->delete();
        return redirect()->back()->with('info', 'Deleted successfully');
    }
}
