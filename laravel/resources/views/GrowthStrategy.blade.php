@extends('layouts.header')


@section('content')


@php ($nowQuestion = "1")



<div class="container">
    <div class="py-5 text-center">
        <h2>分析目的</h2>
        <p class="lead">依題目選擇本公司現有情形</p>
    </div>


    <div class="row" style="margin-bottom: 200px">

        @if (Request::segment(2) == null || Request::segment(2) == "Q1")
        <div class="col-md-3 order-md-3 mb-3"></div>
        <div class="col-md-6 order-md-4 mb-6">
            <form class="card p-2">
                <div style="padding: 20px">
                    <h3 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted" >Q1</span>
                    </h3>
                    <p class="lead" style="margin-bottom: 50px">欲了解既有的資源與能耐之績效？</p>
                    <div class="text-center">
                        <button type="button" class="btn" id="Qbtn" onclick="location.href='/Performance/Q7'" style="margin-top: 20px;margin-right: 20px; border-radius: 100px; font-size: 20px;"><img src="{{ asset('img/yes.png') }}" height="100"></button>
                        <button type="button" class="btn" id="Qbtn" onclick="location.href='/GrowthStrategy/Q2'" style="margin-top: 20px;margin-left:20px;  border-radius: 100px; font-size: 20px"><img src="{{ asset('img/no.png') }}" height="100"></button>
                    </div>
                    
                </div>
            </form>
            <div class="col-md-3 order-md-4 mb-3"></div>

            @endif

            @if (Request::segment(2) == "Q2")
            <div class="col-md-3 order-md-3 mb-3"></div>
            <div class="col-md-6 order-md-4 mb-6">
                <div class="card p-2">
                    <div style="padding: 20px">
                        <h3 class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted" >Q2</span>
                        </h3>
                        <p class="lead" style="margin-bottom: 50px">評估四大構面之16項能耐因子</p>
                        @include('importdata.BSC')
                        <div class="justify-content-end">
            <!-- <button type="button" class="btn btn-secondary" id="Qbtn" value="上一題" onclick="location.href='/GrowthStrategy/Q1'" style="width:100px; margin-top: 20px; margin-right: 5px; float: right;">上一題</button>
            </div> -->
        </div>
    </div>
    <div class="col-md-3 order-md-4 mb-3"></div>

    @endif


    @if (Request::segment(2) == "Q3")
    <div class="col-md-3 order-md-3 mb-3"></div>
    <div class="col-md-6 order-md-4 mb-6">
        <div class="card p-2">
            <div style="padding: 20px">
                <h3 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted" >Q3</span>
                </h3>
                <p class="lead" style="margin-bottom: 50px">評估目前能耐數值比</p>
                <div style="padding: 0 50px">@include('importdata.Capability')</div>

                <div class="justify-content-end">
            <!-- <button type="button" class="btn btn-secondary" id="Qbtn" value="上一題" onclick="location.href='/GrowthStrategy/Q1'" style="width:100px; margin-top: 20px; margin-right: 5px; float: right;">上一題</button>
            </div> -->
        </div>
    </div>
    <div class="col-md-3 order-md-4 mb-3"></div>

    @endif


    @if (Request::segment(2) == "Q4")
    <div class="col-md-3 order-md-3 mb-3"></div>
    <div class="col-md-6 order-md-4 mb-6">
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
    <div class="col-md-3 order-md-4 mb-3"></div>

    @endif


    @if (Request::segment(2) == "Q5")
    <div class="col-md-1 order-md-1 mb-1"></div>
    <div class="col-md-10 order-md-10 mb-10">
        <form class="card p-2">
            <div style="padding: 20px">
                <h3 class="d-flex justify-content-between align-items-center mb-3" >
                    <span class="text-muted" style="margin-bottom: 60px">成長策略合適性評估模式</span>
                </h3>

               <!--  <ul class="nav nav-tabs navbar-default" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">分析結果</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">組織比較分析</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
               <div style="color: white"> {{ $event = 1}}</div>
              @include('importdata.Resultgrowth')</div>
              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div style="color: white"> {{ $event = 2}}</div>
              @include('importdata.Resultgrowth')
          </div>
          </div> -->

                  <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">分析結果</a>
            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">組織比較分析</a>
          
          </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <div style="color: white"> {{ $event = 1}}</div>
                      @include('importdata.Resultgrowth')</div>
          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
               <div style="color: white"> {{ $event = 2}}</div>
                      @include('importdata.Resultgrowth')
          </div>
        </div>


      </form>
      <div class="col-md-1 order-md-1 mb-1"></div>

      @endif

      @if (Request::segment(2) == "Q6")
      <div class="col-md-3 order-md-3 mb-3"></div>
      <div class="col-md-6 order-md-4 mb-6">
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
        <div class="col-md-3 order-md-4 mb-3"></div>

        @endif


        




    </div>

</div>



<div class="spinner-border justify-content-center" role="status" id="loading">
   <span class="sr-only">Loading...</span>
</div>

<script>

//預設顯示分析結果
window.onload = function() {
    $('#nav-tab a:first').tab('show')
};


$('#loading').hide();
$(document).ready(function(){

    $("#Qbtn").click(function(){
      $('#loading').show();
    });


});


</script>




@endsection
