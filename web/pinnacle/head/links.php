<!-- 
    Document   : links
    Created on : Feb 12, 2012, 12:22:42 PM
    Author     : Shanky
-->
<?php

$username = $_SESSION['user'];

?>
<table>
    <tr>
        <td width="30%" align="center" class="linksleft">
            <table>
                <tr>
                    <td>
                        <div onmouseover="home()">
                            <a onclick="parent.location='login/welcome.jsp'"><?php if(username != null) echo "VISIT PROFILE"; ?></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div onmouseover="litertica()" >RANNBHUMI</div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div onmouseover="tarang()">
                            SRIJAN
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div onmouseover="techno()">
                            TECHNOZZZ
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div onmouseover="hum()">
                            HUM MEIN HAI HERO
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div onmouseover="contact()">
                            contact us
                        </div>
                    </td>
                </tr>
            </table>
        </td>
        <td width="35%">
            <div id="1">
            <table>
                <tr>
                    <td>

                    </td>
                </tr>
            </table>

            </div>
        </td>
        <td width="35%">
            <div id="2">
            <table>
                <tr>
                    <td>

                    </td>
                </tr>
            </table>

            </div>
        </td>
    </tr>
    
</table>

