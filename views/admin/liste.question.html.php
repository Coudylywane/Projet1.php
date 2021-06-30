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
<div class="container border border-light rounded cdd">
        <button href="#" class="cinq" role=" button" aria-pressed="true">5</button>
        <button href="#"  role=" button"  class="bg-danger" aria-pressed="true">OK</button>
        <p class="text-center logan">NOMBRE DE QUESTIONS PAR JOUEUR</p> 
    <table class="table">
    <?php 
       $json=file_get_contents(ROUTE_DIR.'data/liste.question.json');
       $arrayUser1= json_decode($json,true);
       
       foreach ($arrayUser1 as $key => $question):?>
                <tr>
                 <td><?= $question['question']?><br>
                
                <?php if ($question['type']=='radio'): ?>
                    <?php foreach($question['reponse'] as $reponse) :?>
                        <input type="radio" name="coudy"><?= $reponse ?><br>
                <?php endforeach ?>
              
        <?php endif ?>
                <?php if ($question['type']=='checkbox'): ?>
                
                <?php foreach($question['reponse'] as $reponse) :?>
                    <input type="checkbox" name=""><?= $reponse ?><br>
                <?php endforeach ?>
        <?php endif ?>

        <?php if ($question['type']=='text'): ?>
                <input type="text" name=""><?= $question['reponse1'] ?></td><br>
        <?php endif ?>
        <td> 
        <a name="" id="" class="btn btn-danger" href="<?= WEB_ROUTE.'?controlleurs=admin&view=modification&id='.$question['id']?>" role="button">Modifier</a>
        <a name="" id="" class="btn btn-info" href="<?= WEB_ROUTE.'?controlleurs=admin&view=supprimer&id='.$supprimer['id']?>"" role="button">Supprimer</a>
        </td>
        </tr>
       
        <?php endforeach ?>
    </table>
    <div class="form-group">
        <button type="submit" name="btn_submit" class="btn bg-danger btn-md text-white mt-3 btns" value="btn_connexion">Suivant</button>
    </div>
</div>
</div>



        
       




















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

.cinq{
    width: 10%;
    margin-left: 80%;
    margin-top: 5%;
}

.logan{
    margin-top: -5%;
}

.html{
    margin-top: -20%;
}

.btns{
    margin-left: 82%;
}


.bord{
    padding-left: 20%;
    margin-left: -1%;
}

.images{

margin-top: -19%;
   width: 15px;
   height: 15px;
 margin-left: 65%;
}

.images1{

margin-top: -19%;
   width: 15px;
   height: 15px;
 margin-left: 35%;
}

.images2{

margin-top: -19%;
   width: 15px;
   height: 15px;
 margin-left: 98%;
}



</style>








