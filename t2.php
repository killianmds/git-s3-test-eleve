<?php
    if ( (empty($_POST['prenom'])) || (empty($_POST['age'])) ) {
        header('Location: form1.php');
    }

$prenomfilter=filter_var($_POST['prenom'], FILTER_SANITIZE_STRING);
echo '<p>Prénom nettoyé : '.$prenomfilter.'<p>'."\n";
echo '<p>Votre prénom est : ';
echo htmlentities($prenomfilter, ENT_QUOTE, "UTF-8").'</p>'."\n";
$agefiltre=filter_var($_POST['age'], FILTER_SANITIZE_NUMBER_INT);
if ($agePropre=filter_var($agefiltre, FILTER_VALIDATE_INT)) {
    echo'<p> Votre âge :'.htmlentities($agePropre, ENT_QUOTE, "utf-8").'<p>'."\n";
}