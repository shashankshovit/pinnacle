<%-- 
    Document   : login
    Created on : Jan 24, 2012, 4:42:57 PM
    Author     : Shanky
--%>

<%@page contentType="text/html" pageEncoding="UTF-8" import = "java.sql.*,sun.jdbc.odbc.*"%>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>logging in ...</title>
        <script language="javascript" src="../javascript.js"></script>
        <script language="javascript" src="javascript.js"></script>

        
    </head>
    <body >
        <h1>validating your login! Please wait ...</h1>
        <%= new java.util.Date() %>
        <div></div>
        <br>
        <br>
         

<%!
        Connection conection = null;
        Statement state = null;
        ResultSet result = null;
%>
<%
        try
        {
        Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
        String s = "C:\\db\\shashank.mdb";
        conection = DriverManager.getConnection("jdbc:odbc:Driver={Microsoft Access Driver (*.mdb)};Dbq="+s);
        state = conection.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE, ResultSet.CONCUR_UPDATABLE);

            String uname = request.getParameter("uname");
            String pass = request.getParameter("pass");
            result= state.executeQuery("select * from login");

            while(result.next())
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
                            //out.println("<jsp:forward page = \"welcome.jsp\" flush = \"true\" />");

                            return;
                        }
                   
                    //System.out.println("<br>name : " + result.getString(1) + " &nbsp;  &nbsp;  &nbsp; password : " + result.getString(2));
                    //return;
                }
            response.sendRedirect("../invalid.jsp");
            //out.println("<jsp:forward page = \"../invalid.jsp\" flush = \"true\" />");
            }
            catch(Exception e)
            {
                System.out.println(""+e);
//                response.sendRedirect("../invalid.jsp");
            }
         %>
    </body>
</html>
