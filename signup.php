<?php 
include "db.php";

$username= $_POST['name'];
$email= $_POST['email'];
$number= $_POST['phonenum'];
$address= $_POST['address'];
$dob= $_POST['dob'];
$password= $_POST['pass'];
$cpassword= $_POST['cpass'];





$qry= "insert into register set
u_name = '".$username."',
email = '".$email."',
number = '".$number."',
address = '".$address."',
dob = '".$dob."',
pass_word = '".$password."',
cpass_word = '".$cpassword."'";

$result=mysqli_query($con , $qry);
if($result){
	header('location:index.php');
}
else{
	echo "qurey not inserted";
}
?>