<?php
	$link = mysqli_connect("localhost", "root", "", "mainproject"); 
	if($link == false)
	{
		die("ERROR:" .mysqli_connect_error());
	}
	?>