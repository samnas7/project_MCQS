<?php
if (true) {
    # code...

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
                    <form action="helper/question.php" method="post">
                        <div ">
                            <div >
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

        </div>

        </div>

    </body>

    </html>
<?php
} else {
    # code...
}
?>