c
<html>
    <head>
    <title> new registration </title>
        <style type="text/css">
            .reg_table{
                padding-top: 50px;
                padding-left:50px;

            }
            .body{
                background-attachment: "";
            }



        </style>
    </head>
    <div class="body">
<body>
<div class="reg_table">
    <table  border ="1" cellpadding ="2" cellspacing ="5" align="center" bgcolor ="">
    <th colspan="2" align="center">registration from </th>
        <form method = "post" action ="save.php"  enctype="multipart/form-data" >
            <tr>
                <td>first name</td>
                <td><input name = "fname" size="35" maxlength="50" id="fname" type="text" /></td>

            </tr>
            <tr>
                <td>last name</td>
                <td><input name="lname" size="35" maxlength="25" type="text"></td>
            </tr>
                <td>email</td>
                <td><input name="email" size="35" maxlength="25" type="text"></td>
            </tr>
            <tr>
                <td>password</td>
                <td><input name="password" size="35" maxlength="25"   type="password"></td>
            </tr>

            <tr>
                <td>confirm password</td>
                <td><input name="cpassword" size="35" maxlength="25"  type="password"> </td>

            </tr>
            <tr>
                <td>Birth date:</td>
                <td> <select name="BirthMonth">
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
                <td><input name="city" size="35" maxlength="25" type="text"></td>
            </tr>

            <tr>
                <td>state</td>
                <td><input name="state" size="35" maxlength="25" type="text"></td>
            </tr>

            <tr>
                <td>address</td>
                <td><textarea name="address" id="address"></textarea></td>
            </tr>
            <tr>
                <td>image</td>
               <td><input type="file" name="file" id="file" ></td>
            </tr>

            <tr>
                <td></td>
                <td><input name="Submit"  value="submit" type="submit" align="center" ></td>
            </tr>
        </form>
    </table>
</div>
    </div>

</body>
</html>
<html>
<body bgcolor="#dcdcdc">
</body>
</html>


