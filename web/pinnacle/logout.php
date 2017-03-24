<!-- 
    Document   : logout
    Created on : Jan 31, 2012, 11:09:36 PM
    Author     : Shanky
-->

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>logging out ... </title>
        <script language="javascript">
            
                    function al()
                    {
                        alert("Successfully logged out");
                    }
        </script>

        

    </head>
    <body  onload="al()">
        <div id="wait"></div>
        <?php
          header('Location:"index.php"');
        ?>
        
    </body>
</html>
