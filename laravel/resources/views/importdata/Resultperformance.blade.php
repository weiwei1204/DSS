
@if ($event == 1)

<div style="color: #212F3D ;margin-top: 30px; margin-bottom: 50px">
 <img src="{{ asset('img/value.png') }}" height="30" style="margin-bottom: 10px;"> 
 <p style="font-size: 16px;display: inline;">根據主管填寫能耐值，針對組織內部能耐相對績效之效用值進行分析，得出以下結果</p>
<?php 
  $first = $plc[0];
  $second = $plc[1];
  $third = $plc[2];
?>

 <blockquote style="font-size: 16px;">
<p style="display: inline;background: #FCF3CF">萌芽期</p>: 此為產品剛進入市場階段
 @foreach ($first as $first) ， {{$first}} @endforeach
</blockquote>
 <blockquote style="font-size: 16px;">
 <p style="display: inline;background: #FCF3CF">成長期</p>: 此為產品生產趨於穩定成長階段
 @foreach ($second as $second) ， {{$second}} @endforeach
</blockquote>
 <blockquote style="font-size: 16px;">
 <p style="display: inline;background: #FCF3CF">成熟期</p>: 此為產品市場趨於飽和階段
@foreach ($third as $third) ， {{$third}} @endforeach</blockquote>

</div>
<div class="row">
  <div class="col-sm-6">
    <div class="card shadow-sm">
      <div class="card-body">
        <h5 class="card-title" style="display: inline;">財務觀點 </h5> -- {{ $Maxfinance }}
       <canvas id="Chartfinance" style="height: 500;margin-top: 30px"></canvas>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card shadow-sm">
      <div class="card-body">
        <h5 class="card-title" style="display: inline;">顧客觀點</h5> -- {{ $Maxcustomer }}
        <canvas id="Chartcustomer" style="height: 500;margin-top: 30px"></canvas>

      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-6">
    <div class="card shadow-sm">
      <div class="card-body">
        <h5 class="card-title" style="display: inline;">內部流程觀點</h5> -- {{ $Maxinprocess }}
        <canvas id="Chartprocess" style="height: 500;margin-top: 30px"></canvas>

      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card shadow-sm">
      <div class="card-body">
        <h5 class="card-title" style="display: inline;">學習成長觀點</h5> -- {{ $Maxlearn_growth }}
        <!-- <div style="height: 250px; margin-top: 30px"> !! $Chartlearn->container() !!}</div> -->
        <canvas id="Chartlearn" style="height: 500;margin-top: 30px"></canvas>

      </div>
    </div>
  </div>
</div>
@endif

@if ($event == 2)

 <div style="color: #212F3D ;margin-top: 30px;margin-bottom: 50px" >
  <img src="{{ asset('img/diagram.png') }}" height="30" style="margin-bottom: 10px;"> 
  <p style="font-size: 16px;display: inline;">針對組織內部能耐相對績效之效用值進行分析，得出以下結果</p>
 
 
 

 </div>


 <div class="card shadow-sm row">
  <div class="card-body">

    <div class="col-md-7">
      <h5 class="card-title" style="display: inline;">萌芽期</h5> 
      <canvas id="Chart_1st" style="height: 500;margin-top: 30px"></canvas>
    </div>
    <div class="col-md-5" >
      <h5 class="card-title">數據分析歸納與發展</h5>
      <p class="card-text">
        @foreach ($Maxbsc1 as $Maxbsc1) @if($Maxbsc1!=null)
       <blockquote style="font-size: 16px;" >
          {{$Maxbsc1}}
     </blockquote> @endif @endforeach</p>
   </div>
 </div>
</div>




<div class="card shadow-sm row">
  <div class="card-body">
    <div class="col-md-7">

      <h5 class="card-title" style="display: inline;">成長期</h5> 
      <canvas id="Chart_2nd" style="height: 500;margin-top: 30px"></canvas>
    </div>
    <div class="col-md-5" >
      <h5 class="card-title">數據分析歸納與發展</h5>
      <p class="card-text">
       @foreach ($Maxbsc2 as $Maxbsc2)
        <blockquote style="font-size: 16px;"> 
           {{$Maxbsc2}} 
       </blockquote>
     @endforeach</p>
     </div>
   </div>
 </div>



 <div class="card shadow-sm row">
  <div class="card-body">
    <div class="col-md-7">
      <h5 class="card-title" style="display: inline;">成熟期</h5> 
      <canvas id="Chart_3rd" style="height: 500;margin-top: 30px"></canvas>
    </div>
    <div class="col-md-5" >
      <h5 class="card-title">數據分析歸納與發展</h5>
      <p class="card-text">
       @foreach ($Maxbsc3 as $Maxbsc3)
       <blockquote style="font-size: 16px;">
        {{$Maxbsc3}} 
      </blockquote>
    @endforeach</p>
     </div>
   </div>
 </div>
 

@endif




<script type="text/javascript">

  var bsc = ['Chartfinance','Chartcustomer','Chartprocess','Chartlearn'];
  var data =[ {!! json_encode($Chartf) !!},{!! json_encode($Chartc) !!},{!! json_encode($Chartp) !!},{!! json_encode($Chartl) !!}];

  for (var i = 0; i < 4; i++) {
      var now = data[i];
      var ctx = document.getElementById(bsc[i]).getContext('2d');
      var chart = new Chart(ctx, {
      // The type of chart we want to create
      type: 'line',

      // The data for our dataset
      data: {
          labels: ['萌芽期', '成長期', '成熟期'],
          datasets: [{
              label: '下界',
              type: 'line',
              fill: false,
              lineTension:0.1,
              backgroundColor: 'rgba(225, 119, 141)',
              borderColor: 'rgba(225, 119, 141)',
              borderWidth:2,
              scaleGridLineWidth:2,
              data: [now[1],now[5],now[9]]
          },{
              label: '中間值',
              type: 'line',
              fill: false,
              lineTension:0.1,
              backgroundColor: 'rgb(52, 152, 219)',
              borderColor: 'rgb(52, 152, 219)',
              borderWidth:2,
              scaleGridLineWidth:2,
              data: [now[2],now[6],now[10]]
          },{
              label: '上界',
              type: 'line',
              fill: false,
              lineTension:0.1,
              backgroundColor: 'rgb(127, 140, 141)',
              borderColor: 'rgb(127, 140, 141)',
              borderWidth:2,
              scaleGridLineWidth:2,
              data: [now[3],now[7],now[11]]
          }
          ]
      },

      // Configuration options go here
      options: {
      }
  });  
}



  var plc = ['Chart_1st','Chart_2nd','Chart_3rd'];
  var array =[ {!! json_encode($bsc_1) !!},{!! json_encode($bsc_2) !!},{!! json_encode($bsc_3) !!}];

  for (var i = 0; i < 3; i++) {
      var now = array[i];
      var ctx = document.getElementById(plc[i]).getContext('2d');
      var chart = new Chart(ctx, {
      // The type of chart we want to create
      type: 'line',

      // The data for our dataset
      data: {
          labels: ['製造', '行銷', '研發' , '財務'],
          datasets: [{
              label: '財務',
              type: 'line',
              fill: false,
              lineTension:0.1,
              backgroundColor: '#EEB460',
              borderColor: '#EEB460',
              borderWidth:2,
              scaleGridLineWidth:2,
              data: [now[2],now[3],now[4],now[5]]
          },{
              label: '顧客',
              type: 'line',
              fill: false,
              lineTension:0.1,
              backgroundColor: '#B5A3D8',
              borderColor: '#B5A3D8',
              borderWidth:2,
              scaleGridLineWidth:2,
              data: [now[8],now[9],now[10],now[11]]
          },{
              label: '內部',
              type: 'line',
              fill: false,
              lineTension:0.1,
              backgroundColor: '#7A9C75',
              borderColor: '#7A9C75',
              borderWidth:2,
              scaleGridLineWidth:2,
              data: [now[14],now[15],now[16],now[17]]
          },{
              label: '學習',
              type: 'line',
              fill: false,
              lineTension:0.1,
              backgroundColor: 'rgb(93, 178, 231)',
              borderColor: 'rgb(93, 178, 231)',
              borderWidth:2,
              scaleGridLineWidth:2,
              data: [now[20],now[21],now[22],now[23]]
          }
          ]
      },

      // Configuration options go here
      options: {
      }
  });  
}
     

</script>
