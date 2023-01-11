<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\Country;
use App\Models\backend\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $positions = Position::all();
        $countries = Country::all();
        return view('backend.pages.setting.index', compact('countries'));

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
    public function store(Request $request, $dbtable)
    {
        if ($dbtable == 'position') {
            $request->validate(
                [
                    'position_name' => 'required',
                ]
            );
            $position = new Position();
            $position->position_name = $request->position_name;
            $position->save();
        };
        if ($dbtable == 'country') {
            $request->validate(
                [
                    'country_name' => 'required',
                ]
            );
            $country = new Country();
            $country->country_name = $request->country_name;
            $country->save();

        };
        return redirect()->back()->with('success', "$dbtable.'Added Successfully'");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $dbtable)
    {
        if ($dbtable == 'position') {
            $request->validate(
                [
                    'position_name' => 'required',
                ]
            );
            $position = Position::find($id);
            $position->position_name = $request->position_name;
            $position->update();
            return redirect()->back();
        };
        if ($dbtable == 'country') {
            $request->validate(
                [
                    'country_name' => 'required',
                ]
            );
            $country = Country::find($id);
            $country->country_name = $request->country_name;
            $country->update();
            return redirect()->back();
        };
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $dbtable)
    {
        if ($dbtable == 'position') {
            $position = Position::find($id);
            $position->delete();
            return redirect()->back();
        };
        if ($dbtable == 'country') {
            $country = Country::find($id);
            $country->delete();
            return redirect()->back();
        };
    }
}
