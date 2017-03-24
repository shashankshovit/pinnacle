<%-- 
    Document   : wel
    Created on : Jan 31, 2012, 10:52:07 PM
    Author     : Shanky
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<%
    String username = (String)session.getAttribute("user");
    if(username == null)
        {
            //out.println("<input type= \"button\" class = \"box2\" value = \"register\" onclick=\"parent.location='../logreg.jsp'\" >");
   %>
   <jsp:include page="loginhead.jsp"></jsp:include>
   <%
        }
       else
            {
            out.println("<font size = 5 color = #ffffff>Welcome </font> <font size = 6 color = #00ffff> <b>"+username+"</b></font>");
            out.println("<br><input type = button class = \"box2\" value = \"logout\" onclick = \"parent.location='login/out.jsp'\">");
            }
%>