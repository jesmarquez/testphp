<?php
  $email = "carolina-0382@hotmail.com";
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo 'invalid email format';
  }
  exit(0);
?>
