<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Login</title>
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

    
    <!-- Custom styles for this template -->
  </head>
  <body style="background-color: #2a3542;">
    <div class="container">
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4" style="margin-top: 150px">
        <center>
          <img id="imagem" src="https://st.depositphotos.com/1179847/4067/i/950/depositphotos_40676241-stock-photo-barbados.jpg">
        </center>
        <br><br>
        <form action="./painel/_insert_menbro.php">
          <div class="form-group">
            <label for="exampleInputEmail1" id="cor">E-mail</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1" id="cor" >Senha</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
          <br>
          <button type="submit" class="btn btn-block btn-primary">Submit</button>
        </form>
        <br>
        <center>
          <a href = "signup.php" style="text-decoration: none;">Inscrever-se</a>
        </center>

        </div>
        <div class="col-md-4"></div>
      </div>
    </div>


    
  

</body></html>