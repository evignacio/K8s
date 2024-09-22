<?php
    header('Content-type: text/plain');
    
    echo "Server UP - V3 - Welcome ". getenv("name", true) ." !! \n";
    echo "My family is: ". file_get_contents('/var/www/html/file/myfamily.txt'). "\n" ;
    echo "That's my secret content: Username ". getenv("username"). ", Password ". getenv("password")
?>
