<?php require_once(ROUTE_DIR.'views/inc/header.html.php');
require_once(ROUTE_DIR.'views/inc/menu1.html.php');
 require_once(ROUTE_DIR.'views/inc/footer.html.php')
 
 
 ?>


<div class="container">
    <div>
      <h1 class="confirm mt-4 text-center">Page de Confirmation</h1>
    </div>
    <div class="column">
        <div class="card">
        <div class="d-flex justify-content-around">
            <h3>Voulais-vous vraiment supprimer cette question</h3>
        </div>
        <div class="mt-3 ml-auto mr-auto">        
            <a name="" id="" class="btn btn1" href="<?= WEB_ROUTE.'?controlleurs=admin&view=confirme&id='.$question['id']?>" role="button">OUI</a>
        <a name="" id="" class="btn btn-info ml-5" href="<?= WEB_ROUTE.'?controlleurs=admin&view=liste.question'?>" role="button">NON</a>
        </div>

        </div>
    </div>
</div>





















<style>
    .confirm{
        color:#fff;
        height: 60px;
        background-color: #c90017;
    }
    .card{
        height: 150px;
        background-color: #ddd;
    }
    .btn1{
        background-color: #c90017;
        color: #fff;
    }
</style>