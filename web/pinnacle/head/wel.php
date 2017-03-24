<!-- 
    Document   : wel
    Created on : Jan 31, 2012, 10:52:07 PM
    Author     : Shanky
-->


<?php
    $username = $_SESSION['user'];
    if($username == null)
        {
            //out.println("<input type= \"button\" class = \"box2\" value = \"register\" onclick=\"parent.location='../logreg.jsp'\" >");
   
			include("loginhead.php");
   
        }
       else
            {
            echo "<font size = 5 color = #ffffff>Welcome </font> <font size = 6 color = #00ffff> <b>"+$username+"</b></font>";
            echo "<br><input type = button class = \"box2\" value = \"logout\" onclick = \"parent.location='login/out.php'\">";
            }
?>