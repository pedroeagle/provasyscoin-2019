<?php
$user = explode('/', $_GET['user'])[0];
$pass = explode('/', $_GET['password'])[0];
echo "Location: provasyscoin?user=".$user."&password=".$pass;
header("Location: provasyscoin?user=".$user."&password=".$pass);
exit(0);
?>