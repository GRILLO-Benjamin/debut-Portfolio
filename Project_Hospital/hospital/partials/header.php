<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="/PDO/hospital/assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="/PDO/hospital/assets/css/fontawesome.css">
    <title>Hospital</title>
</head>
<body>
    <header >
    <nav class="navbar navbar-expand-lg navbar-light bg-light"  >
      <div class="container-fluid"id="papa">
        <img class="navbar-brand img-fluid" src="https://us-east-1.linodeobjects.com/gunaxin/2009/03/scrubs-logo-300x167.jpg" alt="scrubs-logo">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link <?php if($nav === 'index'): ?>active <?php endif ?>" href="/PDO/hospital/index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if($nav === 'ajout'): ?>active <?php endif ?>" href="/PDO/hospital/ajout-patient.php">Formulaire d'inscription</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if($nav === 'patients'): ?>active <?php endif ?>" href="/PDO/hospital/list-patient.php" >Liste des patients</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if($nav === 'rdv'): ?>active <?php endif ?>" href="/PDO/hospital/rdv.php" >Prendre un RDV</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if($nav === 'rdvs'): ?>active <?php endif ?>" href="/PDO/hospital/liste-rdv.php" >Liste des RDV</a>
            </li>
          </ul>
          <form class="d-flex mt-3">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    </header>  