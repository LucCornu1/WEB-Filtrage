<?php
	echo "test <br>";
	var_dump($_POST);

	if (isset($_POST["nom"]))
	{
		$nom = $_POST["nom"];
	}
	if (isset($_POST["site"]))
	{
		$site = $_POST["site"];
	}
	if (isset($_POST["mail"]))
	{
		$mail = $_POST["mail"];
	}

	$chaine = filter_var($nom, FILTER_SANITIZE_SPECIAL_CHARS);
	if ($nom == $chaine)
	{
		echo "NOM : ".$chaine."<br>";
	}else{
		echo "<script type='text/javascript'>
			document.getElementById(\"nom\").placeholder = \"Insérez votre nom\";
			document.getElementById(\"nom\").autofocus;
		</script>";
	}

	/*
	$entier = filter_var($nom, FILTER_SANITIZE_NUMBER_INT);
	echo $entier;
	echo "<br>";
	*/

	if ($url = filter_var($site, FILTER_VALIDATE_URL))
	{
		echo "SITE : ".$url."<br>";
	}else{
		echo "<script type='text/javascript'>
			document.getElementById(\"site\").placeholder = \"Insérez un site\";
			document.getElementById(\"site\").autofocus;
		</script>";
	}
	if ($email = filter_var($mail, FILTER_VALIDATE_EMAIL))
	{
		echo "MAIL : ".$email."<br>";
	}else{
		echo "<script type='text/javascript'>
			document.getElementById(\"mail\").placeholder = \"Insérez un mail\";
			document.getElementById(\"mail\").autofocus;
		</script>";
	}
?>