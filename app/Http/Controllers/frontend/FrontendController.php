<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Models\backend\Banner;
use App\Models\backend\SchoolSetup;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        $school_info = SchoolSetup::latest()->first();
        return view('frontend.pages.index', compact('banners', 'school_info'));
    }
    public static function avater(){
        $school_info = SchoolSetup::latest()->first();
        return $school_info;
    }
}
