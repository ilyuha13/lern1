<a href="#" class="featured-post__card card">
    <img class="card__image card__image_featured-post" src="<?= $post['img_modifier'] ?>" alt="the-road-ahead">
    <?php if ($post['sticker']) : ?>
    <div class="sticker">Adventure</div>
    <?php endif ?>
    <h2 class="card__title title"><?= $post['title'] ?></h2>
    <div class="card__subtitle subtitle"><?= $post['subtitle'] ?></div>
    <div class="card__footer card__footer_featured-post">
        <div class="card__subscrybe">
            <img class="card__icon" src="<?= $post['author_avatar'] ?>" alt="mat-vogel">
            <div class="card__name"><?= $post['author'] ?></div>
        </div>
        <div class="card__date"><?= $post['date'] ?></div>
    </div>
</a>