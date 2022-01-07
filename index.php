<?php 

require_once('models/Autoloader.php');

if(!empty($_GET['action'])){
    switch($_GET['action']){
        case('listVoyage'):
            require_once('controllers/listVoyage.php');
            break;
        default:
            require_once('views/accueil.php');
            break;
    }
}
else{
    require_once('views/accueil.php');
}

?>