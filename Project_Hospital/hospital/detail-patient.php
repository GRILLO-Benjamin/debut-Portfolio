<link rel="stylesheet" type="text/css" href="/PDO/hospital/assets/css/main.css">
<?php include './partials/header.php' ?>

<!-- TODO: vérifier que le pâramètre GET patient_id existe sinon retourner une erreur -->
<!-- TODO: Récupérer le patient en base de données vérifier qu'il existe -->
<?php include './partials/message.php'?>

<?php if (empty($_GET["patient_id"])) { ?>
  <?php $alert = 'danger';
  $alertMessage = 'The patient_id parameter is mandatory.'; ?>
  <?php include './partials/alert.php'; ?>
<?php } else { ?>
  <?php
  require_once './config/db_config.php';
  $patient = $db->query('SELECT * FROM patients WHERE id=' . $_GET['patient_id'])->fetch(PDO::FETCH_ASSOC);
  if (empty($patient)) { ?>


    <?php $alert = 'danger';
    $alertMessage = 'The patient does not exit'; ?>
    <?php include './partials/alert.php'; ?>
  <?php } else { ?>

    <div class="card mx-5 my-5 d-inline-block" style="width: 18rem;">
      <img src="https://img.myloview.fr/images/user-profile-icon-vector-avatar-portrait-symbol-flat-shape-person-logo-web-and-mobile-application-interface-sign-outline-and-black-silhouette-isolated-on-white-background-700-209987382.jpg" class="card-img-top w-25 mx-auto d-block" alt="...">
      <div class="card-body">
        <h5 class="card-title d-flex justify-content-center"><?= $patient['lastname'] ?> <?= $patient['firstname'] ?> </h5>
        <p class="card-text d-flex justify-content-center">Informations détaillées :</p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Date de naissance : <?= $patient['birthdate'] ?></li>
        <li class="list-group-item">Numéro de téléphone : <?= $patient['phone'] ?></li>
        <li class="list-group-item">E-mail : <?= $patient['mail'] ?></li>
      </ul>
      <div class="card-body">
        <a href="./modif-patient.php?patient_id=<?= htmlentities($patient['id']) ?>" class="card-link" name="modif">Modifier</a>
        <a href="./process/process-suppr-patient.php?patient_id=<?=$patient['id']?>" class="card-link">Supprimer</a>
      </div>
    </div>
  <?php } ?>
<?php } ?>

<?php include './partials/footer.php' ?>