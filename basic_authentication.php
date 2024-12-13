<?php

define("USERNAME", "admin");
define("PASSWORD", "1234");

echo "Enter username: ";
$inputUserName = readline();

echo "Enter password: ";
$inputPassword = readline();

if ($inputUserName === USERNAME && $inputPassword ===PASSWORD) {
    echo "Login success!";
} else {
    echo "Invalid userrname or password.";
}
