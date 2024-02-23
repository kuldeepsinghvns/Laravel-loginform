<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>

<body>
    <?php

    use App\LoginManager;
    use App\signup;

    $name = "";
    $username = "";
    $password = "";
    $status = "ok";
    $message = "";
    if (!isset($_POST['check'])) {
        $status = "0";
    }
    if ($status == "ok") {
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password = trim($password);
        $message = LoginManager::checkpassword($password);
        if (!$message) {
            $status = "1";
            // $message = "password  less than 6 characters";
        } else {
            $signup = new signup();
            $signup->name = $name;
            $signup->username = $username;
            $signup->password = $password;
        }


        if ($status=="ok") {
            $signup->save();
            $message = "Create username and password successfully";
        } else {
            $message = "Password less than 6 characters";
        }
    }

    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br><br>
                <center> <?php
                            echo $message;
                            ?></center>
                <br>
                <form method="post">
                    <input type="hidden" name="check" value="0">
                    @csrf
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <label>Name</label>
                    <input type="text" name="name">
                    <label>UserName</label>
                    <input type="text" name="username">
                    <label>Password</label>
                    <input type="text" name="password">
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>