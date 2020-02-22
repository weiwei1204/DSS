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
        <div class="card p-2">
        <div style="padding: 20px">
        <h3 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted" >Q1</span>
        </h3>
        <p class="lead" style="margin-bottom: 50px">欲了解既有的資源與能耐之績效？</p>
            <div class="text-center">
            <button type="button" class="btn" id="Qbtn" onclick="location.href='/Performance/Q7'" style="margin-top: 20px;margin-right: 20px; border-radius: 100px; font-size: 20px;"><img src="{{ asset('img/yes.png') }}" height="80"></button>
            <button type="button" class="btn" id="Qbtn" onclick="location.href='/Allocation/Q11/strategy'" style="margin-top: 20px;margin-left:20px;  border-radius: 100px; font-size: 20px"><img src="{{ asset('img/no.png') }}" height="80"></button>
            </div>
            <div class="justify-content-end">
            <button type="button" class="btn btn-secondary" id="Qbtn" value="上一題" onclick="location.href='/Performance/1'" style="width:100px; margin-top: 20px; float: right;">上一題</button>
             </div>
        </div>
        </div>
        @endif


        @if (Request::segment(2) == "Q7")
        <div class="card p-2">
        <div style="padding: 20px">
        <h3 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted" >Q7</span>
        </h3>
        <p class="lead" style="margin-bottom: 50px">企業產品目前是否處於生命週期之改變？</p>
            <div class="text-center">
            <button type="button" class="btn" id="Qbtn" onclick="location.href='/Performance/Q8'" style="margin-top: 20px;margin-right: 20px; border-radius: 100px; font-size: 20px;"><img src="{{ asset('img/yes.png') }}" height="80"></button>
            <button type="button" class="btn" id="Qbtn" onclick="location.href='/Allocation/Q11'" style="margin-top: 20px;margin-left:20px;  border-radius: 100px; font-size: 20px"><img src="{{ asset('img/no.png') }}" height="80"></button>
            </div>
            <div class="justify-content-end">
            <button type="button" class="btn btn-secondary" id="Qbtn" value="上一題" onclick="location.href='/Performance/Q1'" style="width:100px; margin-top: 20px; float: right;">上一題</button>
             </div>
        </div>
        </div>
        @endif

        @if (Request::segment(2) == "Q8")
        <div class="card p-2">
        <div style="padding: 20px">
        <h3 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted" >Q8</span>
        </h3>
        <p class="lead" style="margin-bottom: 50px">評估四大構面之16項能耐因子</p>
        @include('importdata.BSC')
            <div class="justify-content-end">
            <button type="button" class="btn btn-secondary" id="Qbtn" value="next" onclick="location.href='/Performance/Q9'" style="width:100px; margin-top: 20px; float: right;">next</button>
            <button type="button" class="btn btn-secondary" id="Qbtn" value="上一題" onclick="location.href='/Performance/Q7'" style="width:100px; margin-top: 20px; margin-right: 5px; float: right;">上一題</button>
             </div>
        </div>
        </div>
        @endif


        @if (Request::segment(2) == "Q9")
        <div class="card p-2">
        <div style="padding: 20px">
        <h3 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted" >Q9</span>
        </h3>
        <p class="lead" style="margin-bottom: 50px">評估績效表現程度</p>
        <div style="padding: 0 50px">@include('importdata.Performance')</div>
        
            <div class="justify-content-end">
             <button type="button" class="btn btn-secondary" id="Qbtn" value="next" onclick="location.href='/Performance/Q10'" style="width:100px; margin-top: 20px; float: right;">next</button>   
            <button type="button" class="btn btn-secondary" id="Qbtn" value="上一題" onclick="location.href='/Performance/Q8'" style="width:100px; margin-top: 20px; margin-right: 5px; float: right;">上一題</button>
             </div>
        </div>
        </div>
        @endif


        @if (Request::segment(2) == "Q10")
        <div class="card p-2">
        <div style="padding: 20px">
        <h3 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted" >Q10</span>
        </h3>
        <p class="lead" style="margin-bottom: 50px">組織能耐效用評估模式分析</p>
        <div style="padding: 0 10px">顯示分析結果</div>
        
            <div class="justify-content-end">
            <button type="button" class="btn btn-secondary" id="Qbtn" value="next" onclick="location.href='/Performance/Q10'" style="width:100px; margin-top: 20px; float: right;">next</button>
            <button type="button" class="btn btn-secondary" id="Qbtn" value="上一題" onclick="location.href='/Performance/Q9'" style="width:100px; margin-top: 20px; margin-right: 5px; float: right;">上一題</button>
             </div>
        </div>
        </div>
        @endif
        </div>


        <div class="spinner-border" role="status" id="loading">
         <span class="sr-only">Loading...</span>
        </div>
        <div class="col-md-3 order-md-4 mb-3"></div>

    </div>

    

    </div>


@endsection
<script>
 $('#loading').hide();
$(document).ready(function(){

    $("#Qbtn").click(function(){
      $('#loading').show();

    });
});


</script>
