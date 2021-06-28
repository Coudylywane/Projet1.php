<?php 
if (isset($_SESSION['arrayError'])) {
   $arrayError=$_SESSION['arrayError'];
   unset($_SESSION['arrayError']);
}
$type=$_SESSION['type'];
$quest=$_SESSION['question'];
$nbrP=$_SESSION['point'];
$nbrR=$_SESSION['nbrres'];

?>


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
   <div class="container border border-light rounded">
        <div>
           <p class="text-center"><?=isset($question['id'])?'MODIFIER VOTRE QUESTION':'PARAMETRER VOTRE QUESTION' ?></p>
       </div>
       <div class="container border border-danger cont">
       <form  class="form"  action="<?=WEB_ROUTE?>" method="POST">
       <input type="hidden" name="controlleurs" value="admin">
        <input type="hidden" name="action" value="<?= isset($question['id'])?'modification':'creer.question';?>"/>
        <input type="hidden" name="id" value="<?=isset($question['id']) ? $question['id']:"" ;?>"/>

    <div class="form-group">
        <div class="d-flex">
        <label for="" class="mt-4">Questions</label>
        <input type="text" class="form-control inputs mt-4" name="question" id="" aria-describedby="helpId" placeholder="" value="<?= isset($quest)? $quest:'';?>">
       </div>
        <small id="helpId" class="form-text text-danger erreur">
          <?php echo isset($arrayError['question']) ? $arrayError['question']: '';?>
        </small>
      </div>
      <div class="form-group ">
        <div class="d-flex">
        <label for="">Nbr de Point</label>
        <input type="number" class="form-control input" name="point" id="" aria-describedby="helpId" placeholder="" value="<?= isset($nbrP)? $nbrP:'';?>">
        </div>
        <small id="helpId" class="form-text text-danger erreur">
              <?php echo isset($arrayError['point']) ? $arrayError['point']: '';?>
        </small>
      </div>
      <div class="form-group d-flex">
        <label for="">Type de Reponse</label>
        <select class="form-control inpute" name="type" id="" >
         <option>Donner le type de la reponse</option>
          <option value="text" value="<?= isset($question['type'])? $question['type'] :'';?>">Text</option>
          <option value="radio" value="<?= isset($question['type'])? $question['type'] :'';?>">Simple</option>
          <option value="checkbox" value="<?= isset($question['type'])? $question['type'] :'';?>">Choix multiple</option>
          <!-- <small id="helpId" class="form-text text-muted">
              <?php //echo isset($arrayError['reponse']) ? $arrayError['reponse']: '';?>
        </small> -->
        </select>
      </div>
    
      <div class="form-group">
        <div class="d-flex">
      <label for="">Nbr de Reponse</label>
        <input type="number" class="form-control inputes" name="nbrres" id="" aria-describedby="helpId" placeholder="" value="<?= isset($nbrR)? $nbrR :'';?>">
         <button type="submit"  name="plus" class="btn btn-danger plus">+</button> 
         </div>
         <small id="helpId" class="form-text text-danger erreur">
              <?php echo isset($arrayError['nbrres']) ? $arrayError['nbrres']: '';?>
        </small> 
        </div>
        
        <?php $inputPlus=$_SESSION['nbrres']; ?>
        <?php for($i=1;$i<=$inputPlus;$i++): ?>
          <div class="form-group d-flex">
          <label for="">Reponse<?=$i?></label>
            <input type="text" class="form-control inpu" name="reponse<?=$i?>" id="" aria-describedby="helpId" placeholder="" value="reponse<?=$i?>">
            <small id="helpId" class="form-text text-danger">
            </small>
            <?php if($type=='radio') :?>
              <input type="radio" class="form-control ml-4"  style="width: 3%;" name="bonnereponse" id="" aria-describedby="helpId" placeholder="" value="<?= isset($question['radio'])? $question['radio'] :'';?>"> 
              <?php if(isset($_POST['name'])):?>

              <?php endif ?>
              <?php  elseif($type=='checkbox'):?>
                <input type="checkbox" class="form-control ml-4" style="width: 3%;" name="reponses<?=$i?>" id="" aria-describedby="helpId" placeholder="" value="<?= isset($question['checkbox'])? $question['checkbox'] :'';?>"> 
            <?php endif ?>
        </div>
          <?php endfor ;
          if (isset($_SESSION['nbrres'])) {
            unset($_SESSION['nbrres']);
          }

          if (isset($_SESSION['type'])) {
            unset($_SESSION['type']);
          }

          if (isset($_SESSION['question'])) {
            unset($_SESSION['question']);
          }

          if (isset($_SESSION['point'])) {
            unset($_SESSION['point']);
          }

          if (isset($_SESSION['nbrres'])) {
            unset($_SESSION['nbrres']);
          }

          ?>
       
       
      <button type="submit" class="btn btn-danger enregistrer"  name="btn_submit"><?=isset($question['id'])?'Modifier':'Enregistrer' ?></button>
      </form>
        </div>
        
   </div>
</div>
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

.images{

     margin-top: -21%;
        width: 25px;
        height: 25px;
      margin-left: 65%;
}

.supprimer{
        margin-left: 50%;
        width: 25px;
        height: 25px;
        margin-top: -6%;
}

.radio{
  width: 25px;
  height: 25px;
  margin-left: 56%;
  margin-top: -9%;
}



.enregistrer{
  margin-top: 3%;
  margin-left: 80%;
  padding-top: 2%;
}

.input{
  margin-left: 10%;
}

.inputs{
  margin-left: 13%;
}

.inpute{
  margin-left: 4%;
}

.inputes{
  margin-left: 6%;
}


.inpu{
  margin-left: 14%;
}

.plus{
  margin-left: 5%;
}

.erreur{
  margin-left: 26%;
}




</style>





















