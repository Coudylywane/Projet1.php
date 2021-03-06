<?php 
 if (!est_admin()) header("location:".WEB_ROUTE.'?controlleurs=security&view=connexion');

 if ($_SERVER['REQUEST_METHOD']=='GET') {
     if (isset($_GET['view'])) {
        if ($_GET['view']=='liste.question') {
          extract(pagination(find_all_questions(),$_GET['page']));
            require(ROUTE_DIR.'views/admin/liste.question.html.php');
           }elseif ($_GET['view']=='creer.question') {
            require(ROUTE_DIR.'views/admin/creer.question.html.php');
           }elseif ($_GET['view']=='liste.admin') {
           extract(pagination(find_all_admins(),$_GET['page']));
            require(ROUTE_DIR.'views/admin/liste.admin.html.php');
           }elseif ($_GET['view']=='liste.joueur') {
            extract(pagination(find_all_joueurs(),$_GET['page']));
            require(ROUTE_DIR.'views/admin/liste.joueur.html.php');
           }elseif ($_GET['view']=='tableau.bord') {
            require(ROUTE_DIR.'views/admin/tableau.bord.html.php');
           }elseif($_GET['view']=='modification') {
            $_SESSION['id']=$_GET['id'];
              $id=$_SESSION['id'];
               $question=recuperer_id($id);
               $_SESSION['nbrres']=$question['nbrres'];

             
               require_once(ROUTE_DIR.'views/admin/creer.question.html.php');
           }elseif ($_GET['view']=='supprimer') {
            $_SESSION['id']=$_GET['id'];
            $id=$_SESSION['id'];
              $question=recuperer_id($id);
            require_once(ROUTE_DIR.'views/admin/confirmation.html.php');
           }elseif ($_GET['view']=='confirme') {
              $_SESSION['id']=$_GET['id'];
              $id = $_SESSION['id'];
              $question=recuperer_id($id);
               $ok = supprimer_question($id);
               header('location:'.WEB_ROUTE.'?controlleurs=admin&view=liste.question');
               exit();
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
              exit();
            }
               
      }elseif ($_POST['action']=='modification') {
       
            if (isset($_POST['btn_submit'])) {
                  question($_POST);
                  header('location:'.WEB_ROUTE.'?controlleurs=admin&view=liste.question'); 
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
              $nbrR = $_POST['nbrres'];
              $_SESSION['nbrres'] = $nbrR;
              $value=$_SESSION['id'];

              header('location:'.WEB_ROUTE.'?controlleurs=admin&view=modification&id='.$value);
              exit();
            }
          /*  question($_POST);
           header('location:'.WEB_ROUTE.'?controlleurs=admin&view=liste.question'); */
    
}
 }
}


 function question(array $data): void{
    $arrayError=array();
    extract($data);
    valid_input($question,'question',$arrayError);
    valid_point($point,'point',$arrayError);
    valid_nbr_reponse($nbrres,'nbrres',$arrayError);
    valid_type_reponse($type,'type',$arrayError);
   

    if (form_valid($arrayError)){
        if (isset($data['id'])) {
           if (est_admin()) {
            modif_question($data);
            header('location:'.WEB_ROUTE.'?controlleurs=admin&view=liste.question');
           }
        }
        if (empty($data['id'])) {
            add_question($data);
         header('location:'.WEB_ROUTE.'?controlleurs=admin&view=liste.question');
        exit();
        }
         
        
    }else {
        $_SESSION['arrayError']=$arrayError;
        header('location:'.WEB_ROUTE.'?controlleurs=admin&view=creer.question');
    }
}

function pagination($data,$position){
  
  $nbrPage =0;
  $page=1;
  $suivant=1;
  $nbrElement = NOMBRE_PAR_PAGE;
 $precednt=0;



if (!isset($position)) {
  $page=1;
   $_SESSION['user_admin'] =  $data;
   $nbrPage = nombre_page_total( $_SESSION['user_admin'], $nbrElement);
   $list_user= paginer( $_SESSION['user_admin'],$page,  $nbrElement);
 
}

  if (isset($position)) {
      $page=$position;
   $suivant=$page+1;
   $precednt=$page-1;
       if (isset($_SESSION['user_admin'])) {
           $_SESSION['user_admin'] =  $data;
           $nbrPage = nombre_page_total( $_SESSION['user_admin'],  $nbrElement);
           $list_user= paginer( $_SESSION['user_admin'],$page,  $nbrElement);
          }

   }
   return[

     'precednt'=> $precednt,
     'suivant'=>$suivant,
     'nbrPage'=>$nbrPage,
     'data'=>$list_user,
  
  ];

}


?>