<?php

namespace App\Http\Controllers;

use App\strategy;
use Illuminate\Http\Request;
use DB;

class StrategyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('GrowthStrategy');
        
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
        // echo $request->input($resource[0].'1');
        for ($i=0; $i < 4 ; $i++) { 
            // echo $i;
            // echo $request->input($resource[$i].'1');
            // $id = strval($i+1);
            $strategy = new strategy;
            $strategy->resource_id = $i+1;   
            $strategy->innovation = $request->input($resource[$i].'1');
            $strategy->m_development = $request->input($resource[$i].'2');
            $strategy->p_development = $request->input($resource[$i].'3');
            $strategy->backward = $request->input($resource[$i].'4');
            $strategy->forkward = $request->input($resource[$i].'5');
            $strategy->diversification = $request->input($resource[$i].'6');
            $strategy->save(); 
        }
       
            return redirect('/GrowthStrategy/Q4')->with('strategy', '儲存成功');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\strategy  $strategy
     * @return \Illuminate\Http\Response
     */
    public function show(strategy $strategy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\strategy  $strategy
     * @return \Illuminate\Http\Response
     */
    public function edit(strategy $strategy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\strategy  $strategy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, strategy $strategy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\strategy  $strategy
     * @return \Illuminate\Http\Response
     */
    public function destroy(strategy $strategy)
    {
        //
    }
}
