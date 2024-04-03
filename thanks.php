<?php
echo 'Merci '.$_POST['prenom'].' '.$_POST['nom'].' de nous avoir contacté à propos de '.$_POST['sujet'];
echo '</br>';
echo 'Un de nos conseiller vous contactera soit à l’adresse '.$_POST['mail'].' ou par téléphone au '.$_POST['tel'].' dans les plus brefs délais pour traiter votre demande : ';
echo '</br>';

echo $_POST['message'];