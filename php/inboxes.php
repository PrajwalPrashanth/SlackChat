<?php
include 'connect.php';
$db = dbconnect();

$username =  ; // loggged in user name

$id_query = "SELECT id FROM users WHERE username='$username'";
$user_id = mysqli_query($db,$id_query); // logged in user's id

$inboxes_query = "SELECT user2id FROM inboxes WHERE user1id='$user_id'"
$recipients_id = mysqli_query($db,$inboxes_query); // id of all the recipients

if(mysqli_num_rows($recipients_id)>0)
{
	while ($row = mysqli_fetch_assoc($recipients_id))
	{
		$recipient_name_query = "SELECT name FROM users WHERE id='$row["user2id"]'";
		$recipient_name = mysqli_query($db,$recipient_name_query);

		echo $recipient_name.<br>; // placeholder for a button to go to a chat room with this recipient name
	}
}

?>
