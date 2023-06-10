<?php 
require('Database.php');
$config = require('Config.php');
$db = new Database($config);
$id = $_GET['id'];
$currentUserid = 1;
$query = "SELECT * FROM notes WHERE id= :id";
$note = $db->query($query,['id'=>$id])
            ->findOrFail(PDO::FETCH_ASSOC);
authorize($currentUserid == $note['user_id']);
require 'views/note.view.php';

?>