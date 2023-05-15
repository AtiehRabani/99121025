<?php 
require('Database.php');
$config = require('Config.php');
$db = new Database($config);
$id = $_GET['id'];
$query = "SELECT * FROM notes WHERE id= :id";
$note = $db->query($query,['id'=>$id])
            ->fetch(PDO::FETCH_ASSOC);

require 'views/note.view.php';

?>