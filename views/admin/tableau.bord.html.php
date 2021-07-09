<?php require_once(ROUTE_DIR.'views/inc/header.html.php');
require_once(ROUTE_DIR.'views/inc/menu1.html.php');
require_once(ROUTE_DIR.'views/inc/barre.html.php');
?>
<div class="container">
    <div class="row p-0">
        <div class="col-md-4">
            <?php require_once(ROUTE_DIR.'views/inc/menu.html.php')?>
        </div>
        <div class="col-md-8 ">
            <div>
                <p class="text-center">Tableau de Bord</p>
            </div>
                <div class="card bg-light cardss" >
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

<div class="progress mt-4 mr-5 ml-3">
            <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"  aria-valuenow="<?=$cptj ?>" aria-valuemin="0" aria-valuemax="100"  value="<?=$cptj ?>">
            <?=$cptj ?>
            </div>
        </div>
        <label for="file" >Pourcentage du nombre de joueur</label>
        <div class="progress mt-4 mr-5 ml-3">
            <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"  aria-valuenow="<?=$cpta?>" aria-valuemin="0" aria-valuemax="100"  value="<?=$cpta?>">
            <?=$cpta?>
            </div>
        </div>
        <label for="file">Pourcentage du nombre d'admin</label>
        <div class="progress mt-4 mr-5 ml-3">
            <div class="progress-bar progress-bar-striped  bg-danger" role="progressbar"  aria-valuenow="<?=$cptq?>" aria-valuemin="0" aria-valuemax="100"   value="<?=$cptq?>">
            <?=$cptq?>
            </div>
        </div>
        <label for="file">Pourcentage du nombre de question</label>
                </div>
            
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
























