  <form class="needs-validation" novalidate method="POST" action="/Allocation/Q12"> 
              {{csrf_field()}}

    <input type="hidden" name="question" value="Q12" >
  
<table class="table text-center table-hover">
  <thead style="background: #D6EAF8 ">
    <tr>
      <th scope="col"></th>
      <th scope="col">能耐運用上限</th>
      
    </tr>
  </thead>
    <tbody>
     <div id="error" style="color: red">
       請輸入0~100的數字
     </div>  
     <tr>
      <th scope="row" style="vertical-align: middle;">製造能耐</th>
      <!--         <td><input type="number" id=Cap1 class="form-control" placeholder="1-100" oninput="if(value>100)value=100;if(value.length>3)value=value.slice(0,3)" required style="text-align: center;"> -->
        <td align="center"><input type="number" name="manufacture" id=Cap1 class="form-control" min=0 max=100 required style="text-align: center; width: 100px">
        </td>     
      </tr>

      <tr>
        <th scope="row" style="vertical-align: middle;">行銷能耐</th>
        <td align="center"><input type="number" name="marketing" id=Cap1 class="form-control" min=0 max=100 required style="text-align: center; width: 100px">
        </td>   
      </tr>

      <tr>
        <th scope="row" style="vertical-align: middle;">研發能耐</th>
        <td align="center"><input type="number" name="development" id=Cap1 class="form-control" min=0 max=100 required style="text-align: center; width: 100px">
        </td>  
      </tr>

      <tr>
        <th scope="row" style="vertical-align: middle;">財務能耐</th>
        <td align="center"><input type="number" name="finance" id=Cap1 class="form-control" min=0 max=100 required style="text-align: center; width: 100px">
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