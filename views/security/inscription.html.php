<?php 
if (isset($_SESSION['arrayError'])) {
   $arrayError=$_SESSION['arrayError'];
   unset($_SESSION['arrayError']);
}

?>

<?php require_once(ROUTE_DIR.'views/inc/header.html.php')?>
<?php require_once(ROUTE_DIR.'views/inc/menu1.html.php')?>
<?php if (est_admin()):?>
<?php require_once(ROUTE_DIR.'views/inc/barre.html.php')?>
<?php endif ?>
<div class="container">
        <div class="row">
        <div class="col-4">
        <?php if(est_admin()):?>
            <?php require_once(ROUTE_DIR.'views/inc/menu.html.php')?>
         <?php endif?>
        </div>
        <?php if(est_admin()):?>
        <div class="col-7">
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
                <!-- <div class="form-group">
                  <label for="">Avatar</label>
                  <input type="file" class="form-control-file" name="avatar"  placeholder="">
                  <small  class="form-text text-danger">
                  <?php //echo isset($arrayError['avatar']) ? $arrayError['avatar']: '';?>
                  </small>
                </div> -->
                <div class="mb-3">
                    <label for="formFileSm" class="form-label">Avatar</label>
                    <input class="form-control form-control-sm" id="formFileSm" type="file">
                </div>
                  <div class="row">
                    <div class="col-6 mb-2"> 
                      <button type="submit" name="btn-submit" class="btn btn-danger button">Creer compte</button>
                    </div>
                    
                  </div>
            </form>
          </div>
              </div>
              </div>
              <!-- <div class="col-3">
              <div>
                  <img src="<?=WEB_ROUTE."img/photo.png"?>"alt="avatar" class="avatar">
                  <p class="h3">Avatar de l'utilisateur</p>
              </div>
              </div> -->
          </div>
        </div>
        <?php else:?>
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
                <!-- <div class="form-group">
                  <label for="">Avatar</label>
                  <input type="file" class="form-control-file" name="avatar"  placeholder="">
                  <small  class="form-text text-danger">
                  <?php //echo isset($arrayError['avatar']) ? $arrayError['avatar']: '';?>
                  </small>
                </div> -->
                <div class="mb-3">
                    <label for="formFileSm" class="form-label">Avatar</label>
                    <input class="form-control form-control-sm" id="formFileSm" type="file">
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
              </div>
              <!-- <div class="col-3">
              <div>
                  <img src="<?=WEB_ROUTE."img/photo.png"?>"alt="avatar" class="avatar">
                  <p class="h3">Avatar de l'utilisateur</p>
              </div>
              </div> -->
          </div>
        <?php endif ?>
        </div>
        </div>
       

        <?php require_once(ROUTE_DIR.'views/inc/footer.html.php')?>    
       
<style>
  .container-fluid{
    background-color: #c90017;
    height: 90px;
    padding: 0;
    border: 1px solid #c90017;
  }
  .container-fluid img{
    height: 89px;
  }
</style>






