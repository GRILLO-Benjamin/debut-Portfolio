<?php
try {
    /* Connexion à une base MySQL avec l'invocation de pilote */
    $dsn = 'mysql:dbname=hospital;host=141.94.22.233';
    $user = 'benji';
    $password = 'estala2022mierda';
    $db = new PDO($dsn, $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]);
} catch (\Throwable $th) {
    throw $th;
}
