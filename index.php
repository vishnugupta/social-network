<?php
include('config.php');
?>

<html >
<head>
    <style type="text/css">

        .home_table{
            background: #5f9ea0;
            height: 150px;
            padding-left: 50px;
            padding-top: 50px;
            background-image:url("");


        }

        .btn input{
            padding-right: 5px;
            padding: 4px;;
            width:100px;
            color: blue;
            background-color: red;
        }

    </style>
    <script src="http://code.jquery.com/jquery-latest.js"></script>


</head>
<body bgcolor="#dcdcdc" background="" >
<div class="home_table">
<table  cellpadding ="" cellspacing ="" align="left"  >

    <th colspan="2" align="center" >login </th>
    <form method = "post" action ="newsave.php" >

        <tr>

            <td>user name:</td>
            <td><input name = "username"  type="text"> </td>

        </tr>
        <tr>
            <td>Password:</td>
            <td><input name="pwd"  type="password"></td>
        </tr>
        <tr>
                 <td><a href="registration.php" >new  registration </a></td>

                 <td><div class="btn"><input name="Submit" value="submit" type="submit" ></div></td>

         </tr>

     </form>

</table>
</div>
</body>

</html>



