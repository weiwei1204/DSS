<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

use DB;
use App\capability; //use capability model

class CapabilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = DB::table('users')->get();

        // echo "what??";

        return view('GrowthStrategy', ['users' => $users]);
        // return view('GrowthStrategy');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('capability.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $capability = new capability;
        $capability->manufacture = $request->manufacture;
        $capability->marketing = $request->marketing;
        $capability->development = $request->development;
        $capability->finance = $request->finance;

        $capability->save(); 
            return redirect('/GrowthStrategy/Q4')->with('completed', 'Student has been saved!');
            // return redirect()->intended('/GrowthStrategy/Q2');

                    // return redirect('/GrowthStrategy/Q4');

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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
