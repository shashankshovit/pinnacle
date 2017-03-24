<%-- 
    Document   : loginhead
    Created on : Feb 11, 2012, 11:06:02 PM
    Author     : Shanky
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<form method = post action = "../pinnacle/login/login.jsp" onsubmit="login_validation()">
    <table class ="single_boundary" width="100%">
        <tr>
            <td colspan="2" align="center"><b><i>New Users Register Here -> </i></b></td>
            <td rowspan="2">
                <%= "<input type=\"button\" class =\"box4\" value=\"register\" onclick=\"parent.location='logreg.jsp'\" >" %>
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
                <input type = submit value = "login" class="box3" onmouseover="login_val()">

            </td>
        </tr>
    </table>
</form>