<?php
$this->load->helper("html");
echo doctype('html4-frame'); 
echo meta('Content-Type', 'text/html; charset=Cp1252');
echo link_tag('style/AppliCRAlexis.css');
?>
<body>
<!-- Commentaire -->
	<div class="Fond_site">
		<div class="Couleur_titre">
			<h1>Praticiens</h1>
		</div>
		<div class="Couleur_soustitre">
		<?php foreach ($praticien as $compteur_praticien) { ?>
			  	<label>NUMERO : </label><?php  echo ($compteur_praticien['PRA_NUM']);?><br/><br/>
         		<label>NOM : </label><?php echo ($compteur_praticien['PRA_NOM']); ?><br/><br/>
         		<label>PRENOM : </label><?php echo ($compteur_praticien['PRA_PRENOM']); ?><br/><br/>
         		<label>ADRESSE : </label><?php echo ($compteur_praticien['PRA_ADRESSE']); ?><br/><br/>
         		<label>CP : </label><?php echo($compteur_praticien['PRA_CP']); ?><br/><br/>
         		<label>VILLE : </label><?php echo($compteur_praticien['PRA_VILLE']); ?><br/><br/>
         		<label>COEFF. NOTORIETE : </label><?php echo($compteur_praticien['PRA_COEFNOTORIETE']); ?><br/><br/> 
         <?php }
              foreach ($type_praticien as $compteur_type_praticien) { ?>
         		<label>TYPE PRATICIEN : </label><?php echo($compteur_type_praticien['TYP_LIBELLE']); ?><br/><br/>
         <?php } ?>
		</div>
	</div>
	<form>
  		<input type="button" value="Retour" onclick="history.go(-1)">
  		<input type="button" value="Suivant" onclick="history.go(+1)">
	</form>
</body>

	