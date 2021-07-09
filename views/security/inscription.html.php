<?php 
if (isset($_SESSION['arrayError'])) {
   $arrayError=$_SESSION['arrayError'];
   unset($_SESSION['arrayError']);
}

?>


<?php require_once(ROUTE_DIR.'views/inc/header.html.php');
require_once(ROUTE_DIR.'views/inc/menu1.html.php');
 if (est_admin()){
  require_once(ROUTE_DIR.'views/inc/barre.html.php');
 }
 
?>
<div class="container">
    <div class="row p-0">
        <div class="col-md-4">
        <?php if(est_admin()):?>
            <?php require_once(ROUTE_DIR.'views/inc/menu.html.php')?>
         <?php endif?>
        </div>
        <div class="col-md-8 ">
            <?php if(est_admin()):?>
              <div class="container card bg-light">
          <div class="row p-0">
          <div class="col-md-9">

          <div class="container ">
              <h4>S'INSCRIRE</h4>
              <p>Pour tester votre niveau de culture general</p>
                <form action="<?=WEB_ROUTE?>" method="POST"  enctype="multipart/form-data">
                <input type="hidden" name="controlleurs" value="security"/>
                <input type="hidden" name="action" value="<?= isset($user['id'])?'edit':'inscription';?>"/>
                <input type="hidden" name="id" value="<?=isset($user['id']) ? $user['id']:"" ;?>"/>
                <div class="mb-2">
                    <label for="">Prenom</label>
                    <input type="text" class="form-control " name="prenom" id="" aria-describedby="emailHelpId" placeholder="Aaaaa" value="<?= isset($user['prenom'])?$user['prenom']:''?>">
                    <small class="form-text text-danger">
                    <?php echo isset($arrayError['prenom']) ? $arrayError['prenom']: '';?> 
                    </small>
                </div>
                <div class="mb-2">
                    <label for="">Nom</label>
                    <input type="text" class="form-control " name="nom" id="" aria-describedby="emailHelpId" placeholder="BBBB"  value="<?= isset($user['nom'])?$user['nom']:''?>">
                    <small class="form-text text-danger">
                    <?php echo isset($arrayError['nom']) ? $arrayError['nom']: '';?>
                    </small>
                </div>
                <div class="mb-2">
                    <label for="">Login</label>
                    <input type="text" class="form-control " name="login" id="" aria-describedby="emailHelpId" placeholder="aabaa"  value="<?= isset($user['login'])?$user['login']:''?>">
                    <small class="form-text text-danger">
                    <?php echo isset($arrayError['login']) ? $arrayError['login']: '';?>
                    </small>
                </div>
                <div class="row p-0">
                  <div class="col-md-6">
                  <div class="mb-2">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control mot-de-pass" placeholder="....."  value="<?= isset($user['password'])?$user['password']:''?>">
                    <small class="form-text text-danger">
                    <?php echo isset($arrayError['password']) ? $arrayError['password']: '';?>
                    </small>
                </div>
                </div>
                <div class="col-md-6">
                <div class="">
                    <label for="password">Confirm Password</label>
                    <input type="password" name="conpassword" class="form-control mot-de-pass" placeholder="....."  value="<?= isset($user['conpassword'])?$user['conpassword']:''?>">
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
                  <div class="row p-0">
                    <div class="col-6 mb-2"> 
                      <button type="submit" name="btn-submit" class="btn btn-danger button"><?=isset($user['id'])?'Modifier':'Creer Compte' ?></button>
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
          <?php else:?>
          <div class="container border border-lg-light rounded">
          <div class="row p-0">
          <div class="col-md-9">

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
</div>

<?php require_once(ROUTE_DIR.'views/inc/footer.html.php')?>

<style>
    .row{
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: 0;
        margin-left: 0;
    }
    .container {
    margin-top: 1%;
    margin-left: 0%;
}



</style>
























