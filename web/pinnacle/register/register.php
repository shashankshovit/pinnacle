<!-- 
    Document   : register
    Created on : Feb 14, 2012, 2:58:26 AM
    Author     : Shanky
-->


<form method = post action = "down.php">
    <table class = "boundary" width="100%">
        <tr >
            <td colspan = 4 align = center> <h1 class = "test">Register Yourself</h1> </td>
        </tr>
        <tr align = right>
            <td><b>Name :</b></td>
            <td><input type="text" class="box" value ="input your name" name = "name" id ="name" onfocus="clear(this)"></td>
            <td><b>Username :</b></td>
            <td><input type = text class="box" name = "username" id = "username" value= "choose user name" onfocus="clear(this)"></td>
            
        </tr>
        <tr align = right>
            <td><b>Password :</b></td>
            <td><input type = password class="box" name = "password" id = "password"></td>
            <td><b>Confirm password :</b></td>
            <td><input type = password class="box" name = "cpassword" id  = "cpassword"></td>
        </tr>
        <tr align = right>
            <td><b>E - m@il :</b></td>
            <td><input type = text name = "mail" id = "mail" class="box"></td>
            <td rowspan = 5><b>Address :</b></td>
            <td  rowspan = 5><textarea rows = 5 cols = 15 name = "address" id = "address" class="box" >your address</textarea></td>

        </tr>

        <tr align = right>
            <td>
                <b>Year :</b>
            </td>
            <td>
                <b>I: <input type="radio" name="yea" id="yea" value="I"></b>
                <b>II: <input type="radio" name="yea" id="yea" value="II"></b>
                <b>III: <input type="radio" name="yea" id="yea" value="III"></b>
                <b>IV: <input type="radio" name="yea" id="yea" value="IV"></b>
            </td>
            
        </tr>
        <tr align = right>
            <td><b>Sex :</b></td>
            <td><b>Male</b><input type = radio name = "sex" id = "sex" value = "male" >
                <b>Female</b><input type = radio name = "sex" id = "sex" value = "female" checked>
                
            </td>
        </tr>

        <tr align = right>
            <td><b>Date of Birth :</b></td>
            <td>

                <select name = "day" id  = "day" class="box1">
                    <option value = 01>dd</option>
			<script language = "javascript">
			for(i=1;i<=31;i++)
				{
					document.write("<option value = "+ i + "> "+ i + "</option>");
				}
			</script>
                </select>
                <select name = "month" id  = "month" class="box11">
                        <option value = 01>mm</option>
			<option value = 01>january</option>
			<option value = 02>february</option>
			<option value = 03>march</option>
			<option value = 04>april</option>
			<option value = 05>may</option>
			<option value = 06>june</option>
			<option value = 07>july</option>
			<option value = 08>august</option>
			<option value = 09>september</option>
			<option value = 10>october</option>
			<option value = 11>november</option>
			<option value = 12>december</option>
		</select>
                <select id = "year" name = "year" class="box1">
			<option value = 1980>yyyy</option>

                        <script language = "javascript">
                                y = new Date();
                                    for(i=1981;i<= y.getFullYear();i++)
					document.write("<option value = " +i+ ">" + i + "</option>");
			</script>
		</select>
            </td>
            <td></td>
            <td></td>

        </tr>
        <tr align="right">
            <td><b>Mobile :</b></td>
            <td><input type = text name = "mobile" id  = "mobile" value = "your mob no here" class="box" onfocus="clear(this)"></td>
        </tr>

        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr>
            <td></td>
            <td></td>

            <td colspan = 2 align = center>
                <input type = submit value = "register" class="box2" onmouseover="register_validation()">
                <input type = reset value = "reset" class="box2">
            </td>
        </tr>
    </table>
</form>
