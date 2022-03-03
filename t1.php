<?php
    if ( (empty($_POST['email'])) || (empty($_POST['mdp'])) ){
        header('Location: form1.php');
    }

$emailFiltre=filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
echo'<p> E-mail nettoyé :'.$emailFiltre.'</p>'."\n";
if (filter_var($emailFiltre, FILTER_VALIDATE_EMAIL)) {
    echo '<p>E-mail valide !'."\n";
    echo'<p>Votre email est : ';
    echo htmlentities($emailfiltre, ENT_QUOTES, "utf-8").'</p>'."\n";
} else{
    echo '<p> ERREUR : E-mail invalide !'."\n";
}


?>