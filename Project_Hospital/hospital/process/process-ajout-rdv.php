<?php

if (isset($_POST['datehour'])&& !empty($_POST['datehour']) &&
isset($_POST['idPatients'])&& !empty($_POST['idPatients'])
) {
    
    require_once '../config/db_config.php';

    $dateHour = $db->query('SELECT * FROM appointments')->fetchAll(PDO::FETCH_ASSOC);

    if ($isSubmitted && count($errors) == 0) {

        $date = $db->prepare('INSERT INTO `appointments`(dateHour, idPatients) VALUES(:dateHour, :patients)');
        $date->bindValue(':dateHour', $dateHour, PDO::PARAM_STR);
        $date->bindValue(':patients', $patients, PDO::PARAM_STR);
      $isSuccess =  $date->execute();


    if ($isSuccess) {
        header('Location: ../liste-rdv.php?success=L\'horaire à bien été ajouté !');
    } else {
        header('Location: ../liste-rdv.php?error=Erreur lors de l\'enregistrement de l\'horaire !');
    }
} else {
    header('Location: ../liste-rdv.php?error=Le formulaire n\'est pas valide');
}
}