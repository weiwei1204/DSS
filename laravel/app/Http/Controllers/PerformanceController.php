<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\performance_1st;
use App\performance_2nd;
use App\performance_3rd;
use App\bsc_1st;
use App\bsc_2nd;
use App\bsc_3rd;
use DB;


class PerformanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('PerformanceOfCapability');
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
        $resource = array('mf','ma','d','f');
        for ($i=0; $i < 4 ; $i++) { 
            $performance_1st = new performance_1st;
            $performance_1st->bsc_id = $i+1;   
            $performance_1st->manufacture1 = $request->input($resource[$i].'1');
            $performance_1st->manufacture2 = $request->input($resource[$i].'2');
            $performance_1st->manufacture3 = $request->input($resource[$i].'3');
            $performance_1st->manufacture4 = $request->input($resource[$i].'4');
            $performance_1st->marketing1 = $request->input($resource[$i].'5');
            $performance_1st->marketing2 = $request->input($resource[$i].'6');
            $performance_1st->marketing3 = $request->input($resource[$i].'7');
            $performance_1st->marketing4 = $request->input($resource[$i].'8');
            $performance_1st->development1 = $request->input($resource[$i].'9');
            $performance_1st->development2 = $request->input($resource[$i].'10');
            $performance_1st->development3 = $request->input($resource[$i].'11');
            $performance_1st->development4 = $request->input($resource[$i].'12');
            $performance_1st->finance1 = $request->input($resource[$i].'13');
            $performance_1st->finance2 = $request->input($resource[$i].'14');
            $performance_1st->finance3 = $request->input($resource[$i].'15');
            $performance_1st->finance4 = $request->input($resource[$i].'16');
            $performance_1st->save(); 
        }
       
            return redirect('Performance/Q10')->with('performance_1st', '儲存成功');
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
