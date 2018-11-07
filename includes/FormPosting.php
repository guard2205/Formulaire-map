<?php
$InfoPriorite ;
$InfoMessage ;
$InfoLienImage;
$InfoDateDebut;
$InfoDateFin;
$InfoLieu;
$X1;
$Y1;
$X2;
$Y2;
$InfoUser;
$error_array;
$TestInteret;
$reponse;

/*
$_FILES['icone']['name']  ;   //Le nom original du fichier, comme sur le disque du visiteur (exemple : mon_icone.png).
$_FILES['icone']['type'] ;    //Le type du fichier. Par exemple, cela peut être « image/png ».
$_FILES['icone']['size']  ;   //La taille du fichier en octets.
$_FILES['icone']['tmp_name']; //L'adresse vers le fichier uploadé dans le répertoire temporaire.
$_FILES['icone']['error'] ;   //Le code d'erreur, qui permet de savoir si le fichier a bien été uploadé.
*/

 if (isset($_POST['register_button']))
{
    $TestInteret = strip_tags($_POST['form_interet']); 
    if ($TestInteret == "general")
	    $InfoPriorite="TestInteret";
	else
	{
		if ($TestInteret=="Dujour")
			$InfoPriorite = "TestInteret";
		else
           $InfoPriorite ="TestInteret";
    }
    
        // Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
    if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)
    { // on test de voir si le fichier exist et s'il n'a pas d'erreur 

        // Testons si le fichier n'est pas trop gros < 1 MO
        if ($_FILES['monfichier']['size'] <= 1000000)
        { 
            // Testons si l'extension est autorisée
            $infosfichier = pathinfo($_FILES['monfichier']['name']);
            // on charge le nom du fichier TEMPORAIRE ici
            $extension_upload = $infosfichier['extension'];
            // on enregistre notre extension dans une variable
            $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
            // on fait un vecteur avec les différentes extensions autorisées

            if (in_array($extension_upload, $extensions_autorisees))
            {
                // On peut valider le fichier et le stocker définitivement
                    move_uploaded_file($_FILES['monfichier']['tmp_name'], 'pictures/' . basename($_FILES['monfichier']['name']));
                    // on move le fichier de facon définitive
                    echo "Image écrite dans le fichier pictures/ !";
            }
        }
    } 
    $InfoMessage = strip_tags($_POST['form_message']);
    $InfoLienImage = strip_tags($_POST['form_file']);
    $InfoLieu = strip_tags($_POST['form_Lieu']);
    $InfoDateDebut = strip_tags($_POST['form_DateDebut']);
    $InfoDateFin = strip_tags( $_POST['form_DateFin']);
    // $InfoUser =
    $X1 =0;
    $Y1 =0;
    $X2 =0;
    $Y2 =0;

    $query = mysqli_query($con, "INSERT INTO t_information VALUES('','$InfoPriorite','$InfoMessage','$InfoLienImage','$InfoDateDebut','$InfoDateFin',1,1)");
    echo "requete envoyée";
}
else 
	echo 'pas de bouton appuyé '
?>