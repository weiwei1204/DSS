@extends('layouts.header')


@section('content')


@php ($nowQuestion = "1")



<div>
    <div class="container">
      <div class="py-5 text-center">
        <h2>分析目的</h2>
        <p class="lead">依題目選擇本公司現有情形</p>
    </div>


    <div class="row" style="margin-bottom: 200px">
        <div class="col-md-3 order-md-3 mb-3"></div>
        <div class="col-md-6 order-md-4 mb-6">
        @if (Request::segment(2) == "Q11")
        <form class="card p-2">
        <div style="padding: 20px">
        <h3 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted" >Q11</span>
        </h3>
        <p class="lead" style="margin-bottom: 50px">請填參考點數值</p>
                <p>極低:1 &nbsp;低:2 &nbsp;普通:3 &nbsp;高:4 &nbsp;極高:5</p>

            <div style="padding: 0 50px">@include('importdata.Reference')</div>
            <div class="justify-content-end">
            <button type="button" class="btn btn-secondary" id="Qbtn" value="上一題" onclick="location.href='/Performance/Q7'" style="width:100px; margin-top: 20px; float: right;">上一題</button>
             </div>
        </div>
        </form>
        @endif

        @if (Request::segment(2) == "Q12")
        <form class="card p-2">
        <div style="padding: 20px">
        <h3 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted" >Q12</span>
        </h3>
        <p class="lead" style="margin-bottom: 50px">填寫企業能耐上限（0-100）</p>
        <div style="padding: 0 50px">@include('importdata.Upperlimit')</div>
            <div class="justify-content-end">
            <button type="button" class="btn btn-secondary" id="Qbtn" value="上一題" onclick="location.href='/test/Q11'" style="width:100px; margin-top: 20px; margin-right: 5px; float: right;">上一題</button>
             </div>
        </div>
        </form>
        @endif


        @if (Request::segment(2) == "Q13")
        <form class="card p-2">
        <div style="padding: 20px">
        <h3 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted" >Q13</span>
        </h3>
        <p class="lead" style="margin-bottom: 50px">填寫企業之平衡計分卡需求門檻（0-100）</p>
        <p>最低要求分數&nbsp;0 &nbsp;-&nbsp;最高要求分數100</p>
        <div style="padding: 0 50px">@include('importdata.Lowerlimit')</div>
            <div class="justify-content-end">
            <button type="button" class="btn btn-secondary" id="Qbtn" value="上一題" onclick="location.href='/test/Q12'" style="width:100px; margin-top: 20px; margin-right: 5px; float: right;">上一題</button>
             </div>
        </div>
        </form>
        @endif


        @if (Request::segment(2) == "Q14")
        <form class="card p-2">
        <div style="padding: 20px">
        <h3 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted" >Q10</span>
        </h3>
        <p class="lead" style="margin-bottom: 50px">資源分配策略</p>
        <div style="padding: 0 10px">顯示分析結果</div>
        
            <div class="justify-content-end">
            <button type="button" class="btn btn-secondary" id="Qbtn" value="next" onclick="location.href='/test/Q14'" style="width:100px; margin-top: 20px; float: right;">next</button>
            <button type="button" class="btn btn-secondary" id="Qbtn" value="上一題" onclick="location.href='/test/Q12'" style="width:100px; margin-top: 20px; margin-right: 5px; float: right;">上一題</button>
             </div>
        </div>
        </form>
        @endif
        </div>


        <div class="spinner-border" role="status" id="loading">
         <span class="sr-only">Loading...</span>
        </div>
        <div class="col-md-3 order-md-4 mb-3"></div>

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

    </div>
</div>


@endsection
