<%-- 
    Document   : loginbean
    Created on : Jan 28, 2012, 10:56:07 AM
    Author     : Shanky
--%>

<%@page contentType="text/html" pageEncoding="UTF-8" import="java.sql.*"%>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>logging in ...</title>
        <script language="javascript" src="../javascript.js"></script>
        <script language="javascript" src="javascript.js"></script>
        <script language="javascript">
            tim=3;

            function timer()
            {
            document.getElementById("wait").innerHTML="Please wait "+tim+" seconds to continue";
            tim--;
            if(tim==-1)
                return;
            else
                setTimeout('timer()',1000);
            }
            
        </script>


    </head>
    <body onload="timer()">
        <h1>Validating your login! Please wait ... </h1>
        <jsp:useBean id="conect" scope="page" class="shashank.Connect"></jsp:useBean>
            <%
                try
                 {
                String uname = request.getParameter("uname");
                String pass = request.getParameter("pass");
                String q = "select * from login";
                ResultSet result = conect.getResultSet(q);

                for(;result.next();)
                    {
                        if(uname.equals("pinnaclegroup") && pass.equals("admin@pinnacle"))
                            {
                                session.setAttribute("user", uname);
                                response.sendRedirect("welcomeadmin.jsp");
                                return;
                            }
                        else if(uname.equals(result.getString(1)) && pass.equals(result.getString(2)))
                            {
                                session.setAttribute("user", uname);
                                response.sendRedirect("welcome.jsp");
                                return;
                            }
                    }
                response.sendRedirect("../invalid.jsp");
                }catch(Exception e){out.println(""+e);}
            %>
        



    </body>
</html>
