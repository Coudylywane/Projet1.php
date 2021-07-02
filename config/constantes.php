<?php
 define('WEB_ROUTE','http://localhost:8000/');
//define('WEB_ROUTE','http://coudyly.alwaysdata.net/');
define('ROUTE_DIR',str_replace('public','',$_SERVER['DOCUMENT_ROOT']));
define('FILE_USERS',ROUTE_DIR.'data/user.data.json');
define('FILE_QUESTIONS',ROUTE_DIR.'data/liste.question.json');
define('UPLOAD_IMAGE',ROUTE_DIR.'public/img/uploods/');
define('NOMBRE_PAR_PAGE',5);

?>