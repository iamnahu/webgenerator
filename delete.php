<?php
	session_start();
	include 'credenciales.php';
	if (!isset($_SESSION["email"])) {
		header("Location: login.php");
	}
	if (isset($_GET["dominio"])) {
		shell_exec('rm -r '.$_GET["dominio"]);
		$connection = mysqli_connect(HOST, USER, PASS, DB);
		$query = 'DELETE FROM `webs` WHERE `webs`.`dominio` = "'.$_GET["dominio"].'"';
		mysqli_query($connection, $query);
		header('Location: panel.php');
	}
?>