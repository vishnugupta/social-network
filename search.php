<?php
include('config.php');
session_start();
echo $login = $_SESSION['mysession'];
?>
<div align="left"  id="search" >
    <table border="1" align="left"  bgcolor=""   >
        <form name="search" method="post" action="search.php">
            <tr><td> Search friend : <input type="text" name="find" /> by
                <Select NAME="field" >
                    <Option VALUE="fname"> Name</option>
                    <Option VALUE="email">Email</option>

                </Select>
                <input type="hidden" name="searching" value="yes" />
                <input type="submit" name="search" value="Search" />
            </td>
            </tr>
            <?php
//include('search.php');
            include('config.php');
            session_start();

               $find=$_POST['find'];
            $searching=$_POST['searching'];
//This is only displayed if they have submitted the form<h2>Search</h2>
            ?>
        <tr>
        <td>
            <?php

            print_r($_POST);

            if($_POST['search']!="")
            {
            if ($searching =="yes")
            {
                echo "<h4 align='right' >search frinds are </h4><p>";

                //If they did not enter a search term we give them an error
                ?>
    </td>
</tr>
   <tr>
       <td>
       <?php
       if ($find == ""){
           echo "<p align='right'>You forgot to enter a search term";
           //exit;
       }
           else{


       ?>
   </td>
   </tr>


                <?php
                // We preform a bit of filtering
                //$find = strtoupper($find);
                // $find = strip_tags($find);
                // $find = trim ($find);
                //Now we search for our search term, in the field the user specified
                $data = mysql_query("SELECT * FROM registration WHERE fname LIKE'$find%'");

                $filePath='image/';

                ?>
               <tr>
                   <td>

                    <?php
                   // $sender_name = $_SESSION['mysession'];
                    //And we display the results
                    while($result = mysql_fetch_array( $data )){
                        echo"<div align='right'> ";
                        echo"<table align='right'>";
                        if($result['fname']!=$_SESSION['mysession']){//this not login user then search
                        $image=$result['image'];
                        // echo $result['id'];
                        echo"<img src='$filePath$image' height='100'width='100' />";
                        echo " </br>";
                        $name=$result['fname'];
                        $id =$result['id'];
                        echo $result['fname'];

                    $sql ="select status from send where (sender_name='$login' and rec_name='$name') or (sender_name='$name' and rec_name='$login')  "  ;
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

                           /* if($confirm=='a'){//frind request already has been send
                                echo"<label> already add as a friend</label>";
                                echo "<br>";
                                echo"</table>";
                                echo"</div> ";
                            }*/
                        else{

                       //echo $rows['status'];

                       // $view="select status from send where sender_name='$sender_name'and rec_name='$name' ";
                       // $view1="and rec_name='$name''";
                        //$go=$view.$view1;

                        ?>
                        <a href='send.php?id=<?php echo $id;?>'>ADD as frind </a>

                        <?php
                        echo "<br>";
                        echo"</table>";
                        echo"</div> ";
                        //echo $result['lname'];
                        //echo "<br>";
                        }
                        }
                        else{
                            echo"your search yourself";
                            echo"</table>";

                        }
                     //echo"</table>";
                    }

                    ?>
                </td>
               </tr>
            <tr><td>
        <?php
                //This counts the number or results - and if there wasn't any it gives them a little message explaining that
                $anymatches=mysql_num_rows($data);
                if ($anymatches == 0)
                {
                    echo"<div align='right'>";
                    echo "Sorry, but we can not find any frind to match your enter name <br><br>";
                }
                    echo"</div>";


                //And we remind them what they searched for
                // echo "<b>Searched For:</b> " .$find;
            }
            }
            }

            ?>
        </td></tr>
        </form>
    </table>
</div>
<?php
/*
else{
    exit;
}*/

?>
<html>
<body bgcolor="#dcdcdc" background=" ">
</body>
</html>

