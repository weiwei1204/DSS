  
 <form class="needs-validation" novalidate method="POST" action="/Allocation/Q13"> 
              {{csrf_field()}}

    <input type="hidden" name="question" value="Q13" >

<table class="table text-center table-hover">
  <thead style="background: #EBDEF0 ">
    <tr>
      <th scope="col"></th>
      <th scope="col">最低需求門檻</th>
      
    </tr>
  </thead>
    <tbody>
      <div id="error" style="color: red;float: right;">
       請輸入0~100的數字
     </div> 
      <tr>
        <th scope="row" style="vertical-align: middle;">財務構面</th>
        <!--         <td><input type="number" id=Cap1 class="form-control" placeholder="1-100" oninput="if(value>100)value=100;if(value.length>3)value=value.slice(0,3)" required style="text-align: center;"> -->
          <td align="center"><input type="number" name="finance" id=Cap1 class="form-control" min=0 max=100 required style="text-align: center; width: 100px">
          </td>     
        </tr>

        <tr>
          <th scope="row" style="vertical-align: middle;">顧客構面</th>
          <td align="center"><input type="number" name="customer" id=Cap1 class="form-control" min=0 max=100 required style="text-align: center; width: 100px">
          </td>   
        </tr>

        <tr>
          <th scope="row" style="vertical-align: middle;">內部流程構面</th>
          <td align="center"><input type="number" name="inprocess" id=Cap1 class="form-control" min=0 max=100 required style="text-align: center; width: 100px">
          </td>  
        </tr>

        <tr>
          <th scope="row" style="vertical-align: middle;">學習成長構面</th>
          <td align="center"><input type="number" name="learn_growth" id=Cap1 class="form-control" min=0 max=100 required style="text-align: center; width: 100px">
          </td>  
        </tr>
        

      </tbody>


    </table>

  <div class="row justify-content-center">
        <button  class="btn" id="btn" type="submit" style="width:200px; height:50px;  margin-top: 20px; background-color: #2E86C1; color: white">下一步驟（儲存）</button>
      </div>

</form>


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