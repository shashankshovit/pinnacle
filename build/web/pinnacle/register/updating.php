<%-- 
    Document   : register
    Created on : Jan 24, 2012, 4:42:43 PM
    Author     : Shanky
--%>

<%@page contentType="text/html" pageEncoding="UTF-8" import="java.sql.*,java.util.*"%>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>updating ...</title>
        
    </head>
    <body class="pinnacle">
        <%!
            Connection conection = null;
            Statement state = null;
            ResultSet result = null;
        %>
        <%
                Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
                String q = "C:\\db\\shashank.mdb";
                conection=DriverManager.getConnection("jdbc:odbc:Driver={Microsoft Access Driver (*.mdb)};Dbq="+q);
                state = conection.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE, ResultSet.CONCUR_UPDATABLE);


                boolean flag=true;
                String name = request.getParameter("name");
                String username = request.getParameter("username");
                String password = request.getParameter("password");
                String email = request.getParameter("mail");
                String address = request.getParameter("address");
                String mobile = request.getParameter("mobile");
                String sex = request.getParameter("sex");
                String yea = request.getParameter("yea");
/*                int day = Integer.parseInt(request.getParameter("day"));
                  int month = Integer.parseInt(request.getParameter("month"));
                  int year = Integer.parseInt(request.getParameter("year"));
   

                String d = ""+year+"-"+month+"-"+day;
                java.sql.Date date = java.sql.Date.valueOf(d);
*/
         try
         {
                /*
                
                */
                result = state.executeQuery("select * from login where username = '"+session.getAttribute("user")+"'");
                result.next();
                //result.updateString(1, username);
                result.updateString(2, password);
                result.updateRow();

                result = state.executeQuery("select * from details where username = '"+session.getAttribute("user")+"'");
                result.next();
                //result.updateString(1, username);
                result.updateString(2, name);
                result.updateString(3, password);
                result.updateString(4, email);
                result.updateString(5, address);
                //result.updateDate(6, date);
                result.updateString(7, mobile);
                result.updateString(8, sex);
                result.updateString(9, yea);
                result.updateRow();

                response.sendRedirect("../login/welcome.jsp");


           }
         catch(Exception e)
                 {
             flag=false;
             out.println(""+e);}
        %>
                            <br><br><br>
            <script language="javascript" >

                document.write("<input type = button value = \"click here\" onclick=\"parent.location= '../login/welcome.jsp'\">");
            </script>
             to take you to your profile page...

    <jsp:include page="../head/foot.jsp" flush="true" ></jsp:include>
    </body>
</html>
s