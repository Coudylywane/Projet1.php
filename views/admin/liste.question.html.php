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
        <div class="container border border-light rounded cdd">
        <p class="text-center logan">NOMBRE DE QUESTIONS PAR JOUEUR</p> 
        <button href="#" class="cinq" role=" button" aria-pressed="true">5</button>
        <button href="#"  role=" button"  class="bg-danger" aria-pressed="true">OK</button>
    <table class="table">
    <?php 
       
       foreach ($data as $key => $question):?>
                <tr>
                 <td><?= $question['question']?><br>
                
                <?php if ($question['type']=='radio'): ?>
                    <?php foreach($question['reponse'] as $key => $reponse) :?>
                        <input type="radio" name="coudy"  disabled <?php echo isset($question['bonnereponse']) && $question['bonnereponse']=='reponse'.$key? 'checked': '';?>>  <?= $reponse ?><br>
                <?php endforeach ?>
              
        <?php endif ?>
                <?php if ($question['type']=='checkbox'): ?>
                
                <?php ; foreach($question['reponse'] as $key=> $reponse) :?>
                    <input type="checkbox" name=""  disabled <?php echo isset($question['bonnereponses'.$key]) ? 'checked': '';?>>  <?= $reponse ?><br>
                <?php endforeach ?>
        <?php endif ?>

        <?php if ($question['type']=='text'): ?>
                <input type="text" class="mt-3" name="" disabled value="<?= $question['reponse'][0] ?>">   <?= $question['reponse1'] ?></td><br>
        <?php endif ?>
        <td> 
        <a name="" id="" class="btn btn-danger" href="<?= WEB_ROUTE.'?controlleurs=admin&view=modification&id='.$question['id']?>" role="button">Modifier</a>
        <a name="" id="" class="btn btn-info" href="<?= WEB_ROUTE.'?controlleurs=admin&view=supprimer&id='.$question['id']?>" role="button">Supprimer</a>
        </td>
        </tr>
       
        <?php endforeach ?>
    </table>
</div>
<?php if(empty($_GET['page']) || ($_GET['page']==1) ): ?>
                <a name="" id="" class="btn btn-danger disabled  mt-2 " href="<?=WEB_ROUTE.'?controlleurs=admin&view=liste.question&page='.$precednt;  ?>" role="button">Precedent</a> 
                <?php else: ?>
                    <a name="" id="" class="btn btn-danger  mt-2  " href="<?=WEB_ROUTE.'?controlleurs=admin&view=liste.question&page='.$precednt;  ?>" role="button">Precedent</a> 
                 <?php endif ?>
                 <?php if($_GET['page'] > $nbrPage-1): ?>
                <a name="" id="" class="btn btn-danger disabled  mt-2 suivant" href="<?=WEB_ROUTE.'?controlleurs=admin&view=liste.question&page='.$suivant; ?>" role="button">Suivant</a>
                <?php else: ?>
                    <a name="" id="" class="btn btn-danger  mt-2 suivant" href="<?=WEB_ROUTE.'?controlleurs=admin&view=liste.question&page='.$suivant; ?>" role="button">Suivant</a>
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
























