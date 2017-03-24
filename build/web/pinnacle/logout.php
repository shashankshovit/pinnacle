<%-- 
    Document   : logout
    Created on : Jan 31, 2012, 11:09:36 PM
    Author     : Shanky
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>logging out ... </title>
        <script language="javascript">
            
                    function al()
                    {
                        alert("Successfully logged out");
                    }
        </script>

        

    </head>
    <body  onload="al()">
        <div id="wait"></div>
        <%
          response.sendRedirect("index.jsp");
        %>
        
    </body>
</html>
