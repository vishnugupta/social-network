<?php
include('config.php');
session_start();
echo"<pre>";
echo $rec_id=$_GET['id']; //resver id
//echo"sender name ";
$sender_name = $_SESSION['mysession']; // sender name
$sql="SELECT id FROM registration WHERE fname='$sender_name'"; //sender name get from data base
$result=mysql_query($sql) or die(mysql_error());
$rows=mysql_fetch_array($result);
$sender_id= $rows['id']; //sender id
$sql="SELECT fname FROM registration WHERE id='$rec_id'"; //recevier name get from data base
$result=mysql_query($sql) or die(mysql_error());
$rows=mysql_fetch_array($result);
 $rec_name=$rows['fname'];

$query = "INSERT INTO send ( sender_id , sender_name , rec_id, rec_name, status )
         VALUES ('$sender_id','$sender_name','$rec_id','$rec_name','p')";
        mysql_query($query) or die(mysql_error());
echo "
     <script type='text/javascript'>
      alert('friend request has been send .')
                             window.location = 'profile.php';
                            </script>
                                    ";
/*
els}e
{
echo" <script type='text/javascript'>
      alert('friend request already has been send  .')
                             window.location = 'profile.php';
                            </script>
                                    ";
}*/
?>