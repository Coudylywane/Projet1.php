<?php 

function find_login_password(string $login, string $password){
    // 1 lire contenu du fichier 
    $json=file_get_contents(ROUTE_DIR.'data/user.data.json');
    // 2 convertir le json en tableau
    $arrayUser= json_decode($json,true);
    foreach($arrayUser as $user){
        if ($user['login']==$login && $user['password']==$password) {
          return $user;
        }
    }
    return [];
}

function find_all_users(){
  $json =file_get_contents(FILE_USERS);
  // 2 convertir le json en tableau
  return json_decode($json,true);

}


 function add_user(array $user){
  $json=file_get_contents(FILE_USERS);
  $user['id']=rand();
  $arrayUser= json_decode($json,true);
  $arrayUser[]=$user;
  //convertir le tableau en json
  $json = json_encode($arrayUser);
  file_put_contents(FILE_USERS , $json);
}

function login_exist(string $login):array{
  $arrayUser=find_all_users();
  foreach($arrayUser as $user){
      if ($user['login']==$login) {
        return $user;
      }
  }
  return [];
}

function recuperer_id(string $id){
  // 1 lire contenu du fichier 
  $json=file_get_contents(ROUTE_DIR.'data/liste.question.json');
  // 2 convertir le json en tableau
  $arrayQuestion= json_decode($json,true);
  foreach($arrayQuestion as $question){
      if ($question['id']==$id ) {
        return $question;
      }
  }
  return [];
}






function modif_admin(array $newUser){
  // 1 lire contenu du fichier 
  $json=file_get_contents(ROUTE_DIR.'data/user.data.json');
    // 2 convertir le json en tableau
  $arrayUser= json_decode($json,true);
  foreach($arrayUser as $key => $oldUser){
     if ($oldUser['id']==$newUser['id']) {
       $arrayUser[$key]=$newUser;
   }
  }
  
  $json = json_encode($arrayUser);
  file_put_contents(FILE_USERS , $json);
  
  }
  
  
  function recuperer_id_admin(string $id){
      // 1 lire contenu du fichier 
      $json=file_get_contents(ROUTE_DIR.'data/user.data.json');
      // 2 convertir le json en tableau
      $arrayAdmin= json_decode($json,true);
      foreach($arrayAdmin as $admin){
          if ($admin['id']==$id ) {
            return $admin;
          }
      }
      return [];
   }

   function find_all_admins(){
    $arrayUser=find_all_users();
    foreach ($arrayUser as $user) {
      if ($user['role']=='ROLE_ADMIN') {
          $admin_user[]=$user;
      }
     
  }
  return  $admin_user;
   }

   function find_all_joueurs(){
    $arrayUser=find_all_users();
    foreach ($arrayUser as $user) {
      if ($user['role']=='ROLE_JOUEUR') {
          $admin_user[]=$user;
      }
     
      }
      return  $admin_user;
   }

  
  

?>