<?php
	function dbconnect()
	{
		$db = mysqli_connect("localhost","root","root","slackchat");
		return $db;
	}
?>