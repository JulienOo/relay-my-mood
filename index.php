<?php

session_start();

$url = explode("/", rawurldecode($_SERVER['REQUEST_URI']));

require_once "controller/controller.php";

// print_r($url);

$_SESSION["log"] = true;



if ($url[1] == "accueil")
{
	pageAccueil();
}

if($_SESSION["log"] == true)
{
	if ($url[1] == "mon-profil") 
	{
		pageMonProfil();
	}
	elseif ($url[1] == "mes-publications")
	{
		pageMesPublications();
	}
	elseif ($url[1] == "mes-enregistrements")
	{
		pageMesEnregistrements();
	}
	elseif ($url[1] == "publier")
	{
		pagePublier();
	}
	else
	{
		header("Location: /accueil");
	}
}
else
{
	if ($url[1] == "connexion")
	{
		pageConnexion();
	}
	elseif ($url[1] == "inscription")
	{
		pageInscription();
	}
	else
	{
		header("Location: /connexion");
	}
}

