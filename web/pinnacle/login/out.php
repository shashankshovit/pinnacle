<!-- 
    Document   : out
    Created on : Jan 31, 2012, 11:41:12 PM
    Author     : Shanky
-->

<script language="javascript">
    function (){alert("sucessfully logged out");}
</script>
<?php
    session_destroy();
    header('Location:"../index.php"');
?>