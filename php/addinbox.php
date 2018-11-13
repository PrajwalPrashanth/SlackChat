<?php
include 'connect.php';
$db = dbconnect();

// to create a new chat room with a new recipient
$username =  ; // loggged in user name

$id_query = "SELECT id 
			FROM users 
			WHERE username='$username'";
$user_id = mysqli_query($db,$id_query); // logged in user's id

$non_inbox_query = "SELECT id
					FROM users
					WHERE id <> '$user_id'
					AND id NOT IN
					(SELECT user2id FROM inboxes WHERE user1id='$user_id')"
$new_inbox_list = mysqli_query($db,$non_inbox_query); //list of all the potential new recipients


?>