<?php
require "Database.php";

$database = new Database();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    # code...
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    //var_dump($_POST);
    $data = [

        'correct' => trim($_POST['correct']),
        'incorrect_1' => trim($_POST['incorrect_1']),
        'incorrect_2' => trim($_POST['incorrect_2']),
        'incorrect_3' => trim($_POST['incorrect_3']),
        'question' => trim($_POST['question']),
        'story_id' => trim($_POST['story_id']),
        'correct_err' => '',
        'incorrect_1_err' => '',
        'incorrect_2_err' => '',
        'incorrect_3_err' => '',
        'question_err' => '',
        'story_id_err' => ''
    ];

    if (
        empty($data['correct']) && empty($data['incorrect_1']) && empty($data['incorrect_2'])
        && empty($data['incorrect_3']) && empty($data['question']) && empty($data['story_id'])
    ) {
        /* 
        $sql = "INSERT INTO careers VALUES (NULL,'" . $data['correct'] . "', '" . $data['incorrect_1'] . "', '" . $data['incorrect_2'] . "', '" .
        $data['incorrect_3'] . "', '" . $data['question'] . "', '" . $data['story_id'] . "')"; 
        */
    }
}
