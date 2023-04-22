<?php

//print_r($_POST);
if(isset($_POST['emails']) and ($_POST['passs']))
{
	//echo 'please pass username and password';
	//echo '<br>';
}
include "db.php";

$name=$_POST['emails'];
$pass=$_POST['passs'];

$sql="insert into user_login set
e_mail='".$name."',
password='".$pass."'";
$result=mysqli_query($con,$sql);
$sql="select * from register where email='".$_POST['emails']."' and pass_word='".$_POST['passs']."'";
$result=mysqli_query($con,$sql);
$num=mysqli_num_rows($result);

if($num == 1)
{
	
	while($row=mysqli_fetch_assoc($result)){
      $user_id=$row['id'];
	  session_start();
	  $_SESSION['emails']=$_POST['emails'];
	  $_SESSION['id']=$user_id;
	   
	  
	  
	  header("location:index2.php");
	  	  
	}
}
else{
	header("location:login.php?msg=error");	  
	
	}
	
	










?>