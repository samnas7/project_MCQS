<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Quizzer </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- js -->
    <script src="js/jquery-1.10.2.js"></script>
    <!-- <script src="js/bootstrap.js"></script> -->

    <!-- css -->

    <link rel="stylesheet" type="text/css" media="screen" href="css/site.css" />

</head>

<body>
    <div class="content_container">

        <nav>
            <div class="">
                <ul class="nav">
                    <li><a class="active" href="/">Home</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="register.php">Register</a></li>
                    <li><a href=""></a></li>
                </ul>
            </div>
        </nav>
        <div class="well">
            <form action="" method="POST">
                <div>
                    <label for="username">Username</label>
                    <input required type="text" name="username" id="">
                </div>
                <div>
                    <label for="password">Password</label>
                    <input required type="password" name="password" id="">
                </div>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        require 'helper/Database.php';
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $data = [
            'user_name' => trim($_POST['user_name']),
            'password' => trim($_POST['password']),
            'user_name_err' => '',
            'password_err' => '',

        ];
        # code...
        $sql = "INSERT INTO profiles VALUES (NULL,'" . $data['user_name'] . "', '" . $data['password'] . "',NULL, NULL)";
    }
    ?>


</body>

</html>