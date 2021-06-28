<?php 
 if (!est_admin()) header("location:".WEB_ROUTE.'?controlleurs=security&view=connexion');

 if ($_SERVER['REQUEST_METHOD']=='GET') {
     if (isset($_GET['view'])) {
        if ($_GET['view']=='liste.question') {
            require(ROUTE_DIR.'views/admin/liste.question.html.php');
           }elseif ($_GET['view']=='creer.question') {
            require(ROUTE_DIR.'views/admin/creer.question.html.php');
           }elseif ($_GET['view']=='liste.admin') {
            require(ROUTE_DIR.'views/admin/liste.admin.html.php');
           }elseif ($_GET['view']=='liste.joueur') {
            require(ROUTE_DIR.'views/admin/liste.joueur.html.php');
           }elseif ($_GET['view']=='tableau.bord') {
            require(ROUTE_DIR.'views/admin/tableau.bord.html.php');
           }elseif($_GET['view']=='modification') {
              $id=$_GET['id'];
               $question=recuperer_id($id);
            require_once(ROUTE_DIR.'views/admin/creer.question.html.php');
           }
     }else {
         require_once(ROUTE_DIR.'views/security/connexion.html.php');
     }
 }elseif ($_SERVER['REQUEST_METHOD']=='POST') {
    if (isset($_POST['action'])) {
        if ($_POST['action']=='creer.question') {
            if (isset($_POST['btn_submit'])) {
                  question($_POST);
                header('location:'.WEB_ROUTE.'?controlleurs=admin&view=creer.question');
                 exit();
            }elseif (isset($_POST['plus'])) {
              $nbr_pts=$_POST['nbrres'];
              $_SESSION['nbrres']= $nbr_pts;
             $type=$_POST['type'];
             $_SESSION['type']=$type;
             $quest=$_POST['question'];
             $_SESSION['question']=$quest;
             $nbrP=$_POST['point'];
             $_SESSION['point']=$nbrP;
             $nbrR=$_POST['nbrres'];
             $_SESSION['nbrres']=$nbrR;
              header('location:'.WEB_ROUTE.'?controlleurs=admin&view=creer.question');
            }
               
      }elseif ($_POST['action']=='modification') {
           question($_POST);
           header('location:'.WEB_ROUTE.'?controlleurs=admin&view=liste.question');
    }
 }
}


 function question(array $data): void{
    $arrayError=array();
    var_dump($data);
    die();
    extract($data);
    valid_input($question,'question',$arrayError);
    valid_point($point,'point',$arrayError);
    valid_nbr_reponse($nbrres,'nbrres',$arrayError);
    valid_type_reponse($type,'type',$arrayError);

    if (form_valid($arrayError)){
        if (isset($data['id'])) {
           if (est_admin()) {
            $arrayReponse=array();
            for ($i=1; $i <= $data['nbrres'] ; $i++) { 
            array_push($arrayReponse,$data['reponse'.$i]);
            }
            $data['reponse']=$arrayReponse;

            // for ($i=1; $i <= $data['nbrres'] ; $i++) { 
            //    unset($data['reponse'.$i]);
            //     }
            modif_question($data);
            header('location:'.WEB_ROUTE.'?controlleurs=admin&view=liste.question');
           }
        }
        if (empty($data['id'])) {
            $arrayReponse=array();
           for ($i=1; $i <= $data['nbrres'] ; $i++) { 
            array_push($arrayReponse,$data['reponse'.$i]);
           }
           $data['reponse']=$arrayReponse;

        //    for ($i=1; $i <= $data['nbrres'] ; $i++) { 
        //     unset($data['reponse'.$i]);
        //      }
            add_question($data);
         header('location:'.WEB_ROUTE.'?controlleurs=admin&view=liste.question');
        exit();
        }
         
        
    }else {
        $_SESSION['arrayError']=$arrayError;
        header('location:'.WEB_ROUTE.'?controlleurs=admin&view=creer.question');
    }
}


?>