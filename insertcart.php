<?php

session_start();
$name=$_POST['name'];
$price=$_POST['price'];
$quantity=$_POST['qty'];

$product= array($name,$price,$quantity);

$_SESSION[$name]=$product;

header('location:viewcart.php');
?>

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

