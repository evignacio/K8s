<?php
    echo "Server UP - V3 - Welcome ". getenv("name", true) ." !!";

    echo "My family is: ". file_get_contents('/var/www/html/file/myfamily.txt');
?>