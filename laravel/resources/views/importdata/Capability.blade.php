@php ($changPage = "'/test/Q1'")
 @if (session('capability'))
   <div class="alert alert-success">
    {{ session('capability') }}
  </div>
  <div>
    <button type="button" class="btn btn-primary" id="Qbtn" value="next" onclick="location.href='/GrowthStrategy/Q4'" style="width:100px; margin-top: 20px; float: right;">下一步驟</button>
  </div>
  @else
 


   <form class="needs-validation" id="search_form" method="POST" action="/GrowthStrategy/Q3" novalidate>

<table class="table text-center table-hover">
  <col width="130">
  <col width="60" >
  <thead style="background: #F4ECF7">
    <tr>
      <th scope="col">公司權重</th>
      <th scope="col">目前能耐數值比</th>

    </tr>
  </thead>

  <tbody>
    {{csrf_field()}}
    <tr>
      <th scope="row" style="vertical-align: middle;">製造資源和能耐</th>
      <!--         <td><input type="number" id=Cap1 class="form-control" placeholder="1-100" oninput="if(value>100)value=100;if(value.length>3)value=value.slice(0,3)" required style="text-align: center;"> -->
        <td align="center">
          <input type="number" name="manufacture" id="cap" class="form-control" placeholder="1-100" min=0 max="100" required style="text-align: center; width: 100px" >
          <div class="invalid-feedback">
            請輸入0~100的數字
          </div> 
        </td>     
      </tr>

      <tr>
        <th scope="row" style="vertical-align: middle;">行銷資源和能耐</th>

        <td align="center">
          <input type="number" name="marketing" id="cap" class="form-control" placeholder="1-100" min=0 max="100" required style="text-align: center; width: 100px">
          <div class="invalid-feedback">
            請輸入0~100的數字
          </div>
        </td>   
      </tr>

      <tr>
        <th scope="row" style="vertical-align: middle;">研發資源和能耐</th>
        <td align="center">
          <input type="number" name="development" id="cap" class="form-control" placeholder="1-100" min=0 max="100" required style="text-align: center; width: 100px">
          <div class="invalid-feedback">
            請輸入0~100的數字
          </div>
        </td>  
      </tr>

      <tr>
        <th scope="row" style="vertical-align: middle;">財務資源和能耐</th>
        <td align="center">
          <input type="number" name="finance" id="cap" class="form-control" placeholder="1-100" min=0 max="100" required style="text-align: center; width: 100px">
          <div class="invalid-feedback">
            請輸入0~100的數字
          </div>
        </td>  
      </tr>

  </tbody>
</table>

      <div class="row justify-content-center">
        <button  class="btn" id="btn" type="submit" style="width:200px; height:50px;  margin-top: 20px; background-color: #2E86C1; color: white">儲存</button>
      </div>
    <!--   @foreach ($users as $users)
{{$users->name}}
@endforeach -->
    </form>
      @endif


<script type="text/javascript">
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
          event.preventDefault();
          event.stopPropagation();

        }

        form.classList.add('was-validated');
      }, false);
    });
  }, false);
      })();

    </script>


