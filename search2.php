<?php
// Fill up array with names
include('config.php');
session_start(); //start session
$login = $_SESSION['mysession'];

//get the q parameter from URL
$q= $_GET["q"];
//search in database
$sql="select fname,image,id  from registration where fname like '$q%' and fname not like '$login' and fname not like 'admin'";
$query=mysql_query($sql);
$filePath='image/';
$count=mysql_num_rows($query);
if($count==0){
    echo"not match found";
}
else{
    while($row=mysql_fetch_assoc($query))
    {
        $id =$row['id'];
        echo"<table>";
        echo"<tr>";
        echo"<td>";
        echo $a=$row['fname'];
        echo"</td>";
        $image=$row['image'];

        echo"<td>";echo"<img src='$filePath$image' height='100'width='100' />";   echo"</td>";
        echo"<td align='center'>";

        $sql ="select status from send where (sender_name='$login' and rec_name='$a') or (sender_name='$a' and rec_name='$login')  "  ;
        $query=mysql_query($sql);
        //$rows=mysql_fetch_assoc($query);
        $rows=mysql_fetch_assoc($query);
        $confirm=$rows['status'];

        if($confirm=='p' or $confirm== 'a'){//frind request already has been send
            echo"<label> already send friend request or add already in friend list</label>";
            echo "<br>";
            echo"</table>";
            echo"</div> ";
        }
        else{
            ?>
        <a href='send.php?id=<?php echo $id;?>'>ADD as frind </a>

        <?php
            echo"</td>";
            echo"</tr>";
            echo "</table>";
//lookup all hints from array if length of q>0
        }
    }
}
?>