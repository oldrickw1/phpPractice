<?php

$config = require('config.php');
$db = new Database($config['database'], password:"1995priko");



$heading = "Create a note";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $errors = [];

    if (strlen($_POST["body"]) == 0) { 
        $errors['body'] = 'A body is required';
    }

    if (empty($errors)) {
        $db->query("INSERT INTO notes (body, user_id) VALUES(:body, :user_id)", [
            "body"=> $_POST["body"],
            "user_id"=> 6,
        ]);
    }


}

require 'views/note-create.view.php';
