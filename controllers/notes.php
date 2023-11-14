<?php

$config = require('config.php');
$db = new Database($config['database'], password:"1995priko");


$heading = "My Notes";

$notes = $db->query('SELECT * FROM notes WHERE user_id = 6')->get();


require "views/notes.view.php";
