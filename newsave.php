<?php
include("config.php");
session_start();
$username = $_POST['username'];
$pwd= md5($_POST['pwd']);
        if (($username) AND ($pwd)) {
            $query = "select fname,password,id ,usertype FROM registration ";
            $result=mysql_query($query);
             // $row = mysql_fetch_assoc( $result);
            while ($row = mysql_fetch_assoc($result)) {
             if( $row['fname'] == $username and $row['password']==$pwd ){
                echo $_SESSION ['mysession'] = $username;
                 $var= $row['usertype'];

                 if($var=='a') {
                     $_SESSION['id']= $row['id'];
                     echo "<script type='text/javascript'>
                      window.location='adminprofile.php';
                      </script>";
                 }
                     // echo $username;
                      //echo "hi";
                 else{
                 $_SESSION['id']= $row['id'];

                     echo "<script type='text/javascript'>
                      window.location='profile.php';
                      </script> ";
                 }
            }

            }

            echo "<script type='text/javascript'>
                    alert('invalid password or username');
                      window.location='index.php';
                      </script> ";
         }
        else{

                 echo "  <script type='text/javascript'>
                                alert('either username or password are blank  .');
                                window.location = 'index.php';
                             </script> ";
            }
?>

