<?php 


function add_question(array $question){
  $json=file_get_contents(FILE_USER);
  $question['id']=rand();
  $arrayQuestion= json_decode($json,true);
  $arrayQuestion[]=$question;
  //convertir le tableau en json
  $json = json_encode($arrayQuestion);
  file_put_contents(FILE_USER , $json);
}
 

function modif_question(array $newQuest){
    
  // 1 lire contenu du fichier 
  $json=file_get_contents(ROUTE_DIR.'data/liste.question.json');
  
  // 2 convertir le json en tableau
  $arrayQuestion= json_decode($json,true);
  foreach($arrayQuestion as $key => $oldQuest){
     if ($oldQuest['id']==$newQuest['id']) {
       $arrayQuestion[$key]=$newQuest;
   
     }

  }
  $json = json_encode($arrayQuestion);
  file_put_contents(FILE_USER , $json);

}    

function supprimer_question(string $id):bool{
   
  // 1 lire contenu du fichier 
  $json=file_get_contents(ROUTE_DIR.'data/liste.question.json');
  // 2 convertir le json en tableau
  $arrayQuestion= json_decode($json,true);
   $tab=[];
   $ok=false;
   foreach ($arrayQuestion as $key => $user) {
          if ($user['id']==$id) {
              $ok=true;
          }else {
            $tab[]=$user;
          }
   }
   $json = json_encode($arrayQuestion);
   file_put_contents(FILE_USER , $json); 
   return $ok;

}



?>
