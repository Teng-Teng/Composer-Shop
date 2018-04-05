<?php 

require_once './vendor/autoload.php';
require_once('database.php');

$loader = new Twig_Loader_Filesystem('./templates');
$twig = new Twig_Environment($loader);


$db = new DBConnection();
$result = $db->getAllItemsReturnObj();


// echo $twig->render('index1.html.twig', array('name' => 'Fabien', 'name2' => '123'));

echo $twig->render('indexTwig.html.twig', array('results' => $result));




 ?>