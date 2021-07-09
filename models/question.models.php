<?php 


function add_question(array $question){
  $question['id']=rand();
  $arrayQuestion= find_all_questions();
  $arrayQuestion[]=$question;
  //convertir le tableau en json
  $json = json_encode($arrayQuestion);
  file_put_contents(FILE_QUESTIONS , $json);
}
 

function modif_question(array $newQuest){
    
  // 1 lire contenu du fichier 
  $json=file_get_contents(FILE_QUESTIONS);
  
  // 2 convertir le json en tableau
  $arrayQuestion= json_decode($json,true);
  foreach($arrayQuestion as $key => $oldQuest){
     if ($oldQuest['id']==$newQuest['id']) {
       $arrayQuestion[$key]=$newQuest;
   
     }

  }
  $json = json_encode($arrayQuestion);
  file_put_contents(FILE_QUESTIONS , $json);

}    

function supprimer_question(string $id):bool{
   
  // 1 lire contenu du fichier 
  $json =file_get_contents(FILE_QUESTIONS);
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
   $json = json_encode($tab);
   file_put_contents(FILE_QUESTIONS, $json); 
   return $ok;

}

function find_all_questions(){
  $json =file_get_contents(FILE_QUESTIONS);
  // 2 convertir le json en tableau
  return json_decode($json,true);

}


function recuperer_id(string $id){
  // 1 lire contenu du fichier 
  $json =file_get_contents(FILE_QUESTIONS);
  // 2 convertir le json en tableau
  $arrayQuestion= json_decode($json,true);
  foreach($arrayQuestion as $question){
      if ($question['id']==$id ) {
        return $question;
      }
  }
  return [];
}




?>
