<?php
require_once "../lib/articles.php";

$id = $_GET['id'];
$article = $articles[$id];

require_once "../lib/menu.php";
$mainMenu["actualite.php"] = ["head_title" => $article["title"], "meta-description" => substr($article["content"], 0, 250), "exclude"=> true];
//raccourcir meta-description ! substr($article["content"], 0, 150 caractères)


require_once "../templates/header.php";
?>





<div class="container col-xxl-8 px-4 py-5">
  <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-6">
      <img src="/uploadsarticles/<?= $article['image'] ?>" class="d-block mx-lg-auto img-fluid" alt="ALT ARTICLE" width="700" height="500" loading="lazy">
    </div>
    <div class="col-lg-6">
      <h1 class="display-5 fw-bold lh-1 mb-3"><?php echo $article['title']; ?></h1>
      <p class="lead"><?php echo $article['content']; ?></p>
    </div>
  </div>
</div>



<?php require_once "../templates/footer.php" ?>