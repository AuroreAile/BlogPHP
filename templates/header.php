<?php
  $mainMenu = [
    ["page" => "index.php", "title" => "Accueil", "meta-description" => "TechTrendz, l'actu Tech !"],
    ["page" => "actualites.php", "title" => "Actualités", "meta-description" => "Découvrez toutes nos   actualités."],
    ["page" => "a_propos.php", "title" => "A propos", "meta-description" => "L'histoire du site   TechTredz!"],
  ];
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>TechTrendz</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons
css">
  <link rel="stylesheet" href="../assets/css/override-bootstrap.css">

</head>

<body>
  <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between 
py  -3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <img src="../assets/images/logo-tech-trendz.png" width=150 alt="TechTrendz">
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">

        <?php foreach ($mainMenu as $key => $menuItem) { ?>

        <li><a href="<?= $menuItem["page"] ?>" class="nav-link px-2 link-secondary"><?= $menuItem["title"] ?></a></li>

        <?php } ?>
      </ul>

      <div class="col-md-3 text-end">
        <button type="button" class="btn btn-outline-primary me-2">Login</button>
        <button type="button" class="btn btn-primary">Sign-up</button>
      </div>
    </header>
  </div>