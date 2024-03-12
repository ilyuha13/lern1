<a href="#" class="most-resent__card card">
   <img class="card__image" src="<?= $post['img_modifier'] ?>" alt="still-standing-tall">
   <div class="card__heading">
      <h2 class="card__title_most-resent card__title title"><?= $post['title'] ?></h2>
      <div class="card__subtitle_most-resent card__subtitle subtitle"><?= $post['subtitle'] ?></div>
   </div>
   <div class="card__footer card__footer_most-resent">
      <div class="card__subscrybe">
         <img src="<?= $post['author_avatar'] ?>" alt="william-wong" class="card__icon">
         <div class="card__name card__name_most-resent"><?= $post['author'] ?></div>
      </div>
      <div class="card__date card__date_most-resent"><?= $post['date'] ?></div>
   </div>
</a>