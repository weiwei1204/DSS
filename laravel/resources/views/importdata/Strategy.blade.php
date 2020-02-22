   @if (session('strategy'))
   <div class="alert alert-success">
    {{ session('strategy') }}
  </div>
  <div>
    <button type="button" class="btn btn-primary" id="Qbtn" value="next" onclick="location.href='/GrowthStrategy/Q5'" style="width:100px; margin-top: 20px; float: right;">下一步驟</button>
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

        <div class="modal-header" style="background: #9D884F; color: white">
          <h4 class="modal-title">請分別填寫各構面於策略之權重（1-100）</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
        <form class="needs-validation" method="POST" action="/GrowthStrategy/Q4" novalidate>
          {{csrf_field()}}

          <div class="modal-body">
            <table class="table text-center table-hover" style="margin-top: 20px">
              <col width="130">
              <col width="60" >
              <col width="60" >
              <col width="60" >
              <col width="60" >
              <thead style="background: #FCF3CF">
                <tr>
                  <th scope="col">公司權重</th>
                  <th scope="col">製造能耐</th>
                  <th scope="col">行銷能耐</th>
                  <th scope="col">研發能耐</th>
                  <th scope="col">財務能耐</th>

                </tr>
              </thead>
              <tbody>
                <!-- name命名：mf製造 ma行銷 d研發 f財務 後面數字為第幾個成長策略 -->

                 <div id="error" style="color: red">
                        請輸入0~100的數字
                      </div>  
                <tr>

                  <th scope="row" style="vertical-align: middle;">市場滲透策略</th>
                  <!--         <td><input type="number" id=Cap1 class="form-control" placeholder="1-100" oninput="if(value>100)value=100;if(value.length>3)value=value.slice(0,3)" required style="text-align: center;"> -->
                    <td align="center"><input type="number" name="mf1" class="form-control" placeholder="1-100" min=0 max="100" required style="text-align: center; width: 100px"></td>
                    <td align="center"><input type="number" name="ma1" class="form-control" placeholder="1-100" min=0 max="100" required style="text-align: center; width: 100px"></td>
                    <td align="center"><input type="number"  name="d1" class="form-control" placeholder="1-100" min=0 max="100" required style="text-align: center; width: 100px"></td>
                    <td align="center"><input type="number" name="f1" class="form-control" placeholder="1-100" min=0 max="100" required style="text-align: center; width: 100px"> 
                    </td>  
                  </tr>

                  <tr>
                    <th scope="row" style="vertical-align: middle;">市場開發策略</th>

                    <td align="center"><input type="number" name="mf2" class="form-control" placeholder="1-100" min=0 max="100" required style="text-align: center; width: 100px"></td>
                    <td align="center"><input type="number" name="ma2" class="form-control" placeholder="1-100" min=0 max="100" required style="text-align: center; width: 100px"></td>
                    <td align="center"><input type="number" name="d2" class="form-control" placeholder="1-100" min=0 max="100" required style="text-align: center; width: 100px"></td>
                    <td align="center"><input type="number" name="f2" class="form-control" placeholder="1-100" min=0 max="100" required style="text-align: center; width: 100px"></td>   
                </tr>

                <tr>
                  <th scope="row" style="vertical-align: middle;">產品開發策略</th>
                  <td align="center"><input type="number" name="mf3" class="form-control" placeholder="1-100" min=0 max="100" required style="text-align: center; width: 100px"></td>
                  <td align="center"><input type="number" name="ma3" class="form-control" placeholder="1-100" min=0 max="100" required style="text-align: center; width: 100px"></td>
                  <td align="center"><input type="number" name="d3" class="form-control" placeholder="1-100" min=0 max="100" required style="text-align: center; width: 100px"></td>
                  <td align="center"><input type="number" name="f3" class="form-control" placeholder="1-100" min=0 max="100" required style="text-align: center; width: 100px">
                    
                  </td>  
                </tr>

                <tr>
                  <th scope="row" style="vertical-align: middle;">向後整合策略</th>
                  <td align="center"><input type="number" name="mf4" class="form-control" placeholder="1-100" min=0 max="100" required style="text-align: center; width: 100px"></td>
                    <td align="center"><input type="number" name="ma4" class="form-control" placeholder="1-100" min=0 max="100" required style="text-align: center; width: 100px"></td>
                      <td align="center"><input type="number" name="d4" class="form-control" placeholder="1-100" min=0 max="100" required style="text-align: center; width: 100px"></td>
                        <td align="center"><input type="number" name="f4" class="form-control" placeholder="1-100" min=0 max="100" required style="text-align: center; width: 100px"></td>
                      </tr>


                      <tr>
                        <th scope="row" style="vertical-align: middle;">向前整合策略</th>
                        <td align="center"><input type="number" name="mf5" class="form-control" placeholder="1-100" min=0 max="100" required style="text-align: center; width: 100px"></td>
                        <td align="center"><input type="number" name="ma5" class="form-control" placeholder="1-100" min=0 max="100" required style="text-align: center; width: 100px"></td>
                        <td align="center"><input type="number" name="d5" class="form-control" placeholder="1-100" min=0 max="100" required style="text-align: center; width: 100px"></td>
                        <td align="center"><input type="number" name="f5" class="form-control" placeholder="1-100" min=0 max="100" required style="text-align: center; width: 100px"></td>
                    </tr>

                    <tr>
                      <th scope="row" style="vertical-align: middle;">多角化策略</th>
                      <td align="center"><input type="number" name="mf6" class="form-control" placeholder="1-100" min=0 max="100" required style="text-align:center; width:100px"></td>
                      <td align="center"><input type="number" name="ma6" class="form-control" placeholder="1-100" min=0 max="100" required style="text-align: center; width: 100px"></td>
                      <td align="center"><input type="number" name="d6" class="form-control" placeholder="1-100" min=0 max="100" required style="text-align: center; width: 100px"></td>
                      <td align="center"><input type="number" name="f6" class="form-control" placeholder="1-100" min=0 max="100" required style="text-align: center; width: 100px"></td>  
                  </tr>

                </tbody>


              </table>


                                               <!--  <div class="row justify-content-center">
                                                  <button type="submit button" class="btn" id="aaa" value="next" onclick="location.href='/test/Q4'" style="width:200px; height:50px;  margin-top: 20px; background-color: #2E86C1; color: white">下一步驟（儲存）</button>
                                                </div> -->



                                              </div>
                                              
                                              <!-- <div class="modal-footer">
                                                <button type="submit" class="btn" data-dismiss="modal" style="background-color:#2E86C1; color: white " >儲存資料</button>
                                              </div> -->
                                              <div class="modal-footer">
                                                <button type="submit" class="btn" style="background-color:#2E86C1; color: white " >儲存資料</button>
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