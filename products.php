<?php

$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='';
$DATABASE='nilamee';
$conn=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);
if(!$conn)
{
    echo mysqli_error($conn) or die("connection failed.");
}

require_once 'controller/productsController.php';

$controller = new productsController();

$controller->handleRequest();

?>
