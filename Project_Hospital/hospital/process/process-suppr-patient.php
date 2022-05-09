<?php

if (
    isset($_GET['patient_id']) && !empty($_GET['patient_id'])
) {

    require_once '../config/db_config.php';

    $changes = $db->prepare("DELETE FROM patients WHERE id=?");
    $isSuccess = $changes->execute([
        $_GET['patient_id']
    ]);
    if ($isSuccess) {
        header('Location: ../list-patient.php?success=Le patient à bien été supprimé !&patient_id=' . $_GET['patient_id']);
    } else {
        header('Location: ../detail-patient.php?error=Erreur lors de la suppression du patient !&patient_id=' . $_GET['patient_id']);
    }
}else{
    header('Location: ../detail-patient.php?error=Une erreur est parvenue veuillez réessayer !&patient_id=' . $_GET['patient_id']);
}
