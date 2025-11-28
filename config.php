<?php
	//nome do arquivo config.php

	define("HOST", "localhost");
	define("USER", "root");
	define("PASS", "");
	define("BASE", "concessionaria2122n");

	$conn = new MySQLi(HOST,USER,PASS,BASE);