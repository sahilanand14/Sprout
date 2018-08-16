<?php
session_start();




session_destroy(); /*destroy the session*/
echo "<script>window.open('index.php','_self')</script>"

?>


<!-- this page destroys session and takes user to homepage -->