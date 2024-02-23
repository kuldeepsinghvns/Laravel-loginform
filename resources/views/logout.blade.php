<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>

<body>
    <?php
    session_start();
    session_destroy();
    
    header("Location:login");
    // exit();

    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <center><h1>Logout</h1></center>
                <br>
                
                    <center><a  href="login">Login </a></center>
               
            </div>
        </div>
    </div>

</body>

</html>