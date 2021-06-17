    <h1> Mes Livres </h1>
   

   <table class="table table-bordered table-responsive-md">

   	<tr>
   		<td>ISBN</td>
   		<td>Titre_livre</td>
   		<td>Theme_livre</td>
   		<td>Nbr_pages_livre</td>
   		<td>Format_livre</td>
   		<td>Nom_auteur</td>	
   		<td>Prenom_auteur</td>
   		<td>Editeur</td>
   		<td>Annee_edition</td>
   		<td>Prix_vente</td>
   		<td>Langue_livre</td>
   	</tr>
 
   	<?php foreach ($livres as $l): ?>
   	<tr>
   		<td>   <?= $l->ISBN ?></td>
   		<td>   <?= $l->Titre_livre ?></td>
   		<td>   <?= $l->Theme_livre ?></td>
   		<td>   <?= $l->Nbr_pages_livre ?></td>
   		<td>   <?= $l->Format_livre ?></td>
   		<td>   <?= $l->Nom_auteur ?></td>
   		<td>   <?= $l->Prenom_auteur ?></td>
   		<td>   <?= $l->Editeur ?></td>
   		<td>   <?= $l->Annee_edition ?></td>
   		<td>   <?= $l->Prix_vente ?></td>
   		<td>   <?= $l->Langue_livre ?></td>

   	</tr>
   <?php endforeach; ?>


 


   </table>