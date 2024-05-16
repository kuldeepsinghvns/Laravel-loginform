<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../pics/todo2.jpg">
    <meta property="og:image" content="https://kuldeepsinghvns.github.io/JavaScript/pics/todo2.jpg">
    <title>Sign Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link href='https://fonts.googleapis.com/css?family=Abril Fatface' rel='stylesheet'>


    <style>
        /* Animation */

        .spin {
            position: static;
            left: 20px;
            top: 100%;
            width: 200px;
            animation-name: spin;
            animation-duration: 5s;
            animation-iteration-count: infinite;
            /* animation-direction: alternate; */
            animation-fill-mode: both;


        }


        @keyframes spin {
            0% {
                transform: rotate3d(0, 1, 0, 0deg);
                opacity: 10%;

            }

            100% {
                transform: rotate3d(0, 1, 0, 360deg);
                opacity: 100%;

            }
        }





        body {
            background-color: #e0ffff;
            font-family: 'etalic';
            font-size: 22px;

        }

        .todo {
            margin-top: 10px;
            background-color: #ff69b4;
            border-style: solid;
            border-color: 5px #e0ffff;
            color: azure;
            box-shadow: 0px 13px 30px rgba(132, 98, 98, 0.856);
        }

        .box {
            background-color: white;
            box-shadow: 0px 13px 30px rgba(108, 105, 105, 0.544);
            border-radius: 5px;

        }

        .onclick {
            background-color: #53d769;
            color: black;
            font-size: 100%;
            border-radius: 50px;




        }




        .btn {
            background-color: rgba(14, 235, 87, 0.582);
            width: 100%;
            color: black;
            font-style: normal;
            font-size: larger;
            box-shadow: 0px 13px 30px rgba(108, 105, 105, 0.544);


        }

        .btn:hover {
            background-color: red;
            box-shadow: 0px 13px 30px rgba(108, 105, 105, 0.544);
            font-style: normal;
            font-size: larger;
        }




        .input {
            background-color: azure;
            width: 100%;
            height: 40px;
            border-radius: 5px;
            border-style: solid;
        }
    </style>
</head>


<body>

    <?php

    use App\Ecommerce;
    use App\LoginManager;

    $name = "";
    $email = "";
    $password = "";
    $status = "ok";
    $message = "";
    if (!isset($_POST['check'])) {
        $status = "0";
    }
    if ($status == "ok") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password = trim($password);
        $message = LoginManager::checkpassword($password);
        if (!$message) {
            $status = "1";
        } else {
            $Ecommerce = new Ecommerce();
            $Ecommerce->name = $name;
            $Ecommerce->email = $email;
            $Ecommerce->password = $password;
        }
        if ($status == "ok") {
            $Ecommerce->save();
            $message = "Signup Successfully";
            header("Location:ecommercelogin");
            exit;
        } else {
            $message = "Password less than 6 characters";
        }
    }




    ?>
    <div class="container ">
        <center>
            <div class="row todo">
                <div class="col-md-12">
                    <center>
                        <h1 class="spin">Sign Up</h1>
                    </center>
                </div>
            </div>
            <br>
            <div class="row ">
                <div class="col-md-12">
                    <center>
                        <h4><?php echo $message; ?></h4>
                    </center>
                </div>
            </div>
            <br>
            <form action="" method="post">
                <div class="row box">
                    <div class="col-md-12 ">
                        <input type="hidden" name="check" value="0">
                        <!-- @csrf -->
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <h3>Name </h3> <input class="input " type="text" name="name" placeholder="Name" required />
                        <br>
                        <h3>Email </h3> <input class="input " type="email" name="email" placeholder="Email" required />

                        <h3>Password </h3> <input class="input " type="password" name="password" placeholder="Password" required />
                        <br><br>
                    </div>
                </div>
                <br>

                <div class="row ">
                    <div class="col-md-12">
                        <button class="btn" name="submit" value="submit">
                            <h5>SignUp</h5>
                        </button>
                    </div>
                </div>
                <br>
            </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>