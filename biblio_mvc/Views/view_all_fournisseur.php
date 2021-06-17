    <h1> Mes Fournisseurs </h1>
   

   <table class="table table-bordered table-responsive-md">
   	<tr>
   		<td>Code_fournisseur</td>
   		<td>raison_sociale</td>
   		<td>Rue_fournisseur</td>
   		<td>Code_Postal</td>
   		<td>Localite</td>
   		<td>Pays</td>	
   		<td>Tel_fournisseur</td>
   		<td>Url_fournisseur</td>
   		<td>Email_fournisseur</td>
   		<td>Fax_fournisseur</td>
   		
   	</tr>
 
   	<?php foreach ($fournisseurs as $l): ?>
   	<tr>
   		<td>   <?= $l->Code_fournisseur ?></td>
   		<td>   <?= $l->raison_sociale ?></td>
   		<td>   <?= $l->Rue_fournisseur ?></td>
   		<td>   <?= $l->Code_Postal ?></td>
   		<td>   <?= $l->Localite ?></td>
   		<td>   <?= $l->Pays ?></td>
   		<td>   <?= $l->Tel_fournisseur ?></td>
   		<td>   <?= $l->Url_fournisseur ?></td>
   		<td>   <?= $l->Email_fournisseur ?></td>
   		<td>   <?= $l->Fax_fournisseur ?></td>
   		

   	</tr>
   <?php endforeach; ?>


 


   </table>