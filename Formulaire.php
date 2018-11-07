<?php 
require 'includes/DB_Connection.php';
require 'includes/FormPosting.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title> Envoie de donnees</title>
</head>
<body>
    <div>
        <nav>		
				<ul>
                    <li><a href="Formulaire.php">Formulaire d'envoie </a> </li>
                    <li><a href="Enregistrement.php">Création d'un nouveau compte </a> </li>				
					<li><a href="Index.php">Deconnexion</a> </li>				
				</ul>
			</nav>
</div>
<form method="POST" action="Formulaire.php">
<!-- Création du formulaire POST -->
    <fieldset>
        <legend>Envoie du message</legend> <!-- Titre du fieldset -->

        <label for="Message">Quel est votre message </label>
        <input type="text" name="form_message" placeholder="Ecrivez ici votre message" id="nom" autofocus required  /><br>
        <label for="Message">Inserer une image (non obligatoire) </label>
        <input type="file" name="form_file" accept="image/x-png,image/gif,image/jpeg,image/jpg"/ >
        <p>
            degree de prioritee du message :

            <input type="radio" name="form_interet" value="general" id="general" required/> <label for="normal">normal</label>
            <input type="radio" name="form_interet" value="Dujour" id="Dujour" required/> <label for="important">important</label>
            <input type="radio" name="form_interet" value="important" id="important" required/> <label for="urgent"><strong>! URGENT !</strong></label>
        </p>

        <label for="DateDebut">Date et Heure de Debut </label>
        <input type="datetime-local"  name="form_DateDebut" required>
        <!-- Permet d'entrer une date et une heure simultanément --><br>
        <label for="DateFin">Date et Heure de Fin   </label>
        <input type="datetime-local" name="form_DateFin" required>
       <br>
        <label for="NomLieu"> Inscrivez le nom de votre lieu  </label>
        <input type="text" name="form_Lieu" placeholder="Nom du lieu">
        <br>
        <label for="CarteLieu"> Carte  <font color="red"> non implementee</font>  </label>

        <br><br>
        <input type="submit" name="register_button" value="Envoyer" />

    </fieldset>

</form>
</body>
</html>
