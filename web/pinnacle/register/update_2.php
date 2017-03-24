<!-- 
    Document   : register
    Created on : Feb 14, 2012, 2:58:26 AM
    Author     : Shanky
-->

<%@page contentType="text/html" pageEncoding="UTF-8" import="java.sql.*"%>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">



<%!
        Connection conection = null;
        Statement state = null;
        ResultSet result = null;


%>
<%

        int day,month,year;

       out.println("<h1>Working till now</h1>");
        try
        {
        Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
        String s = "C:\\db\\shashank.mdb";
        conection = DriverManager.getConnection("jdbc:odbc:Driver={Microsoft Access Driver (*.mdb)};Dbq="+s);
        state = conection.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE, ResultSet.CONCUR_UPDATABLE);
                    String user = (String)session.getAttribute("user");
                    out.println("<h1>Working</h1>");
                    
                    String qd = "select * from details where username ='"+user+"'";
                    
                    result = state.executeQuery(qd);
                    result.next();
                    
                //String d = ""+year+"-"+month+"-"+day;
                //java.sql.Date date = java.sql.Date.valueOf(d);
                }catch(Exception e){out.println(""+e);}
%>




<form method = post action = "register/registering.jsp">
    <table class = "boundary" width="100%">
        <tr >
            <td colspan = 4 align = center> <h1 class = "test">Update Your Information</h1> </td>
        </tr>
        <tr align = right>
            <td>Name :</td>
            <td><input type="text" class="box" value ="<%= result.getString("fullname") %>" name = "name" id ="name" onfocus="clear(this)"></td>
            <td>Username :</td>
            <td><input type = text class="box" name = "username" id = "username" value= "<%= result.getString("username") %>" onfocus="clear(this)"></td>
            
        </tr>
        <tr align = right>
            <td>Password :</td>
            <td><input type = password class="box" name = "password" id = "password"></td>
            <td>Confirm password :</td>
            <td><input type = password class="box" name = "cpassword" id  = "cpassword"></td>
        </tr>
        <tr align = right>
            <td>E - m@il :</td>
            <td><input type = text name = "mail" id = "mail" class="box" value="<%= result.getString("email") %>"></td>
            <td>Retype e - m@il :</td>
            <td><input type = text name = "cmail" id  = "cmail" class="box"></td>
        </tr>

        <tr align = right>
            <td>
                Year :
            </td>
            <td>
                I: <input type="radio" name="yea" id="yea" value="I" <% if(result.getString("yea")=="I"){out.println("checked");} %>>
                II: <input type="radio" name="yea" id="yea" value="II" <% if(result.getString("yea")=="II"){out.println("checked");} %>>
                III: <input type="radio" name="yea" id="yea" value="III" <% if(result.getString("yea")=="III"){out.println("checked");} %>>
                IV: <input type="radio" name="yea" id="yea" value="IV" <% if(result.getString("yea")=="IV"){out.println("checked");} %>>
            </td>
            <td rowspan = 5>Address :</td>
            <td  rowspan = 5><textarea rows = 5 cols = 15 name = "address" id = "address" class="box" onfocus="clear(this)"><%= result.getString("address") %></textarea></td>

        </tr>
        <tr align = right>
            <td>Sex :</td>
            <td>Male<input type = radio name = "sex" id = "sex" value = "male" <% if(result.getString("sex")=="male"){out.println("checked");} %>>
                Female<input type = radio name = "sex" id = "sex" value = "female" <% if(result.getString("sex")=="female"){out.println("checked");} %>>
                
            </td>
        </tr>

        <tr align = right>
            <td>date of birth :</td>
            <td>

                <select name = "day" id  = "day" class="box1">
                    <option value = 01>dd</option>
			<script language = "javascript">
			for(i=1;i<=31;i++)
				{
					document.write("<option value = "+ i + "> "+ i + "</option>");
				}
			</script>
                </select>
                <select name = "month" id  = "month" class="box1">
                        <option value = 01>mm</option>
			<option value = 01>january</option>
			<option value = 02>february</option>
			<option value = 03>march</option>
			<option value = 04>april</option>
			<option value = 05>may</option>
			<option value = 06>june</option>
			<option value = 07>july</option>
			<option value = 08>august</option>
			<option value = 09>september</option>
			<option value = 10>october</option>
			<option value = 11>november</option>
			<option value = 12>december</option>
		</select>
                <select id = "year" name = "year" class="box1">
			<option value = 1980>yyyy</option>

                        <script language = "javascript">
                                y = new Date();
                                    for(i=1981;i<= y.getFullYear();i++)
					document.write("<option value = " +i+ ">" + i + "</option>");
			</script>
		</select>
            </td>

        </tr>
        <tr align="right">
            <td>Mobile :</td>
            <td><input type = text name = "mobile" id  = "mobile" value = "your mob no here" class="box" onfocus="clear(this)"></td>
        </tr>

        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr>
            <td></td>
            <td></td>

            <td colspan = 2 align = center>
                <input type = submit value = "register" class="box2" onmouseover="register_validation()">
                <input type = reset value = "reset" class="box2">
            </td>
        </tr>
    </table>
</form>










<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>registering ...</title>

    </head>
    <body>

