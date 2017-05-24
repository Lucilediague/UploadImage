<?php

if (file_exists($_POST['url'])) {
    if (unlink($_POST['url'])) {
        echo 'Fichier supprimé';
    } else {
        echo 'Erreur';
    }
}
echo '<p><a href="index.php">Nouveau téléchargement</a></p>';
echo '<p><a href="upload.php">Retour aux images</a></p>';
?>