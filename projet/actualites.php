<?php
    require_once "../lib/articles.php";
    require_once "../templates/header.php";
?>

<h1>Actualités</h1>

<!-- recupérer le tableau de index.php -->
<div class="row text-center">

    <?php foreach ($articles as $key => $article) {
        require "../templates/article_part.php";
    } ?>

</div>


<?php require_once "../templates/footer.php" ?>