<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <?php
    session_start();

    use App\LoginManager;
    use App\signup;

    $currentuser = "";
    $username = "";
    $password = "";
    $status = "ok";
    $message = "";
    if (!isset($_POST['check'])) {
        $status = "0";
    }
    if ($status == "ok") {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $message = LoginManager::isUsernameAndPasswordCorrect($username, $password);
        if (!$message) {
            $message = "Username Or password wrong";
        } else {
            $_SESSION['username'] = $username;
            $currentuser = $_SESSION['username'];
            $message = "Login Success";
        }
    }

    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br><br>
                <div class="row">
                    <div class="col-md-12"><h3><center>
                        <?php echo $currentuser;
                        ?>
                    </center></h3></div>
                </div>
                <center> <?php
                           
                            echo $message;
                            ?></center>
                <br>
                <form method="post">
                    <input type="hidden" name="check" value="0">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
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