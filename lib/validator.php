<?php 
function est_vide(string $valeur): bool {
    return empty($valeur);
}

function est_entier($valeur): bool {
  if (is_numeric($valeur)) {
        return true;
  }else {
      return false;
  }
    
}

function est_superieur(int $valeur): bool {
    return $valeur > VAL;
}

function verif_taille(string $valeur): bool {
    return strlen($valeur) <= 19;
}


function verif_taille1(string $valeur): bool {
    return strlen($valeur) <= 25;
}

function est_mail($valeur):bool{
    if (filter_var($valeur, FILTER_VALIDATE_EMAIL)) {
        return true;
      } else {
        return false;
       
    
        
      }
}

function form_valid($arrayError):bool{
    if (count($arrayError)==0) {
        return true;
    }
    return false;
}

function validation_login($valeur, string $key,array &$arrayError){
    if (est_vide($valeur)) {
        $arrayError[$key] = "le login est obligatoire";
    }elseif (!est_mail($valeur)) {
        $arrayError[$key] = "le login doit etre un email (exemple123@gmail.com)";
    }
    
}

function validation_password($valeur,string $key,array &$arrayError,$min=6,$max=10){
    if (est_vide($valeur)) {
        $arrayError[$key] = "le password est obligatoire";
    }elseif ((strlen($valeur)<$min)||(strlen($valeur)>$max)) {
        $arrayError[$key] = "le password doit etre entre $min et $max";
    }
   
}

function valid_nom($valeur, string $key,array &$arrayError){
    if (est_vide($valeur)) {
        $arrayError[$key] = "le nom est obligatoire ";
    }
}

function valid_prenom($valeur, string $key,array &$arrayError){
    if (est_vide($valeur)) {
        $arrayError[$key] = "le prenom est obligatoire ";
    }
}

function valid_date($valeur, string $key,array &$arrayError){
    if (est_vide($valeur)) {
        $arrayError[$key] = "la date de naissance est obligatoire ";
    }
}

// function avatar( array $files, string $key, array &$arrayError){
//     if (isset($files['avatar']['name']) && !empty($files['avatar']['name'])) {
//        $tailleMax=2097152;
//        $extensionValide= array('jpg','jpeg','gif','png');
//        if ($_FILES['avatar']['size']<= $tailleMax) {
//             $extensionUpload= strtolower(substr(strrchr($files['avatar']['name'],'.'),1));
//             if (in_array($extensionUpload,$extensionValide)) {
//                 # code...
//             }else {
//                 $arrayError[$key]="Votre photo de profil doit etre au format jpg ,png ,jpeg ,gif";
//             }
//        }else {
//            $arrayError[$key]="Votre photo de profil ne doit pas depasser 2Mo";
//        }
//     }
// }

?>
