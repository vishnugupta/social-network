<?php
include('config.php');
session_start(); $UserName = $_SESSION['mysession'];
$id = $_SESSION['id'];
$sql="SELECT * FROM registration WHERE id='$id'";
$result=mysql_query($sql) or die(mysql_error());
$rows=mysql_fetch_array($result);
?>
<table  border ="" cellpadding ="2" cellspacing ="5" bgcolor ="#ffebcd" align="left">
 <th colspan="2" align="center">update your information </th>
        <form method = "post" action ="update.php"  >
            <tr>
                <td>first name</td>
                <td><input name = "fname" size="35" maxlength="50" type="text"  value="<?php echo $rows['fname']; ?>"/></td>

            </tr>
            <tr>
                <td>lname</td>
                <td><input name="lname" size="35" maxlength="25" type="text"  value="<?php echo $rows['lname'];?>"/></td>
            </tr>
                <td>email</td>
                <td><input name="email" size="35" maxlength="25" type="text"  value="<?php echo $rows['email'];?>"></td>
            </tr>

            <tr>
                <td>Birth date:</td>
                <td> <select name="BirthMonth" >
                <option value="1">January</option>
                <option value="2">February</option>
                <option value="3">March</option>
                <option value="4">April</option>
                <option value="5">May</option>
                <option value="6">June</option>
                <option value="7">July</option>
                <option value="8">August</option>
                <option value="9">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
                </select>
                    <select name="BirthDay">
                    <?php
                     for ($i=1; $i<=31; $i++) {
                            echo "<option value='$i'>$i</option>";
                    }
                     ?>
                </select>
                <select name="BirthYear">
                        <?php
                        for ($i=2012; $i>=1900; $i=$i-1) {
                        echo "<option value='$i'>$i</option>";
                    }
                        ?>
                 </select>
                  </td>

            </tr>
            <tr>
                <td>city</td>
                <td><input name="city" size="35" maxlength="25" type="text"  value="<?php echo $rows['city'];?>"/></td>
            </tr>

            <tr>
                <td>state</td>
                <td><input name="state" size="35" maxlength="25" type="text" value="<?php echo $rows['city'];?>"/></td>
            </tr>

            <tr>
                <td>address</td>
                <td><textarea name="address" id="address" ><?php echo $rows['address']; ?></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input name="Submit"  value="update" type="submit" align="center" ></td>
            </tr>
    </form>
</table>

<html>
<body bgcolor="#dcdcdc">
</body>
</html>


