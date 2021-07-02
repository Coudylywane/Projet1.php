<?php require_once(ROUTE_DIR.'views/inc/header.html.php')?>
    


<nav class="navbar navbar-expand-sm navbar-light ">
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
   
    <div class="collapse navbar-collapse" id="collapsibleNavId">
      
        <ul class="nav flex-column mr-auto mt-2 mt-lg-0">
        <div class="bg-danger profile">
            WEYUEF
        </div>
        <?php if (est_admin()):?>

            <li class="nav-item active">
                <a class="nav-link" href="<?= WEB_ROUTE.'?controlleurs=admin&view=liste.question'?>">liste Questions</a>
                <img  class="image "src="<?=WEB_ROUTE."img/liste-active.png"?>"alt="avatar" class="avatar">
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= WEB_ROUTE.'?controlleurs=admin&view=creer.question'?>">Creer Questions</a>
                <img  class="image"src="<?=WEB_ROUTE."img/plus.png"?>"alt="avatar" class="avatar">
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= WEB_ROUTE.'?controlleurs=admin&view=liste.joueur'?>">Listes Joueurs</a>
                <img  class="image"src="<?=WEB_ROUTE."img/liste.png"?>"alt="avatar" class="avatar">
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= WEB_ROUTE.'?controlleurs=security&view=inscription'?>">Creer Admin</a>
                <img  class="image"src="<?=WEB_ROUTE."img/plus.png"?>"alt="icone" class="avatar">

            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= WEB_ROUTE.'?controlleurs=admin&view=liste.admin'?>">Listes Admins</a>
                <img  class="image"src="<?=WEB_ROUTE."img/liste.png"?>"alt="avatar" class="avatar">
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= WEB_ROUTE.'?controlleurs=admin&view=tableau.bord'?>">Tableau de bord</a>
                <img  class="image"src="<?=WEB_ROUTE."img/liste.png"?>"alt="avatar" class="avatar">

            </li>
            <?php endif ?>
            <?php if (est_joueur()):?>
            <li class="nav-item">
                <a class="nav-link" href="<?= WEB_ROUTE.'?controlleurs=joueur&view=jeu'?>">Jeu </a>
            </li>
            <?php endif ?>
        </ul>
        
       
    </div>
</nav>
<?php require_once(ROUTE_DIR.'views/inc/footer.html.php')?>


<style>
    .profile{
        height: 130px;
        width: 310px;
    }
    .image{
     float: left;
     margin-top: -9%;
        width: 25px;
        height: 25px;
        margin-left: 90%;
        
    }

nav{
    width: 250px;
    margin-top: 3%;
}
.nav-item a{
    color: black;
}
.nav-item a:hover{
    background-color: #ddd;
}

    
.suivant {
    margin-left: 73%;
    margin-top: -5px;

}
</style>