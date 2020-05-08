<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="icon" href="">
		<link rel="stylesheet" type="text/css" href="../CSS/Filtrage.CSS">
		<link rel="shortcut icon" type="image/x-icon" href="">
		<script type="text/javascript" src="">

		</script>
		<title>
			PHP - web
		</title>
	</head>

	<body>

		<h1>Filtrage en PHP</h1>

		<p class="underline">Formulaire Client :</p>

		<form name="Formulaire1" action="traitement.php" method="POST" id="Formulaire1">
			<fieldset>
				<legend>Formulaire d'inscription</legend>
				<p>NOM : <input type="texte" name="nom" maxlength="50" id="nom"></p>
				<p>SITE : <input type="texte" name="site" maxlength="50" id="site"></p>
				<p>MAIL : <input type="texte" name="mail" maxlength="100" id="mail"></p>
				
				<p>SEXE :
					<input type="radio" id="masculin" name="sexe" value="masculin" checked>
	  				<label for="masculin">Masculin</label>
					<input type="radio" id="feminin" name="sexe" value="feminin">
					<label for="feminin">Feminin</label>
				</p>

				<p>PAYS :
				<select id="pays" name="pays">
					<option value="Allemagne">Allemagne</option>
					<option value="Angleterre">Angleterre</option>
					<option value="Espagne">Espagne</option>
					<option value="France" selected>Francais</option>
				</select></p>

				<p>Le langage préféré :
				<select id="langage" name="langage[]" multiple>
					<option value="C">C</option>
					<option value="C++">C++</option>
					<option value="C#" selected>C#</option>
					<option value="JAVA">JAVA</option>
				</select></p>

				<p>Domaine d'activité :
					Informatique <input type="checkbox" name="Informatique" id="Informatique" checked>
					Gestion <input type="checkbox" name="Gestion" id="Gestion">
					Pédagogie <input type="checkbox" name="Pedagogie" id="Pedagogie">
				</p>
			</fieldset>
		</form>

		<script type="text/javascript">
			function valider()
			{
				var nom = document.getElementById("nom").value;
				var site = document.getElementById("site").value;
				var mail = document.getElementById("mail").value;
				console.log(nom);
				console.log(site);
				console.log(mail);

				if(nom=="")
				{
					alert("Champs nom invalide");
				}
				if(site=="")
				{
					alert("Champs site invalide");
				}
				if(mail=="")
				{
					alert("Champs mail invalide");
				}

				if(mail!="" && site!="" && nom!="")
				{
					alert("isOk");
					document.getElementById("Formulaire1").submit();
				}
			}
		</script>

		<p><input type="button" name="Valider" value="Valider" onclick="valider()" class="styled"></p>
		<p><input type="button" name="Reset" value="Reset" onclick="" class="styled"></p>

		<footer>
			<p>Nous somme le :</p>
			<?php
				echo date('d/m/Y h:i:s'); /*fonction date permettant d'afficher la date (si on veut rafraichir autom : 'setInterval'*/
			?>
		</footer>

	</body>
</html>