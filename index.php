<?php include "connection.php;" ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../assets/css/animate-3.7.0.css">
  <link rel="stylesheet" href="../assets/css/font-awesome-4.7.0.min.css">
  <link rel="stylesheet" href="../assets/css/bootstrap-4.1.3.min.css">
  <link rel="stylesheet" href="../assets/css/owl-carousel.min.css">
  <link rel="stylesheet" href="../assets/css/jquery.datetimepicker.min.css">
  <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body class="bg-login-wall bg-dark">
  <div class="container">
    <div class="card card-login mx-auto" style="width: 500px; margin-top: 100px;">
      <div class="card-header text-center">
        <h3 class="text-primary text-center">Login</h3>
      </div>
      <div class="card-body">
        <form method="POST" action="./pages/verifyUser.php" name="form-login">
          <div class="form-group">
            <label for="email">E-Mail</label>
            <input type="email" class="form-control" name="email" id="email">
          </div>
          <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" class="form-control" name="senha" id="senha">
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input">
                Lembrar minha senha.
              </label>
            </div>
          </div>
          <button type="submit" class="btn btn-block btn-primary"><span style="color: #fff;">Entrar</span></button>

        </form>
      </div>
      <div class="card-footer">
        <div class="text-center">
          <a href="#" class="card-link small mt-3"><span class="text-primary font-weight-bold">esqueci minha senha</span></a>
        </div>
      </div>
    </div>
  </div>


  <script src="../assets/js/vendor/jquery-2.2.4.min.js"></script>
  <script src="../assets/js/vendor/bootstrap-4.1.3.min.js"></script>
  <script src="../assets/js/main.js"></script>
</body>

</html>
