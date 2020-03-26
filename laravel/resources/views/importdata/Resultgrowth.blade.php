

  @if ($event == 1)
   <div>
    <img src="{{ asset('img/value.png') }}" height="30" style="margin-bottom: 10px;">
    <p style="display: inline;">根據主管填寫之能耐值進行分析，得到各構面於成長策略之效用值，效用值愈大表示資源能耐使用效率愈佳</p>
  </div>
 <div style="text-align: center; margin-top: 20px;">

<table class="table table-bordered" >
  <thead>
    <tr style="background: #5F7F90; color: #F8F9F9">
      <th scope="col" class="col-xs-2"></th>
      <th scope="col" class="col-xs-2">財務構面</th>
      <th scope="col" class="col-xs-2">顧客構面</th>
      <th scope="col" class="col-xs-2">內部流程構面</th>
      <th scope="col" class="col-xs-2">學習成長構面</th>
    </tr>
  </thead>
  <tbody>

    <tr>
      <th scope="row" style="background: #5F7F90; color: #F8F9F9">市場滲透策略</th>
      <td id="f1">{{round($finance[0],4)}}</td>
      <td id="c1">{{round($customer[0],4)}}</td>
      <td id="i1">{{round($inprocess[0],4)}}</td>
      <td id="l1">{{round($learn_growth[0],4)}}</td>
    </tr>
    <tr>
      <th scope="row" style="background: #5F7F90; color: #F8F9F9">市場開發策略</th>
      <td id="f2">{{round($finance[1],4)}}</td>
      <td id="c2">{{round($customer[1],4)}}</td>
      <td id="i2">{{round($inprocess[1],4)}}</td>
      <td id="l2">{{round($learn_growth[1],4)}}</td>
    </tr>
    <tr>
      <th scope="row" style="background: #5F7F90; color: #F8F9F9">產品開發策略</th>
      <td id="f3">{{round($finance[2],4)}}</td>
      <td id="c3">{{round($customer[2],4)}}</td>
      <td id="i3">{{round($inprocess[2],4)}}</td>
      <td id="l3">{{round($learn_growth[2],4)}}</td>
    </tr>
     <tr>
      <th scope="row" style="background: #5F7F90; color: #F8F9F9">向後整合策略</th>
      <td id="f4">{{round($finance[3],4)}}</td>
      <td id="c4">{{round($customer[3],4)}}</td>
      <td id="i4">{{round($inprocess[3],4)}}</td>
      <td id="l4">{{round($learn_growth[3],4)}}</td>

    </tr>
     <tr>
      <th scope="row" style="background: #5F7F90; color: #F8F9F9">向後整合策略</th>
      <td id="f5">{{round($finance[4],4)}}</td>
      <td id="c5">{{round($customer[4],4)}}</td>
      <td id="i5">{{round($inprocess[4],4)}}</td>
      <td id="l5">{{round($learn_growth[4],4)}}</td>
    </tr>
     <tr>
      <th scope="row" style="background: #5F7F90; color: #F8F9F9">多角化策略</th>
      <td id="f6">{{round($finance[5],4)}}</td>
      <td id="c6">{{round($customer[5],4)}}</td>
      <td id="i6">{{round($inprocess[5],4)}}</td>
      <td id="l6">{{round($learn_growth[5],4)}}</td>
    </tr>
  </tbody>
</table>
</div>

@endif

  
  @if ($event == 2)
   <div style="margin-bottom: 30px">
  <img src="{{ asset('img/diagram.png') }}" height="30" style="margin-bottom: 10px;"> 
    <p style="display: inline;">根據主管填寫之能耐值進行分析，並採用競爭策略，以了解應對於他公司應採取何種策略較佳</p>
      <p> &emsp;&emsp;&nbsp;以下數值為效用值，其值愈大表示資源能耐使用效率愈佳</p>
  </div>

 <div style="text-align: center; margin-top: 20px;">

<?php 
$all = [$finance,$customer,$inprocess,$learn_growth,$total];
$name = ['財務構面','顧客構面','內部流程構面','學習與成長構面','綜觀'];
$id = ['f','c','i','l','t'];
for ($i=1; $i <=5 ; $i++) { 
  $current = $all[$i-1];
 ?>

<table class="table table-bordered" style="margin-bottom: 50px">
  <thead>
    @if ($i%2 == 0)
    <tr style="background: #909497 ; color: #F8F9F9">
    @endif
    @if ($i%2 != 0)
    <tr style="background: #96A88E ; color: #F8F9F9">
    @endif
       <th  rowspan="2" colspan="2" style="vertical-align: middle;">{{ $name[$i-1] }}</th>
      <th scope="col" colspan="6">B公司</th>
    </tr>
    <tr style="background: #F2F3F4">
<!--       <th scope="row" class="col-xs-2" rowspan="2" style="background: #6C978E; color: #F8F9F9; padding: 0px"></th>
 -->      <th scope="col" class="col-xs-1.5" >市場滲透策略</th>
      <th scope="col" class="col-xs-1.5">市場開發策略</th>
      <th scope="col" class="col-xs-1.5">產品開發策略</th>
      <th scope="col" class="col-xs-1.5">向後整合策略</th>
      <th scope="col" class="col-xs-1.5">向前整合策略</th>
      <th scope="col" class="col-xs-1.5">多角化策略</th>
    </tr>
  </thead>
  <tbody>
   
    <tr>
    @if ($i%2 == 0)
      <th scope="row" style="background: #909497; color: #F8F9F9;vertical-align: middle;width: 30px" rowspan="7">本公司</th>
    @endif
    @if ($i%2 != 0)
      <th scope="row" style="background: #96A88E; color: #F8F9F9;vertical-align: middle;width: 30px" rowspan="7">本公司</th>
    @endif
    </tr>


    <tr>
      <th scope="row" style="background: #F2F3F4">市場滲透策略</th>
      <td id="{{$id[$i-1]}}A1B1">( {{number_format($current[0],2)}} , {{number_format($Bstrategy1[$i],2)}} )</td>
      <td id="{{$id[$i-1]}}A1B2">( {{number_format($current[0],2)}} , {{number_format($Bstrategy2[$i],2)}} )</td>
      <td id="{{$id[$i-1]}}A1B3">( {{number_format($current[0],2)}} , {{number_format($Bstrategy3[$i],2)}} )</td>
      <td id="{{$id[$i-1]}}A1B4">( {{number_format($current[0],2)}} , {{number_format($Bstrategy4[$i],2)}} )</td>
      <td id="{{$id[$i-1]}}A1B5">( {{number_format($current[0],2)}} , {{number_format($Bstrategy5[$i],2)}} )</td>
      <td id="{{$id[$i-1]}}A1B6">( {{number_format($current[0],2)}} , {{number_format($Bstrategy6[$i],2)}} )</td>
    </tr>
    <tr>
      <th scope="row" style="background: #F2F3F4">市場開發策略</th>
      <td id="{{$id[$i-1]}}A2B1">( {{number_format($current[1],2)}} , {{number_format($Bstrategy1[$i],2)}} )</td>
      <td id="{{$id[$i-1]}}A2B2">( {{number_format($current[1],2)}} , {{number_format($Bstrategy2[$i],2)}} )</td>
      <td id="{{$id[$i-1]}}A2B3">( {{number_format($current[1],2)}} , {{number_format($Bstrategy3[$i],2)}} )</td>
      <td id="{{$id[$i-1]}}A2B4">( {{number_format($current[1],2)}} , {{number_format($Bstrategy4[$i],2)}} )</td>
      <td id="{{$id[$i-1]}}A2B5">( {{number_format($current[1],2)}} , {{number_format($Bstrategy5[$i],2)}} )</td>
      <td id="{{$id[$i-1]}}A2B6">( {{number_format($current[1],2)}} , {{number_format($Bstrategy6[$i],2)}} )</td>
    </tr>
    <tr>
      <th scope="row" style="background: #F2F3F4">產品開發策略</th>
      <td id="{{$id[$i-1]}}A3B1">( {{number_format($current[2],2)}} , {{number_format($Bstrategy1[$i],2)}} )</td>
      <td id="{{$id[$i-1]}}A3B2">( {{number_format($current[2],2)}} , {{number_format($Bstrategy2[$i],2)}} )</td>
      <td id="{{$id[$i-1]}}{{$id[$i-1]}}A3B3">( {{number_format($current[2],2)}} , {{number_format($Bstrategy3[$i],2)}} )</td>
      <td id="{{$id[$i-1]}}A3B4">( {{number_format($current[2],2)}} , {{number_format($Bstrategy4[$i],2)}} )</td>
      <td id="{{$id[$i-1]}}A3B5">( {{number_format($current[2],2)}} , {{number_format($Bstrategy5[$i],2)}} )</td>
      <td id="{{$id[$i-1]}}A3B6">( {{number_format($current[2],2)}} , {{number_format($Bstrategy6[$i],2)}} )</td>
    </tr>
     <tr>
      <th scope="row" style="background: #F2F3F4">向後整合策略</th>
      <td id="{{$id[$i-1]}}A4B1">( {{number_format($current[3],2)}} , {{number_format($Bstrategy1[$i],2)}} )</td>
      <td id="{{$id[$i-1]}}A4B2">( {{number_format($current[3],2)}} , {{number_format($Bstrategy2[$i],2)}} )</td>
      <td id="{{$id[$i-1]}}A4B3">( {{number_format($current[3],2)}} , {{number_format($Bstrategy3[$i],2)}} )</td>
      <td id="{{$id[$i-1]}}A4B4">( {{number_format($current[3],2)}} , {{number_format($Bstrategy4[$i],2)}} )</td>
      <td id="{{$id[$i-1]}}A4B5">( {{number_format($current[3],2)}} , {{number_format($Bstrategy5[$i],2)}} )</td>
      <td id="{{$id[$i-1]}}A4B6">( {{number_format($current[3],2)}} , {{number_format($Bstrategy6[$i],2)}} )</td>

    </tr>
     <tr>
      <th scope="row" style="background: #F2F3F4">向前整合策略</th>
      <td id="{{$id[$i-1]}}A5B1">( {{number_format($current[4],2)}} , {{number_format($Bstrategy1[$i],2)}} )</td>
      <td id="{{$id[$i-1]}}A5B2">( {{number_format($current[4],2)}} , {{number_format($Bstrategy2[$i],2)}} )</td>
      <td id="{{$id[$i-1]}}A5B3">( {{number_format($current[4],2)}} , {{number_format($Bstrategy3[$i],2)}} )</td>
      <td id="{{$id[$i-1]}}A5B4">( {{number_format($current[4],2)}} , {{number_format($Bstrategy4[$i],2)}} )</td>
      <td id="{{$id[$i-1]}}A5B5">( {{number_format($current[4],2)}} , {{number_format($Bstrategy5[$i],2)}} )</td>
      <td id="{{$id[$i-1]}}A5B6">( {{number_format($current[4],2)}} , {{number_format($Bstrategy6[$i],2)}} )</td>
    </tr>
     <tr>
      <th scope="row" style="background: #F2F3F4">多角化策略</th>
      <td id="{{$id[$i-1]}}A6B1">( {{number_format($current[5],2)}} , {{number_format($Bstrategy1[$i],2)}} )</td>
      <td id="{{$id[$i-1]}}A6B2">( {{number_format($current[5],2)}} , {{number_format($Bstrategy2[$i],2)}} )</td>
      <td id="{{$id[$i-1]}}A6B3">( {{number_format($current[5],2)}} , {{number_format($Bstrategy3[$i],2)}} )</td>
      <td id="{{$id[$i-1]}}A6B4">( {{number_format($current[5],2)}} , {{number_format($Bstrategy4[$i],2)}} )</td>
      <td id="{{$id[$i-1]}}A6B5">( {{number_format($current[5],2)}} , {{number_format($Bstrategy5[$i],2)}} )</td>
      <td id="{{$id[$i-1]}}A6B6">( {{number_format($current[5],2)}} , {{number_format($Bstrategy6[$i],2)}} )</td>
    </tr>
  </tbody>
</table>
<?php } ?>
</div>

@endif



<script>
//找AB公司的最大值
var tmax = <?php echo json_encode($tmax); ?>;
var omax = <?php echo json_encode($omax); ?>;  

var fmax = <?php echo json_encode($fmax); ?>;
for (var i = 0; i < fmax.length; i++) {
  let id = 'f'+(fmax[i]+1).toString();
  document.getElementById(id).style.backgroundColor='#EBDEF0';
  for (var j = 0; j < omax.length; j++) {
    let id2 ='fA'+(fmax[i]+1).toString()+'B'+(omax[j]+1).toString();
    document.getElementById(id2).style.backgroundColor='#EBDEF0';
   } 
}
var cmax = <?php echo json_encode($cmax); ?>;
for (var i = 0; i < cmax.length; i++) {
  let id = 'c'+(cmax[i]+1).toString();
  document.getElementById(id).style.backgroundColor='#EBDEF0';
  for (var j = 0; j < omax.length; j++) {
    let id2 ='cA'+(fmax[i]+1).toString()+'B'+(omax[j]+1).toString();
    document.getElementById(id2).style.backgroundColor='#EBDEF0';
   } 
}
var imax = <?php echo json_encode($imax); ?>;
for (var i = 0; i < imax.length; i++) {
  let id = 'i'+(fmax[i]+1).toString();
  document.getElementById(id).style.backgroundColor='#EBDEF0';
  for (var j = 0; j < omax.length; j++) {
    let id2 ='iA'+(fmax[i]+1).toString()+'B'+(omax[j]+1).toString();
    document.getElementById(id2).style.backgroundColor='#EBDEF0';
   } 
}
var lmax = <?php echo json_encode($lmax); ?>;
for (var i = 0; i < lmax.length; i++) {
  let id = 'l'+(lmax[i]+1).toString();
  document.getElementById(id).style.backgroundColor='#EBDEF0';
  for (var j = 0; j < omax.length; j++) {
    let id2 ='lA'+(fmax[i]+1).toString()+'B'+(omax[j]+1).toString();
    document.getElementById(id2).style.backgroundColor='#EBDEF0';
   } 
}

for (var i = 0; i < tmax.length; i++) {
  for (var j = 0; j < omax.length; j++) {
     let id = 'tA'+(tmax[i]+1).toString()+'B'+(omax[j]+1).toString();
    document.getElementById(id).style.backgroundColor='#EBDEF0';
   } 
}

</script>