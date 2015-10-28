<?php

	// page_one.php
	
	require_once("session.php");
	
	$_SESSION["name"] = "Toomas";
	
	echo $_SESSION["name"];

?>