<?php
	function dbconnect()
	{
		$db = mysqli_connect("localhost","root","","slackchat");
		return $db;
	}
?>