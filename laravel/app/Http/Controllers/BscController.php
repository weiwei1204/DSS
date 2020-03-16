<?php

namespace App\Http\Controllers;

use App\bsc_1st;    //萌芽期
use App\bsc_2nd;    //成長期
use App\bsc_3rd;    //成熟期
use DB;
use Illuminate\Http\Request;

class BscController extends Controller
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

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $resource = array('f','c','inp','lg');
        $dbcolumn = array('manufacture','marketing','development','finance');
        for ($i=0; $i < 4 ; $i++) { 

            $bsc_2nd = new bsc_2nd;
            $bsc_2nd->bsc_id = $i+1;   
            for ($j=0; $j < 4 ; $j++) { 
                // echo ($dbcolumn[$j].'1');
                // echo($resource[$i].($j*4+1));
                $nowcol = ($dbcolumn[$j].'1');
                $bsc_2nd->$nowcol = $request->input($resource[$i].($j*4+1));
                $nowcol = ($dbcolumn[$j].'2');
                $bsc_2nd->$nowcol = $request->input($resource[$i].($j*4+2));
                $nowcol = ($dbcolumn[$j].'3');
                $bsc_2nd->$nowcol = $request->input($resource[$i].($j*4+3));
                $nowcol = ($dbcolumn[$j].'4');
                $bsc_2nd->$nowcol = $request->input($resource[$i].($j*4+4));
            }
            $bsc_2nd->save(); 
        }
       
            return redirect('/GrowthStrategy/Q2')->with('bsc', '儲存成功');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\bsc  $bsc
     * @return \Illuminate\Http\Response
     */
    public function show(bsc $bsc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\bsc  $bsc
     * @return \Illuminate\Http\Response
     */
    public function edit(bsc $bsc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\bsc  $bsc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bsc $bsc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\bsc  $bsc
     * @return \Illuminate\Http\Response
     */
    public function destroy(bsc $bsc)
    {
        //
    }
}
