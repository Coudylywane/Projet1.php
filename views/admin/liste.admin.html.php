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
                <p class="text-center">LISTE DES JOUEURS PAR SCORE</p>
            </div>
            
            <table class="table">
                <thead>
                    <tr>
                        <th>Prenom</th>
                        <th>Nom</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
            <?php foreach ($data as $user): ?>
            
                    <tr>
                       
                        <td><?= $user['prenom'] ?></td>
                        <td><?= $user['nom'] ?></td>
                       
                        <td>
                            <a name="" id="" class="btn btn-danger" href="<?= WEB_ROUTE.'?controlleurs=security&view=edit&id='.$user['id']?>" role="button">Modifier</a>
                        </td>
                   
                    </tr>

                    
                    <?php endforeach ?>

                </tbody>
            </table>
        
            
                    <?php if(empty($_GET['page']) || ($_GET['page']==1) ): ?>
                    <a name="" id="" class="btn btn-danger disabled  mt-2 " href="<?=WEB_ROUTE.'?controlleurs=admin&view=liste.admin&page='.$precednt;  ?>" role="button">Precedent</a> 
                    <?php else: ?>
                        <a name="" id="" class="btn btn-danger  mt-2  " href="<?=WEB_ROUTE.'?controlleurs=admin&view=liste.admin&page='.$precednt;  ?>" role="button">Precedent</a> 
                    <?php endif ?>
                    <?php if($_GET['page'] > $nbrPage-1): ?>
                    <a name="" id="" class="btn btn-danger disabled  mt-2 suivant" href="<?=WEB_ROUTE.'?controlleurs=admin&view=liste.admin&page='.$suivant; ?>" role="button">Suivant</a>
                    <?php else: ?>
                        <a name="" id="" class="btn btn-danger  mt-2 suivant" href="<?=WEB_ROUTE.'?controlleurs=admin&view=liste.admin&page='.$suivant; ?>" role="button">Suivant</a>
                    <?php endif ?>
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
























