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
                        <td>Score</td>
                        <?php  endif?>
                    </tr>
                    <?php endforeach ?>

                </tbody>
            </table>
       </div>
   
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








