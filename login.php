<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login</title>

    <!-- Bootstrap -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
    <!-- Custom Font -->
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"/>

  </head>
  <body>
      <div id="form-login" class="container">
          <form class="form-signin">
            <div class="row">
              <div class="logo col-sm-4">
                <a>
                  <img src="img/logo.png" class="img-responsive" alt="Imagem responsiva">
                </a>
                <h2 class="form-signin-heading">Login</h2>
                <label for="inputEmail" class="sr-only">Email</label>
                <input type="email" id="inputEmail" class="form-control" placeholder="Endereço de e-mail" required autofocus>
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Digite sua senha" required>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="remember-me"> Lembre-me
                  </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
              </div>
            </div>
          </form>
      </div> <!-- /container -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>