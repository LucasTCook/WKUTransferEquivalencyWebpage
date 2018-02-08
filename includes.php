<?php 

define("INC_PATH", '/Applications/XAMPP/xamppfiles/htdocs/Transfer/');

include_once INC_PATH .'/model/base.php';
foreach(glob(INC_PATH . "/model/*.php") as $file){
    include_once($file);
}
include_once INC_PATH .'databaseFunctions.php';

?>
