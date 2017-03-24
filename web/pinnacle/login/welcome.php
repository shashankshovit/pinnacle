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
        <link rel="stylesheet" type="text/css" href="../css.css">
    </head>
    <body class="pinnacle" text="#ffffff">
        <table width="100%">
            <tr>
                <td colspan="5">
                    <jsp:include page ="../head/shashank.jsp" flush="true"></jsp:include>
                </td>
            </tr>
            <tr>
                <td width="10%"></td>
                <td width="35%">
                


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
                    String user = (String)session.getAttribute("user");
                    String qd = "select * from details where username ='"+user+"'";
                    
                    result = state.executeQuery(qd);
                    result.next();



                        out.println("<table>");

                        out.println("<br><br>");
                        out.println("<font color= #ffff00>");
                        out.println("<h2><tr><td>Your name </td><td class=name>:<b> " + result.getString("fullname")+"</b></td></tr>");
                        out.println("<br><tr><td>Your password </td><td>:<b> "+ result.getString("password")+"</b></td></tr>");
                        out.println("<br><tr><td><br>Your e mail </td><td>:<b> "+ result.getString("email")+"</b></td></tr>");
                        out.println("<br><tr><td>Your address </td><td>: "+ result.getString("address")+"</td></tr>");
                        out.println("<br><tr><td>Your birth date </td><td>:<b> "+ result.getString("dob")+"</b></td></tr>");
                        out.println("<br><tr><td>Your mobile </td><td>:<b> "+ result.getString("mobile")+"</b></td></tr>");
                        out.println("<br><tr><td>Your sex </td><td>:<b> "+ result.getString("sex")+"</b></td></tr>");
                    
             //       out.println("You have been registered successfully. We will contact you soon.");
                        out.println("</font>");
                        out.println("</table>");
%>
                    <br> <a href="../logreg2.jsp">update profile information</a>
                </td>
                <td width="45%">
<%
                        out.println("<font size=5 color=yellow ><b> You have been registered to following events : >></b></font>");
                        qd = "select * from events where username ='"+user+"'";
                        result = state.executeQuery(qd);
                        result.next();

                        out.println("<div style=\"color:#44ffcc;\">");

                        out.println("<table> <tr class=name style=\"color:yellow;\"> <td align = center><b>- Rann Bhumi -</b></td> <td align = center><b>- Srijan - </b></td> <td align = center><b>- Technozzz - </b></td> <td align = center><b>-Hum Mein Hai Hero- </b></td> </tr>");

                            out.println("<tr align = center>");
                            out.println("<td>");
                        if(result.getBoolean(2))
                            out.println("60 Seconds");
                            out.println("</td>");
                            out.println("<td>");
                        if(result.getBoolean(11))
                            out.println("Saaz<b>(Sargam)</b>");
                            out.println("</td>");
                            out.println("<td>");
                        if(result.getBoolean(20))
                            out.println("Expert Lecture");
                            out.println("</td>");
                            out.println("<td>");
                        if(result.getBoolean(25))
                            out.println("Govindaa Aallaa Re");
                            out.println("</td>");
                            out.println("</tr>");

                            out.println("<tr align = center>");
                            out.println("<td>");
                        if(result.getBoolean(3))
                            out.println("bheja fry");
                            out.println("</td>");
                            out.println("<td>");
                        if(result.getBoolean(12))
                            out.println("Acoustyx <b> (Unplugged)</b>");
                            out.println("</td>");
                            out.println("<td>");
                        if(result.getBoolean(21))
                            out.println("Ultimate Engineering");
                            out.println("</td>");
                            out.println("<td>");
                        if(result.getBoolean(26))
                            out.println("Treasure Hunt");
                            out.println("</td>");
                            out.println("</tr>");

                            out.println("<tr align = center>");
                            out.println("<td>");
                        if(result.getBoolean(4))
                            out.println("wah wah");
                            out.println("</td>");
                            out.println("<td>");
                        if(result.getBoolean(13))
                            out.println("Decibies<b> (Unplugged)</b>");
                            out.println("</td>");
                            out.println("<td>");
                        if(result.getBoolean(22))
                            out.println("Slide Ride");
                            out.println("</td>");
                            out.println("<td>");
                        if(result.getBoolean(27))
                            out.println("Andha Kanoon");
                            out.println("</td>");
                            out.println("</tr>");

                            out.println("<tr align = center>");
                            out.println("<td>");
                        if(result.getBoolean(5))
                            out.println("Aahwaan");
                            out.println("</td>");
                            out.println("<td>");
                        if(result.getBoolean(14))
                            out.println("Qawwali/ Sufi<b> (Concert)</b>");
                            out.println("</td>");
                            out.println("<td>");
                        if(result.getBoolean(23))
                            out.println("Techno Placement");
                            out.println("</td>");
                            out.println("<td>");
                        if(result.getBoolean(28))
                            out.println("Slow Scooty Race");
                            out.println("</td>");
                            out.println("</tr>");

                            out.println("<tr align = center>");
                            out.println("<td>");
                        if(result.getBoolean(6))
                            out.println("Adaa Adaa");
                            out.println("</td>");
                            out.println("<td>");
                        if(result.getBoolean(15))
                            out.println("Hum Tum <b>(Dhoom)</b>");
                            out.println("</td>");
                            out.println("<td>");
                        if(result.getBoolean(24))
                            out.println("Iszac");
                            out.println("</td>");
                            out.println("<td>");
                        if(result.getBoolean(29))
                            out.println("Slow Biking");
                            out.println("</td>");
                            out.println("</tr>");

                            out.println("<tr align = center>");
                            out.println("<td>");
                        if(result.getBoolean(7))
                            out.println("Matha Pachchi");
                            out.println("</td>");
                            out.println("<td>");
                        if(result.getBoolean(16))
                            out.println("Oorja <b>(Dhoom)</b>");
                            out.println("</td>");
                            out.println("<td>");
                        //if(result.getBoolean(""))
                            out.println("");
                            out.println("</td>");
                            out.println("<td>");
                        if(result.getBoolean(30))
                            out.println("Tug of War");
                            out.println("</td>");
                            out.println("</tr>");

                            out.println("<tr align = center>");
                            out.println("<td>");
                        if(result.getBoolean(8))
                            out.println("Cat o'Nine Tales");
                            out.println("</td>");
                            out.println("<td>");
                        if(result.getBoolean(17))
                            out.println("Pravaah <b>(Dhoom)</b>");
                            out.println("</td>");
                            out.println("<td>");
                        //if(result.getBoolean(""))
                            out.println("");
                            out.println("</td>");
                            out.println("<td>");
                        if(result.getBoolean(31))
                            out.println("Shakti Samrat");
                            out.println("</td>");
                            out.println("</tr>");

                            out.println("<tr align = center>");
                            out.println("<td>");
                        if(result.getBoolean(9))
                            out.println("Sampaadan");
                            out.println("</td>");
                            out.println("<td>");
                        if(result.getBoolean(18))
                            out.println("Spectrum <b>(Dhoom)</b>");
                            out.println("</td>");
                            out.println("<td>");
                        //if(result.getBoolean(""))
                            out.println("");
                            out.println("</td>");
                            out.println("<td>");
                        if(result.getBoolean(32))
                            out.println("Chess");
                            out.println("</td>");
                            out.println("</tr>");

                            out.println("<tr align = center>");
                            out.println("<td>");
                        if(result.getBoolean(10))
                            out.println("Jhalak");
                            out.println("</td>");
                            out.println("<td>");
                        if(result.getBoolean(19))
                            out.println("Nukkad Natak");
                            out.println("</td>");
                            out.println("<td>");
                        //if(result.getBoolean(""))
                            out.println("");
                            out.println("</td>");
                            out.println("<td>");
                        if(result.getBoolean(33))
                            out.println("Street Soccer");
                            out.println("</td>");
                            out.println("</tr>");

                            out.println("<tr align = center>");
                            out.println("<td>");
                        //if(result.getBoolean(10))
                            out.println("");
                            out.println("</td>");
                            out.println("<td>");
                        if(result.getBoolean(34))
                            out.println("Taare Zameen Par");
                            out.println("</td>");
                            out.println("<td>");
                        //if(result.getBoolean(""))
                            out.println("");
                            out.println("</td>");
                            out.println("<td>");
                        //if(result.getBoolean(33))
                            out.println("");
                            out.println("</td>");
                            out.println("</tr>");

                            out.println("<tr align = center>");
                            out.println("<td>");
                        //if(result.getBoolean(10))
                            out.println("");
                            out.println("</td>");
                            out.println("<td>");
                        if(result.getBoolean(35))
                            out.println("Ramp Burn");
                            out.println("</td>");
                            out.println("<td>");
                        //if(result.getBoolean(""))
                            out.println("");
                            out.println("</td>");
                            out.println("<td>");
                        //if(result.getBoolean(33))
                            out.println("");
                            out.println("</td>");
                            out.println("</tr>");

                        out.println("</table>");

                        out.println("</div>");
%>
</td>
<td width="10%"></td>
<%
                }
                catch(Exception e)
                        {out.println(""+e);}
%>




                
            </tr>
        
        </table>
            <jsp:include page="../head/foot.jsp" flush="true" ></jsp:include>
    </body>
</html>
