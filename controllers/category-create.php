<?php
require "functions.php";
require "Database.php";
$config = require "config.php";

$db = new Database($config);

// if($_SERVER["REQUEST_METHOD"] == "POST") {
// $query = "INSERT INTO categories (NAME)
//             VALUES (:NAME)";
// $params = [
//     ":title" => $_POST[":NAME"]
// ];
// $db->execute($query, $params);
// die();
// }



require "views/category-create.view.php";

