<link rel="stylesheet" type="text/css" href="/PDO/hospital/assets/css/main.css">
<?php
$nav = 'rdvs';
?>
<?php include './partials/header.php' ?>


<div class="Boxtitre">
    <h1 class='p-3'>
        Liste des rendez-vous
    </h1>
</div>
<?php
require_once './config/db_config.php';
include '../hospital/process/process-ajout-rdv.php';
?>

<?php include './partials/message.php' ?>


<?php foreach ($appointments as $appointment) { ?>
    <div class="card mx-5 my-5 d-inline-block" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= htmlentities($appointments['dateHour']) ?> <?= htmlentities($appointments['idPatients']) ?></h5>
            <a href="./detail-patient.php?patient_id=<?= htmlentities($patient['id']) ?>" class="btn btn-primary">Modifier les rdv</a>
        </div>
    </div>
<?php } ?>

<?php include './partials/footer.php' ?>