<?php 

if (isset($_SESSION['arrayError'])) {
   $arrayError=$_SESSION['arrayError'];
   unset($_SESSION['arrayError']);
}

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Connexion</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=WEB_ROUTE."css/connexion.css"?>">

  </head>
  <body class="tout">
  <?php if (isset($arrayError['erreurConnexion'])):?>
      <div class="alert alert-primary" role="alert">
     <strong><?php echo isset($arrayError['erreurConnexion']) ? $arrayError['erreurConnexion']: '';?> </strong>
      </div>
 <?php endif ?>
  <form id="login-form" class="form"  action="<?=WEB_ROUTE?>" method="POST">
        <input type="hidden" name="controlleurs" value="security"/>
        <input type="hidden" name="action" value="connexion"/>
    <div class="">
        <div class="header">
            <div class="logo">
                 <img src="<?=WEB_ROUTE."img/logo.png"?>" style="width:10%;" alt="logo">
            </div>
            <div>
              <div class="titre"><h2>Le plaisir de jouer</h2></div>
            </div>
        </div>
        <div class="lepp">
        <div class="champs">
          <div class="login"><h4>Login Form</h4></div>
        </div>
        <div class="body">
          <div class="">
            <div class="form-group">
                <label for="">Login</label>
                <input type="text" class="form-control" name="login" id="" aria-describedby="emailHelpId" placeholder="">
                <div class="input-group-append">
                <span><i class="fas fa-user"></i></span>
                </div>
                <small class="form-text text-danger">
                <?php echo isset($arrayError['login']) ? $arrayError['login']: '';?> 
                </small>
            </div>
            <div class="ddd">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
                <div class="input-group-append">
                          <span> <i class="fas fa-lock"></i></span>
                </div>
                <small class="form-text text-danger">
                <?php echo isset($arrayError['password']) ? $arrayError['password']: '';?> 
                </small>
        
            </div>
            </div>
            <div class="form-group ">
                <button type="submit" name="btn_submit"  class="btn btn-danger" class=" button" value="btn_connexion">Connexion</button>
            </div>
            <div id="register-link" class="text-right ">
                <a href="<?= WEB_ROUTE.'?controlleurs=security&view=inscription' ?>"  class="lien"class="text-info">S'inscrire en tant que joueur</a>
            </div>
        </div>
        </div>
       
     </div>
  </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
