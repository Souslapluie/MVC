<?php

// require_once("Utils/functions.php") ;
// require_once("Models/Model.php") ;
require_once("Utils/header.php") ;
require_once("Utils/footer.php") ;
require_once("Controllers/Controller.php") ;
require_once("Models/Model.php") ;

$controllers = ["home" , "livres","fournisseur","commander"] ;

$controllers_default = "home" ;

if (isset($_GET['controller']) and in_array($_GET['controller'], $controllers))

{
	$nom_controller = $_GET['controller'] ;
}
else
{
	$nom_controller = $controllers_default ;
}

$nom_classe = 'Controller_'.$nom_controller ;

$nom_fichier = 'Controllers/'.$nom_classe.'.php' ;
echo "Le controller est : ".$nom_controller."<br>" ;
echo "La classe est : ".$nom_classe."<br>" ;
echo "Le fichier est : ".$nom_fichier."<br>" ;

if (file_exists($nom_fichier))
{
	require_once($nom_fichier) ;

	$controller = new $nom_classe() ;
}
else
{
	exit("Error 404: not found !") ;
}

require_once("Utils/footer.php") ;

	?>