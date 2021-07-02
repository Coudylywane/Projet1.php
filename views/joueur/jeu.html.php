<?php require_once(ROUTE_DIR.'views/inc/header.html.php')?>
<?php require_once(ROUTE_DIR.'views/inc/menu1.html.php')?>
<?php require_once(ROUTE_DIR.'views/inc/barrejeu.html.php')?>
<div class="container ">
    <div class="row p-0">
        <div class="col-md-7">
            <div class="card mt-2" style="height: 350px;" >
               <div class="card secondary">
                   <u> <h5 class="text-center deco">Question 1/5:</h5></u>
                    <h6 class="text-center">Les langages web</h6>
               </div>
               <div class="card secondary troispo">
                   
                    <p class=" text-center">3 pts</p>
               </div>
               <div>
                   <div class="form-group d-flex">
                     <input type="checkbox" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                     <p class="mt-2 java">HTML</p>
                    </div>
                    <div class="form-group d-flex">
                     <input type="checkbox" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                     <p class="mt-2 java">R</p>
                    </div>
                    <div class="form-group d-flex">
                     <input type="checkbox" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                     <p class="mt-2 java">JAVA</p>
                    </div>
               </div>
               <div>
               <a name="" id="" class="btn btn-secondary disabled ml-3 " href="" role="button">Precedent</a> 
               <a name="" id="" class="btn btn-danger suiv" href="" role="button">Suivant</a> 
               </div>
            </div>     
        </div>  
        <div class="col-md-5">
            <div class="card mt-2">
               <div class="d-flex">
                    <p class="ml-2">Top scores</p>
                    <p class="text-danger mei">Meilleur scores</p>
               </div>
               <div class="d-flex">
                   <p class="ml-2">Ibou DIATTA</p>
                   <p class="mei">1022pts</p>
               </div>
               <div class="d-flex">
                   <p class="ml-2">Aly NIANG</p>
                   <p class="meil">963pts</p>
               </div>
               <div class="d-flex">
                   <p class="ml-2">Saliou MBAYE</p>
                   <p class="mei">877pts</p>
               </div>
               <div class="d-flex">
                   <p class="ml-2">Khady DIOUF</p>
                   <p class="meill">875pts</p>
               </div>
               <div class="d-flex">
                   <p class="ml-2">Moussa SOW</p>
                   <p class="meill">870pts</p>
               </div>
            </div>
        </div>                                                                                                                 
    </div>

</div>
















<?php require_once(ROUTE_DIR.'views/inc/footer.html.php')?>


<style>

.troispo{
    width: 15%;
    left: 85%;
    top: 15px;
}

.java{
    margin-left: -18%;
    font-size: 110%;
}

.suiv{
    float: right;
    margin-right: 10px;
}
.secondary{
    background-color: #dddd;
}

.mei{
    margin-left: 55%;
}

.meil{
    margin-left: 60%;
}

.meill{
    margin-left: 56%;
}

</style>

