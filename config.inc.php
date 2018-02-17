<?php
define('ROOT', dirname(__FILE__));
define('DS', dirname(DIRECTORY_SEPARATOR));
define('BASE', str_replace('//', '/', dirname($_SERVER['PHP_SELF']). '/'));
//echo $_SERVER['PHP_SELF'];
define('URL', $_SERVER['SERVER_NAME']);
define('VIEW_PATH', ROOT.DS.'view'.DS);
define('CTR_PATH', ROOT.DS.'controler'.DS);
define('MODEL_PATH', ROOT.DS.'model'.DS);
if(strpos(BASE,"index.php")===false){ 
    $base = BASE.'view/';
    $baseVendor = BASE.'vendor/';
} 
else{
    $base = substr(BASE,0,strpos(BASE,"index.php"))."view/";
    $baseVendor = substr(BASE,0,strpos(BASE,"index.php"))."vendor/";
}
define('VIEW_PATH_BASE', $base);
define('VENDOR_PATH_BASE', $baseVendor);
define('SITEEMAIL','no_reply@MyProjectGestionner.me');

session_start();

// vérifier si l'utilisateur est connecté
function estConnecte() {
    return(isset($_SESSION['idUser']) && !empty($_SESSION['idUser']));
}
