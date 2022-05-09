<link rel="stylesheet" type="text/css" href="/PDO/hospital/assets/css/main.css">
<?php 
$nav = 'ajout';
?>
<?php include './partials/header.php' ?>

<?php include './partials/message.php'?>

<div class="Boxtitre">
    <h1 class='p-3'>
        Formulaire d'inscription
    </h1>
</div>
<div class="Box">
    <form class="form" action="./process/process_ajout_patient.php" method="POST">
        <div class="mb-3 row">
            <label for="lastname" class="col-sm-4 col-form-label">Nom de famille :</label>
            <div class="col-sm-6">
                <input class="form-control" type="text" name="lastname" id="lastname"></input>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="firstname" class="col-sm-4 col-form-label">Prénom :</label>
            <div class="col-sm-6">
                <input class="form-control"  type="text" name="firstname" id="firstname" />
            </div>
        </div>
        <div class="mb-3 row">
            <label for="birthdate" class="col-sm-4 col-form-label">Date de naissance :</label>
            <div class="col-sm-6">
                <input  class="form-control" type="date" id="birthdate" name="birthdate">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="phone" class="col-sm-4 col-form-label">Numéro de téléphone :</label>
            <div class="col-sm-6">
                <input class="form-control" type="tel" name="phone" id="phone" placeholder="04-70-67-43-21" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="mail" class="col-sm-4 col-form-label">E-mail :</label>
            <div class="col-sm-6">
                <input class="form-control" type="email" name="mail" id="mail" placeholder="exemple@gmail.com" />
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <button class="btn btn-primary" btn-danger type="submit">Envoyer</button>
        </div>
    </form>
</div>
<?php include './partials/footer.php' ?>