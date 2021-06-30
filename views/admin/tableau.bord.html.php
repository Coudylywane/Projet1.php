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
<div class="col-7  ml-4">
    <div class="container border border-light rounded cdd">
        <div>
           <p class="text-center">Tableau de Bord</p>
        </div>
        <div class="container border border-danger rounded  bord">
       
       <?php
        $arrayUser=find_all_users();
        $cpta=$cptj=0;
        foreach ($arrayUser as $key => $value) {
           if ($value['role']=='ROLE_ADMIN') {
             $cpta++;
           }elseif ($value['role']=='ROLE_JOUEUR') {
            $cptj++;
           }
       }
       $json=file_get_contents(ROUTE_DIR.'data/liste.question.json');
       $arrayUser1= json_decode($json,true);
        $cptq=0;
       foreach ($arrayUser1 as $key => $val) {
           $cptq++;
       }


        ?>
        
        <div class="progress mt-4 mr-5">
            <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"  aria-valuenow="<?=$cptj ?>" aria-valuemin="0" aria-valuemax="100"  value="<?=$cptj ?>">
            <?=$cptj ?>
            </div>
        </div>
        <label for="file" >Pourcentage du nombre de joueur</label>
        <div class="progress mt-4 mr-5">
            <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"  aria-valuenow="<?=$cpta?>" aria-valuemin="0" aria-valuemax="100"  value="<?=$cpta?>">
            <?=$cpta?>
            </div>
        </div>
        <label for="file">Pourcentage du nombre d'admin</label>
        <div class="progress mt-4 mr-5">
            <div class="progress-bar progress-bar-striped  bg-danger" role="progressbar"  aria-valuenow="<?=$cptq?>" aria-valuemin="0" aria-valuemax="100"   value="<?=$cptq?>">
            <?=$cptq?>
            </div>
        </div>
        <label for="file">Pourcentage du nombre de question</label>
        <!-- <div class="pourc">
            <label for="file">Pourcentage du nombre de joueur:</label>
            <progress class="file" max="100" value="<?=$cptj ?>"></progress>
            <label for="file">Pourcentage du nombre d'admin:</label>
            <progress class="file" max="100" value="<?=$cpta?>"></progress>
            <label for="file">Pourcentage du nombre de question:</label>
            <progress class="file"  max="100" value="<?=$cptq?>"></progress>
        </div> -->
        </div>
    </div>
   
</div>
</div>
</div>
</div>























<?php require_once(ROUTE_DIR.'views/inc/footer.html.php')?>
<style>
.cdd{
    height: 400px;
}

.bord{
    height: 250px;
    padding-left: 20%;
    margin-left: -1%;
}

.file{
 width: 50%;
}

.pourc{
    height: 50%;
}
</style>




















