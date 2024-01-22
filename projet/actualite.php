<?php
require_once "../lib/articles.php";

$id = $_GET['id']; //viennent de l'url
$article = $articles[$id];



require_once "../lib/menu.php";
$mainMenu["actualite.php"] = ["head_title" => htmlentities ($article["title"]), "meta-description" => htmlentities (substr ($article["content"], 0, 250)), "exclude"=> true];
//raccourcir meta-description ! substr($article["content"], 0, 150 caractères)
require_once "../templates/header.php";
?>






<div class="container col-xxl-8 px-4 py-5">
  <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-6">
      <img src="/uploadsarticles/<?= htmlentities ($article['image']) ?>" class="d-block mx-lg-auto img-fluid" alt="ALT ARTICLE" width="700" height="500" loading="lazy">
    </div>
    <div class="col-lg-6">
      <h1 class="display-5 fw-bold lh-1 mb-3"><?= htmlentities ($article['title']); ?></h1>
      <p class="lead"><?= htmlentities ($article['content']); ?></p>
    </div>
  </div>
</div>

<div class="row g-5 py-5">
  <form method="post">
    <p>
      <label for="comment">Ajouter un commentaire</label><br>
      <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
      
    </p>
    <input type="submit" value="Envoyer">
  </form>
  <h2>Votre commentaire</h2>
  <p><?= htmlentities($_POST["comment"]); ?></p> <!--recupérer le commentaire via POST comme c'est un formulaire post-->
</div> <!--transformer toutes les entités html en équivalent caractères => script n'a plus d'effet. protége toutes les donnes qui viennent de l'extérieur -->



<?php require_once "../templates/footer.php" ?>