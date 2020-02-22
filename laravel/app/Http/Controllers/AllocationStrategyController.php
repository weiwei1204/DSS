<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\reference;
use App\upperlimit;
use App\lowerlimit;


class AllocationStrategyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('AllocationStrategy');

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
        if($request->question == "Q11"){
            $reference = new reference;
            $reference->finance = $request->finance;
            $reference->customer = $request->customer;
            $reference->inprocess = $request->inprocess;
            $reference->learn_growth = $request->learn_growth;
            $reference->save(); 
            
            return redirect('/Allocation/Q12')->with('completed', 'Student has been saved!');
        }
        elseif (($request->question == "Q12")) {
            $upperlimit = new upperlimit;
            $upperlimit->manufacture = $request->manufacture;
            $upperlimit->marketing = $request->marketing;
            $upperlimit->development = $request->development;
            $upperlimit->finance = $request->finance;
            $upperlimit->save(); 
            
            return redirect('/Allocation/Q13')->with('completed', 'Student has been saved!');
        }
        elseif ($request->question == "Q13") {
            $lowerlimit = new lowerlimit;
            $lowerlimit->finance = $request->finance;
            $lowerlimit->customer = $request->customer;
            $lowerlimit->inprocess = $request->inprocess;
            $lowerlimit->learn_growth = $request->learn_growth;
            $lowerlimit->save(); 
            
            return redirect('/Allocation/Q14')->with('completed', 'Student has been saved!');
        }
        else{
            return back();
        }
        
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
