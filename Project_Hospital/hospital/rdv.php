<link rel="stylesheet" type="text/css" href="/PDO/hospital/assets/css/main.css">
<?php
$nav = 'rdv';
?>
<?php include './partials/header.php' ?>
<link rel="stylesheet" type="text/css" href="/PDO/hospital/assets/css/calendar.css">



<div class="container">
    <div class="row">
        <div class='col-lg-9'>
            <div class="form-group">
                <div class="Boxtitre">
                    <h1 class='form-title p-3'>
                        Sélectionnez l'horaire de votre rendez-vous
                    </h1>
                </div>
                <form action="./liste-rdv.php" method="POST"">
                <div class=" selecdate">
                        <label for=" dtpickerdemo" class="col-sm-2 control-label"  id='text-select-date'>Select date/time:</label>
                        <div class='col-sm-4 input-group date w-50' id='dtpickerdemo'>
                            <input type='text' name="dateHour" class="form-control" />
                            <btn class=" btn btn-large btn-secondary input-group-addon fas fa-calendar-alt fa-lg" id='bouton'></btn>
                            <button class="btn btn-primary">Valider</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="problemes">

        </div>
        <script type="text/javascript">
            $(function() {
                moment.locale('fr');
                $('#dtpickerdemo').datetimepicker({
                    sideBySide: true,
                    enabledHours: [13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 0], //Horaire ouverture
                    showTodayButton: true,
                    locale: 'fr',
                    useCurrent: false //Important! See issue #1075
                }).show();
                $('#dtpickerdemo').data("DateTimePicker").minDate(moment());
            });
            document.querySelector('.input-group-addon').addEventListener('click', () => {
                setTimeout(() => {

                    let allIcons = document.querySelectorAll('.glyphicon')
                    console.log(allIcons);
                    allIcons.forEach((icon) => {
                        console.log(icon.classList);
                        icon.classList.replace('glyphicon', "fas")
                        icon.classList.replace('glyphicon-chevron-left', "fa-arrow-circle-left")
                        icon.classList.replace('glyphicon-chevron-up', "fa-arrow-circle-up")
                        icon.classList.replace('glyphicon-chevron-down', "fa-arrow-circle-down")
                        icon.classList.replace('glyphicon-chevron-right', "fa-arrow-circle-right")
                        console.log(icon.classList);

                    })
                }, 1500);

            })
        </script>
    </div>
</div>
<?php include './partials/footer.php' ?>