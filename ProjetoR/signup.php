<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">


  <title>Login - Dashboard</title>
  <style type="text/css">
      #cor{
        color: #fff;
        font-size: 20px;
      }

      #imagem{
        height: 180px;
        width: 180px;
      }
    </style>
</head>
<body style="background-color: #2a3542">
  <div class="container">
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4" style="margin-top: 150px">
      <center>
          <img id="imagem" src="https://st.depositphotos.com/1179847/4067/i/950/depositphotos_40676241-stock-photo-barbados.jpg">
        </center>
        <br><br>
       <form action="./painel/_insert_pessoa.php" method="post">
          <div class="form-group">
            <label for="exampleInputEmail1" id="cor">E-Mail</label>
            <input type="email" class="form-control"  name="mail" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
            <div class="form-group">
              <label for="exampleInputPassword1" id="cor">Password</label>
              <input type="password" class="form-control"  name="senha" id="password">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1" id="cor">Confirm Password</label>
              <input type="password" class="form-control" name="senha2" id="confirm_password" >
            </div>
          <br>
          <button type="submit" class="btn btn-block" style="background-color: #fb7e6d;color:#fff">Submit</button>
      </form>
      <br>

      <center>
        <a href="index.php">Login ?</a>
      </center>

    </div>
    <div class="col-md-4"></div>
  </div>

</div>








</body>
</html>
<script type="text/javascript">
var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Senhas diferentes!");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>