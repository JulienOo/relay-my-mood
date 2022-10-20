<?php


	function connexionBdd()
	{
			$user = 'root';
			$pass = 'password';
			$db = new PDO('mysql:host=192.168.1.56;dbname=gestion_app', $user, $pass);

			return $db;
	}

