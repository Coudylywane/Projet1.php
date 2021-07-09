<?php require_once(ROUTE_DIR.'views/inc/header.html.php');
require_once(ROUTE_DIR.'views/inc/menu1.html.php');
?>
<div class="container ml-2">
<div>
      <h1 class="confirm mt-4 text-center">Page de Confirmation</h1>
    </div>
    <div class="column">
        <div class="card">
        <div class="d-flex justify-content-around">
            <h3>Voulais-vous vraiment supprimer cette question</h3>
        </div>
        <div class="mt-3 ml-auto mr-auto">        
            
        <a name="" id="" class="btn btn-info" href="<?= WEB_ROUTE.'?controlleurs=admin&view=liste.question'?>" role="button">NON</a>
        <a name="" id="" class="btn btn1  ml-5" href="<?= WEB_ROUTE.'?controlleurs=admin&view=confirme&id='.$question['id']?>" role="button">OUI</a>
        </div>

        </div>
    </div>
</div>

<?php require_once(ROUTE_DIR.'views/inc/footer.html.php')?>

<style>
    .container {
    margin-top: 1%;
    margin-left: 0%;
}

.confirm{
        color:#fff;
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
























