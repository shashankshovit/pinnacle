<%-- 
    Document   : out
    Created on : Jan 31, 2012, 11:41:12 PM
    Author     : Shanky
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<script language="javascript">
    function (){alert("sucessfully logged out");}
</script>
<%
    session.invalidate();
    response.sendRedirect("../index.jsp");
%>