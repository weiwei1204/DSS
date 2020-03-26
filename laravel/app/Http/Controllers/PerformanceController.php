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

        ////////// 外部需求 //////////
        // 0-3:財務 4-7:顧客 8-11:內部流程 12-15:學習成長 （製造 行銷 研發 財務）  
        $bsc_1 = $this->calculate($PLCbsc[0],$PLCperformance[0],1);     
        $bsc_2 = $this->calculate($PLCbsc[1],$PLCperformance[0],1);  
        $bsc_3 = $this->calculate($PLCbsc[2],$PLCperformance[0],1);  


        $output = shell_exec('sudo /usr/local/bin/python3 /Users/rita/testlaravel.py '. escapeshellarg(json_encode($bsc_1)) .' '
         . escapeshellarg(json_encode($bsc_2)) . ' ' . escapeshellarg(json_encode($bsc_3)));



        ////////// 內部績效 //////////

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
            $interval = $this->calculate($PLCbsc[$i],$PLCperformance[$i],0);
            $Upper[$i] = $interval[0];
            $Lower[$i] = $interval[1];
        }
        
       //  for ($i=0; $i < 3; $i++) { 
       //      $fianlupper = $Upper[$i];
       //      foreach ($fianlupper as $fianlupper) {
       //     echo $fianlupper;
       //     echo '<br>';
       // }
       //  }
         
        // return view('PerformanceOfCapability');

     $output = shell_exec('sudo /usr/local/bin/python3 ' .__DIR__.'/inPerformance.py '. escapeshellarg(json_encode($Lower[0])) .' '
         . escapeshellarg(json_encode($Lower[1])) . ' '. escapeshellarg(json_encode($Lower[2])) .' '. escapeshellarg(json_encode($Upper[0])) . ' ' . escapeshellarg(json_encode($Upper[1])) . ' ' . escapeshellarg(json_encode($Upper[2])));

        //判斷DEA是否完成
        if (strstr((string)$output,"完成")) {
           return  $this->readexcel();

        }


    }

    /**
     * calculate performance of capability 
     * 整合重要分數的區間數值和績效表現程度
     * @param  
     * @return \Illuminate\Http\Response
     */
    public function calculate(string $sqlbsc,string $sqlperformance,int $inout)
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


        ////////// 外部需求 //////////
        if ($inout == 1) {
            $manufacture = array();
            $marketing = array();
            $development = array();
            $rfinance = array();
            $r = array($manufacture,$marketing,$development,$rfinance);
            for ($i=0; $i<count($bsc) ; $i++) { 
                for ($j=0; $j<count($r) ; $j++) { 
                   $sum = $bsc[$i][$j*4]+$bsc[$i][$j*4+1]+$bsc[$i][$j*4+2]+$bsc[$i][$j*4+3];
                   array_push($r[$j], $sum);
                }
            }

            $all = array_merge($r[0],$r[1],$r[2],$r[3]);
            return $all;

        }






        //////////內部績效表現 => 上、下界數值//////////

        if ($inout == 0) {
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
        }




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

            $plc = array(array(),array(),array());
            $Maxfinance = $this->PLCmax($finance);
            array_push($plc[$Maxfinance[1]],"財務觀點(更加重視組織財務相關工作)");
            $Maxfinance = $Maxfinance[0];
            $Maxcustomer = $this->PLCmax($customer);
            array_push($plc[$Maxcustomer[1]],"顧客觀點(應注重顧客的淺在需求以擴展市場)");
            $Maxcustomer = $Maxcustomer[0];
            $Maxinprocess = $this->PLCmax($inprocess);
            array_push($plc[$Maxinprocess[1]],"內部流程觀點(需著重於內部流程的產品良率)");
            $Maxinprocess = $Maxinprocess[0];
            $Maxlearn_growth = $this->PLCmax($learn_growth);
            array_push($plc[$Maxlearn_growth[1]],"學習與成長觀點(內部員工的學習成長能力與產品研發能力高度相關)");
            $Maxlearn_growth = $Maxlearn_growth[0];
            for ($i=0; $i<3; $i++) { 
              if (count($plc[$i]) == 0) {
                array_push($plc[$i],"均衡發展各觀點");
              }
            }
                       

            

            // return array($finance,$customer,$inprocess,$learn_growth); 
        
            $report = Excel::toArray(new UsersImport,  public_path('outPerformancereport.xlsx'));  
            // dd($report);
            //$report[array][0:column/1:null/2345:萌芽期fcil/6789:成長期fcil/10111213:成熟期fcil][製造/行銷/研發/財務]
            //$bsc[財務2-5/顧客8-11/內部14-17/學習20-23]
            $bsc_1 = array_merge($report[0][2],$report[0][3],$report[0][4],$report[0][5]);
            $bsc_2 = array_merge($report[0][6],$report[0][7],$report[0][8],$report[0][9]);
            $bsc_3 = array_merge($report[0][10],$report[0][11],$report[0][12],$report[0][13]);
            $Chartbsc1 = $this->drawChart($bsc_1,1);
            $Chartbsc2 = $this->drawChart($bsc_2,1);
            $Chartbsc3 = $this->drawChart($bsc_3,1);
            $Maxbsc_1 = $this->BSCmax($bsc_1);
            $Maxbsc_2 = $this->BSCmax($bsc_2);
            $Maxbsc_3 = $this->BSCmax($bsc_3);
            // dd($Maxbsc_2);


        return view('PerformanceOfCapability', [ 'Maxfinance' => $Maxfinance , 'Maxcustomer' => $Maxcustomer , 
                        'Maxinprocess' => $Maxinprocess , 'Maxlearn_growth' => $Maxlearn_growth, 'plc' => $plc,
                        'Chartbsc1' => $Chartbsc1 , 'Chartbsc2' => $Chartbsc2 ,'Chartbsc3' => $Chartbsc3 ,
                        'Chartf' => $finance , 'Chartc' => $customer , 'Chartp' => $inprocess , 'Chartl' => $learn_growth ,
                        'bsc_1' => $bsc_1 ,'bsc_2' => $bsc_2 ,'bsc_3' => $bsc_3,
                        'Maxbsc1' => $Maxbsc_1 , 'Maxbsc2' => $Maxbsc_2 , 'Maxbsc3' => $Maxbsc_3]);



    }



    public function drawChart(array $now, int $inout){
        if ($inout == 1) {
            $Chart = new UserChart;
            $Chart->labels(['製造', '行銷', '研發' , '財務']);
            $Chart->dataset('財務', 'line', [$now[2],$now[3],$now[4],$now[5]])
                        ->color("rgba(249, 193, 111)")
                        ->backgroundcolor("rgba(249, 193, 111)")
                        ->fill(false)
                        ->lineTension(0.1);
            $Chart->dataset('顧客', 'line', [$now[8],$now[9],$now[10],$now[11]])
                        ->color("rgb(182, 163, 220)")
                        ->backgroundcolor("rgb(182, 163, 220)")
                        ->fill(false)
                        ->linetension(0.1);
            $Chart->dataset('內部', 'line', [$now[14],$now[15],$now[16],$now[17]])
                        ->color("rgb(79, 197, 198)")
                        ->backgroundcolor("rgb(79, 197, 198)")
                        ->fill(false)
                        ->linetension(0.1);
            $Chart->dataset('學習', 'line', [$now[20],$now[21],$now[22],$now[23]])
                        ->color("rgb(93, 178, 231)")
                        ->backgroundcolor("rgb(93, 178, 231)")
                        ->fill(false)
                        ->linetension(0.1);

            return $Chart; 
        }

    }


    public function PLCmax(array $now){
        $count = array(0,0,0);
        for ($i=1; $i<=3 ; $i++) {
            for ($j=0; $j<3 ; $j++) { 
                if ($now[$i+4*$j] == 1) {
                    $count[$j]+=1;
                }
            }
            
        }
        $max = array_keys($count, max($count));
        if ($max[0] == 0) {
            return array("萌芽期",0);
        }
        elseif ($max[0] == 1) {
            return array("成長期",1);
        }
        elseif ($max[0] == 2) {
            return array("成熟期",2);
        }
    }


    public function BSCmax(array $now){
        // $count = array(array(0,0,0,0),array(0,0,0,0),array(0,0,0,0),array(0,0,0,0));    //  [bsc四觀點][資源與能耐]
        $count = array(null,null,null,null);
        $position = [2,8,14,20];
        $pbsc = ['提升財務面之績效','提升顧客面之績效','提升內部流程面之績效','提升學習與成長面之績效'];
        $presource = ['製造','行銷','研發','財務'];
        for ($i=0; $i<4 ; $i++) {
            for ($j=0; $j<4 ; $j++) { 
                if ($now[$position[$i]+$j] == 1) {
                    if ($count[$i] == null) {
                        $count[$i] = $count[$i].'投入更多'.$presource[$j];
                    }
                    else{
                        $count[$i] = $count[$i].' '.$presource[$j];
                    }

                }
            }
            if ($count[$i] != null) {
                $count[$i] = $count[$i].'資源能耐，'.$pbsc[$i];
            }   
        }

        return $count;  //  1:表示效用值為1 0:效用值<1
       
    }

    
}
