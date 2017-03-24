<%-- 
    Document   : register
    Created on : Feb 14, 2012, 2:58:26 AM
    Author     : Shanky
--%>

<%@page contentType="text/html" pageEncoding="UTF-8" import="java.sql.*"%>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<%
            String uu=request.getParameter("username");
            boolean flag=false;
            try{
            shashank.Connect cn = new shashank.Connect();
            ResultSet r = cn.getResultSet("select username from login");
            while(r.next())
                {
                    if(uu==r.getString(1))
                        {out.println("Username already exists");flag=true;break;}

                }
            if(flag)
                out.println("<jsp:forward page=\"../logreg2.jsp\"></jsp:forward>");
            else
                out.println("<jsp:forward page=\"registering.jsp\"></jsp:forward>");
            }catch(Exception e){out.println(""+e);}
%>