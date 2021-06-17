<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Index</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta charset="UTF-8"  >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>
<body>

<h1>Index</h1>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="Index.html"> Index </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">  
            <li><a class="dropdown-item" href="?controller=home&action=home">Accueil</a></li>
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Consultation des livres
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="?controller=livres&action=all_livres">Tout les livres</a></li>
              <li><a class="dropdown-item" href="Recherche_titre_livre.html">Titre du livre</a></li>
              <li><a class="dropdown-item" href="Recherche_auteur_livre.html">Nom de l'auteur</a></li>
              <li><a class="dropdown-item" href="Recherche_editeur_livre.html">Éditeur</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Consultation des fournisseurs
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="?controller=fournisseur&action=all_fournisseur">Touts les fournisseurs</a></li>
              <li><a class="dropdown-item" href="Recherche_RS_fournisseurs.html">Raison Sociale</a></li>
              <li><a class="dropdown-item" href="Recherche_localite_fournisseurs.html">Localité</a></li>
              <li><a class="dropdown-item" href="Recherche_pays_fournisseurs.html">Pays</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Consultation des commandes
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="?controller=commander&action=all_commander">Toutes les commandes</a></li> 
              <li><a class="dropdown-item" href="Recherche_editeur_commandes.html">Editeur</a></li>
              <li><a class="dropdown-item" href="Recherche_fournisseur_commandes.html">Fournisseur</a></li>
              <li><a class="dropdown-item" href="Recherche_date_commandes.html">Date</a></li>
            </ul>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>


</body>
</html>