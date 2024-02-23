<?php

namespace App;

use Exception;
use App\signup;



class LoginManager
{

    public static function isUsernameAndPasswordCorrect($username, $password)
    {

        $user = signup::where('username', $username)->where("password", $password)->first();

        if ($user == null) {
            return false;
        }
        return true;
    }

    public static function checkpassword($password)
    {
        $password = trim($password);
        if (strlen($password) >= 6) {
            return true;
        } else {
            return false;
        }
    }

    // public static function get_current_user()
    // {
    //     if (isset($_SESSION['username'])) {
    //         $currentuser = $_SESSION['username'];
    //         return $currentuser;
    //     } else {
    //         return "";
    //     }
    // }
}
