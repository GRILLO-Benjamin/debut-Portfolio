<?php

if (isset($_POST['lastname'])&& !empty($_POST['lastname']) &&
    isset($_POST['firstname'])&& !empty($_POST['firstname']) &&
    isset($_POST['mail'])&& !empty($_POST['mail']) &&
    isset($_POST['phone'])&& !empty($_POST['phone']) &&
    isset($_POST['birthdate'])&& !empty($_POST['birthdate'])
) {

    require_once '../config/db_config.php';

    $result = $db->query( "SELECT * FROM patients WHERE mail = '". $_POST['mail']."'" )->fetch();
    if ($result) {
        header('Location: ../ajout-patient.php?error=Un patient existe déja avec cette adresse email !');
        die();
    }
    // Ecriture de la requête
    $sqlQuery = 'INSERT INTO patients(lastname, firstname, birthdate, phone, mail) VALUES (?, ?, ?, ?, ?)';
    // Préparation
    $addPatient = $db->prepare($sqlQuery);
    // Exécution ! 
    $isSuccess = $addPatient->execute([
        $_POST['lastname'],$_POST['firstname'],
        $_POST['birthdate'],$_POST['phone'],
        $_POST['mail'],
    ]);

    if ($isSuccess) {
        header('Location: ../list-patient.php?success=Le patient à bien été ajouté !');
    } else {
        header('Location: ../ajout-patient.php?error=Erreur lors de l\'enregistrement du patient !');
    }
} else {
    header('Location: ../ajout-patient.php?error=Le formulaire n\'est pas valide');
}