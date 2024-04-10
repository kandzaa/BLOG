<?php
require "functions.php";
require "Database.php";
$config = require "config.php";

$page_title = "Create post";
$db = new Database($config);

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
    $title = trim($_POST['title']);

    if(strlen($title) == 0 || strlen($title) > 255){
        $error['title'] = 'Cant be small or big';
    }
        $max_category_id = $db->execute("SELECT MAX(id) FROM categories;", []) [0] ["MAX(id)"];

    if($_POST['category_id'] > $max_category_id) {
        $error['category_id'] = 'Not usable category';
    }

    if(empty($error)) {
        $query = "INSERT INTO posts (title, category_id)
                VALUES (:title, :category_id)";
        $params = [
                ":title" => $_POST["title"],
                ":category_id" => $_POST["category_id"],
        ];
        $db->execute($query, $params);
        header("Location: /");
        die();
    }
}

require "views/posts/index.php";