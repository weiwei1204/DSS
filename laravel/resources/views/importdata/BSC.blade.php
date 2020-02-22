
<!-- 傳姪判斷是否為生命週期改變之企業，如企業處於改變狀態，則顯示萌芽期、成長期、成熟期-->

<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#HACK">
  輸入資料
</button>
<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#HACK">
  歷史資料
</button>



<!-- 輸入資料頁面 -->
<div class="modal fade" id="HACK">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header" style="background: #2471A3 ;color: white">
        <h4 class="modal-title">請分別填寫各構面之權重（1-16）</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
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
          <form>
            <tbody>
              <tr>
                <th scope="row" rowspan="4" style="vertical-align: middle; background-color:#F8F9F9 ">製造資源和能耐</th>
                <th>成本</th>
                <td align="center"><input type="number" name="mf1" class="form-control" placeholder="1" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="mf1" class="form-control" placeholder="1" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="mf1" class="form-control" placeholder="1" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="mf1" class="form-control" placeholder="1" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th>品質</th>
                <td align="center"><input type="number" name="mf1" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="mf1" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="mf1" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="mf1" class="form-control" placeholder="2" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th>運輸</th>
                <td align="center"><input type="number" name="mf1" class="form-control" placeholder="3" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="mf1" class="form-control" placeholder="3" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="mf1" class="form-control" placeholder="3" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="mf1" class="form-control" placeholder="3" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th>靈活度</th>
                <td align="center"><input type="number" name="mf1" class="form-control" placeholder="4" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="mf1" class="form-control" placeholder="4" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="mf1" class="form-control" placeholder="4" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="mf1" class="form-control" placeholder="4" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th scope="row" rowspan="4" style="vertical-align: middle; background-color:#EBF5FB">行銷資源和能耐</th>
                <th>通路管理</th>
                <td align="center"><input type="number" name="mf1" class="form-control" placeholder="5" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="mf1" class="form-control" placeholder="5" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="mf1" class="form-control" placeholder="5" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="mf1" class="form-control" placeholder="5" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th>市場溝通</th>
                <td align="center"><input type="number" name="mf1" class="form-control" placeholder="6" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="mf1" class="form-control" placeholder="6" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="mf1" class="form-control" placeholder="6" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="mf1" class="form-control" placeholder="6" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th>定價策略</th>
                <td align="center"><input type="number" name="mf1" class="form-control" placeholder="7" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="mf1" class="form-control" placeholder="7" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="mf1" class="form-control" placeholder="7" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="mf1" class="form-control" placeholder="7" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th>產品策略</th>
                <td align="center"><input type="number" name="mf1" class="form-control" placeholder="8" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="mf1" class="form-control" placeholder="8" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="mf1" class="form-control" placeholder="8" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="mf1" class="form-control" placeholder="8" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th scope="row" rowspan="4" style="vertical-align: middle; background-color:#F8F9F9">研發資源和能耐</th>
                <th>新品總數量</th>
                <td align="center"><input type="number" name="mf1" class="form-control" placeholder="9" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="mf1" class="form-control" placeholder="9" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="mf1" class="form-control" placeholder="9" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="mf1" class="form-control" placeholder="9" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th>專利使用費</th>
                <td align="center"><input type="number" name="mf1" class="form-control" placeholder="10" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="mf1" class="form-control" placeholder="10" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="mf1" class="form-control" placeholder="10" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="mf1" class="form-control" placeholder="10" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th>研發投資報酬率</th>
                <td align="center"><input type="number" name="mf1" class="form-control" placeholder="11" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="mf1" class="form-control" placeholder="11" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="mf1" class="form-control" placeholder="11" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="mf1" class="form-control" placeholder="11" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th>新品總發展時間</th>
                <td align="center"><input type="number" name="mf1" class="form-control" placeholder="12" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="mf1" class="form-control" placeholder="12" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="mf1" class="form-control" placeholder="12" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="mf1" class="form-control" placeholder="12" min=0 max="16" required style="text-align: center; width: 100px"></td>
              </tr>
              <tr>
                <th scope="row" rowspan="4" style="vertical-align: middle; background-color:#EBF5FB">財務資源和能耐</th>
                <th>資產報酬率</th>
                <td align="center"><input type="number" name="mf1" class="form-control" placeholder="13" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="mf1" class="form-control" placeholder="13" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="mf1" class="form-control" placeholder="13" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <td align="center"><input type="number" name="mf1" class="form-control" placeholder="13" min=0 max="16" required style="text-align: center; width: 100px"></td>
                <tr>
                  <th>股東權益報酬率</th>
                  <td align="center"><input type="number" name="mf1" class="form-control" placeholder="14" min=0 max="16" required style="text-align: center; width: 100px"></td>
                  <td align="center"><input type="number" name="mf1" class="form-control" placeholder="14" min=0 max="16" required style="text-align: center; width: 100px"></td>
                  <td align="center"><input type="number" name="mf1" class="form-control" placeholder="14" min=0 max="16" required style="text-align: center; width: 100px"></td>
                  <td align="center"><input type="number" name="mf1" class="form-control" placeholder="14" min=0 max="16" required style="text-align: center; width: 100px"></td>
                  <tr>
                    <th>營收成長率</th>
                    <td align="center"><input type="number" name="mf1" class="form-control" placeholder="15" min=0 max="16" required style="text-align: center; width: 100px"></td>
                    <td align="center"><input type="number" name="mf1" class="form-control" placeholder="15" min=0 max="16" required style="text-align: center; width: 100px"></td>
                    <td align="center"><input type="number" name="mf1" class="form-control" placeholder="15" min=0 max="16" required style="text-align: center; width: 100px"></td>
                    <td align="center"><input type="number" name="mf1" class="form-control" placeholder="15" min=0 max="16" required style="text-align: center; width: 100px"></td>
                  </tr>
                  <tr>
                    <th>本益比</th>
                    <td align="center"><input type="number" name="mf1" class="form-control" placeholder="16" min=0 max="16" required style="text-align: center; width: 100px"></td>
                    <td align="center"><input type="number" name="mf1" class="form-control" placeholder="16" min=0 max="16" required style="text-align: center; width: 100px"></td>
                    <td align="center"><input type="number" name="mf1" class="form-control" placeholder="16" min=0 max="16" required style="text-align: center; width: 100px"></td>
                    <td align="center"><input type="number" name="mf1" class="form-control" placeholder="16" min=0 max="16" required style="text-align: center; width: 100px"></td>

                  </tbody>
                </form>
              </table>



            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-success" 
              data-dismiss="modal">儲存資料</button>
            </div>

          </div>
        </div>
      </div>



