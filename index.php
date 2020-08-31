<?php
require "helper/Helper.php";
$database = new Database();

?>
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
    <!-- 
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.css" /> -->
    <link rel="stylesheet" type="text/css" media="screen" href="font-awesome-4.6.3/css/font-awesome.css" />

    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <script src="js/main.js"></script>
</head>

<body>
    <div class="content_container">
        <!-- <div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4"> -->

        <!-- PANEL ONE -->
        <div class="item panel_one " data-panel="0">
            <div class="wrapper">
                <h1 class="hidden">Quizzer</h1>
                <div class="start_quiz">
                    Start Quiz
                </div>
            </div>

        </div>

        <div class="item panel_two hidden" data-panel="1">
            <div class="wrapper">
                <div>
                    <select name="category" id="category">
                        <option value=""></option>

                    </select>
                    <select name="category" id="category">
                        <option value=""></option>

                    </select>

                </div>

            </div>

        </div>
        <?php
        for ($i = 2; $i <= 11; $i++) {
            $panel = $i + 1;
            echo '
                <div class="item panel_' . $i . ' hidden" data-panel="' . $i . '">
                <div class="wrapper">
                    <p class="">
                        Question ' . $i . '
                    </p>
                    <div class="options">
                        <div>A. Option 1</div>
                        <div>B. Option 2</div>
                        <div>C. Option 3</div>
                        <div>D. Option 4</div>
                    </div>';
            echo '
                    <div class="next_question" data-next="' . $panel . '"> Next question</div>';
            $retVal = ($i == 0) ? '' : '<div class="next_question" data-prev="' . $i . '"> Previous question</div>';
            echo $retVal;
            echo ' 
                </div>
            </div>
          ';
        }

        ?>

        <!-- PANEL  TWENTY TWO -->
        <div class="item panel_twelve hidden" data-panel="11">
            <div class="wrapper">
                Thanks for participanting
            </div>
        </div>

        <!-- </div> -->
        <div class="error">
            Please make a selection
        </div>
        <div class="progress">
            <div class="bar"></div>
        </div>

    </div>

</body>

</html>