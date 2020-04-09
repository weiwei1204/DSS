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
           <!--  <div class="justify-content-end">
            <button type="button" class="btn btn-secondary" id="Qbtn" value="上一題" onclick="location.href='/Performance/1'" style="width:100px; margin-top: 20px; float: right;">上一題</button>
             </div> -->
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
            <button type="button" class="btn" id="Qbtn" onclick="location.href='/Performance/Q8'" style="margin-top: 20px;margin-right: 20px; border-radius: 100px; font-size: 20px;"><img src="{{ asset('img/change.png') }}" height="100"></button>
            <button type="button" class="btn" id="Qbtn" onclick="location.href='/Allocation/Q11'" style="margin-top: 20px;margin-left:20px;  border-radius: 100px; font-size: 20px"><img src="{{ asset('img/unchange.png') }}" height="100"></button>
            </div>
            <!-- <div class="justify-content-end">
            <button type="button" class="btn btn-secondary" id="Qbtn" value="上一題" onclick="location.href='/Performance/Q1'" style="width:100px; margin-top: 20px; float: right;">上一題</button>
             </div> -->
        </div>
        </div>
        
        @endif

        @if (Request::segment(2) == "Q8")
        <div class="card p-2">
        <div style="padding: 20px">
        <h3 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted" >Q8</span>
        </h3>
        <p class="lead" style="margin-bottom: 50px">評估<span style="background-color:#D8EEE7;">四大構面之16項能耐因子</span></p>
        @include('importdata.PLC')
        </div>
        </div>
        @endif


        @if (Request::segment(2) == "Q9")
            <!-- Modal -->
        <div class="modal" id="loadQ9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document"  >
              <div class="spinner-border justify-content-center" role="status"  style="position:fixed;top:50%;left:50%;width: 5rem; height: 5rem;">
         <span class="sr-only">Loading...</span>
        </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="card p-2">
        <div style="padding: 20px">
        <h3 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted" >Q9</span>
        </h3>
        <p class="lead" style="margin-bottom: 50px">評估<span style="background-color:#EEDDDC;">績效表現程度</span></p>
        <div style="padding: 0 50px">@include('importdata.Performance')</div>           
        </div>
        </div>
        @endif
         </div>
        <div class="col-md-3 order-md-4 mb-3"></div>
            </div>
    </div>

        @if (Request::segment(2) == "Q10")
                <!-- Modal -->
        <div class="modal" id="load" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document"  >
              <div class="spinner-border justify-content-center" role="status"  style="position:fixed;top:50%;left:50%;width: 5rem; height: 5rem;">
         <span class="sr-only">Loading...</span>
        </div>
            </div>
        </div>
        <!-- Modal -->

        <div class="container" style=" margin-top: -300px">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                  <h3><span class="text-muted">Q10 </span></h3>
        <p class="lead" style="margin-bottom: 50px">組織能耐效用評估模式分析</p>

                  <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">組織內部分析</a>
            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">組織外部分析</a>
          
          </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <div hidden> {{ $event = 1}}</div>
                      @include('importdata.Resultperformance')</div>
          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
               <div hidden> {{ $event = 2}}</div>
                      @include('importdata.Resultperformance')
          </div>
        </div>
        <!--  {{-- ChartScript --}}-->    

        
<!--             <div class="justify-content-end">
            <button type="button" class="btn btn-secondary" id="Qbtn" value="next" onclick="location.href='/Performance/Q10'" style="width:100px; margin-top: 20px; float: right;">next</button>
             </div> -->
            </div>
            <div class="col-md-1"></div>
        </div>
        
      </div>
       
        @endif
       





<script>

//預設顯示分析結果
window.onload = function() {
    $('#nav-tab a:first').tab('show');
        $('#loading').hide();
        setTimeout(function() {
            $('#load').modal('hide');
            },500);
};



$(document).ready(function(){
        $('#load').modal('show');
    $("#Qbtn").click(function(){
        $('#loading').show();

  });

});




 

</script>

@endsection

