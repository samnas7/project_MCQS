<?php
if (true) {
    # code...
    require 'helper/Database.php';
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

        <link rel="stylesheet" type="text/css" media="screen" href="css/site.css" />

    </head>

    <body>

        <ul class="dash_nav">
            <li><a class="active" href="dashboard.php">Home</a></li>
            <li><a href="#table_questions">View Questions</a></li>
            <li><a href="#table_profiles">View Profiles</a></li>
            <li><a href="#table_stories">View Stories</a></li>
        </ul>

        <div class="dash_body">
            <div>
                <!-- col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 -->
                <div id="tables_box">
                    <h2>Create question</h2>
                    <form action="add.php" method="post">
                        <div>
                            <div>
                                <select name=" story" id="story">
                                    <?php
                                    $sql = "SELECT * FROM stories";
                                    $results = $database->FetchAll($sql);
                                    /**/
                                    foreach ($results as $result) {
                                        $story_title = htmlentities($result->title);
                                        $story_id = htmlentities($result->id);
                                        echo '<option value="' . $story_id . '">' . $story_title . '</option>';
                                    }
                                    ?>
                                    <?php

                                    ?>
                                </select>

                            </div>
                            <div>
                                <label for=" correct_answer">Answer Correct option</label>
                                <input type="text" name="correct_answer" class="form-control">
                            </div>
                        </div>
                        <div>
                            <div>
                                <label for="incorrect_answer_1">Answer Correct option</label>
                                <input type="text" name="incorrect_answer_1" class="form-control">
                            </div>
                        </div>
                        <div>
                            <div>
                                <label for="incorrect_answer_2">Answer Correct option</label>
                                <input type="text" name="incorrect_answer_2" class="form-control">
                            </div>
                        </div>
                        <div>

                            <div>
                                <label for="incorrect_answer_3">Answer Correct option</label>
                                <input type="text" name="incorrect_answer_3" class="form-control">
                            </div>
                        </div>
                        <div>
                            <div>
                                <label for="question">Question</label>
                                <textarea name="question" id="" class="form-control" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div>
                            <input type="submit" class="btn-success ">
                        </div>
                    </form>
                </div>
                <?php

                if ($_SERVER['REQUEST_METHOD'] == 'POST') {


                    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                    $data = [
                        'correct_answer' => trim($_POST['correct_answer_2']),
                        'incorrect_answer_1' =>  trim($_POST['incorrect_answer_1']),
                        'incorrect_answer_2' => trim($_POST['incorrect_answer_2']),
                        'incorrect_answer_3' =>  trim($_POST['incorrect_answer_3']),
                        'question' => trim($_POST['question']),
                        'story_id' => trim($_POST['story']),

                        'correct_err' => '',
                        'incorrect_answer_1_err' => '',
                        'incorrect_answer_2_err' => '',
                        'incorrect_answer_3_err' => '',
                        'question_err' => '',
                        'story_err' => '',

                    ];
                    $sql = "INSERT INTO profiles VALUES (NULL,'" . $data['correct_answer'] . "'
                , '" . $data['incorrect_answer_1'] . "','" . $data['incorrect_answer_2'] . "', 
                '" . $data['incorrect_answer_3'] . "','" . $data['question'] . "', '" . $data['story_id'] . "')";
                    if ($database->Insert($sql)) {
                        echo "<script>alert('Added Successfully')</script>";
                        $url = "dashboard.php";
                        header('Location: ' . $url, true);
                        die();
                    } else {
                        echo "<script>alert('Registered successfully')</script>";
                    }
                }
                ?>
            </div>

        </div>

    </body>

    </html>
<?php
} else {
    # code...
}
?>