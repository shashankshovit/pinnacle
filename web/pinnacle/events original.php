
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>apply for events</title>
    </head>
    <body class="pinnacle">


        <%!
            Connection conection = null;
            Statement state = null;
            ResultSet result = null;
        %>
        <%
                String user = (String)session.getAttribute("user");
                if(user == null)
                    response.sendRedirect("logreg.jsp");

                
                int code = Integer.parseInt(request.getParameter("code"));

                

         try
         {


                Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
                String q = "C:\\db\\shashank.mdb";
                conection=DriverManager.getConnection("jdbc:odbc:Driver={Microsoft Access Driver (*.mdb)};Dbq="+q);
                state = conection.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE, ResultSet.CONCUR_UPDATABLE);

                

                
                String qry = "select * from events where username = '"+user+"'";
                result = state.executeQuery(qry);
                result.next();
                result.updateBoolean(code, true);
                result.updateRow();

                response.sendRedirect("index.jsp");



           }
         catch(Exception e)
         {
             
             out.println(""+e);
         }

                
    %>
    
    
    
    
    </body>
</html>
