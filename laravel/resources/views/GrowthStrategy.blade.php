@extends('layouts.header')


@section('content')


@php ($nowQuestion = "1")



    <div class="container">
        <div class="py-5 text-center">
        <h2>分析目的</h2>
        <p class="lead">依題目選擇本公司現有情形</p>
    </div>


    <div class="row" style="margin-bottom: 200px">
      <div class="col-md-3 order-md-3 mb-3"></div>
        <div class="col-md-6 order-md-4 mb-6">
        @if (Request::segment(2) == null || Request::segment(2) == "Q1")
        <form class="card p-2">
        <div style="padding: 20px">
        <h3 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted" >Q1</span>
        </h3>
        <p class="lead" style="margin-bottom: 50px">欲了解既有的資源與能耐之績效？</p>
            <div class="text-center">
            <button type="button" class="btn" id="Qbtn" onclick="location.href='/Performance/Q7'" style="margin-top: 20px;margin-right: 20px; border-radius: 100px; font-size: 20px;"><img src="{{ asset('img/yes.png') }}" height="80"></button>
            <button type="button" class="btn" id="Qbtn" onclick="location.href='/GrowthStrategy/Q2'" style="margin-top: 20px;margin-left:20px;  border-radius: 100px; font-size: 20px"><img src="{{ asset('img/no.png') }}" height="80"></button>
            </div>
            <div class="justify-content-end">
            <button type="button" class="btn btn-secondary" id="Qbtn" value="上一題" onclick="location.href='/GrowthStrategy'" style="width:100px; margin-top: 20px; float: right;">上一題</button>
             </div>
        </div>
        </form>
        @endif

        @if (Request::segment(2) == "Q2")
        <form class="card p-2">
        <div style="padding: 20px">
        <h3 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted" >Q2</span>
        </h3>
        <p class="lead" style="margin-bottom: 50px">評估四大構面之16項能耐因子</p>
        @include('importdata.BSC')
            <div class="justify-content-end">
            <button type="button" class="btn btn-secondary" id="Qbtn" value="上一題" onclick="location.href='/GrowthStrategy/Q1'" style="width:100px; margin-top: 20px; margin-right: 5px; float: right;">上一題</button>
             </div>
        </div>
        </form>
        @endif


        @if (Request::segment(2) == "Q3")
        <div class="card p-2">
        <div style="padding: 20px">
        <h3 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted" >Q3</span>
        </h3>
        <p class="lead" style="margin-bottom: 50px">評估目前能耐數值比</p>
        <div style="padding: 0 50px">@include('importdata.Capability')</div>
        
            <div class="justify-content-end">
            <button type="button" class="btn btn-secondary" id="Qbtn" value="上一題" onclick="location.href='/GrowthStrategy/Q1'" style="width:100px; margin-top: 20px; margin-right: 5px; float: right;">上一題</button>
             </div>
        </div>
        </div>
        @endif


        @if (Request::segment(2) == "Q4")
        <div class="card p-2">
        <div style="padding: 20px">
        <h3 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted" >Q4</span>
        </h3>
        <p class="lead" style="margin-bottom: 50px">評估策略能耐重要程度比</p>
        <div style="padding: 0 10px">@include('importdata.Strategy')</div>
        
            <div class="justify-content-end">
            <!-- <button type="button" class="btn btn-secondary" id="Qbtn" value="next" onclick="location.href='/GrowthStrategy/Q5'" style="width:100px; margin-top: 20px; float: right;">next</button> -->
            <!-- <button type="button" class="btn btn-secondary" id="Qbtn" value="上一題" onclick="location.href='/GrowthStrategy/Q4'" style="width:100px; margin-top: 20px; margin-right: 5px; float: right;">上一題</button>
             </div> -->
        </div>
        </div>
        @endif


        @if (Request::segment(2) == "Q5")
        <form class="card p-2">
        <div style="padding: 20px">
        <h3 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted" >Q5</span>
        </h3>
        <p class="lead" style="margin-bottom: 50px">成長策略合適性評估模式</p>
        <div style="padding: 0 10px">顯示分析結果</div>
        
            <div class="justify-content-end">
            <button type="button" class="btn btn-secondary" id="Qbtn" value="next" onclick="location.href='/GrowthStrategy/Q6'" style="width:100px; margin-top: 20px; float: right;">next</button>
            <button type="button" class="btn btn-secondary" id="Qbtn" value="上一題" onclick="location.href='/GrowthStrategy/Q4'" style="width:100px; margin-top: 20px; margin-right: 5px; float: right;">上一題</button>
             </div>
        </div>
        </form>
        @endif

        @if (Request::segment(2) == "Q6")
        <form class="card p-2">
        <div style="padding: 20px">
        <h3 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted" >Q6</span>
        </h3>
        <p class="lead" style="margin-bottom: 50px">成長策略合適性評估模式</p>
        <div style="padding: 0 10px">制定最適當之組織能耐策略</div>
        
            <div class="justify-content-end">
            <button type="button" class="btn btn-secondary" id="Qbtn" value="next" onclick="location.href='/GrowthStrategy/Q6'" style="width:100px; margin-top: 20px; float: right;">next</button>
            <button type="button" class="btn btn-secondary" id="Qbtn" value="上一題" onclick="location.href='/GrowthStrategy/Q4'" style="width:100px; margin-top: 20px; margin-right: 5px; float: right;">上一題</button>
             </div>
        </div>
        </form>
        @endif


        



        <div class="col-md-3 order-md-4 mb-3"></div>
            
        </div>
      
    </div>

      

      <div class="spinner-border justify-content-center" role="status" id="loading">
         <span class="sr-only">Loading...</span>
        </div>

<script>
 $('#loading').hide();
$(document).ready(function(){

    $("#Qbtn").click(function(){
      $nowQuestion = "1"
      $('#loading').show();

    });
});


</script>

  


@endsection
