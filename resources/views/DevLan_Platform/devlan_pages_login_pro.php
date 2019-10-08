<?php


	session_start();


	$_SESSION["user_id"] = $_POST["user_id"];

	$_SESSION["username"] = $_POST["username"];

	$_SESSION["email"] = $_POST["email"];


	$mysqli = new mysqli("localhost", "martdev1_root", "Martinez@", "martdev1_devlan");


	$sql = "SELECT * FROM users WHERE email='".$_POST["email"]."'";

	$result = $mysqli->query($sql);


	if(!empty($result->fetch_assoc())){

		$sql2 = "UPDATE users SET google_id='".$_POST["id"]."' WHERE email='".$_POST["email"]."'";

	}else{

		$sql2 = "INSERT INTO users (username, email, google_id) VALUES ('".$_POST["usernamename"]."', '".$_POST["email"]."', '".$_POST["user_id"]."')";

	}


	$mysqli->query($sql2);


	echo "Updated Successful";

?>