<div class="col-md-4 my-2">
    <div class="card" style="width: 18rem;">
        <img src="../uploadsarticles/<?= $article['image']; ?>" class="card-img-top" alt="<?= $article['title']; ?>">
        <div class="card-body">
            <h5 class="card-title"><?= $article['title']; ?></h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                of the card's content.</p>
            <a href="actualite.php?id=<?=$key?>" class="btn btn-primary">Lire la suite</a>
        </div>
    </div>
</div>