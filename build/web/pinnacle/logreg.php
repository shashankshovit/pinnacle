<%-- 
    Document   : logreg
    Created on : Feb 11, 2012, 8:50:07 PM
    Author     : Shanky
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Register/Login</title>
        <link rel="stylesheet" type="text/css" href="css.css">
        <script language="javascript" src="javascript.js"></script>
    </head>
    <body background="images/pinnacle.jpg" text="#ffffff">
        <jsp:include flush="false" page="head/shashank.jsp"></jsp:include>

        <table width="100%">
            <tr>
                <td height="100"></td>
            </tr>
            <tr>
                <td width="20%"></td>
                <td width="60%" align="center">
                    <jsp:include flush="true" page="register/register.jsp"></jsp:include>
                </td>
                <td width="20%"></td>
            </tr>
            <tr>
                <td height="100">
                    
                </td>
                <td></td>
            </tr>

        </table>
        <jsp:include page="head/foot.jsp" flush="true" ></jsp:include>
    </body>
</html>
