<?php
include('config.php');
session_start();
//include('session_check.php');
//echo "welcome to login page ";
echo "welcome in your profile page" . "<br>" .$_SESSION['mysession'];
$UserName = $_SESSION['mysession'];
$id = $_SESSION['id'];
$sql="SELECT * FROM registration WHERE id='$id'";
$result=mysql_query($sql) or die(mysql_error());
$rows=mysql_fetch_array($result);
$var=$rows['image'];
?>
<html>
<head>
    <style type="text/css">
        #search {
        }
        #txtHint {
            border: 2;
        }
        .messge{
            border: 3;
            color: blue;;
        }

    </style>
    <script>
        function search() //search friend
        {
            var xmlhttp;
            if (window.XMLHttpRequest)
            {// code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp=new XMLHttpRequest();
            }
            else
            {// code for IE6, IE5
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function()
            {
                if (xmlhttp.readyState==4 && xmlhttp.status==200)
                {
                    document.getElementById("search").innerHTML=xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET","search1.php?fname=<?php echo $UserName;?>",true);
            xmlhttp.send();
        }
        function showHint(str)// hit to  search code
        {
            if (str.length==0)
            {
                document.getElementById("txtHint").innerHTML="";
                return;
            }
            if (window.XMLHttpRequest)
            {// code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp=new XMLHttpRequest();
            }
            else
            {// code for IE6, IE5
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function()
            {
                if (xmlhttp.readyState==4 && xmlhttp.status==200)
                {
                    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET","search2.php?q="+str,true);
            xmlhttp.send();
        }
        function newrequest() //  to see new friend request
        {
            var xmlhttp;
            if (window.XMLHttpRequest)
            {// code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp=new XMLHttpRequest();
            }
            else
            {// code for IE6, IE5
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function()
            {
                if (xmlhttp.readyState==4 && xmlhttp.status==200)
                {
                    document.getElementById("search").innerHTML=xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET","new_friend.php",true);
            xmlhttp.send();
        }
        function friendlist()// to see friend exiting friend list
        {
            var xmlhttp;
            if (window.XMLHttpRequest)
            {// code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp=new XMLHttpRequest();
            }
            else
            {// code for IE6, IE5
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function()
            {
                if (xmlhttp.readyState==4 && xmlhttp.status==200)
                {
                    document.getElementById("search").innerHTML=xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET","friend_list.php?fname=<?php echo $UserName;?>",true);
            xmlhttp.send();
        }
        function edit()// to see friend exiting friend list
        {
            var xmlhttp;
            if (window.XMLHttpRequest)
            {// code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp=new XMLHttpRequest();
            }
            else
            {// code for IE6, IE5
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function()
            {
                if (xmlhttp.readyState==4 && xmlhttp.status==200)
                {
                    document.getElementById("search").innerHTML=xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET","edit.php",true);
            xmlhttp.send();
        }
        function viewmessage ()// to see friend exiting friend list
        {
            var xmlhttp;
            if (window.XMLHttpRequest)
            {// code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp=new XMLHttpRequest();
            }
            else
            {// code for IE6, IE5
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function()
            {
                if (xmlhttp.readyState==4 && xmlhttp.status==200)
                {
                    document.getElementById("search").innerHTML=xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET","view_message.php",true);
            xmlhttp.send();
        }
        function send (str1)// to see friend exiting friend list
        {
            var xmlhttp;
           // var str1=str1;
           // url="messageform.php";
           // url=url+"?rec_name="+str1;

            if (window.XMLHttpRequest)
            {// code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp=new XMLHttpRequest();
            }
            else
            {// code for IE6, IE5
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function()
            {
                if (xmlhttp.readyState==4 && xmlhttp.status==200)
                {
                    document.getElementById("text").innerHTML=xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET","messageform.php?rec_name="+str1 ,true);
            xmlhttp.send();
        }

        </script>


</head>

<body>
<table  border="" align="right" width="100" >
    <form action=" "method="post">
        <tr>
            <div class="log_edit"> <td align="right"><a href="logout.php" > logout </a> </td></div>
        </tr>
    </form>
</table>

   <table align="center">
        <tr><td > <button type="button" onclick="search()">search friend</button></td >
            <td > <button type="button" onclick="newrequest()">new friend </button></td >
            <td > <button type="button" onclick="friendlist()">friend list</button></td>
            <td>  <button type="button" onclick="edit()">edit</button></td>
       <td><button type="button" onclick="viewmessage()">view message </button></td></tr>
    </table>
<div class="profile_table">
<table  bgcolor ="#deb887" align="left"   cellspacing="2" border="1" width="300">

    <th colspan="5" align="center" >profile page  </th>

    <form method = "get" action ="" >
        <tr>
            <td colspan="4" align="right"  ><img src="image/<?php echo $var;?>" height="100" width="100"> </td>

        </tr>
        <tr>
               <td> <th>ID</th></td>
             <td ><?php echo $rows['id'];?></td>
        </tr>

        <tr>
            <td> <th>NAME </th></td>
            <td ><?php echo $rows['fname'];?></td>
        </tr>

        <tr>
            <td> <th>LAST NAME</th></td>
            <td ><?php echo $rows['lname'];?></td>
        </tr>
        <tr>
            <td> <th>EMAIL</th></td>
            <td ><?php echo $rows['email'];?></td>
        </tr>
        <tr>
            <td> <th>DOB</th></td>
            <td ><?php echo $rows['bdate'];?></td>
        </tr>
        <tr>
            <td> <th>CITY</th></td>
            <td ><?php echo $rows['city'];?></td>
        </tr>
        <tr>
            <td> <th>STATE</th></td>
            <td ><?php echo $rows['state'];?></td>
        </tr>
        <tr>
            <td> <th>ADDRESS</th></td>
            <td ><?php echo $rows['address'];?></td>
        </tr>
    </form>
</table>
</div>
<div id="search" > </div>
<table align="center"><tr><p >
 </p></tr></table>
<div id="text" > </div>
</body>
</html>


