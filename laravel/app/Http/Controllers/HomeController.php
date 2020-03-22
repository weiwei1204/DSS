<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\UserChart;

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
    

        // $output = shell_exec('sudo /usr/local/bin/python3 /Users/rita/testlaravel.py 2>&1');
        
        // // echo var_dump($output);
        // echo $output;
        // echo shell_exec('whoami');
        // echo "hello";

        // $usersChart = new UserChart;
        // $usersChart->labels(['Jan', 'Feb', 'Mar']);
        // $usersChart->dataset('Users by trimester', 'line', [10, 25, 13])
        //     ->color("rgb(255, 99, 132)")
        //     ->backgroundcolor("rgb(255, 99, 132)");
        //    return view('home', [ 'usersChart' => $usersChart ]);

        return view('home');
    }


    
}
