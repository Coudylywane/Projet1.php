<?php require_once(ROUTE_DIR.'views/inc/header.html.php')?>
<div class="">
    <?php require_once(ROUTE_DIR.'views/inc/menu1.html.php')?>
</div>
<?php require_once(ROUTE_DIR.'views/inc/barre.html.php')?>
<div class="container">
<div class="row">
<div class="col-4">
        <?php require_once(ROUTE_DIR.'views/inc/menu.html.php')?>
</div>
<div class="col-7  ">
   <div class="container border border-light rounded">
       <div>
           <p class="text-center">LISTE DES JOUEURS PAR SCORE</p>
       </div>
       <?php 
          $arrayUser=find_all_users();
          $nbrPage =0;
          $page=1;
          $suivant=2;
          $nbrElement = 5;
         $precednt=0;
        $admin_user=[];
        foreach ($arrayUser as $user) {
            if ($user['role']=='ROLE_ADMIN') {
                $admin_user[]=$user;
            }
           
        }

        if (!isset($_GET['page'])) {
          $page=1;
           $_SESSION['user_admin'] =  $admin_user;
           $nbrPage = nombre_page_total( $_SESSION['user_admin'], 5);
           $list_user= paginer( $_SESSION['user_admin'],$page, 5);
         
       }
    
          if (isset($_GET['page'])) {
             
           $page=$_GET['page'];
           $suivant=$page+1;
           $precednt=$page-1;
               if (isset($_SESSION['user_admin'])) {
                   $_SESSION['user_admin'] =  $admin_user;
                   $nbrPage = nombre_page_total( $_SESSION['user_admin'], 5);
                   $list_user= paginer( $_SESSION['user_admin'],$page, 5);
                 
               }

           }
       ?>
       <div class="container border border-danger cont">
            <table class="table">
                <thead>
                    <tr>
                        <th>Prenom</th>
                        <th>Nom</th>
                        <th>Score</th>
                    </tr>
                </thead>
                <tbody>
            <?php foreach ($arrayUser as $user): ?>
            
                    <tr>
                        <?php if($user['role']=="ROLE_JOUEUR"):?>
                        <td><?= $user['prenom'] ?></td>
                        <td><?= $user['nom'] ?></td>
                        <td>1200pts</td>
                        <?php  endif?>
                    </tr>
                    <?php endforeach ?>

                </tbody>
            </table>
       </div>
       <?php if(empty($_GET['page']) || ($_GET['page']==1) ): ?>
                <a name="" id="" class="btn btn-danger disabled  mt-2 " href="<?=WEB_ROUTE.'?controlleurs=admin&view=liste.joueur&page='.$precednt;  ?>" role="button">Precedent</a> 
                <?php else: ?>
                    <a name="" id="" class="btn btn-danger  mt-2  " href="<?=WEB_ROUTE.'?controlleurs=admin&view=liste.joueur&page='.$precednt;  ?>" role="button">Precedent</a> 
                 <?php endif ?>
                 <?php if($_GET['page'] > $nbrPage-1): ?>
                <a name="" id="" class="btn btn-danger disabled  mt-2 suivant" href="<?=WEB_ROUTE.'?controlleurs=admin&view=liste.joueur&page='.$suivant; ?>" role="button">Suivant</a>
                <?php else: ?>
                    <a name="" id="" class="btn btn-danger  mt-2 suivant" href="<?=WEB_ROUTE.'?controlleurs=admin&view=liste.joueur&page='.$suivant; ?>" role="button">Suivant</a>
                 <?php endif ?>
   
</div>
</div>
</div>
</div>


<style>
    
</style>






















<?php require_once(ROUTE_DIR.'views/inc/footer.html.php')?>
<style>
.bg-primary{
height: 100px;
}

.bg-success{
    height: 50px;
}

.bg-warning{
    height: 506px;
    width: 848px;
}

.cont{
    margin-left: -1%;
}


</style>








