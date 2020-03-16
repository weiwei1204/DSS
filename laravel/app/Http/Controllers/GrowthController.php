<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\strategy;
use App\capability; //use capability model
use App\bsc_1st;    //萌芽期
use App\bsc_2nd;    //成長期
use App\bsc_3rd;    //成熟期
use DB;
use Excel;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\FromView;
use App\Imports\UsersImport;




class GrowthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

      


   
        $report = $this->instrategy();
        $finance = $report[0];
        $customer = $report[1];
        $inprocess = $report[2];
        $learn_growth = $report[3];
        $total = $report[4];
        $other = [0.5538,0.7214,1.1212,0.6279,0.6410,0.5593];   //B公司效用值
        //  找策略中最大效益值
        $fmax = $this->max($finance);
        $cmax = $this->max($customer);
        $imax = $this->max($inprocess);
        $lmax = $this->max($learn_growth);
        $tmax = $this->max($total);
        $omax = $this->max($other);
        
        return view('GrowthStrategy', 
            ['finance' => $finance, 'customer' => $customer, 'inprocess' => $inprocess,'learn_growth' => $learn_growth,
            'fmax' => $fmax, 'cmax' => $cmax, 'imax' => $imax, 'lmax' => $lmax,
            'total' => $total, 'other' => $other, 'tmax' => $tmax, 'omax' => $omax]);
        

 
        
    }



    public function DEAanalyze(){

        //SELECT * FROM `bsc_2nds` ORDER BY `created_at` DESC LIMIT 4
        $results = DB::select('SELECT * FROM bsc_2nds ORDER BY created_at DESC LIMIT 4');
        //SELECT * FROM capabilities ORDER BY created_at DESC LIMIT 1
        $capability_db = DB::select('SELECT * FROM capabilities ORDER BY created_at DESC LIMIT 1');
        // $bsc = array('$finance','$customer','$inprocess','$learn_growth');
        $resource = array('manufacture','marketing','development','finance');
        // $ca = array();
        $finance = array(); // 存放A01~A16的值 
        $customer = array();
        $inprocess = array();
        $learn_growth = array();
        $bsc = array($finance,$customer,$inprocess,$learn_growth);
        $sum = 136;

        foreach ($capability_db as $capability_db) {
            $ca = array((int)$capability_db->manufacture, (int)$capability_db->marketing,
                (int)$capability_db->development, (int)$capability_db->finance);
        }

                // 計算DEA投入的值 （利用排序計算權重，並乘上能耐分數） 
        foreach ($results as $results) {
            $num = (int)$results->bsc_id;
            echo $num;
            for ($i=0; $i < 4 ; $i++) { 
                //array_push($arrayname,$sql結果，用column取資料)
                $col = $resource[$i].'1';
                $value = round((int)$results->$col/$sum*$ca[$i],4); //權重＊能耐分數,取小數點後四位
                array_push($bsc[$num-1], $value);
                $col = $resource[$i].'2';
                $value = round((int)$results->$col/$sum*$ca[$i],4);
                array_push($bsc[$num-1], $value); 
                $col = $resource[$i].'3';
                $value = round((int)$results->$col/$sum*$ca[$i],4);
                array_push($bsc[$num-1], $value);
                $col = $resource[$i].'4';
                $value = round((int)$results->$col/$sum*$ca[$i],4);
                array_push($bsc[$num-1], $value);
            }
        }
                $inprocess = $bsc[2];

        foreach ($inprocess as $inprocess) {
            echo $inprocess;
        }

        $finance = $bsc[0];
        $customer = $bsc[1];
        $inprocess = $bsc[2];
        $learn_growth = $bsc[3];
        // $a = '111';

        // $output = shell_exec('sudo /usr/local/bin/python3 /Users/rita/testlaravel.py 2>&1'.$a);
        $output = shell_exec('sudo /usr/local/bin/python3 /Users/rita/testlaravel.py '. escapeshellarg(json_encode($finance)) .' '
         . escapeshellarg(json_encode($customer)) . ' '. escapeshellarg(json_encode($inprocess)) .' '. escapeshellarg(json_encode($learn_growth)) . ' ' .$sum);

        
        echo var_dump($output);
    }


    public function instrategy(){

        // $data = array('finance', 'customer', 'inprocess', 'learn_growth','total');

        $report = Excel::toArray(new UsersImport,  public_path('DEAreport.xlsx'));  //[陣列][3(A01)-18(A16)][1財務2顧客3流程4學習5傯]
        // // return response()->json(["report"=>$report]);
        // $jexcel = json_decode($report,true);
        // echo $report[0][3][0]; 
        // dd($report);

        //SELECT * FROM strategies ORDER BY created_at DESC LIMIT 4
        $strategies = DB::select('SELECT * FROM strategies ORDER BY created_at DESC LIMIT 4');
        $sfinance = array(0,0,0,0,0,0);
        $scustomer = array(0,0,0,0,0,0);
        $sinprocess = array(0,0,0,0,0,0);
        $slearn_growth = array(0,0,0,0,0,0);
        $stotal = array(0,0,0,0,0,0);
        $scol = array('innovation','m_development','p_development','backward','forkward','diversification');



        foreach ($strategies as $strategies) {
            $resource = ((int)$strategies->resource_id-1)*4;  
            //  資源[manufacture(A01-A04),marketing(A05-A08),development(A09-A12),finance(A13-A16)]
            //$resource+3=A01~A16計算的起始位子
            // echo $resource;

            for ($i=0; $i < 6 ; $i++) {       //陣列存放6個策略的效用值 
                $col = $scol[$i];   // 取第i個策略的權重
                // (A01-A04)*manufacture 依此類推
                $sfinance[$i] += ($report[0][$resource+3][1]+$report[0][$resource+4][1]+$report[0][$resource+5][1]+$report[0][$resource+6][1])*(int)$strategies->$col/100;
                $scustomer[$i] += ($report[0][$resource+3][2]+$report[0][$resource+4][2]+$report[0][$resource+5][2]+$report[0][$resource+6][2])*(int)$strategies->$col/100;
                $sinprocess[$i] += ($report[0][$resource+3][3]+$report[0][$resource+4][3]+$report[0][$resource+5][3]+$report[0][$resource+6][3])*(int)$strategies->$col/100;
                $slearn_growth[$i] += ($report[0][$resource+3][4]+$report[0][$resource+4][4]+$report[0][$resource+5][4]+$report[0][$resource+6][4])*(int)$strategies->$col/100;
                $stotal[$i] += ($report[0][$resource+3][5]+$report[0][$resource+4][5]+$report[0][$resource+5][5]+$report[0][$resource+6][5])*(int)$strategies->$col/100;
            } 

        }
        return array($sfinance,$scustomer,$sinprocess,$slearn_growth,$stotal);

    }

    public function max(array $arr){
        $maxvalue = max($arr);
        $max = array();
        for ($i=0; $i <  count($arr); $i++) { 
           if ($arr[$i] == $maxvalue) {
                array_push($max,$i+1);
            } 
        }

        return $max;
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
        //
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
