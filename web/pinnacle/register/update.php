<!-- 
    Document   : register
    Created on : Feb 14, 2012, 2:58:26 AM
    Author     : Shanky
-->



<%!
        Connection conection = null;
        Statement state = null;
        ResultSet result = null;


%>
<% String username = (String)session.getAttribute("user"); %>
<%
        String yea;
        int day,month,year;
        
        try
        {
        Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
        String s = "C:\\db\\shashank.mdb";
        conection = DriverManager.getConnection("jdbc:odbc:Driver={Microsoft Access Driver (*.mdb)};Dbq="+s);
        state = conection.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE, ResultSet.CONCUR_UPDATABLE);
                    String user = (String)session.getAttribute("user");
       
                    
                    String qd = "select * from details where username ='"+user+"'";
                    
                    result = state.executeQuery(qd);
                    result.next();

                     

                //String d = ""+year+"-"+month+"-"+day;
                //java.sql.Date date = java.sql.Date.valueOf(d);
                }catch(Exception e){out.println(""+e);}
%>


    <%      yea = result.getString("yea");  %>

<form method = post action = "register/updating.jsp">
    <table class = "boundary" width="100%">
        <tr >
            <td colspan = 4 align = center> <h1 class = "test">Update Your Information</h1> </td>
        </tr>
        <tr align = right>
            <td>Name :</td>
            <td><input type="text" class="box" value ="<%= result.getString("fullname") %>" name = "name" id ="name"></td>
            <td>Username :</td>
            <td><input type = text class="boxx" name = "username" disabled id = "username" value= "<%= result.getString("username") %>" onfocus="clear(this)"></td>
            
        </tr>
        <tr align = right>
            <td>Password :</td>
            <td><input type = password class="box" name = "password" id = "password" value="<%= result.getString("password") %>"></td>
            <td>E - m@il :</td>
            <td><input type = text name = "mail" id = "mail" class="box" value="<%= result.getString("email") %>"></td>
        </tr>
        <tr align = right>
            <td>Confirm Password :</td>
            <td><input type = password class="box" name = "cpassword" id = "cpassword"></td>
            <td rowspan = 5>Address :</td>
            <td  rowspan = 5><textarea rows = 5 cols = 15 name = "address" id = "address" class="box"><%= result.getString("address") %></textarea></td>

        </tr>

        <tr align = right>
            <td>
                Year :
            </td>
            <td align="center">
                I: <input type="radio" name="yea" id="yea" value="I" <% if(yea.equals("I")){out.print("checked");} %>>
                II: <input type="radio" name="yea" id="yea" value="II" <% if(yea.equals("II")){out.print("checked");} %>>
                III: <input type="radio" name="yea" id="yea" value="III" <% if(yea.equals("III")){out.print("checked");} %> >
                IV: <input type="radio" name="yea" id="yea" value="IV" <% if(yea.equals("IV")){out.print("checked");} %>>
            </td>
            <td></td>
            <td></td>
        </tr>
        <tr align = right>
            <td>Sex :</td>
            <td align="center">Male<input type = radio name = "sex" id = "sex" value = "male" <% if(result.getString("sex").equals("male")){out.print("checked");} %>>
                Female<input type = radio name = "sex" id = "sex" value = "female" <% if(result.getString("sex").equals("female")){out.print("checked");} %>>
                
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
            <td><input type = text name = "mobile" id  = "mobile" value = "<%= result.getString("mobile") %>" class="box"></td>
        </tr>


        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr>
            <td></td>
            <td></td>

            <td colspan = 2 align = center>
                <input type = submit value = "update" class="box2" onmouseover="register_validation()">
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

