<?php
$this->load->helper("html");
echo doctype('html4-frame'); 
echo meta('Content-Type', 'text/html; charset=utf-8');
echo link_tag('style/AppliCRAlexis.css');
?>
<body>
<!-- Commentaire -->
	<div class="Fond_site">
		<div class="Couleur_titre">
			<h1>Praticiens</h1>
		</div>
		<div class="Couleur_soustitre">
			<form>
				<select name="liste_praticien">
				<?php foreach($nom_praticien as $nom) { ?>
					<option> <?php echo $nom['PRA_NOM']; ?></option>
				<?php } ?>
				</select>
				<input type="submit" value="OK">
			</form>
		<?php foreach ($praticien as $compteur_praticien) { ?>
			  	<label>NUMERO : </label><label class="Couleur_fond_blanc"><?php echo ($compteur_praticien['PRA_NUM']); ?></label><br/><br/>
         		<label>NOM : </label><label class="Couleur_fond_blanc"><?php echo ($compteur_praticien['PRA_NOM']); ?></label><br/><br/>
         		<label>PRENOM : </label><label class="Couleur_fond_blanc"><?php echo ($compteur_praticien['PRA_PRENOM']); ?></label><br/><br/>
         		<label>ADRESSE : </label><label class="Couleur_fond_blanc"><?php echo ($compteur_praticien['PRA_ADRESSE']); ?></label><br/><br/>
         		<label>CP : </label><label class="Couleur_fond_blanc"><?php echo($compteur_praticien['PRA_CP']); ?></label><br/><br/>
         		<label>VILLE : </label><label class="Couleur_fond_blanc"><?php echo($compteur_praticien['PRA_VILLE']); ?></label><br/><br/>
         		<label>COEFF. NOTORIETE : </label><label class="Couleur_fond_blanc"><?php echo($compteur_praticien['PRA_COEFNOTORIETE']); ?></label><br/><br/> 
         		<label>TYPE : </label><label class="Couleur_fond_blanc"><?php echo($compteur_praticien['TYP_CODE']); ?></label><br/><br/>
         <?php } ?>
		</div>
	</div>
	<form>
  		<input type="button" value="Retour" onclick="history.go(-1)">
  		<input type="button" value="Suivant" onclick="history.go(+1)">
	</form>
</body>

	