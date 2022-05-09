<?php include './partials/header.php' ?>

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

    <div class="Boxtitre">
      <h1 class='p-3'>
        Modifiez vos informations
      </h1>
    </div>
    <div class="Box">
      <form class="form" action="./process/process-modif-patient.php?patient_id=<?=$patient['id']?>" method="POST">
        <div class="mb-3 row">
          <label for="lastname" class="col-sm-4 col-form-label">Nom de famille :</label>
          <div class="col-sm-6">
            <input class="form-control" type="text" value="<?=$patient['lastname']?>" name="lastname" id="lastname"></input>
          </div>
        </div>
        <div class="mb-3 row">
          <label for="firstname" class="col-sm-4 col-form-label">Prénom :</label>
          <div class="col-sm-6">
            <input class="form-control" type="text" value="<?=$patient['firstname']?>" name="firstname" id="firstname" />
          </div>
        </div>
        <div class="mb-3 row">
          <label for="birthdate" class="col-sm-4 col-form-label">Date de naissance :</label>
          <div class="col-sm-6">
            <input class="form-control" type="date" id="birthdate" value="<?=$patient['birthdate']?>" name="birthdate">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="phone" class="col-sm-4 col-form-label">Numéro de téléphone :</label>
          <div class="col-sm-6">
            <input class="form-control" type="tel" value="<?=$patient['phone']?>" name="phone" id="phone" ">
            </div>
        </div>
        <div class=" mb-3 row">
            <label for="mail" class="col-sm-4 col-form-label">E-mail :</label>
            <div class="col-sm-6">
              <input class="form-control" type="email" name="mail" id="mail" value=" <?= $patient['mail'] ?> " />
            </div>
          </div>
          <div class="d-flex justify-content-center">
            <button class="btn btn-primary" btn-danger type="submit">Envoyer</button>
          </div>
      </form>
    </div>

  <?php } ?>
<?php } ?>



<?php include './partials/footer.php' ?>