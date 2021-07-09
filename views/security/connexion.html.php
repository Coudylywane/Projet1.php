<?php 

if (isset($_SESSION['arrayError'])) {
   $arrayError=$_SESSION['arrayError'];
   unset($_SESSION['arrayError']);
}

?>
<?php require_once(ROUTE_DIR.'views/inc/header.html.php')?>
<?php require_once(ROUTE_DIR.'views/inc/menu1.html.php')?>


  <div class=" container card bg-light tout " style="height: 400px;">
  <?php if (isset($arrayError['erreurConnexion'])):?>
      <div class="alert alert-primary" role="alert">
     <strong><?php echo isset($arrayError['erreurConnexion']) ? $arrayError['erreurConnexion']: '';?> </strong>
      </div>
 <?php endif ?>
  <form id="login-form" class="form"  action="<?=WEB_ROUTE?>" method="POST">
        <input type="hidden" name="controlleurs" value="security"/>
        <input type="hidden" name="action" value="connexion"/>
    <div class="">
        <div class="">

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