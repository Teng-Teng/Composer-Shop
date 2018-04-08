<?php 

$total = $_POST['total'];

if($_POST['total'])
	$message = "The total price for the purchase is " . $_POST['total'] . "$!";
else
	$message = "Are you sure there is nothing you like in ZARA!";

$response = array(
	"message"=>$message
);
echo json_encode($response);


 ?>