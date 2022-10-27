<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\SchoolSetup;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('backend.pages.dashboard');
    }
}
