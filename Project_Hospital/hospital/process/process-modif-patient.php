<?php

if (
    isset($_POST['lastname']) && !empty($_POST['lastname']) &&
    isset($_POST['firstname']) && !empty($_POST['firstname']) &&
    isset($_POST['birthdate']) && !empty($_POST['birthdate']) &&
    isset($_POST['phone']) && !empty($_POST['phone']) &&
    isset($_POST['mail']) && !empty($_POST['mail']) &&
    isset($_GET['patient_id']) && !empty($_GET['patient_id'])
) {

        
    require_once '../config/db_config.php';
    $changes = $db->prepare("UPDATE patients SET lastname=?,firstname=?,birthdate=?,phone=?,mail=? WHERE id=?");
    $isSuccess = $changes->execute([
        htmlspecialchars($_POST['lastname']), htmlspecialchars($_POST['firstname']),
        htmlspecialchars($_POST['birthdate']), htmlspecialchars($_POST['phone']), htmlspecialchars($_POST['mail']),
        htmlspecialchars($_GET['patient_id'])
    ]);
    if ($isSuccess) {
        header('Location: ../detail-patient.php?success=Le patient à bien été modifié !&patient_id=' . $_GET['patient_id']);
    } else {
        header('Location: ../modif-patient.php?error=Erreur lors de la modification du patient !&patient_id=' . $_GET['patient_id']);
    }
}else{
    header('Location: ../modif-patient.php?error=Le formulaire n\'est pas valide&patient_id=' . $_GET['patient_id']);
}
