<?php


	require_once "model/backend.php";


// accès avec ou sans connexion


// accès sans connexion 
	function pageConnexion()
	{

		require_once "view/template/menu.php";

		echo "page de connexion";
	}

	function pageInscription()
	{
		echo "page d'inscription";
	}


// accès avec connexion
	function pageAccueil()
	{


		// contenu personnifié
		require_once "view/head/accueil.php";
		require_once "view/content/accueil.php"; 

		// contenu par défaut
		require_once "view/template/link.php";
		require_once "view/template/header.php";
		require_once "view/template/menu.php";
		require_once "view/template/page.php";
	}

	function pageMonProfil()
	{


		// contenu personnifié
		require_once "view/head/mon-profil.php";
		require_once "view/content/mon-profil.php"; 

		// contenu par défaut
		require_once "view/template/link.php";
		require_once "view/template/header.php";
		require_once "view/template/menu.php";
		require_once "view/template/page.php";	
	}

	function pageMesPublications()
	{


		// contenu personnifié
		require_once "view/head/mes-publications.php";
		require_once "view/content/mes-publications.php"; 

		// contenu par défaut
		require_once "view/template/link.php";
		require_once "view/template/header.php";
		require_once "view/template/menu.php";
		require_once "view/template/page.php";		
	}

	function pageMesEnregistrements()
	{


		// contenu personnifié
		require_once "view/head/mes-enregistrements.php";
		require_once "view/content/mes-enregistrements.php"; 

		// contenu par défaut
		require_once "view/template/link.php";
		require_once "view/template/header.php";
		require_once "view/template/menu.php";
		require_once "view/template/page.php";	
	}

	function pagePublier()
	{


		// contenu personnifié
		require_once "view/head/publier.php";
		require_once "view/content/publier.php"; 

		// contenu par défaut
		require_once "view/template/link.php";
		require_once "view/template/header.php";
		require_once "view/template/menu.php";
		require_once "view/template/page.php";		}