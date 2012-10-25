<?php
include('config.php');
session_start();
 $rec_name=$_SESSION['mysession'];
 $sql="select sender_name from send where rec_name='$rec_name' and status='p'";
 $query=mysql_query($sql);
?>
<table align="left" border="2" >
<?php
echo"<th align='center'>new friend request</th>";
while($rows=mysql_fetch_assoc($query)){
    echo"<tr>";
    echo"<td>";
    echo"<center>";
 echo $friend= $rows['sender_name'];
 echo"</center>";
    echo"</td>";

     $data="select image from registration where fname='$friend'";
    $result=mysql_query($data);
   while ($rows=mysql_fetch_assoc($result)){

       $var=$rows['image'];
      ?>
       <td> <img src="image/<?php echo $var;?>" height="100" width="100"></td>


    <td><a  href='add.php?name=<?php  echo $friend;?>'>ADD</a> </td>
    <td><a  href="">REMOVE</a> </td>
      </tr>
       <?php
   }
       ?>
            </table>

<?php
}
?>
<html>
<body bgcolor="#dcdcdc">
</body>
</html>
