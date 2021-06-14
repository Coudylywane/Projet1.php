<?php 

 if (!est_joueur()) header("localhost:".WEB_ROUTE.'?controlleurs=security&view=connexion');

 if ($_SERVER['REQUEST_METHOD']=='GET') {
     if (isset($_GET['view'])) {
        if ($_GET['view']=='jeu') {
            require(ROUTE_DIR.'views/joueur/jeu.html.php');
           }
     }else {
         require_once(ROUTE_DIR.'views/security/connexion.html.php');
     }
 }

 ?>