    <h1> Mes Commandes </h1>
   

   <table class="table table-bordered table-responsive-md">
   	<tr>
   		<td>Num_commande</td>
   		<td>ISBN</td>
   		<td>Code_fournisseur</td>
   		<td>Date_achat</td>
   		<td>Prix_achat</td>
   		<td>Nbr_exemplaires</td>
         <td>Auteur</td>
         <td>Raison_sociale</td>
         <td>Titre</td>

   		
   	</tr>
 
   	<?php foreach ($commanders as $l): ?>
   	<tr>
   		<td>   <?= $l->Num_commande ?></td>
   		<td>   <?= $l->ISBN ?></td>
   		<td>   <?= $l->Code_fournisseur ?></td>
   		<td>   <?= $l->Date_achat ?></td>
   		<td>   <?= $l->Prix_achat ?></td>
   		<td>   <?= $l->Nbr_exemplaires ?></td>
         <td>   <?= $l->Nom_auteur ?> <?= $l->Prenom_auteur ?></td>
         <td>   <?= $l->raison_sociale ?></td>
         <td>   <?= $l->Titre_livre ?></td>



   	
   	</tr>
   <?php endforeach; ?>


 


   </table>