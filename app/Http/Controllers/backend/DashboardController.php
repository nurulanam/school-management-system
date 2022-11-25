<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\SchoolSetup;
use App\Models\backend\Teacher;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $teachers = Teacher::count();
        return view('backend.pages.dashboard', compact('teachers'));
    }
    public static function avater(){
        $school_info = SchoolSetup::latest()->first();
        return $school_info;
    }
}
