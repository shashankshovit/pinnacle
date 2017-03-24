<%-- 
    Document   : links
    Created on : Feb 12, 2012, 12:22:42 PM
    Author     : Shanky
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<%

String username = (String)session.getAttribute("user");

%>
<table>
    <tr>
        <td width="30%" align="center"  class="links">
            <div onmouseover="" ><font face="Algerian" size="5" color="#000000"><a onclick="parent.location='login/welcome.jsp'"><% if(username != null) out.println("VISIT PROFILE");%></a></font></div>
        </td>
        <td rowspan="6" width="35%"><div id="1"></div></td>
        <td rowspan="6" width="35%"><div id="2"></div></td>

    </tr>
    <tr>
        <td width="30%" align="center" class="links">
            <div onmouseover="litertica()" ><font face="Algerian" size="5" color="#000000">RANNBHUMI</font></div>
        </td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td width="30%" align="center">
            <div onmouseover="tarang()"><font face="Algerian" size="5" color="#000000">SRIJAN</font></div>
        </td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td width="30%" align="center">
            <div onmouseover="techno()" id="home"><font face="Algerian" size="5" color="#000000">Technozzz</font></div>
        </td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td width="30%" align="center">
            <div onmouseover="hum()" id="home"><font face="Algerian" size="5" color="#000000">Hum Mein Hain Hero</font></div>
        </td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td width="30%" align="center">
            <div onmouseover="contact()" id="home"><font face="Algerian" size="5" color="#000000">Contact Us</font></div>
        </td>
        <td></td>
        <td></td>
    </tr>

</table>

