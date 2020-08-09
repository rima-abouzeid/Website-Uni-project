<?php

require"connection.php";


if($conn){
	
$username=$_POST["username"];
$password=$_POST["password"];
	$sqlCheckUsername = "SELECT*FROM`users_table`WHERE`username`LIKE'$username'";
$usernameQuery=mysqli_query($conn,$sqlCheckUsername);
if(mysqli_num_rows($usernameQuery)>0){
$sqlLogin = "SELECT*FROM`users_table`WHERE`username`LIKE'$username' AND `password`LIKE '$password'";
$loginQuery= mysqli_query($conn,$sqlLogin);
if(mysqli_num_rows($loginQuery)>0){
echo"Login Success";
session_start();
$_SESSION['isloggedin']=1;
$_SESSION['xyz']=$username;
header('location:home_page.php');

}else{
echo"Wrong Password";  
header('location:login_page.php');
session_destroy();


}
}else{
echo"This Username is not registered,Please click on register";
header('location:login_page.php');
session_destroy();
}
}

else{
echo"Connection Error";
header('location:login_page.php');
session_destroy();

}

?>