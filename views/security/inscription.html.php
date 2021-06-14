<?php 
if (isset($_SESSION['arrayError'])) {
   $arrayError=$_SESSION['arrayError'];
   unset($_SESSION['arrayError']);
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>inscription</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=WEB_ROUTE."css/inscription.css"?>">
  </head>
  <body>
 
        
      <div class="container-fluid " >
          <div class="row">
              <div class="col-1">
                  <img src="<?=WEB_ROUTE."img/logo.png"?>" class="logo-header";alt="logo">
              </div>
              <div class="col-11 bg-danger">
                  <h2 class="text-white mt-5 text-center ml-1">Le plaisir de jouer</h2>
              </div>
          </div>
        </div>
        <div class="container border border-lg-light rounded">
          <div class="row">
          <div class="col-9">

          <div class="container ">
              <h4>S'INSCRIRE</h4>
              <p>Pour tester votre niveau de culture general</p>
                <form action="<?=WEB_ROUTE?>" method="POST"  enctype="multipart/form-data">
                <input type="hidden" name="controlleurs" value="security"/>
                <input type="hidden" name="action" value="inscription"/>
                <div class="mb-2">
                    <label for="">Prenom</label>
                    <input type="text" class="form-control " name="prenom" id="" aria-describedby="emailHelpId" placeholder="Aaaaa">
                    <small class="form-text text-danger">
                    <?php echo isset($arrayError['prenom']) ? $arrayError['prenom']: '';?> 
                    </small>
                </div>
                <div class="mb-2">
                    <label for="">Nom</label>
                    <input type="text" class="form-control " name="nom" id="" aria-describedby="emailHelpId" placeholder="BBBB">
                    <small class="form-text text-danger">
                    <?php echo isset($arrayError['nom']) ? $arrayError['nom']: '';?>
                    </small>
                </div>
                <div class="mb-2">
                    <label for="">Login</label>
                    <input type="text" class="form-control " name="login" id="" aria-describedby="emailHelpId" placeholder="aabaa">
                    <small class="form-text text-danger">
                    <?php echo isset($arrayError['login']) ? $arrayError['login']: '';?>
                    </small>
                </div>
                <div class="row">
                  <div class="col-6">
                  <div class="mb-2">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control mot-de-pass" placeholder=".....">
                    <small class="form-text text-danger">
                    <?php echo isset($arrayError['password']) ? $arrayError['password']: '';?>
                    </small>
                </div>
                </div>
                <div class="col-6">
                <div class="">
                    <label for="password">Confirm Password</label>
                    <input type="password" name="conpassword" class="form-control mot-de-pass" placeholder=".....">
                    <small class="form-text text-danger">
                    <?php echo isset($arrayError['conpassword']) ? $arrayError['conpassword']: '';?>
                    </small>
                </div>
                </div>
                </div>
                <!-- <div class="custom-file">
                    <input type="file" class="custom-file-input" class="var" name="avatar"  id="inputGroupFile01">
                    <label class="custom-file-label " for="inputGroupFile01">Choisir un avatar</label>
                    <small id="fileHelpId" class="form-text text-danger">
                        <?php //echo isset($arrayError['avatar']) ? $arrayError['avatar']: '';?>
                    </small>
                </div> -->
                <div class="form-group">
                  <label for="">Avatar</label>
                  <input type="file" class="form-control-file" name="avatar"  placeholder="">
                  <small  class="form-text text-danger">
                  <?php echo isset($arrayError['avatar']) ? $arrayError['avatar']: '';?>
                  </small>
                </div>
                  <div class="row">
                    <div class="col-6 mb-2"> 
                      <button type="submit" name="btn-submit" class="btn btn-danger button">Creer compte</button>
                    </div>
                    <div class="col-6 buttons">
                    <a href="<?= WEB_ROUTE.'?controlleurs=security&view=connexion' ?>"class="lien" >Se connecter</a>
                    </div>
                  </div>
            </form>
          </div>
              </div>
              <div class="col-3">
              <div>
                  <img src="<?=WEB_ROUTE."img/photo.png"?>"alt="avatar" class="avatar">
                  <p class="h3">Avatar du joueur</p>
              </div>
              </div>
          </div>
        </div>

    
       








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

