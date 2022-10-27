<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\backend\Banner;
use App\Models\backend\SchoolSetup;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        $school_info = SchoolSetup::latest()->first();
        return view('frontend.pages.index', compact('banners', 'school_info'));
    }
}
