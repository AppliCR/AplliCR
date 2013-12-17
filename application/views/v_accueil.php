<?php
$this->load->helper("html");
echo doctype('html4-frame'); 
echo meta('Content-Type','text/html; charset=Cp1252');
echo link_tag('style/AppliCRQuentincss.css');
?>
<body><?php 
$image_properties=array(
		'src' => 'image/logo.jpg',
          'class' => 'post_images',
          'width' => '150',
          'height' => '150',
          );
?>
<div class="Couleur_gestion">
<?php echo img($image_properties)."Gestion des Visites" ;?>
</div>
	<div class="form_connexion">
		<h1 class="Couleur_titre"> Authentification </h1>
		<form action="c_connexion" method="POST" >
		<div class="position_champs">
          	Identifiant :   <input type="text" name="identifiant"/><br/><br/>
          	Mot de passe :  <input type="password" name="password"/><br/><br/>
           	<div class="position_boutton"><input style="width:100px;height:50px;" name="submit" type="submit" value="Connexion" /></div>
         </div>
        </form>
 
		<?php /*
		form_open("c_accueil");
		echo validation_errors();
		echo form_input("identifiant","votre identifiant");
		echo form_password("password","votre mot de passe (jj/mm/aaaa)");*/
	?>
	
	</div>




</body>


