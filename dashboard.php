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
                    <div class="tables" id="table_questions">
                        <table>
                            <thead>
                                <tr>
                                    <th>Questions</th>
                                    <th> Correct Answers</th>
                                    <th>Dummy Answers 1 </th>
                                    <th>Dummy Answers 2</th>
                                    <th>Dummy Answers 3</th>
                                    <th>View </th>
                                    <th>Edit </th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>John mary@example. john@example.com july@example.com</td>
                                    <td>Doe</td>
                                    <td>Mary</td>
                                    <td>Moe</td>
                                    <td>Moer</td>
                                    <td> <a href="#" class="btn btn-view">View</a> </td>
                                    <td> <a href="#" class="btn btn-view">Edit</a> </td>
                                    <td> <a href="#" class="btn btn-delete">Delete</a></td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <div class="tables" id="table_profiles">
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th> Password</th>
                                    <th>Score </th>
                                    <th>Role</th>
                                    <th>View </th>
                                    <th>Edit </th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>John mary@example. john@example.com july@example.com</td>
                                    <td>Doe</td>
                                    <td>Mary</td>
                                    <td>Moe</td>

                                    <td> <a href="#" class="btn btn-view">View</a> </td>
                                    <td> <a href="#" class="btn btn-view">Edit</a> </td>
                                    <td> <a href="#" class="btn btn-delete">Delete</a></td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <div class="tables" id="table_stories">
                        <table>
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Story</th>
                                    <th> Category</th>
                                    <th>View </th>
                                    <th>Edit </th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        writing, Professor Howe, is never sure how to grade his work as his writing is “always on the edge of sense and doesn’t quite make it (Trilling, 1979, p. 291).” In other words, the manner in which he strings his words and ideas together does not express a complete, coherent thought. Tertan has no friends among his classmates and his choices often lead his classmates to be confused about his behavior. Whenever Tertan wanted to speak or answer a question in class he would rise and bow rather than raise his hand. He also never wore the casual sweaters and pants of his classmates, but came to each class attired in a suit. Tertan is not particularly bothered by the fact that his classmates laugh when he rises to speak, if he is aware of their laughing at all.
                                    </td>
                                    <td>Doe</td>

                                    <td> <a href="#" class="btn btn-view">View</a> </td>
                                    <td> <a href="#" class="btn btn-view">Edit</a> </td>
                                    <td> <a href="#" class="btn btn-delete">Delete</a></td>
                                </tr>
                            </tbody>
                        </table>

                    </div>

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