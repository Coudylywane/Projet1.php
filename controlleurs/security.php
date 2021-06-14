<?php
if ($_SERVER['REQUEST_METHOD']=='GET') {
    if (isset($_GET['view'])) {
       if ($_GET['view']=='connexion') {
        require(ROUTE_DIR.'views/security/connexion.html.php');
       }elseif($_GET['view']=='inscription') {
        require(ROUTE_DIR.'views/security/inscription.html.php');
       }elseif($_GET['view']=='deconnexion') {
           deconnexion();
        require(ROUTE_DIR.'views/security/connexion.html.php');
       }
    }else {
        require(ROUTE_DIR.'views/security/connexion.html.php');
    }
}elseif ($_SERVER['REQUEST_METHOD']=='POST')  {
    if (isset($_POST['action'])) {
       if ($_POST['action']=='connexion') {
           connexion($_POST['login'],$_POST['password']);
       }elseif ($_POST['action']=='inscription') {
           unset($_POST['valider']);
           unset($_POST['controlleurs']);
           unset($_POST['action']);
        inscription($_POST, $_FILES);
     
    }
    }
}


 function connexion( string $login, string $password):void{
    $arrayError=array();
    validation_login($login,'login',$arrayError);
     validation_password($password,'password',$arrayError);
            
     if (form_valid($arrayError)) {
        $user = find_login_password($login , $password);
        if (count($user)==0) {
            $arrayError['erreurConnexion']="login ou password incorrect ";
            $_SESSION['arrayError']= $arrayError;
            header('location:'.WEB_ROUTE.'?controlleurs=security&view=connexion');
          }else{
              $_SESSION['userConnect']=$user;
              if ($user['role']=='ROLE_ADMIN') {
                  header('location:'.WEB_ROUTE.'?controlleurs=admin&view=liste.question');
              }elseif ($user['role']== 'ROLE_JOUEUR') {
               header('location:'.WEB_ROUTE.'?controlleurs=joueur&view=jeu');
              }
          }
       }else {
           $_SESSION['arrayError']=$arrayError;
           header('location:'.WEB_ROUTE.'?controlleurs=security&view=connexion');
       }
     }

    function inscription( array $data, array $files):void{
        $arrayError=array();
        extract($data);
         validation_login($login,'login',$arrayError);
         if (login_exist($login)) {
           $arrayError['login']="Ce login existe deja ";
           $_SESSION['arrayError']=$arrayError;
           header('location:'.WEB_ROUTE.'?controlleurs=security&view=inscription');
           
         }
         validation_password($password,'password',$arrayError);
         valid_nom($nom,'nom',$arrayError);
         valid_prenom($prenom,'prenom',$arrayError);
        //  avatar($files,'avatar',$arrayError);
         if ($password!=$conpassword) {
            $arrayError['conpassword']="les deux mots de passe ne sont pas identiques";
           
         }
         if (form_valid($arrayError)) {
            
              $data['role']=est_admin()?'ROLE_ADMIN': 'ROLE_JOUEUR';
              
              if (upload_image($files)) {
                $data['avatar']=$files['avatar']['name'];
                add_user($data);
                 header('location:'.WEB_ROUTE.'?controlleurs=security&view=connexion');
                 exit();
              }else {
                $arrayError['avatar']="Erreur de telechargement ";
                $_SESSION['arrayError']=$arrayError;
                header('location:'.WEB_ROUTE.'?controlleurs=security&view=inscription');
                exit();
              }
                
              
           
         }else {
             $_SESSION['arrayError']=$arrayError;
             header('location:'.WEB_ROUTE.'?controlleurs=security&view=inscription');
    }
    }
    
    
    
    function deconnexion():void{
        unset ($_SESSION['userConnect']);
    }
?>

