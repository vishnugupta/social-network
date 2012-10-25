<?php
include('config.php');
session_start();
$UserName = $_SESSION['mysession'];
 $id = $_SESSION['id'];
//echo "<pre>";
//print_r($_POST);
$name= $_POST ['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$city=$_POST['city'];
$state=$_POST['state'];
$address=$_POST['address'];
$dob=$_POST['BirthYear']."-".$_POST['BirthMonth']."-".$_POST['BirthDay'];
echo $dob;
$sql="UPDATE registration SET fname='$name',lname='$lname', email='$email',city='$city',state='$state',address='$address',bdate= '$dob' WHERE id='$id'";
$result=mysql_query($sql) or die(mysql_error());
echo "done";
echo "<script type='text/javascript'>
    window.location='profile.php';
      </script> ";

?>

