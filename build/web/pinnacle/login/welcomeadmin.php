<%-- 
    Document   : welcome
    Created on : Jan 25, 2012, 12:19:01 PM
    Author     : Shanky
--%>

<%@page contentType="text/html" pageEncoding="UTF-8" import="java.sql.*"%>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Welcome</title>
        <script language="javascript" src="javascript.js"></script>
        <link rel="stylesheet" type="text/css" href="css.css">
    </head>
    <body>
        <table width="100%">
            <tr>
                <td colspan="5">
                    <jsp:include page ="../head/shashank.jsp" flush="true"></jsp:include>
                </td>
            </tr>
            <tr>
                <td width="">
                    <table>


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
        state = conection.createStatement();
        }catch(Exception e){out.println(""+e);}
%>



                        <%
            
                String user = (String)session.getAttribute("user");


                try
                {
                    String qd = "select * from events, details where (events.username = details.username and sixtyseconds = true)";

                    result = state.executeQuery(qd);
                    out.println("<tr><td colspan=4><h2>60 Seconds</h2></td></tr>");
                    out.println("<tr><td><b>username</b></td><td><b>full name</b></td><td><b>password</b></td><td><b>e-mail</b></td><td><b>address</b></td><td><b>date of birth</b></td><td><b>mobile</b></td><td><b>sex</b></td><td><b>year</b></td></tr>");
                    while(result.next())
                    {
                        out.println("<tr><td>" + result.getString("username")+"</td>");
                        out.println("<td>" + result.getString("fullname")+"</td>");
                        out.println("<td>" + result.getString("password")+"</td>");
                        out.println("<td>" + result.getString("email")+"</td>");
                        out.println("<td>" + result.getString("address")+"</td>");
                        out.println("<td>" + result.getString("dob")+"</td>");
                        out.println("<td>" + result.getString("mobile")+"</td>");
                        out.println("<td>" + result.getString("sex")+"</td>");
                        out.println("<td>" + result.getString("yea")+"</td>");
                        out.println("</tr>");
                    }
                }
                catch(Exception e)
                        {out.println(""+e);}


                try
                {
                    String qd = "select * from events, details where (events.username = details.username and bhejafry = true)";

                    result = state.executeQuery(qd);
                    out.println("<tr><td colspan=4><h2>Bheja Fry</h2></td></tr>");
                    out.println("<tr><td><b>username</b></td><td><b>full name</b></td><td><b>password</b></td><td><b>e-mail</b></td><td><b>address</b></td><td><b>date of birth</b></td><td><b>mobile</b></td><td><b>sex</b></td><td><b>year</b></td></tr>");
                    while(result.next())
                    {
                        out.println("<tr><td>" + result.getString("username")+"</td>");
                        out.println("<td>" + result.getString("fullname")+"</td>");
                        out.println("<td>" + result.getString("password")+"</td>");
                        out.println("<td>" + result.getString("email")+"</td>");
                        out.println("<td>" + result.getString("address")+"</td>");
                        out.println("<td>" + result.getString("dob")+"</td>");
                        out.println("<td>" + result.getString("mobile")+"</td>");
                        out.println("<td>" + result.getString("sex")+"</td>");
                        out.println("<td>" + result.getString("yea")+"</td>");
                        out.println("</tr>");
                    }
                }
                catch(Exception e)
                        {out.println(""+e);}

                try
                {
                    String qd = "select * from events, details where (events.username = details.username and wahwah = true)";

                    result = state.executeQuery(qd);
                    out.println("<tr><td colspan=4><h2>Wah Wah</h2></td></tr>");
                    out.println("<tr><td><b>username</b></td><td><b>full name</b></td><td><b>password</b></td><td><b>e-mail</b></td><td><b>address</b></td><td><b>date of birth</b></td><td><b>mobile</b></td><td><b>sex</b></td><td><b>year</b></td></tr>");
                    while(result.next())
                    {
                        out.println("<tr><td>" + result.getString("username")+"</td>");
                        out.println("<td>" + result.getString("fullname")+"</td>");
                        out.println("<td>" + result.getString("password")+"</td>");
                        out.println("<td>" + result.getString("email")+"</td>");
                        out.println("<td>" + result.getString("address")+"</td>");
                        out.println("<td>" + result.getString("dob")+"</td>");
                        out.println("<td>" + result.getString("mobile")+"</td>");
                        out.println("<td>" + result.getString("sex")+"</td>");
                        out.println("<td>" + result.getString("yea")+"</td>");
                        out.println("</tr>");
                    }
                }
                catch(Exception e)
                        {out.println(""+e);}

                try
                {
                    String qd = "select * from events, details where (events.username = details.username and aahwaan = true)";

                    result = state.executeQuery(qd);
                    out.println("<tr><td colspan=4><h2>Aahwaan</h2></td></tr>");
                    out.println("<tr><td><b>username</b></td><td><b>full name</b></td><td><b>password</b></td><td><b>e-mail</b></td><td><b>address</b></td><td><b>date of birth</b></td><td><b>mobile</b></td><td><b>sex</b></td><td><b>year</b></td></tr>");
                    while(result.next())
                    {
                        out.println("<tr><td>" + result.getString("username")+"</td>");
                        out.println("<td>" + result.getString("fullname")+"</td>");
                        out.println("<td>" + result.getString("password")+"</td>");
                        out.println("<td>" + result.getString("email")+"</td>");
                        out.println("<td>" + result.getString("address")+"</td>");
                        out.println("<td>" + result.getString("dob")+"</td>");
                        out.println("<td>" + result.getString("mobile")+"</td>");
                        out.println("<td>" + result.getString("sex")+"</td>");
                        out.println("<td>" + result.getString("yea")+"</td>");
                        out.println("</tr>");
                    }
                }
                catch(Exception e)
                        {out.println(""+e);}

                try
                {
                    String qd = "select * from events, details where (events.username = details.username and adaada = true)";

                    result = state.executeQuery(qd);
                    out.println("<tr><td colspan=4><h2>Adaa Adaa</h2></td></tr>");
                    out.println("<tr><td><b>username</b></td><td><b>full name</b></td><td><b>password</b></td><td><b>e-mail</b></td><td><b>address</b></td><td><b>date of birth</b></td><td><b>mobile</b></td><td><b>sex</b></td><td><b>year</b></td></tr>");
                    while(result.next())
                    {
                        out.println("<tr><td>" + result.getString("username")+"</td>");
                        out.println("<td>" + result.getString("fullname")+"</td>");
                        out.println("<td>" + result.getString("password")+"</td>");
                        out.println("<td>" + result.getString("email")+"</td>");
                        out.println("<td>" + result.getString("address")+"</td>");
                        out.println("<td>" + result.getString("dob")+"</td>");
                        out.println("<td>" + result.getString("mobile")+"</td>");
                        out.println("<td>" + result.getString("sex")+"</td>");
                        out.println("<td>" + result.getString("yea")+"</td>");
                        out.println("</tr>");
                    }
                }
                catch(Exception e)
                        {out.println(""+e);}

                try
                {
                    String qd = "select * from events, details where (events.username = details.username and mathapachi = true)";

                    result = state.executeQuery(qd);
                    out.println("<tr><td colspan=4><h2>Matha Pachchi</h2></td></tr>");
                    out.println("<tr><td><b>username</b></td><td><b>full name</b></td><td><b>password</b></td><td><b>e-mail</b></td><td><b>address</b></td><td><b>date of birth</b></td><td><b>mobile</b></td><td><b>sex</b></td><td><b>year</b></td></tr>");
                    while(result.next())
                    {
                        out.println("<tr><td>" + result.getString("username")+"</td>");
                        out.println("<td>" + result.getString("fullname")+"</td>");
                        out.println("<td>" + result.getString("password")+"</td>");
                        out.println("<td>" + result.getString("email")+"</td>");
                        out.println("<td>" + result.getString("address")+"</td>");
                        out.println("<td>" + result.getString("dob")+"</td>");
                        out.println("<td>" + result.getString("mobile")+"</td>");
                        out.println("<td>" + result.getString("sex")+"</td>");
                        out.println("<td>" + result.getString("yea")+"</td>");
                        out.println("</tr>");
                    }
                }
                catch(Exception e)
                        {out.println(""+e);}

                try
                {
                    String qd = "select * from events, details where (events.username = details.username and catonine = true)";

                    result = state.executeQuery(qd);
                    out.println("<tr><td colspan=4><h2>Cat O Nine Tales</h2></td></tr>");
                    out.println("<tr><td><b>username</b></td><td><b>full name</b></td><td><b>password</b></td><td><b>e-mail</b></td><td><b>address</b></td><td><b>date of birth</b></td><td><b>mobile</b></td><td><b>sex</b></td><td><b>year</b></td></tr>");
                    while(result.next())
                    {
                        out.println("<tr><td>" + result.getString("username")+"</td>");
                        out.println("<td>" + result.getString("fullname")+"</td>");
                        out.println("<td>" + result.getString("password")+"</td>");
                        out.println("<td>" + result.getString("email")+"</td>");
                        out.println("<td>" + result.getString("address")+"</td>");
                        out.println("<td>" + result.getString("dob")+"</td>");
                        out.println("<td>" + result.getString("mobile")+"</td>");
                        out.println("<td>" + result.getString("sex")+"</td>");
                        out.println("<td>" + result.getString("yea")+"</td>");
                        out.println("</tr>");
                    }
                }
                catch(Exception e)
                        {out.println(""+e);}

                try
                {
                    String qd = "select * from events, details where (events.username = details.username and sampaadan = true)";

                    result = state.executeQuery(qd);
                    out.println("<tr><td colspan=4><h2>Sampaadan</h2></td></tr>");
                    out.println("<tr><td><b>username</b></td><td><b>full name</b></td><td><b>password</b></td><td><b>e-mail</b></td><td><b>address</b></td><td><b>date of birth</b></td><td><b>mobile</b></td><td><b>sex</b></td><td><b>year</b></td></tr>");
                    while(result.next())
                    {
                        out.println("<tr><td>" + result.getString("username")+"</td>");
                        out.println("<td>" + result.getString("fullname")+"</td>");
                        out.println("<td>" + result.getString("password")+"</td>");
                        out.println("<td>" + result.getString("email")+"</td>");
                        out.println("<td>" + result.getString("address")+"</td>");
                        out.println("<td>" + result.getString("dob")+"</td>");
                        out.println("<td>" + result.getString("mobile")+"</td>");
                        out.println("<td>" + result.getString("sex")+"</td>");
                        out.println("<td>" + result.getString("yea")+"</td>");
                        out.println("</tr>");
                    }
                }
                catch(Exception e)
                        {out.println(""+e);}

                try
                {
                    String qd = "select * from events, details where (events.username = details.username and jhalak = true)";

                    result = state.executeQuery(qd);
                    out.println("<tr><td colspan=4><h2>Jhalak</h2></td></tr>");
                    out.println("<tr><td><b>username</b></td><td><b>full name</b></td><td><b>password</b></td><td><b>e-mail</b></td><td><b>address</b></td><td><b>date of birth</b></td><td><b>mobile</b></td><td><b>sex</b></td><td><b>year</b></td></tr>");
                    while(result.next())
                    {
                        out.println("<tr><td>" + result.getString("username")+"</td>");
                        out.println("<td>" + result.getString("fullname")+"</td>");
                        out.println("<td>" + result.getString("password")+"</td>");
                        out.println("<td>" + result.getString("email")+"</td>");
                        out.println("<td>" + result.getString("address")+"</td>");
                        out.println("<td>" + result.getString("dob")+"</td>");
                        out.println("<td>" + result.getString("mobile")+"</td>");
                        out.println("<td>" + result.getString("sex")+"</td>");
                        out.println("<td>" + result.getString("yea")+"</td>");
                        out.println("</tr>");
                    }
                }
                catch(Exception e)
                        {out.println(""+e);}

                try
                {
                    String qd = "select * from events, details where (events.username = details.username and saaz = true)";

                    result = state.executeQuery(qd);
                    out.println("<tr><td colspan=4><h2>Saaz</h2></td></tr>");
                    out.println("<tr><td><b>username</b></td><td><b>full name</b></td><td><b>password</b></td><td><b>e-mail</b></td><td><b>address</b></td><td><b>date of birth</b></td><td><b>mobile</b></td><td><b>sex</b></td><td><b>year</b></td></tr>");
                    while(result.next())
                    {
                        out.println("<tr><td>" + result.getString("username")+"</td>");
                        out.println("<td>" + result.getString("fullname")+"</td>");
                        out.println("<td>" + result.getString("password")+"</td>");
                        out.println("<td>" + result.getString("email")+"</td>");
                        out.println("<td>" + result.getString("address")+"</td>");
                        out.println("<td>" + result.getString("dob")+"</td>");
                        out.println("<td>" + result.getString("mobile")+"</td>");
                        out.println("<td>" + result.getString("sex")+"</td>");
                        out.println("<td>" + result.getString("yea")+"</td>");
                        out.println("</tr>");
                    }
                }
                catch(Exception e)
                        {out.println(""+e);}

                try
                {
                    String qd = "select * from events, details where (events.username = details.username and acoustyx = true)";

                    result = state.executeQuery(qd);
                    out.println("<tr><td colspan=4><h2>Acoustyx</h2></td></tr>");
                    out.println("<tr><td><b>username</b></td><td><b>full name</b></td><td><b>password</b></td><td><b>e-mail</b></td><td><b>address</b></td><td><b>date of birth</b></td><td><b>mobile</b></td><td><b>sex</b></td><td><b>year</b></td></tr>");
                    while(result.next())
                    {
                        out.println("<tr><td>" + result.getString("username")+"</td>");
                        out.println("<td>" + result.getString("fullname")+"</td>");
                        out.println("<td>" + result.getString("password")+"</td>");
                        out.println("<td>" + result.getString("email")+"</td>");
                        out.println("<td>" + result.getString("address")+"</td>");
                        out.println("<td>" + result.getString("dob")+"</td>");
                        out.println("<td>" + result.getString("mobile")+"</td>");
                        out.println("<td>" + result.getString("sex")+"</td>");
                        out.println("<td>" + result.getString("yea")+"</td>");
                        out.println("</tr>");
                    }
                }
                catch(Exception e)
                        {out.println(""+e);}

                try
                {
                    String qd = "select * from events, details where (events.username = details.username and decibies = true)";

                    result = state.executeQuery(qd);
                    out.println("<tr><td colspan=4><h2>Decibles</h2></td></tr>");
                    out.println("<tr><td><b>username</b></td><td><b>full name</b></td><td><b>password</b></td><td><b>e-mail</b></td><td><b>address</b></td><td><b>date of birth</b></td><td><b>mobile</b></td><td><b>sex</b></td><td><b>year</b></td></tr>");
                    while(result.next())
                    {
                        out.println("<tr><td>" + result.getString("username")+"</td>");
                        out.println("<td>" + result.getString("fullname")+"</td>");
                        out.println("<td>" + result.getString("password")+"</td>");
                        out.println("<td>" + result.getString("email")+"</td>");
                        out.println("<td>" + result.getString("address")+"</td>");
                        out.println("<td>" + result.getString("dob")+"</td>");
                        out.println("<td>" + result.getString("mobile")+"</td>");
                        out.println("<td>" + result.getString("sex")+"</td>");
                        out.println("<td>" + result.getString("yea")+"</td>");
                        out.println("</tr>");
                    }
                }
                catch(Exception e)
                        {out.println(""+e);}

                try
                {
                    String qd = "select * from events, details where (events.username = details.username and qawwali = true)";

                    result = state.executeQuery(qd);
                    out.println("<tr><td colspan=4><h2>Concert</h2></td></tr>");
                    out.println("<tr><td><b>username</b></td><td><b>full name</b></td><td><b>password</b></td><td><b>e-mail</b></td><td><b>address</b></td><td><b>date of birth</b></td><td><b>mobile</b></td><td><b>sex</b></td><td><b>year</b></td></tr>");
                    while(result.next())
                    {
                        out.println("<tr><td>" + result.getString("username")+"</td>");
                        out.println("<td>" + result.getString("fullname")+"</td>");
                        out.println("<td>" + result.getString("password")+"</td>");
                        out.println("<td>" + result.getString("email")+"</td>");
                        out.println("<td>" + result.getString("address")+"</td>");
                        out.println("<td>" + result.getString("dob")+"</td>");
                        out.println("<td>" + result.getString("mobile")+"</td>");
                        out.println("<td>" + result.getString("sex")+"</td>");
                        out.println("<td>" + result.getString("yea")+"</td>");
                        out.println("</tr>");
                    }
                }
                catch(Exception e)
                        {out.println(""+e);}

                try
                {
                    String qd = "select * from events, details where (events.username = details.username and huntum = true)";

                    result = state.executeQuery(qd);
                    out.println("<tr><td colspan=4><h2>Hum Tum</h2></td></tr>");
                    out.println("<tr><td><b>username</b></td><td><b>full name</b></td><td><b>password</b></td><td><b>e-mail</b></td><td><b>address</b></td><td><b>date of birth</b></td><td><b>mobile</b></td><td><b>sex</b></td><td><b>year</b></td></tr>");
                    while(result.next())
                    {
                        out.println("<tr><td>" + result.getString("username")+"</td>");
                        out.println("<td>" + result.getString("fullname")+"</td>");
                        out.println("<td>" + result.getString("password")+"</td>");
                        out.println("<td>" + result.getString("email")+"</td>");
                        out.println("<td>" + result.getString("address")+"</td>");
                        out.println("<td>" + result.getString("dob")+"</td>");
                        out.println("<td>" + result.getString("mobile")+"</td>");
                        out.println("<td>" + result.getString("sex")+"</td>");
                        out.println("<td>" + result.getString("yea")+"</td>");
                        out.println("</tr>");
                    }
                }
                catch(Exception e)
                        {out.println(""+e);}

                try
                {
                    String qd = "select * from events, details where (events.username = details.username and oorja = true)";

                    result = state.executeQuery(qd);
                    out.println("<tr><td colspan=4><h2>Oorja</h2></td></tr>");
                    out.println("<tr><td><b>username</b></td><td><b>full name</b></td><td><b>password</b></td><td><b>e-mail</b></td><td><b>address</b></td><td><b>date of birth</b></td><td><b>mobile</b></td><td><b>sex</b></td><td><b>year</b></td></tr>");
                    while(result.next())
                    {
                        out.println("<tr><td>" + result.getString("username")+"</td>");
                        out.println("<td>" + result.getString("fullname")+"</td>");
                        out.println("<td>" + result.getString("password")+"</td>");
                        out.println("<td>" + result.getString("email")+"</td>");
                        out.println("<td>" + result.getString("address")+"</td>");
                        out.println("<td>" + result.getString("dob")+"</td>");
                        out.println("<td>" + result.getString("mobile")+"</td>");
                        out.println("<td>" + result.getString("sex")+"</td>");
                        out.println("<td>" + result.getString("yea")+"</td>");
                        out.println("</tr>");
                    }
                }
                catch(Exception e)
                        {out.println(""+e);}

                try
                {
                    String qd = "select * from events, details where (events.username = details.username and pravaah = true)";

                    result = state.executeQuery(qd);
                    out.println("<tr><td colspan=4><h2>Pravaah</h2></td></tr>");
                    out.println("<tr><td><b>username</b></td><td><b>full name</b></td><td><b>password</b></td><td><b>e-mail</b></td><td><b>address</b></td><td><b>date of birth</b></td><td><b>mobile</b></td><td><b>sex</b></td><td><b>year</b></td></tr>");
                    while(result.next())
                    {
                        out.println("<tr><td>" + result.getString("username")+"</td>");
                        out.println("<td>" + result.getString("fullname")+"</td>");
                        out.println("<td>" + result.getString("password")+"</td>");
                        out.println("<td>" + result.getString("email")+"</td>");
                        out.println("<td>" + result.getString("address")+"</td>");
                        out.println("<td>" + result.getString("dob")+"</td>");
                        out.println("<td>" + result.getString("mobile")+"</td>");
                        out.println("<td>" + result.getString("sex")+"</td>");
                        out.println("<td>" + result.getString("yea")+"</td>");
                        out.println("</tr>");
                    }
                }
                catch(Exception e)
                        {out.println(""+e);}

                try
                {
                    String qd = "select * from events, details where (events.username = details.username and taarezameenpar = true)";

                    result = state.executeQuery(qd);
                    out.println("<tr><td colspan=4><h2>Taare Zameen Par</h2></td></tr>");
                    out.println("<tr><td><b>username</b></td><td><b>full name</b></td><td><b>password</b></td><td><b>e-mail</b></td><td><b>address</b></td><td><b>date of birth</b></td><td><b>mobile</b></td><td><b>sex</b></td><td><b>year</b></td></tr>");
                    while(result.next())
                    {
                        out.println("<tr><td>" + result.getString("username")+"</td>");
                        out.println("<td>" + result.getString("fullname")+"</td>");
                        out.println("<td>" + result.getString("password")+"</td>");
                        out.println("<td>" + result.getString("email")+"</td>");
                        out.println("<td>" + result.getString("address")+"</td>");
                        out.println("<td>" + result.getString("dob")+"</td>");
                        out.println("<td>" + result.getString("mobile")+"</td>");
                        out.println("<td>" + result.getString("sex")+"</td>");
                        out.println("<td>" + result.getString("yea")+"</td>");
                        out.println("</tr>");
                    }
                }
                catch(Exception e)
                        {out.println(""+e);}

                try
                {
                    String qd = "select * from events, details where (events.username = details.username and rampburn = true)";

                    result = state.executeQuery(qd);
                    out.println("<tr><td colspan=4><h2>Ramp Burn</h2></td></tr>");
                    out.println("<tr><td><b>username</b></td><td><b>full name</b></td><td><b>password</b></td><td><b>e-mail</b></td><td><b>address</b></td><td><b>date of birth</b></td><td><b>mobile</b></td><td><b>sex</b></td><td><b>year</b></td></tr>");
                    while(result.next())
                    {
                        out.println("<tr><td>" + result.getString("username")+"</td>");
                        out.println("<td>" + result.getString("fullname")+"</td>");
                        out.println("<td>" + result.getString("password")+"</td>");
                        out.println("<td>" + result.getString("email")+"</td>");
                        out.println("<td>" + result.getString("address")+"</td>");
                        out.println("<td>" + result.getString("dob")+"</td>");
                        out.println("<td>" + result.getString("mobile")+"</td>");
                        out.println("<td>" + result.getString("sex")+"</td>");
                        out.println("<td>" + result.getString("yea")+"</td>");
                        out.println("</tr>");
                    }
                }
                catch(Exception e)
                        {out.println(""+e);}

                try
                {
                    String qd = "select * from events, details where (events.username = details.username and nukkadnatak = true)";

                    result = state.executeQuery(qd);
                    out.println("<tr><td colspan=4><h2>Nukkad Natak</h2></td></tr>");
                    out.println("<tr><td><b>username</b></td><td><b>full name</b></td><td><b>password</b></td><td><b>e-mail</b></td><td><b>address</b></td><td><b>date of birth</b></td><td><b>mobile</b></td><td><b>sex</b></td><td><b>year</b></td></tr>");
                    while(result.next())
                    {
                        out.println("<tr><td>" + result.getString("username")+"</td>");
                        out.println("<td>" + result.getString("fullname")+"</td>");
                        out.println("<td>" + result.getString("password")+"</td>");
                        out.println("<td>" + result.getString("email")+"</td>");
                        out.println("<td>" + result.getString("address")+"</td>");
                        out.println("<td>" + result.getString("dob")+"</td>");
                        out.println("<td>" + result.getString("mobile")+"</td>");
                        out.println("<td>" + result.getString("sex")+"</td>");
                        out.println("<td>" + result.getString("yea")+"</td>");
                        out.println("</tr>");
                    }
                }
                catch(Exception e)
                        {out.println(""+e);}

                try
                {
                    String qd = "select * from events, details where (events.username = details.username and expertlecture = true)";

                    result = state.executeQuery(qd);
                    out.println("<tr><td colspan=4><h2>Expert Lecture</h2></td></tr>");
                    out.println("<tr><td><b>username</b></td><td><b>full name</b></td><td><b>password</b></td><td><b>e-mail</b></td><td><b>address</b></td><td><b>date of birth</b></td><td><b>mobile</b></td><td><b>sex</b></td><td><b>year</b></td></tr>");
                    while(result.next())
                    {
                        out.println("<tr><td>" + result.getString("username")+"</td>");
                        out.println("<td>" + result.getString("fullname")+"</td>");
                        out.println("<td>" + result.getString("password")+"</td>");
                        out.println("<td>" + result.getString("email")+"</td>");
                        out.println("<td>" + result.getString("address")+"</td>");
                        out.println("<td>" + result.getString("dob")+"</td>");
                        out.println("<td>" + result.getString("mobile")+"</td>");
                        out.println("<td>" + result.getString("sex")+"</td>");
                        out.println("<td>" + result.getString("yea")+"</td>");
                        out.println("</tr>");
                    }
                }
                catch(Exception e)
                        {out.println(""+e);}

                try
                {
                    String qd = "select * from events, details where (events.username = details.username and ultimateengg = true)";

                    result = state.executeQuery(qd);
                    out.println("<tr><td colspan=4><h2>Ultimate Engineering</h2></td></tr>");
                    out.println("<tr><td><b>username</b></td><td><b>full name</b></td><td><b>password</b></td><td><b>e-mail</b></td><td><b>address</b></td><td><b>date of birth</b></td><td><b>mobile</b></td><td><b>sex</b></td><td><b>year</b></td></tr>");
                    while(result.next())
                    {
                        out.println("<tr><td>" + result.getString("username")+"</td>");
                        out.println("<td>" + result.getString("fullname")+"</td>");
                        out.println("<td>" + result.getString("password")+"</td>");
                        out.println("<td>" + result.getString("email")+"</td>");
                        out.println("<td>" + result.getString("address")+"</td>");
                        out.println("<td>" + result.getString("dob")+"</td>");
                        out.println("<td>" + result.getString("mobile")+"</td>");
                        out.println("<td>" + result.getString("sex")+"</td>");
                        out.println("<td>" + result.getString("yea")+"</td>");
                        out.println("</tr>");
                    }
                }
                catch(Exception e)
                        {out.println(""+e);}

                try
                {
                    String qd = "select * from events, details where (events.username = details.username and slideride = true)";

                    result = state.executeQuery(qd);
                    out.println("<tr><td colspan=4><h2>Slide Ride</h2></td></tr>");
                    out.println("<tr><td><b>username</b></td><td><b>full name</b></td><td><b>password</b></td><td><b>e-mail</b></td><td><b>address</b></td><td><b>date of birth</b></td><td><b>mobile</b></td><td><b>sex</b></td><td><b>year</b></td></tr>");
                    while(result.next())
                    {
                        out.println("<tr><td>" + result.getString("username")+"</td>");
                        out.println("<td>" + result.getString("fullname")+"</td>");
                        out.println("<td>" + result.getString("password")+"</td>");
                        out.println("<td>" + result.getString("email")+"</td>");
                        out.println("<td>" + result.getString("address")+"</td>");
                        out.println("<td>" + result.getString("dob")+"</td>");
                        out.println("<td>" + result.getString("mobile")+"</td>");
                        out.println("<td>" + result.getString("sex")+"</td>");
                        out.println("<td>" + result.getString("yea")+"</td>");
                        out.println("</tr>");
                    }
                }
                catch(Exception e)
                        {out.println(""+e);}

                try
                {
                    String qd = "select * from events, details where (events.username = details.username and technoplacement = true)";

                    result = state.executeQuery(qd);
                    out.println("<tr><td colspan=4><h2>Techno Placement</h2></td></tr>");
                    out.println("<tr><td><b>username</b></td><td><b>full name</b></td><td><b>password</b></td><td><b>e-mail</b></td><td><b>address</b></td><td><b>date of birth</b></td><td><b>mobile</b></td><td><b>sex</b></td><td><b>year</b></td></tr>");
                    while(result.next())
                    {
                        out.println("<tr><td>" + result.getString("username")+"</td>");
                        out.println("<td>" + result.getString("fullname")+"</td>");
                        out.println("<td>" + result.getString("password")+"</td>");
                        out.println("<td>" + result.getString("email")+"</td>");
                        out.println("<td>" + result.getString("address")+"</td>");
                        out.println("<td>" + result.getString("dob")+"</td>");
                        out.println("<td>" + result.getString("mobile")+"</td>");
                        out.println("<td>" + result.getString("sex")+"</td>");
                        out.println("<td>" + result.getString("yea")+"</td>");
                        out.println("</tr>");
                    }
                }
                catch(Exception e)
                        {out.println(""+e);}

                try
                {
                    String qd = "select * from events, details where (events.username = details.username and iszac = true)";

                    result = state.executeQuery(qd);
                    out.println("<tr><td colspan=4><h2>Iszac</h2></td></tr>");
                    out.println("<tr><td><b>username</b></td><td><b>full name</b></td><td><b>password</b></td><td><b>e-mail</b></td><td><b>address</b></td><td><b>date of birth</b></td><td><b>mobile</b></td><td><b>sex</b></td><td><b>year</b></td></tr>");
                    while(result.next())
                    {
                        out.println("<tr><td>" + result.getString("username")+"</td>");
                        out.println("<td>" + result.getString("fullname")+"</td>");
                        out.println("<td>" + result.getString("password")+"</td>");
                        out.println("<td>" + result.getString("email")+"</td>");
                        out.println("<td>" + result.getString("address")+"</td>");
                        out.println("<td>" + result.getString("dob")+"</td>");
                        out.println("<td>" + result.getString("mobile")+"</td>");
                        out.println("<td>" + result.getString("sex")+"</td>");
                        out.println("<td>" + result.getString("yea")+"</td>");
                        out.println("</tr>");
                    }
                }
                catch(Exception e)
                        {out.println(""+e);}

                try
                {
                    String qd = "select * from events, details where (events.username = details.username and govindaala = true)";

                    result = state.executeQuery(qd);
                    out.println("<tr><td colspan=4><h2>Govindaa aalaa re</h2></td></tr>");
                    out.println("<tr><td><b>username</b></td><td><b>full name</b></td><td><b>password</b></td><td><b>e-mail</b></td><td><b>address</b></td><td><b>date of birth</b></td><td><b>mobile</b></td><td><b>sex</b></td><td><b>year</b></td></tr>");
                    while(result.next())
                    {
                        out.println("<tr><td>" + result.getString("username")+"</td>");
                        out.println("<td>" + result.getString("fullname")+"</td>");
                        out.println("<td>" + result.getString("password")+"</td>");
                        out.println("<td>" + result.getString("email")+"</td>");
                        out.println("<td>" + result.getString("address")+"</td>");
                        out.println("<td>" + result.getString("dob")+"</td>");
                        out.println("<td>" + result.getString("mobile")+"</td>");
                        out.println("<td>" + result.getString("sex")+"</td>");
                        out.println("<td>" + result.getString("yea")+"</td>");
                        out.println("</tr>");
                    }
                }
                catch(Exception e)
                        {out.println(""+e);}

                try
                {
                    String qd = "select * from events, details where (events.username = details.username and treasurehunt = true)";

                    result = state.executeQuery(qd);
                    out.println("<tr><td colspan=4><h2>Treasure Hunt</h2></td></tr>");
                    out.println("<tr><td><b>username</b></td><td><b>full name</b></td><td><b>password</b></td><td><b>e-mail</b></td><td><b>address</b></td><td><b>date of birth</b></td><td><b>mobile</b></td><td><b>sex</b></td><td><b>year</b></td></tr>");
                    while(result.next())
                    {
                        out.println("<tr><td>" + result.getString("username")+"</td>");
                        out.println("<td>" + result.getString("fullname")+"</td>");
                        out.println("<td>" + result.getString("password")+"</td>");
                        out.println("<td>" + result.getString("email")+"</td>");
                        out.println("<td>" + result.getString("address")+"</td>");
                        out.println("<td>" + result.getString("dob")+"</td>");
                        out.println("<td>" + result.getString("mobile")+"</td>");
                        out.println("<td>" + result.getString("sex")+"</td>");
                        out.println("<td>" + result.getString("yea")+"</td>");
                        out.println("</tr>");
                    }
                }
                catch(Exception e)
                        {out.println(""+e);}

                try
                {
                    String qd = "select * from events, details where (events.username = details.username and andhakanoon = true)";

                    result = state.executeQuery(qd);
                    out.println("<tr><td colspan=4><h2>Andhaa Kanoon</h2></td></tr>");
                    out.println("<tr><td><b>username</b></td><td><b>full name</b></td><td><b>password</b></td><td><b>e-mail</b></td><td><b>address</b></td><td><b>date of birth</b></td><td><b>mobile</b></td><td><b>sex</b></td><td><b>year</b></td></tr>");
                    while(result.next())
                    {
                        out.println("<tr><td>" + result.getString("username")+"</td>");
                        out.println("<td>" + result.getString("fullname")+"</td>");
                        out.println("<td>" + result.getString("password")+"</td>");
                        out.println("<td>" + result.getString("email")+"</td>");
                        out.println("<td>" + result.getString("address")+"</td>");
                        out.println("<td>" + result.getString("dob")+"</td>");
                        out.println("<td>" + result.getString("mobile")+"</td>");
                        out.println("<td>" + result.getString("sex")+"</td>");
                        out.println("<td>" + result.getString("yea")+"</td>");
                        out.println("</tr>");
                    }
                }
                catch(Exception e)
                        {out.println(""+e);}

                try
                {
                    String qd = "select * from events, details where (events.username = details.username and slowscooty = true)";

                    result = state.executeQuery(qd);
                    out.println("<tr><td colspan=4><h2>Slow Scooty</h2></td></tr>");
                    out.println("<tr><td><b>username</b></td><td><b>full name</b></td><td><b>password</b></td><td><b>e-mail</b></td><td><b>address</b></td><td><b>date of birth</b></td><td><b>mobile</b></td><td><b>sex</b></td><td><b>year</b></td></tr>");
                    while(result.next())
                    {
                        out.println("<tr><td>" + result.getString("username")+"</td>");
                        out.println("<td>" + result.getString("fullname")+"</td>");
                        out.println("<td>" + result.getString("password")+"</td>");
                        out.println("<td>" + result.getString("email")+"</td>");
                        out.println("<td>" + result.getString("address")+"</td>");
                        out.println("<td>" + result.getString("dob")+"</td>");
                        out.println("<td>" + result.getString("mobile")+"</td>");
                        out.println("<td>" + result.getString("sex")+"</td>");
                        out.println("<td>" + result.getString("yea")+"</td>");
                        out.println("</tr>");
                    }
                }
                catch(Exception e)
                        {out.println(""+e);}

                try
                {
                    String qd = "select * from events, details where (events.username = details.username and slowbiking = true)";

                    result = state.executeQuery(qd);
                    out.println("<tr><td colspan=4><h2>Slow Biking</h2></td></tr>");
                    out.println("<tr><td><b>username</b></td><td><b>full name</b></td><td><b>password</b></td><td><b>e-mail</b></td><td><b>address</b></td><td><b>date of birth</b></td><td><b>mobile</b></td><td><b>sex</b></td><td><b>year</b></td></tr>");
                    while(result.next())
                    {
                        out.println("<tr><td>" + result.getString("username")+"</td>");
                        out.println("<td>" + result.getString("fullname")+"</td>");
                        out.println("<td>" + result.getString("password")+"</td>");
                        out.println("<td>" + result.getString("email")+"</td>");
                        out.println("<td>" + result.getString("address")+"</td>");
                        out.println("<td>" + result.getString("dob")+"</td>");
                        out.println("<td>" + result.getString("mobile")+"</td>");
                        out.println("<td>" + result.getString("sex")+"</td>");
                        out.println("<td>" + result.getString("yea")+"</td>");
                        out.println("</tr>");
                    }
                }
                catch(Exception e)
                        {out.println(""+e);}

                try
                {
                    String qd = "select * from events, details where (events.username = details.username and tugofwar = true)";

                    result = state.executeQuery(qd);
                    out.println("<tr><td colspan=4><h2>Tug of War</h2></td></tr>");
                    out.println("<tr><td><b>username</b></td><td><b>full name</b></td><td><b>password</b></td><td><b>e-mail</b></td><td><b>address</b></td><td><b>date of birth</b></td><td><b>mobile</b></td><td><b>sex</b></td><td><b>year</b></td></tr>");
                    while(result.next())
                    {
                        out.println("<tr><td>" + result.getString("username")+"</td>");
                        out.println("<td>" + result.getString("fullname")+"</td>");
                        out.println("<td>" + result.getString("password")+"</td>");
                        out.println("<td>" + result.getString("email")+"</td>");
                        out.println("<td>" + result.getString("address")+"</td>");
                        out.println("<td>" + result.getString("dob")+"</td>");
                        out.println("<td>" + result.getString("mobile")+"</td>");
                        out.println("<td>" + result.getString("sex")+"</td>");
                        out.println("<td>" + result.getString("yea")+"</td>");
                        out.println("</tr>");
                    }
                }
                catch(Exception e)
                        {out.println(""+e);}

                try
                {
                    String qd = "select * from events, details where (events.username = details.username and shaktisamrat = true)";

                    result = state.executeQuery(qd);
                    out.println("<tr><td colspan=4><h2>Shakti Samraat</h2></td></tr>");
                    out.println("<tr><td><b>username</b></td><td><b>full name</b></td><td><b>password</b></td><td><b>e-mail</b></td><td><b>address</b></td><td><b>date of birth</b></td><td><b>mobile</b></td><td><b>sex</b></td><td><b>year</b></td></tr>");
                    while(result.next())
                    {
                        out.println("<tr><td>" + result.getString("username")+"</td>");
                        out.println("<td>" + result.getString("fullname")+"</td>");
                        out.println("<td>" + result.getString("password")+"</td>");
                        out.println("<td>" + result.getString("email")+"</td>");
                        out.println("<td>" + result.getString("address")+"</td>");
                        out.println("<td>" + result.getString("dob")+"</td>");
                        out.println("<td>" + result.getString("mobile")+"</td>");
                        out.println("<td>" + result.getString("sex")+"</td>");
                        out.println("<td>" + result.getString("yea")+"</td>");
                        out.println("</tr>");
                    }
                }
                catch(Exception e)
                        {out.println(""+e);}

                try
                {
                    String qd = "select * from events, details where (events.username = details.username and chess = true)";

                    result = state.executeQuery(qd);
                    out.println("<tr><td colspan=4><h2>Chess</h2></td></tr>");
                    out.println("<tr><td><b>username</b></td><td><b>full name</b></td><td><b>password</b></td><td><b>e-mail</b></td><td><b>address</b></td><td><b>date of birth</b></td><td><b>mobile</b></td><td><b>sex</b></td><td><b>year</b></td></tr>");
                    while(result.next())
                    {
                        out.println("<tr><td>" + result.getString("username")+"</td>");
                        out.println("<td>" + result.getString("fullname")+"</td>");
                        out.println("<td>" + result.getString("password")+"</td>");
                        out.println("<td>" + result.getString("email")+"</td>");
                        out.println("<td>" + result.getString("address")+"</td>");
                        out.println("<td>" + result.getString("dob")+"</td>");
                        out.println("<td>" + result.getString("mobile")+"</td>");
                        out.println("<td>" + result.getString("sex")+"</td>");
                        out.println("<td>" + result.getString("yea")+"</td>");
                        out.println("</tr>");
                    }
                }
                catch(Exception e)
                        {out.println(""+e);}

                try
                {
                    String qd = "select * from events, details where (events.username = details.username and streetsoccer = true)";

                    result = state.executeQuery(qd);
                    out.println("<tr><td colspan=4><h2>Street Soccer</h2></td></tr>");
                    out.println("<tr><td><b>username</b></td><td><b>full name</b></td><td><b>password</b></td><td><b>e-mail</b></td><td><b>address</b></td><td><b>date of birth</b></td><td><b>mobile</b></td><td><b>sex</b></td><td><b>year</b></td></tr>");
                    while(result.next())
                    {
                        out.println("<tr><td>" + result.getString("username")+"</td>");
                        out.println("<td>" + result.getString("fullname")+"</td>");
                        out.println("<td>" + result.getString("password")+"</td>");
                        out.println("<td>" + result.getString("email")+"</td>");
                        out.println("<td>" + result.getString("address")+"</td>");
                        out.println("<td>" + result.getString("dob")+"</td>");
                        out.println("<td>" + result.getString("mobile")+"</td>");
                        out.println("<td>" + result.getString("sex")+"</td>");
                        out.println("<td>" + result.getString("yea")+"</td>");
                        out.println("</tr>");
                    }
                }
                catch(Exception e)
                        {out.println(""+e);}

            %>
            
 <%/*
        out.println("<h2> Bheja Fry</h2>");
              try
                {
                    String qd = "select * from events, details where events.username = details.username order by bhejafry";
                    result = state.executeQuery(qd);
                    out.println("<tr><td><b>username</b></td><td><b>full name</b></td><td><b>password</b></td><td><b>e-mail</b></td><td><b>address</b></td><td><b>date of birth</b></td><td><b>mobile</b></td><td><b>sex</b></td><td><b>year</b></td></tr>");
                    while(result.next())
                    {
                        out.println("<tr><td>" + result.getString("username")+"</td>");
                        out.println("<td>" + result.getString("fullname")+"</td>");
                        out.println("<td>" + result.getString("password")+"</td>");
                        out.println("<td>" + result.getString("email")+"</td>");
                        out.println("<td>" + result.getString("address")+"</td>");
                        out.println("<td>" + result.getString("dob")+"</td>");
                        out.println("<td>" + result.getString("mobile")+"</td>");
                        out.println("<td>" + result.getString("sex")+"</td>");
                        out.println("<td>" + result.getString("yea")+"</td></tr>");
                    }
                }
                catch(Exception e)
                        {out.println(""+e);}
*/
%>



                    </table>
                </td>
                
            </tr>
        
        </table>
            <jsp:include page="../head/foot.jsp" flush="true" ></jsp:include>
    </body>
</html>
