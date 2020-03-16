
<div style="text-align: center; margin-top: 20px;">
  @if ($event == 1)
<table class="table table-bordered" >
  <thead>
    <tr style="background: #5D6D7E; color: #F8F9F9">
      <th scope="col" class="col-xs-2"></th>
      <th scope="col" class="col-xs-2">財務構面</th>
      <th scope="col" class="col-xs-2">顧客構面</th>
      <th scope="col" class="col-xs-2">內部流程構面</th>
      <th scope="col" class="col-xs-2">學習成長構面</th>
    </tr>
  </thead>
  <tbody>

    <tr>
      <th scope="row" style="background: #5D6D7E; color: #F8F9F9">市場滲透策略</th>
      <td id="f1">{{round($finance[0],4)}}</td>
      <td id="c1">{{round($customer[0],4)}}</td>
      <td id="i1">{{round($inprocess[0],4)}}</td>
      <td id="l1">{{round($learn_growth[0],4)}}</td>
    </tr>
    <tr>
      <th scope="row" style="background: #5D6D7E; color: #F8F9F9">市場開發策略</th>
      <td id="f2">{{round($finance[1],4)}}</td>
      <td id="c2">{{round($customer[1],4)}}</td>
      <td id="i2">{{round($inprocess[1],4)}}</td>
      <td id="l2">{{round($learn_growth[1],4)}}</td>
    </tr>
    <tr>
      <th scope="row" style="background: #5D6D7E; color: #F8F9F9">產品開發策略</th>
      <td id="f3">{{round($finance[2],4)}}</td>
      <td id="c3">{{round($customer[2],4)}}</td>
      <td id="i3">{{round($inprocess[2],4)}}</td>
      <td id="l3">{{round($learn_growth[2],4)}}</td>
    </tr>
     <tr>
      <th scope="row" style="background: #5D6D7E; color: #F8F9F9">向後整合策略</th>
      <td id="f4">{{round($finance[3],4)}}</td>
      <td id="c4">{{round($customer[3],4)}}</td>
      <td id="i4">{{round($inprocess[3],4)}}</td>
      <td id="l4">{{round($learn_growth[3],4)}}</td>

    </tr>
     <tr>
      <th scope="row" style="background: #5D6D7E; color: #F8F9F9">向後整合策略</th>
      <td id="f5">{{round($finance[4],4)}}</td>
      <td id="c5">{{round($customer[4],4)}}</td>
      <td id="i5">{{round($inprocess[4],4)}}</td>
      <td id="l5">{{round($learn_growth[4],4)}}</td>
    </tr>
     <tr>
      <th scope="row" style="background: #5D6D7E; color: #F8F9F9">多角化策略</th>
      <td id="f6">{{round($finance[5],4)}}</td>
      <td id="c6">{{round($customer[5],4)}}</td>
      <td id="i6">{{round($inprocess[5],4)}}</td>
      <td id="l6">{{round($learn_growth[5],4)}}</td>
    </tr>
  </tbody>
</table>
@endif

  @if ($event == 2)

<table class="table table-bordered" >
  <thead>
    <tr style="background: #6C978E ; color: #F8F9F9">
      <th scope="col" colspan="8">B公司</th>


    </tr>
    <tr style="background: #F2F3F4">
      <th scope="col" class="col-xs-2" colspan="2" style="background: #6C978E; color: #F8F9F9; padding: 0px"></th>
      <th scope="col" class="col-xs-1.5" >市場滲透策略</th>
      <th scope="col" class="col-xs-1.5">市場開發策略</th>
      <th scope="col" class="col-xs-1.5">產品開發策略</th>
      <th scope="col" class="col-xs-1.5">向後整合策略</th>
      <th scope="col" class="col-xs-1.5">向前整合策略</th>
      <th scope="col" class="col-xs-1.5">多角化策略</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row" style="background: #6C978E; color: #F8F9F9;vertical-align: middle;width: 30px" rowspan="7">Ａ公司</th>
    </tr>

    <tr>
      <th scope="row" style="background: #F2F3F4">市場滲透策略</th>
      <td id="A1B1">( {{number_format($total[0],2)}} , {{number_format($other[0],2)}} )</td>
      <td id="A1B2">( {{number_format($total[0],2)}} , {{number_format($other[1],2)}} )</td>
      <td id="A1B3">( {{number_format($total[0],2)}} , {{number_format($other[2],2)}} )</td>
      <td id="A1B4">( {{number_format($total[0],2)}} , {{number_format($other[3],2)}} )</td>
      <td id="A1B5">( {{number_format($total[0],2)}} , {{number_format($other[4],2)}} )</td>
      <td id="A1B6">( {{number_format($total[0],2)}} , {{number_format($other[5],2)}} )</td>
    </tr>
    <tr>
      <th scope="row" style="background: #F2F3F4">市場開發策略</th>
      <td id="A2B1">( {{number_format($total[1],2)}} , {{number_format($other[0],2)}} )</td>
      <td id="A2B2">( {{number_format($total[1],2)}} , {{number_format($other[1],2)}} )</td>
      <td id="A2B3">( {{number_format($total[1],2)}} , {{number_format($other[2],2)}} )</td>
      <td id="A2B4">( {{number_format($total[1],2)}} , {{number_format($other[3],2)}} )</td>
      <td id="A2B5">( {{number_format($total[1],2)}} , {{number_format($other[4],2)}} )</td>
      <td id="A2B6">( {{number_format($total[1],2)}} , {{number_format($other[5],2)}} )</td>
    </tr>
    <tr>
      <th scope="row" style="background: #F2F3F4">產品開發策略</th>
      <td id="A3B1">( {{number_format($total[2],2)}} , {{number_format($other[0],2)}} )</td>
      <td id="A3B2">( {{number_format($total[2],2)}} , {{number_format($other[1],2)}} )</td>
      <td id="A3B3">( {{number_format($total[2],2)}} , {{number_format($other[2],2)}} )</td>
      <td id="A3B4">( {{number_format($total[2],2)}} , {{number_format($other[3],2)}} )</td>
      <td id="A3B5">( {{number_format($total[2],2)}} , {{number_format($other[4],2)}} )</td>
      <td id="A3B6">( {{number_format($total[2],2)}} , {{number_format($other[5],2)}} )</td>
    </tr>
     <tr>
      <th scope="row" style="background: #F2F3F4">向後整合策略</th>
      <td id="A4B1">( {{number_format($total[3],2)}} , {{number_format($other[0],2)}} )</td>
      <td id="A4B2">( {{number_format($total[3],2)}} , {{number_format($other[1],2)}} )</td>
      <td id="A4B3">( {{number_format($total[3],2)}} , {{number_format($other[2],2)}} )</td>
      <td id="A4B4">( {{number_format($total[3],2)}} , {{number_format($other[3],2)}} )</td>
      <td id="A4B5">( {{number_format($total[3],2)}} , {{number_format($other[4],2)}} )</td>
      <td id="A4B6">( {{number_format($total[3],2)}} , {{number_format($other[5],2)}} )</td>

    </tr>
     <tr>
      <th scope="row" style="background: #F2F3F4">向前整合策略</th>
      <td id="A5B1">( {{number_format($total[4],2)}} , {{number_format($other[0],2)}} )</td>
      <td id="A5B2">( {{number_format($total[4],2)}} , {{number_format($other[1],2)}} )</td>
      <td id="A5B3">( {{number_format($total[4],2)}} , {{number_format($other[2],2)}} )</td>
      <td id="A5B4">( {{number_format($total[4],2)}} , {{number_format($other[3],2)}} )</td>
      <td id="A5B5">( {{number_format($total[4],2)}} , {{number_format($other[4],2)}} )</td>
      <td id="A5B6">( {{number_format($total[4],2)}} , {{number_format($other[5],2)}} )</td>
    </tr>
     <tr>
      <th scope="row" style="background: #F2F3F4">多角化策略</th>
      <td id="A6B1">( {{number_format($total[5],2)}} , {{number_format($other[0],2)}} )</td>
      <td id="A6B2">( {{number_format($total[5],2)}} , {{number_format($other[1],2)}} )</td>
      <td id="A6B3">( {{number_format($total[5],2)}} , {{number_format($other[2],2)}} )</td>
      <td id="A6B4">( {{number_format($total[5],2)}} , {{number_format($other[3],2)}} )</td>
      <td id="A6B5">( {{number_format($total[5],2)}} , {{number_format($other[4],2)}} )</td>
      <td id="A6B6">( {{number_format($total[5],2)}} , {{number_format($other[5],2)}} )</td>
    </tr>
  </tbody>
</table>

@endif
</div>



<script>
<?php if ($event == 1): ?>
  

var fmax = <?php echo json_encode($fmax); ?>;
for (var i = 0; i < fmax.length; i++) {
  let id = 'f'+fmax[i].toString();
  document.getElementById(id).style.backgroundColor='#EBDEF0';
}
var cmax = <?php echo json_encode($cmax); ?>;
for (var i = 0; i < cmax.length; i++) {
  let id = 'c'+cmax[i].toString();
  document.getElementById(id).style.backgroundColor='#EBDEF0';
}
var imax = <?php echo json_encode($imax); ?>;
for (var i = 0; i < imax.length; i++) {
  let id = 'i'+fmax[i].toString();
  document.getElementById(id).style.backgroundColor='#EBDEF0';
}
var lmax = <?php echo json_encode($lmax); ?>;
for (var i = 0; i < lmax.length; i++) {
  let id = 'l'+lmax[i].toString();
  document.getElementById(id).style.backgroundColor='#EBDEF0';
}
<?php endif ?>


<?php if ($event == 2): ?>

//找AB公司的最大值
var tmax = <?php echo json_encode($tmax); ?>;
var omax = <?php echo json_encode($omax); ?>;
for (var i = 0; i < tmax.length; i++) {
  for (var j = 0; j < omax.length; j++) {
     let id = 'A'+tmax[i].toString()+'B'+omax[j].toString();
    document.getElementById(id).style.backgroundColor='#EBDEF0';
   } 
}
<?php endif ?>



</script>