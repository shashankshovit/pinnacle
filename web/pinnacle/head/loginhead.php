<!-- 
    Document   : loginhead
    Created on : Feb 11, 2012, 11:06:02 PM
    Author     : Shanky
-->


<!-- <form method = post action = "../pinnacle/login/login.php" onsubmit="login_validation()">		-->
<form method = post action = "down.php">	<!-- onsubmit="login_validation()">		-->
    <table class ="single_boundary" width="100%">
        <tr>
            <td colspan="2" align="center"><b><i>New Users Register Here -> </i></b></td>
            <td rowspan="2">
                <?php echo "<input type=\"button\" class =\"box4\" value=\"register\" onclick=\"parent.location='logreg.php'\" "; ?>
            </td>
        </tr>
        <tr>
            <td>Username :</td>
            <td><input type = text name = "uname" id = "uname" class="box"></td>
            
        </tr>
        <tr>
            <td>Password :</td>
            <td><input type = password name = "pass" id = "pass" class="box"></td>
            <td colspan = 3 align = center>
                <input type = submit value = "login" class="box3"><!-- onmouseover="login_val()"> -->

            </td>
        </tr>
    </table>
</form>