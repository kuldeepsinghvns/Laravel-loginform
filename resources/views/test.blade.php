<?php

use App\LoginManager;
$password="123";

$password = trim($password);
$message = LoginManager::checkpassword($password);
if (!$message) {
    $status = "1";
    $message = "password  less than 6 characters";
    
    echo "error";
} else {
    
    echo "success";
}

?>


