
<!-- 傳姪判斷是否為生命週期改變之企業，如企業處於改變狀態，則顯示萌芽期、成長期、成熟期-->

@if (substr_count(Request::segment(3),'PLC') == 3)
<div class="alert alert-success">
  儲存成功
</div>
<div>
  <button type="button" class="btn btn-primary" id="Qbtn" value="next" onclick="location.href='/Performance/Q9'" style="width:100px; margin-top: 20px; float: right;">下一步驟</button>
</div>
@else
<div style="margin-bottom: 30px; text-align: center;" >
     @if (str_contains(Request::segment(3),'PLC1'))  
     <button type="button" class="btn btn-primary" style="margin-right: 10px" disabled>
      萌芽期
    </button>
    @else    
    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#PLC1" style="margin-right: 10px">
      萌芽期
    </button>
    @endif
    @if (str_contains(Request::segment(3),'PLC2'))  
    <button type="button" class="btn btn-primary" disabled>
    成長期    </button>
    @else    
    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#PLC2">
      成長期
    </button>
    @endif

    @if (str_contains(Request::segment(3),'PLC3'))  
    <button type="button" class="btn btn-primary" style="margin-left: 10px" disabled>
      成熟期
    </button>
    @else    
    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#PLC3" style="margin-left: 10px">
      成熟期
    </button>
    @endif

</div>
@endif


<!--  抓取目前的url -->
<?php $current = Request::path(); ?>

<!-- 輸入資料頁面 PLC1 -->
<div class="modal fade" id="PLC1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="background: #4F788D ;color: white">
        <h4 class="modal-title">請分別填寫各構面之權重（1-16） 萌芽期</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

       <form class="needs-validation" method="POST" action="/Performance/Q8" novalidate>
          {{csrf_field()}} 
      <div class="modal-body">
        <table class="table text-center table-hover">
          <thead style="background-color: #7FB3D5 ">
            <tr>
              <th scope="col" colspan="2">公司權重</th>
              <th scope="col">財務構面</th>
              <th scope="col">顧客構面</th>
              <th scope="col">內部流程構面</th>
              <th scope="col">學習成長構面</th>
            </tr>
          </thead>
               
           <!-- 
              name命名：
              f財務 c顧客 inp內部流程 lg學習成長 後面數字為第幾個成長策略
              1~4製造資源能耐 5~8行銷資源能耐 6~12研發資源能耐 13~16財務資源能耐
           -->

            <tbody>
              <tr>
                <th scope="row" rowspan="4" style="vertical-align: middle; background-color:#F8F9F9 ">製造資源和能耐</th>
                <th>成本</th>
                <td align="center"><input type="number" name="f1" class="form-control" placeholder="1" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="c1" class="form-control" placeholder="1" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="inp1" class="form-control" placeholder="1" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="lg1" class="form-control" placeholder="1" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th>品質</th>
                <td align="center"><input type="number" name="f2" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="c2" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="inp2" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="lg2" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th>運輸</th>
                <td align="center"><input type="number" name="f3" class="form-control" placeholder="3" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="c3" class="form-control" placeholder="3" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="inp3" class="form-control" placeholder="3" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="lg3" class="form-control" placeholder="3" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th>靈活度</th>
                <td align="center"><input type="number" name="f4" class="form-control" placeholder="4" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="c4" class="form-control" placeholder="4" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="inp4" class="form-control" placeholder="4" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="lg4" class="form-control" placeholder="4" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th scope="row" rowspan="4" style="vertical-align: middle; background-color:#EBF5FB">行銷資源和能耐</th>
                <th>通路管理</th>
                <td align="center"><input type="number" name="f5" class="form-control" placeholder="5" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="c5" class="form-control" placeholder="5" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="inp5" class="form-control" placeholder="5" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="lg5" class="form-control" placeholder="5" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th>市場溝通</th>
                <td align="center"><input type="number" name="f6" class="form-control" placeholder="6" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="c6" class="form-control" placeholder="6" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="inp6" class="form-control" placeholder="6" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="lg6" class="form-control" placeholder="6" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th>定價策略</th>
                <td align="center"><input type="number" name="f7" class="form-control" placeholder="7" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="c7" class="form-control" placeholder="7" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="inp7" class="form-control" placeholder="7" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="lg7" class="form-control" placeholder="7" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th>產品策略</th>
                <td align="center"><input type="number" name="f8" class="form-control" placeholder="8" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="c8" class="form-control" placeholder="8" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="inp8" class="form-control" placeholder="8" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="lg8" class="form-control" placeholder="8" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th scope="row" rowspan="4" style="vertical-align: middle; background-color:#F8F9F9">研發資源和能耐</th>
                <th>新品總數量</th>
                <td align="center"><input type="number" name="f9" class="form-control" placeholder="9" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="c9" class="form-control" placeholder="9" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="inp9" class="form-control" placeholder="9" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="lg9" class="form-control" placeholder="9" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th>專利使用費</th>
                <td align="center"><input type="number" name="f10" class="form-control" placeholder="10" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="c10" class="form-control" placeholder="10" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="inp10" class="form-control" placeholder="10" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="lg10" class="form-control" placeholder="10" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th>研發投資報酬率</th>
                <td align="center"><input type="number" name="f11" class="form-control" placeholder="11" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="c11" class="form-control" placeholder="11" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="inp11" class="form-control" placeholder="11" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="lg11" class="form-control" placeholder="11" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th>新品總發展時間</th>
                <td align="center"><input type="number" name="f12" class="form-control" placeholder="12" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="c12" class="form-control" placeholder="12" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="inp12" class="form-control" placeholder="12" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="lg12" class="form-control" placeholder="12" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th scope="row" rowspan="4" style="vertical-align: middle; background-color:#EBF5FB">財務資源和能耐</th>
                <th>資產報酬率</th>
                <td align="center"><input type="number" name="f13" class="form-control" placeholder="13" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="c13" class="form-control" placeholder="13" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="inp13" class="form-control" placeholder="13" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="lg13" class="form-control" placeholder="13" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <tr>
                  <th>股東權益報酬率</th>
                  <td align="center"><input type="number" name="f14" class="form-control" placeholder="14" min=0 max="16" required style="text-align: center; width: 100px"></td>
                  <td align="center"><input type="number" name="c14" class="form-control" placeholder="14" min=0 max="16" required style="text-align: center; width: 100px"></td>
                  <td align="center"><input type="number" name="inp14" class="form-control" placeholder="14" min=0 max="16" required style="text-align: center; width: 100px"></td>
                  <td align="center"><input type="number" name="lg14" class="form-control" placeholder="14" min=0 max="16" required style="text-align: center; width: 100px"></td>
                  <tr>
                    <th>營收成長率</th>
                    <td align="center"><input type="number" name="f15" class="form-control" placeholder="15" min=0 max="16" required style="text-align: center; width: 100px"></td>
                    <td align="center"><input type="number" name="c15" class="form-control" placeholder="15" min=0 max="16" required style="text-align: center; width: 100px"></td>
                    <td align="center"><input type="number" name="inp15" class="form-control" placeholder="15" min=0 max="16" required style="text-align: center; width: 100px"></td>
                    <td align="center"><input type="number" name="lg15" class="form-control" placeholder="15" min=0 max="16" required style="text-align: center; width: 100px"></td>
                  </tr>
                  <tr>
                    <th>本益比</th>
                    <td align="center"><input type="number" name="f16" class="form-control" placeholder="16" min=0 max="16" required style="text-align: center; width: 100px"></td>
                    <td align="center"><input type="number" name="c16" class="form-control" placeholder="16" min=0 max="16" required style="text-align: center; width: 100px"></td>
                    <td align="center"><input type="number" name="inp16" class="form-control" placeholder="16" min=0 max="16" required style="text-align: center; width: 100px"></td>
                    <td align="center"><input type="number" name="lg16" class="form-control" placeholder="16" min=0 max="16" required style="text-align: center; width: 100px"></td>

                  </tbody>
              </table>



            </div>

            <div class="modal-footer">
              <input type="hidden"  name="urlname" value="{{ $current }}">  <!--  記錄現在的url讓controller取得 -->
               <button type="submit" class="btn" style="background-color:#2E86C1; color: white " name="PLC1" value="PLC1" >儲存資料</button>
            </div>
                </form>
          </div>
        </div>
      </div>




<!-- 輸入資料頁面 PLC2 -->
<div class="modal fade" id="PLC2">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="background: #ac7c7c;color: white">
        <h4 class="modal-title">請分別填寫各構面之權重（1-16） 成長期</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

       <form class="needs-validation" method="POST" action="/Performance/Q8" novalidate>
          {{csrf_field()}} 
      <div class="modal-body">
        <table class="table text-center table-hover">
          <thead style="background-color: #C6A2A2 ">
            <tr>
              <th scope="col" colspan="2">公司權重</th>
              <th scope="col">財務構面</th>
              <th scope="col">顧客構面</th>
              <th scope="col">內部流程構面</th>
              <th scope="col">學習成長構面</th>
            </tr>
          </thead>
               
           <!-- 
              name命名：
              f財務 c顧客 inp內部流程 lg學習成長 後面數字為第E89DA2
              1~4製造資源能耐 5~8行銷資源能耐 6~12研發資源能耐 13~16財務資源能耐
           -->

            <tbody>
              <tr>
                <th scope="row" rowspan="4" style="vertical-align: middle; background-color:#F8F9F9 ">製造資源和能耐</th>
                <th>成本</th>
                <td align="center"><input type="number" name="f1" class="form-control" placeholder="1" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="c1" class="form-control" placeholder="1" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="inp1" class="form-control" placeholder="1" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="lg1" class="form-control" placeholder="1" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th>品質</th>
                <td align="center"><input type="number" name="f2" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="c2" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="inp2" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="lg2" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th>運輸</th>
                <td align="center"><input type="number" name="f3" class="form-control" placeholder="3" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="c3" class="form-control" placeholder="3" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="inp3" class="form-control" placeholder="3" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="lg3" class="form-control" placeholder="3" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th>靈活度</th>
                <td align="center"><input type="number" name="f4" class="form-control" placeholder="4" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="c4" class="form-control" placeholder="4" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="inp4" class="form-control" placeholder="4" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="lg4" class="form-control" placeholder="4" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th scope="row" rowspan="4" style="vertical-align: middle; background-color:#f0e9e9">行銷資源和能耐</th>
                <th>通路管理</th>
                <td align="center"><input type="number" name="f5" class="form-control" placeholder="5" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="c5" class="form-control" placeholder="5" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="inp5" class="form-control" placeholder="5" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="lg5" class="form-control" placeholder="5" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th>市場溝通</th>
                <td align="center"><input type="number" name="f6" class="form-control" placeholder="6" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="c6" class="form-control" placeholder="6" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="inp6" class="form-control" placeholder="6" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="lg6" class="form-control" placeholder="6" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th>定價策略</th>
                <td align="center"><input type="number" name="f7" class="form-control" placeholder="7" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="c7" class="form-control" placeholder="7" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="inp7" class="form-control" placeholder="7" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="lg7" class="form-control" placeholder="7" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th>產品策略</th>
                <td align="center"><input type="number" name="f8" class="form-control" placeholder="8" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="c8" class="form-control" placeholder="8" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="inp8" class="form-control" placeholder="8" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="lg8" class="form-control" placeholder="8" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th scope="row" rowspan="4" style="vertical-align: middle; background-color:#F8F9F9">研發資源和能耐</th>
                <th>新品總數量</th>
                <td align="center"><input type="number" name="f9" class="form-control" placeholder="9" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="c9" class="form-control" placeholder="9" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="inp9" class="form-control" placeholder="9" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="lg9" class="form-control" placeholder="9" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th>專利使用費</th>
                <td align="center"><input type="number" name="f10" class="form-control" placeholder="10" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="c10" class="form-control" placeholder="10" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="inp10" class="form-control" placeholder="10" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="lg10" class="form-control" placeholder="10" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th>研發投資報酬率</th>
                <td align="center"><input type="number" name="f11" class="form-control" placeholder="11" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="c11" class="form-control" placeholder="11" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="inp11" class="form-control" placeholder="11" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="lg11" class="form-control" placeholder="11" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th>新品總發展時間</th>
                <td align="center"><input type="number" name="f12" class="form-control" placeholder="12" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="c12" class="form-control" placeholder="12" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="inp12" class="form-control" placeholder="12" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="lg12" class="form-control" placeholder="12" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th scope="row" rowspan="4" style="vertical-align: middle; background-color:#f4e1e1">財務資源和能耐</th>
                <th>資產報酬率</th>
                <td align="center"><input type="number" name="f13" class="form-control" placeholder="13" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="c13" class="form-control" placeholder="13" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="inp13" class="form-control" placeholder="13" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="lg13" class="form-control" placeholder="13" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <tr>
                  <th>股東權益報酬率</th>
                  <td align="center"><input type="number" name="f14" class="form-control" placeholder="14" min=0 max="16" required style="text-align: center; width: 100px"></td>
                  <td align="center"><input type="number" name="c14" class="form-control" placeholder="14" min=0 max="16" required style="text-align: center; width: 100px"></td>
                  <td align="center"><input type="number" name="inp14" class="form-control" placeholder="14" min=0 max="16" required style="text-align: center; width: 100px"></td>
                  <td align="center"><input type="number" name="lg14" class="form-control" placeholder="14" min=0 max="16" required style="text-align: center; width: 100px"></td>
                  <tr>
                    <th>營收成長率</th>
                    <td align="center"><input type="number" name="f15" class="form-control" placeholder="15" min=0 max="16" required style="text-align: center; width: 100px"></td>
                    <td align="center"><input type="number" name="c15" class="form-control" placeholder="15" min=0 max="16" required style="text-align: center; width: 100px"></td>
                    <td align="center"><input type="number" name="inp15" class="form-control" placeholder="15" min=0 max="16" required style="text-align: center; width: 100px"></td>
                    <td align="center"><input type="number" name="lg15" class="form-control" placeholder="15" min=0 max="16" required style="text-align: center; width: 100px"></td>
                  </tr>
                  <tr>
                    <th>本益比</th>
                    <td align="center"><input type="number" name="f16" class="form-control" placeholder="16" min=0 max="16" required style="text-align: center; width: 100px"></td>
                    <td align="center"><input type="number" name="c16" class="form-control" placeholder="16" min=0 max="16" required style="text-align: center; width: 100px"></td>
                    <td align="center"><input type="number" name="inp16" class="form-control" placeholder="16" min=0 max="16" required style="text-align: center; width: 100px"></td>
                    <td align="center"><input type="number" name="lg16" class="form-control" placeholder="16" min=0 max="16" required style="text-align: center; width: 100px"></td>

                  </tbody>
              </table>



            </div>

            <div class="modal-footer">
              <input type="hidden"  name="urlname" value="{{ $current }}">  <!--  記錄現在的url讓controller取得 -->
               <button type="submit" class="btn" style="background-color:#2E86C1; color: white " name="PLC2" value="PLC2" >儲存資料</button>
            </div>
                </form>
          </div>
        </div>
      </div>


<!-- 輸入資料頁面 PLC3 -->
<div class="modal fade" id="PLC3">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="background: #A49989 ;color: white">
        <h4 class="modal-title">請分別填寫各構面之權重（1-16） 成熟期</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

       <form class="needs-validation" method="POST" action="/Performance/Q8" novalidate>
          {{csrf_field()}} 
      <div class="modal-body">
        <table class="table text-center table-hover">
          <thead style="background-color: #D2CDC4 ">
            <tr>
              <th scope="col" colspan="2">公司權重</th>
              <th scope="col">財務構面</th>
              <th scope="col">顧客構面</th>
              <th scope="col">內部流程構面</th>
              <th scope="col">學習成長構面</th>
            </tr>
          </thead>
               
           <!-- 
              name命名：
              f財務 c顧客 inp內部流程 lg學習成長 後面數字為第幾個成長策略
              1~4製造資源能耐 5~8行銷資源能耐 6~12研發資源能耐 13~16財務資源能耐
           -->

            <tbody>
              <tr>
                <th scope="row" rowspan="4" style="vertical-align: middle; background-color:#F8F9F9 ">製造資源和能耐</th>
                <th>成本</th>
                <td align="center"><input type="number" name="f1" class="form-control" placeholder="1" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="c1" class="form-control" placeholder="1" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="inp1" class="form-control" placeholder="1" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="lg1" class="form-control" placeholder="1" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th>品質</th>
                <td align="center"><input type="number" name="f2" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="c2" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="inp2" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="lg2" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th>運輸</th>
                <td align="center"><input type="number" name="f3" class="form-control" placeholder="3" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="c3" class="form-control" placeholder="3" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="inp3" class="form-control" placeholder="3" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="lg3" class="form-control" placeholder="3" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th>靈活度</th>
                <td align="center"><input type="number" name="f4" class="form-control" placeholder="4" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="c4" class="form-control" placeholder="4" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="inp4" class="form-control" placeholder="4" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="lg4" class="form-control" placeholder="4" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th scope="row" rowspan="4" style="vertical-align: middle; background-color:#E3E2E0">行銷資源和能耐</th>
                <th>通路管理</th>
                <td align="center"><input type="number" name="f5" class="form-control" placeholder="5" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="c5" class="form-control" placeholder="5" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="inp5" class="form-control" placeholder="5" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="lg5" class="form-control" placeholder="5" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th>市場溝通</th>
                <td align="center"><input type="number" name="f6" class="form-control" placeholder="6" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="c6" class="form-control" placeholder="6" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="inp6" class="form-control" placeholder="6" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="lg6" class="form-control" placeholder="6" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th>定價策略</th>
                <td align="center"><input type="number" name="f7" class="form-control" placeholder="7" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="c7" class="form-control" placeholder="7" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="inp7" class="form-control" placeholder="7" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="lg7" class="form-control" placeholder="7" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th>產品策略</th>
                <td align="center"><input type="number" name="f8" class="form-control" placeholder="8" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="c8" class="form-control" placeholder="8" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="inp8" class="form-control" placeholder="8" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="lg8" class="form-control" placeholder="8" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th scope="row" rowspan="4" style="vertical-align: middle; background-color:#F8F9F9">研發資源和能耐</th>
                <th>新品總數量</th>
                <td align="center"><input type="number" name="f9" class="form-control" placeholder="9" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="c9" class="form-control" placeholder="9" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="inp9" class="form-control" placeholder="9" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="lg9" class="form-control" placeholder="9" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th>專利使用費</th>
                <td align="center"><input type="number" name="f10" class="form-control" placeholder="10" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="c10" class="form-control" placeholder="10" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="inp10" class="form-control" placeholder="10" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="lg10" class="form-control" placeholder="10" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th>研發投資報酬率</th>
                <td align="center"><input type="number" name="f11" class="form-control" placeholder="11" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="c11" class="form-control" placeholder="11" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="inp11" class="form-control" placeholder="11" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="lg11" class="form-control" placeholder="11" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th>新品總發展時間</th>
                <td align="center"><input type="number" name="f12" class="form-control" placeholder="12" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="c12" class="form-control" placeholder="12" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="inp12" class="form-control" placeholder="12" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="lg12" class="form-control" placeholder="12" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th scope="row" rowspan="4" style="vertical-align: middle; background-color:#E3E2E0">財務資源和能耐</th>
                <th>資產報酬率</th>
                <td align="center"><input type="number" name="f13" class="form-control" placeholder="13" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="c13" class="form-control" placeholder="13" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="inp13" class="form-control" placeholder="13" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="lg13" class="form-control" placeholder="13" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <tr>
                  <th>股東權益報酬率</th>
                  <td align="center"><input type="number" name="f14" class="form-control" placeholder="14" min=0 max="16" required style="text-align: center; width: 100px"></td>
                  <td align="center"><input type="number" name="c14" class="form-control" placeholder="14" min=0 max="16" required style="text-align: center; width: 100px"></td>
                  <td align="center"><input type="number" name="inp14" class="form-control" placeholder="14" min=0 max="16" required style="text-align: center; width: 100px"></td>
                  <td align="center"><input type="number" name="lg14" class="form-control" placeholder="14" min=0 max="16" required style="text-align: center; width: 100px"></td>
                  <tr>
                    <th>營收成長率</th>
                    <td align="center"><input type="number" name="f15" class="form-control" placeholder="15" min=0 max="16" required style="text-align: center; width: 100px"></td>
                    <td align="center"><input type="number" name="c15" class="form-control" placeholder="15" min=0 max="16" required style="text-align: center; width: 100px"></td>
                    <td align="center"><input type="number" name="inp15" class="form-control" placeholder="15" min=0 max="16" required style="text-align: center; width: 100px"></td>
                    <td align="center"><input type="number" name="lg15" class="form-control" placeholder="15" min=0 max="16" required style="text-align: center; width: 100px"></td>
                  </tr>
                  <tr>
                    <th>本益比</th>
                    <td align="center"><input type="number" name="f16" class="form-control" placeholder="16" min=0 max="16" required style="text-align: center; width: 100px"></td>
                    <td align="center"><input type="number" name="c16" class="form-control" placeholder="16" min=0 max="16" required style="text-align: center; width: 100px"></td>
                    <td align="center"><input type="number" name="inp16" class="form-control" placeholder="16" min=0 max="16" required style="text-align: center; width: 100px"></td>
                    <td align="center"><input type="number" name="lg16" class="form-control" placeholder="16" min=0 max="16" required style="text-align: center; width: 100px"></td>

                  </tbody>
              </table>



            </div>

            <div class="modal-footer">
              <input type="hidden"  name="urlname" value="{{ $current }}">  <!--  記錄現在的url讓controller取得 -->
               <button type="submit" class="btn" style="background-color:#2E86C1; color: white " name="PLC3" value="PLC3" >儲存資料</button>
            </div>
                </form>
          </div>
        </div>
      </div>


<script type="text/javascript">

 $('#error').hide();

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
        // $('submit').onclick = "location.href='/test/Q4'";
        window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          $('#error').show();
          event.preventDefault();
          event.stopPropagation();

        }

        form.classList.add('was-validated');
      }, false);
    });
  }, false);
      })();

    </script>

