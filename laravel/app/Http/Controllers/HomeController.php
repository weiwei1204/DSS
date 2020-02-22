<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = DB::table('member')
        //         ->select('name')
        //         ->get();
    


        // $output = shell_exec('/usr/local/bin/python3 ' . __DIR__ .'/DEAmodel.py 2>&1');
        
        // echo var_dump($output);
        // echo "hello";



           return view('home');
    }


    
}
