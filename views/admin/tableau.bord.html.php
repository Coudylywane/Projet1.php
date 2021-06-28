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
       
        <div class="pourc">
            <label for="file">Pourcentage du nombre de jour:</label>
            <progress class="file" max="100" value="50"></progress>
            <label for="file">Pourcentage du nombre d'admin:</label>
            <progress class="file" max="100" value="10"></progress>
            <label for="file">Pourcentage du nombre de question:</label>
            <progress class="file"  max="100" value="70"></progress>
        </div>
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




















