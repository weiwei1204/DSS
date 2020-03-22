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
use App\Charts\UserChart;
use Excel;
use App\Imports\UsersImport;



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

         $current = $request->input('urlname');
        if(!str_contains($current,'Q9/')){
            $current = $current.'/';
        }


        if (isset($_POST[ 'PLC1']) && $_POST[ 'PLC1'] == 'PLC1')
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
            
            $current = $current.'+PLC1';
            return redirect($current)->with('PLC1', '儲存成功');
        }


        elseif (isset($_POST[ 'PLC2']) && $_POST[ 'PLC2'] == 'PLC2') {
           $resource = array('mf','ma','d','f');
        for ($i=0; $i < 4 ; $i++) { 
            $performance_2nd = new performance_2nd;
            $performance_2nd->bsc_id = $i+1;   
            $performance_2nd->manufacture1 = $request->input($resource[$i].'1');
            $performance_2nd->manufacture2 = $request->input($resource[$i].'2');
            $performance_2nd->manufacture3 = $request->input($resource[$i].'3');
            $performance_2nd->manufacture4 = $request->input($resource[$i].'4');
            $performance_2nd->marketing1 = $request->input($resource[$i].'5');
            $performance_2nd->marketing2 = $request->input($resource[$i].'6');
            $performance_2nd->marketing3 = $request->input($resource[$i].'7');
            $performance_2nd->marketing4 = $request->input($resource[$i].'8');
            $performance_2nd->development1 = $request->input($resource[$i].'9');
            $performance_2nd->development2 = $request->input($resource[$i].'10');
            $performance_2nd->development3 = $request->input($resource[$i].'11');
            $performance_2nd->development4 = $request->input($resource[$i].'12');
            $performance_2nd->finance1 = $request->input($resource[$i].'13');
            $performance_2nd->finance2 = $request->input($resource[$i].'14');
            $performance_2nd->finance3 = $request->input($resource[$i].'15');
            $performance_2nd->finance4 = $request->input($resource[$i].'16');
            $performance_2nd->save(); 
        }
            $current = $current.'+PLC2';
            return redirect($current)->with('PLC2', '儲存成功');
        }
        elseif (isset($_POST[ 'PLC3']) && $_POST[ 'PLC3'] == 'PLC3') {
            $resource = array('mf','ma','d','f');
        for ($i=0; $i < 4 ; $i++) { 
            $performance_3rd = new performance_3rd;
            $performance_3rd->bsc_id = $i+1;   
            $performance_3rd->manufacture1 = $request->input($resource[$i].'1');
            $performance_3rd->manufacture2 = $request->input($resource[$i].'2');
            $performance_3rd->manufacture3 = $request->input($resource[$i].'3');
            $performance_3rd->manufacture4 = $request->input($resource[$i].'4');
            $performance_3rd->marketing1 = $request->input($resource[$i].'5');
            $performance_3rd->marketing2 = $request->input($resource[$i].'6');
            $performance_3rd->marketing3 = $request->input($resource[$i].'7');
            $performance_3rd->marketing4 = $request->input($resource[$i].'8');
            $performance_3rd->development1 = $request->input($resource[$i].'9');
            $performance_3rd->development2 = $request->input($resource[$i].'10');
            $performance_3rd->development3 = $request->input($resource[$i].'11');
            $performance_3rd->development4 = $request->input($resource[$i].'12');
            $performance_3rd->finance1 = $request->input($resource[$i].'13');
            $performance_3rd->finance2 = $request->input($resource[$i].'14');
            $performance_3rd->finance3 = $request->input($resource[$i].'15');
            $performance_3rd->finance4 = $request->input($resource[$i].'16');
            $performance_3rd->save(); 
        }
            $current = $current.'+PLC3';
            return redirect($current)->with('PLC3', '儲存成功');
        }
        
       
        //     return redirect('Performance/Q10')->with('performance_1st', '儲存成功');
      
    }



    /**
     * 取資料庫的值，並丟入DEA模型進行分析
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function deavalue(){ 

        $PLCbsc = ['SELECT * FROM bsc_1sts ORDER BY created_at DESC LIMIT 4',
                'SELECT * FROM bsc_2nds ORDER BY created_at DESC LIMIT 4',
                'SELECT * FROM bsc_3rds ORDER BY created_at DESC LIMIT 4'];
        $PLCperformance = ['SELECT * FROM performance_1sts ORDER BY created_at DESC LIMIT 4',
                        'SELECT * FROM performance_2nds ORDER BY created_at DESC LIMIT 4',
                        'SELECT * FROM performance_3rds ORDER BY created_at DESC LIMIT 4'];
        $Upper1st = array();
        $Upper2nd = array();
        $Upper3rd = array();
        $Upper = [$Upper1st,$Upper2nd,$Upper3rd];
        $Lowerr1st = array();
        $Lower2nd = array();
        $Lower3rd = array();
        $Lower = [$Lowerr1st,$Lower2nd,$Lower3rd];

        //依照不同生命週期取資料並計算上下界區間
        for ($i=0; $i < 3; $i++) { 
            $interval = $this->calculate($PLCbsc[$i],$PLCperformance[$i]);
            $Upper[$i] = $interval[0];
            $Lower[$i] = $interval[1];
        }
        
        for ($i=0; $i < 3; $i++) { 
            $fianlupper = $Upper[$i];
            foreach ($fianlupper as $fianlupper) {
           echo $fianlupper;
           echo '<br>';
       }
        }
         
        // return view('PerformanceOfCapability');

     $output = shell_exec('sudo /usr/local/bin/python3 .__FILE__.inPerformance.py '. escapeshellarg(json_encode($Lower[0])) .' '
         . escapeshellarg(json_encode($Lower[1])) . ' '. escapeshellarg(json_encode($Lower[2])) .' '. escapeshellarg(json_encode($Upper[0])) . ' ' . escapeshellarg(json_encode($Upper[1])) . ' ' . escapeshellarg(json_encode($Upper[2])));



    }

    /**
     * calculate performance of capability 
     * 整合重要分數的區間數值和績效表現程度
     * @param  
     * @return \Illuminate\Http\Response
     */
    public function calculate(string $sqlbsc,string $sqlperformance)
    {
        $significantScore = [0.06993,0.06989,0.06977,0.06954,0.06915,0.06857,0.06775,0.06667,0.06527,0.06352,0.06138,0.05882,0.05579,
                            0.05225,0.04817,0.04351];       //  重要分數
        $upper = [0.835,0.25,0.4165,0.5835,0.75,0.9165,1];  //上界值 alpha=0.5
        $lower = [0,0.0835,0.25,0.4165,0.5835,0.75,0.9165]; //下界值 alpha=0.5

        //////////重要排序 => 重要分數//////////

        //SELECT * FROM `bsc_1sts` ORDER BY `created_at` DESC LIMIT 4
        $bscsql = DB::select($sqlbsc);
        $finance = array(); // 存放A01~A16的值 
        $customer = array();
        $inprocess = array();
        $learn_growth = array();
        $bsc = array($finance,$customer,$inprocess,$learn_growth);
        $resource = array('manufacture','marketing','development','finance');
        foreach ($bscsql as $bscsql) {
            $num = (int)$bscsql->bsc_id;
            for ($i=0; $i < 4 ; $i++) { 
                //array_push($arrayname,$sql結果，用column取資料)
                $col = $resource[$i].'1';
                $value = (int)$bscsql->$col;
                array_push($bsc[$num-1], $significantScore[$value-1]);
                $col = $resource[$i].'2';
                $value = (int)$bscsql->$col;
                array_push($bsc[$num-1], $significantScore[$value-1]); 
                $col = $resource[$i].'3';
                $value = (int)$bscsql->$col;
                array_push($bsc[$num-1], $significantScore[$value-1]);
                $col = $resource[$i].'4';
                $value = (int)$bscsql->$col;
                array_push($bsc[$num-1], $significantScore[$value-1]);
            }
        }

        //  $inprocess = $bsc[2];

        // foreach ($inprocess as $inprocess) {
        //     echo $inprocess;
        // }

        //////////績效表現 => 上、下界數值//////////

        //SELECT * FROM `performance_1sts` ORDER BY `created_at` DESC LIMIT 4
        $performancesql = DB::select($sqlperformance);
        $upperfinance = array(); // 存放A01~A16的值 
        $uppercustomer = array();
        $upperinprocess = array();
        $upperlearn_growth = array();
        $upperperformance = array($upperfinance,$uppercustomer,$upperinprocess,$upperlearn_growth);
        $lowerfinance = array(); // 存放A01~A16的值 
        $lowercustomer = array();
        $lowerinprocess = array();
        $lowerlearn_growth = array();
        $lowerperformance = array($lowerfinance,$lowercustomer,$lowerinprocess,$lowerlearn_growth);
        // $resource = array('manufacture','marketing','development','finance'); 在重要分數中已經宣告
        
        foreach ($performancesql as $performancesql) {
            $num = (int)$performancesql->bsc_id;
            for ($i=0; $i < 4 ; $i++) { 
                //array_push($arrayname,$sql結果，用column取資料)
                $col = $resource[$i].'1';
                $value = (int)$performancesql->$col;
                array_push($upperperformance[$num-1], $upper[$value-1]);
                array_push($lowerperformance[$num-1], $lower[$value-1]);
                $col = $resource[$i].'2';
                $value = (int)$performancesql->$col;
                array_push($upperperformance[$num-1], $upper[$value-1]); 
                array_push($lowerperformance[$num-1], $lower[$value-1]);
                $col = $resource[$i].'3';
                $value = (int)$performancesql->$col;
                array_push($upperperformance[$num-1], $upper[$value-1]);
                array_push($lowerperformance[$num-1], $lower[$value-1]);
                $col = $resource[$i].'4';
                $value = (int)$performancesql->$col;
                array_push($upperperformance[$num-1], $upper[$value-1]);
                array_push($lowerperformance[$num-1], $lower[$value-1]);
            }
        }


        //////////績效表現程度之區間數值//////////

        $fianlupper = array();  // 每個bsc(fcil)的上下界區間
        $finallower = array();
        for ($i=0; $i<4 ; $i++) {
            $sumupper = 0; 
            $sumlower = 0;
            for ($j=0; $j<16; $j++) { 
                $sumupper += $bsc[$i][$j]*$upperperformance[$i][$j];
                $sumlower += $bsc[$i][$j]*$lowerperformance[$i][$j];
            }
            array_push($fianlupper,$sumupper);
            array_push($finallower,$sumlower);
        }

        return array($fianlupper,$finallower);

       // foreach ($fianlupper as $fianlupper) {
       //     echo $fianlupper;
       //     echo '<br>';
       // }

    }

    public function readexcel(){
        $report = Excel::toArray(new UsersImport,  public_path('inPerformancereport.xlsx'));  
        //[陣列][3(F1)-14(L3)][1下界、2中間值、3上界]
        // dd($report);
        $finance = array_merge($report[0][2],$report[0][3],$report[0][4]);          //F1 F2 F3 （財務構面的萌芽期、成長期、成熟期）
        $customer = array_merge($report[0][5],$report[0][6],$report[0][7]);         //C1 C2 C3 （顧客構面的萌芽期、成長期、成熟期）
        $inprocess = array_merge($report[0][8],$report[0][9],$report[0][10]);       //I1 I2 I3 （內部流程構面的萌芽期、成長期、成熟期）
        $learn_growth = array_merge($report[0][11],$report[0][12],$report[0][13]);  //L1 L2 L3 （學習成長構面的萌芽期、成長期、成熟期）
        // foreach ($finance as $finance) {
        //     echo $finance;
        // }

        $Chartfinance = $this->drawChart($finance);
        $Chartcustomer = $this->drawChart($customer);
        $Chartprocess = $this->drawChart($inprocess);
        $Chartlearn = $this->drawChart($learn_growth);
        $Maxfinance = $this->PLCmax($finance);
        $Maxcustomer = $this->PLCmax($customer);
        $Maxinprocess = $this->PLCmax($inprocess);
        $Maxlearn_growth = $this->PLCmax($learn_growth);
                   

        return view('PerformanceOfCapability', [ 'Chartfinance' => $Chartfinance , 'Chartcustomer' => $Chartcustomer ,
                    'Chartprocess' => $Chartprocess , 'Chartlearn' => $Chartlearn ,
                    'Maxfinance' => $Maxfinance , 'Maxcustomer' => $Maxcustomer , 
                    'Maxinprocess' => $Maxinprocess , 'Maxlearn_growth' => $Maxlearn_growth]);

        // return array($finance,$customer,$inprocess,$learn_growth);

    }

    public function drawChart(array $now){
        $Chart = new UserChart;
        $Chart->labels(['萌芽期', '成長期', '成熟期']);
        $Chart->dataset('下界', 'line', [$now[1],$now[5],$now[9]])
                    ->color("rgba(225, 119, 141)")
                    ->backgroundcolor("rgba(225, 119, 141)")
                    ->fill(false)
                    ->linetension(0.1);
        $Chart->dataset('中間值', 'line', [$now[2],$now[6],$now[10]])
                    ->color("rgb(52, 152, 219)")
                    ->backgroundcolor("rgb(52, 152, 219)")
                    ->fill(false)
                    ->linetension(0.1);
        $Chart->dataset('上界', 'line', [$now[3],$now[7],$now[11]])
                    ->color("rgb(127, 140, 141)")
                    ->backgroundcolor("rgb(165, 105, 189)")
                    ->fill(false)
                    ->linetension(0.1);

        return $Chart;
    }


    public function PLCmax(array $now){
        $count = array(0,0,0);
        for ($i=1; $i<=3 ; $i++) {
            for ($j=0; $j<3 ; $j++) { 
                if ($now[$i+4*$j] == 1) {
                    $count[$j]+=1;
                    // echo $now[$i+4*$j];
                    // echo $i+4*$j;
                    // echo '<br>';

                }
            }
            
        }

        $max = array_keys($count, max($count));
        if ($max[0] == 0) {
            return "萌芽期";
        }
        elseif ($max[0] == 1) {
            return "成長期";
        }
        elseif ($max[0] == 2) {
            return "成熟期";
        }
    }

    
}
