<%@page contentType="text/html" import="java.sql.*"%>
<%@page pageEncoding="UTF-8"%>


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
        DriverManager.getConnection("jdbc:odbc:Driver={Microsoft Access Driver (*.mdb)};Dbq="+s);
        state = conection.createStatement();
        }catch(Exception e){out.println(""+e);}
%>
