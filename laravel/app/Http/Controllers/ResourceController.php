<?php

namespace App\Http\Controllers;

use App\resource;
use Illuminate\Http\Request;
use App\bsc_1st;    //萌芽期
use App\bsc_2nd;    //成長期
use App\bsc_3rd;    //成熟期
use DB;

class ResourceController extends Controller
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

        // $current = strval($request->path());
        $current = $request->input('urlname');
        if(!str_contains($current,'Q8/')){
            $current = $current.'/';
        }

        if (isset($_POST[ 'PLC1']) && $_POST[ 'PLC1'] == 'PLC1')
        {
            $resource = array('f','c','inp','lg');
            $dbcolumn = array('manufacture','marketing','development','finance');
            for ($i=0; $i < 4 ; $i++) { 

                $bsc_1st = new bsc_1st;
                $bsc_1st->bsc_id = $i+1;   
                for ($j=0; $j < 4 ; $j++) { 
                    // echo ($dbcolumn[$j].'1');
                    // echo($resource[$i].($j*4+1));
                    $nowcol = ($dbcolumn[$j].'1');
                    $bsc_1st->$nowcol = $request->input($resource[$i].($j*4+1));
                    $nowcol = ($dbcolumn[$j].'2');
                    $bsc_1st->$nowcol = $request->input($resource[$i].($j*4+2));
                    $nowcol = ($dbcolumn[$j].'3');
                    $bsc_1st->$nowcol = $request->input($resource[$i].($j*4+3));
                    $nowcol = ($dbcolumn[$j].'4');
                    $bsc_1st->$nowcol = $request->input($resource[$i].($j*4+4));
                }
                $bsc_1st->save(); 
            }
            
            $current = $current.'+PLC1';
            return redirect($current)->with('PLC1', '儲存成功');
        }


        elseif (isset($_POST[ 'PLC2']) && $_POST[ 'PLC2'] == 'PLC2') {
            $resource = array('f','c','inp','lg');
            $dbcolumn = array('manufacture','marketing','development','finance');
            for ($i=0; $i < 4 ; $i++) { 

                $bsc_2nd = new bsc_2nd;
                $bsc_2nd->bsc_id = $i+1;   
                for ($j=0; $j < 4 ; $j++) { 
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
            $current = $current.'+PLC2';
            return redirect($current)->with('PLC2', '儲存成功');
        }
        elseif (isset($_POST[ 'PLC3']) && $_POST[ 'PLC3'] == 'PLC3') {
            $resource = array('f','c','inp','lg');
            $dbcolumn = array('manufacture','marketing','development','finance');
            for ($i=0; $i < 4 ; $i++) { 

                $bsc_3rd = new bsc_3rd;
                $bsc_3rd->bsc_id = $i+1;   
                for ($j=0; $j < 4 ; $j++) { 
                    $nowcol = ($dbcolumn[$j].'1');
                    $bsc_3rd->$nowcol = $request->input($resource[$i].($j*4+1));
                    $nowcol = ($dbcolumn[$j].'2');
                    $bsc_3rd->$nowcol = $request->input($resource[$i].($j*4+2));
                    $nowcol = ($dbcolumn[$j].'3');
                    $bsc_3rd->$nowcol = $request->input($resource[$i].($j*4+3));
                    $nowcol = ($dbcolumn[$j].'4');
                    $bsc_3rd->$nowcol = $request->input($resource[$i].($j*4+4));
                }
                $bsc_3rd->save(); 
            }
           
            $current = $current.'+PLC3';
            return redirect($current)->with('PLC3', '儲存成功');
        }
                    // return redirect('/Performance/Q8')->with('bsc', '儲存成功');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function show(resource $resource)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function edit(resource $resource)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, resource $resource)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function destroy(resource $resource)
    {
        //
    }
}
