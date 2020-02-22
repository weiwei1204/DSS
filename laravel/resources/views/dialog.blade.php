@extends('layouts.header')

@section('content')



<div >
    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="/docs/4.4/assets/brand/bootstrap-solid.svg" alt="" width="72" height="50">
        <h2>分析目的</h2>
        <p class="lead">依題目選擇本公司現有情形</p>
    </div>


    <div class="row">
        <div class="col-md-4 order-md-4 mb-4"></div>
        <div class="col-md-4 order-md-4 mb-4">
        <div class="col-3">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
          <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
          <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
          <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
        </div>
      </div>
      <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">...</div>
          <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
          <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
          <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
        </div>
      </div>
        <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your cart</span>
        </h4>
        <form class="card p-2">
            <div class="btn-group-vertical">
            <button type="submit" class="btn btn-primary">YES</button>
            <button type="submit" class="btn btn-primary" style="margin-top: 20px">NO</button>
            <button type="submit" class="btn btn-secondary" style="margin-top: 20px">上一題</button>

            </div>

        </form>
        </div>
        <div class="col-md-4 order-md-4 mb-4"></div>

    </div>


    </div>
</div>


@endsection
