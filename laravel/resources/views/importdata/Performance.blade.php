
@if (session('performance_1st'))
<div class="alert alert-success">
  {{ session('performance_1st') }}
</div>
<div>
  <button type="button" class="btn btn-primary" id="Qbtn" value="next" onclick="location.href='Performance/Q10'" style="width:100px; margin-top: 20px; float: right;">下一步驟</button>
</div>
@else
<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#HACK">
  輸入資料
</button>
<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#HACK">
  歷史資料
</button>

@endif



<!-- 輸入資料頁面 -->
<div class="modal fade" id="HACK">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header" style="background: #145A32 ;color: white" >
        <h4 class="modal-title">針對16項能耐因子的績效表現評估（1-7）</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
         <form class="needs-validation" method="POST" action="/Performance/Q9" novalidate>
          {{csrf_field()}}
<!--           <input type="hidden" name="question" value="Q11" >
 -->
          <table class="table text-center table-hover" style="margin-top: 20px">
            <thead>
              <tr style="background-color: #8EAF9B">
                <th scope="col" colspan="2">公司權重</th>
                <th scope="col">財務構面</th>
                <th scope="col">顧客構面</th>
                <th scope="col">內部流程構面</th>
                <th scope="col">學習成長構面</th>
              </tr>
            </thead>
            <tbody>
              <!-- name命名：mf製造 ma行銷 d研發 f財務 後面數字為第幾個成長策略 -->

              <tr>
                <th scope="row" rowspan="4" style="vertical-align: middle; background-color:#F8F9F9 ">製造資源和能耐</th>
                <th>成本</th>
                <td align="center"><input type="number" name="mf1" class="form-control" placeholder="1" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="ma1" class="form-control" placeholder="1" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="d1" class="form-control" placeholder="1" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="f1" class="form-control" placeholder="1" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th>品質</th>
                <td align="center"><input type="number" name="mf2" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="ma2" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="d2" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="f2" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th>運輸</th>
                <td align="center"><input type="number" name="mf3" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="ma3" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="d3" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="f3" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th>靈活度</th>
                <td align="center"><input type="number" name="mf4" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="ma4" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="d4" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="f4" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th scope="row" rowspan="4" style="vertical-align: middle; background-color:#D2E1D8">行銷資源和能耐</th>
                <th>通路管理</th>
                <td align="center"><input type="number" name="mf5" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="ma5" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="d5" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="f5" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th>市場溝通</th>
                <td align="center"><input type="number" name="mf6" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="ma6" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="d6" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="f6" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th>定價策略</th>
                <td align="center"><input type="number" name="mf7" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="ma7" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="d7" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="f7" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th>產品策略</th>
                <td align="center"><input type="number" name="mf8" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="ma8" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="d8" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="f8" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th scope="row" rowspan="4" style="vertical-align: middle; background-color:#F8F9F9">研發資源和能耐</th>
                <th>新品總數量</th>
                <td align="center"><input type="number" name="mf9" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="ma9" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="d9" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="f9" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th>專利使用費</th>
                <td align="center"><input type="number" name="mf10" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="ma10" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="d10" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="f10" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th>研發投資報酬率</th>
                <td align="center"><input type="number" name="mf11" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="ma11" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="d11" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="f11" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th>新品總發展時間</th>
                <td align="center"><input type="number" name="mf12" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="ma12" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="d12" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="f12" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th scope="row" rowspan="4" style="vertical-align: middle; background-color:#D2E1D8">財務資源和能耐</th>
                <th>資產報酬率</th>
                <td align="center"><input type="number" name="mf13" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="ma13" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="d13" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="f13" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <tr>
                  <th>股東權益報酬率</th>
                  <td align="center"><input type="number" name="mf14" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                  <td align="center"><input type="number" name="ma14" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                  <td align="center"><input type="number" name="d14" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                  <td align="center"><input type="number" name="f14" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                  <tr>
                    <th>營收成長率</th>
                    <td align="center"><input type="number" name="mf15" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                    <td align="center"><input type="number" name="ma15" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                    <td align="center"><input type="number" name="d15" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                    <td align="center"><input type="number" name="f15" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                  </tr>
                  <tr>
                    <th>本益比</th>
                    <td align="center"><input type="number" name="mf16" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                    <td align="center"><input type="number" name="ma16" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                    <td align="center"><input type="number" name="d16" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                    <td align="center"><input type="number" name="f16" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>

                  </tbody>
                </table>
                <div class="modal-footer">
                  <button type="submit" class="btn" style="background-color:#2E86C1; color: white " >儲存資料</button>
                 </div>
              </form>


            </div>



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
