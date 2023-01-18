<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Models\backend\Banner;
use App\Models\backend\SchoolSetup;
use App\Http\Controllers\Controller;
use App\Models\backend\post;
use App\Models\frontend\FrontAdmission;
use App\Models\frontend\FrontCampus;

class FrontendController extends Controller
{
    public function index()
    {

        $banners = Banner::all();
        $school_info = SchoolSetup::latest()->first();
        $frontCampus = FrontCampus::latest()->first();
        $frontAdmission = FrontAdmission::latest()->first();
        return view('frontend.pages.index', compact('banners', 'school_info', 'frontCampus','frontAdmission'));
    }
    public static function avater(){
        $school_info = SchoolSetup::latest()->first();
        return $school_info;
    }
    public static function LatestPosts(){
        $latestPosts = post::latest()->where('status', 'publish')->take(5)->get();
        return $latestPosts;
    }
}
