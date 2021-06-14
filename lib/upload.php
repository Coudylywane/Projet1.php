<?php 
function upload_image(array $files):bool{
  
$uploadfile = UPLOAD_IMAGE . basename($files['avatar']['name']);

if (move_uploaded_file($files['avatar']['tmp_name'], $uploadfile)) {
   return true;
} else {
    return false;
}


}
?>