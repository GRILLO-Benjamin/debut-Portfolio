<link rel="stylesheet" type="text/css" href="/PDO/hospital/assets/css/main.css">
<?php
$nav = 'patients';
?>
<?php include './partials/header.php' ?>
<div class="Boxtitre">
    <h1 class='p-3'>
        Liste des patients
    </h1>
</div>
<?php
require_once './config/db_config.php';
$patients = $db->query('SELECT * FROM patients')->fetchAll(PDO::FETCH_ASSOC);
?>

<?php include './partials/message.php' ?>


<?php foreach ($patients as $patient) { ?>
    <div class="card mx-5 my-5 d-inline-block" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= htmlentities($patient['lastname']) ?> <?= htmlentities($patient['firstname']) ?></h5>
            <p class="card-info"><?= htmlentities($patient['phone']) ?> <br><?= htmlentities($patient['mail']) ?></p>
            <a href="./detail-patient.php?patient_id=<?= htmlentities($patient['id']) ?>" class="btn btn-primary">Détails du patient</a>
            <a href="./process/process-suppr-patient.php?patient_id=<?= $patient['id'] ?>" class="btn btn-primary">Supprimer le patient</a>
        </div>
    </div>
<?php } ?>

<?php include './partials/footer.php' ?>