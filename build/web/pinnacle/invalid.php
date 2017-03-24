<%-- 
    Document   : invalid
    Created on : Jan 25, 2012, 12:19:14 PM
    Author     : Shanky
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>invalid login</title>
        <link rel="stylesheet" type="text/css" href="css.css">
        <script language="javascript" src="javascript.js"></script>
    </head>
    <body>
        <h1 align="center">Sorry...</h1>
        <h2 align="center">The userid or password you provided are incorrect.</h2>
        <jsp:include page="index.jsp" flush="false" />
        <jsp:include page="head/foot.jsp" flush="true" ></jsp:include>
    </body>
</html>
