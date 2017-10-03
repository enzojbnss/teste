<?php
$url = explode ( "/", $_GET ['url'] );
include_once 'src/controller/' . $url[0] . 'Controller.php';
$className = $url[0] . 'Controller';
$actionName = $url[1];
if($actionName == null)$actionName = "index";
$controller = new $className();
echo "<br/>";
$controller->$actionName();

?>

