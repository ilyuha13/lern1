<?php
$posts = [
 [
   'title' => 'The Road Ahead',
   'subtitle' => '',
   'img_modifier' => '',
   'author' => '',
   // другие свойства этого поста
 ],
 [
   // свойства второго поста
 ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap"
      rel="stylesheet">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Lora:ital@0;1&family=Oxygen&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="style.css">
   <title>Document</title>

</head>

<body>
   <div class="baner">
      <header class="header">
         <div class="header__container container">
            <a class="header__logotype logotype logotype_white" href="#">Escape.</a>
            <nav class="header__navigation navigation">
               <ul class="navigation__list container">
                  <li class="navigation__item"><a class="navigation__link navigation__link_white" href="#">home</a></li>
                  <li class="navigation__item"><a class="navigation__link navigation__link_white" href="#">categoris</a>
                  </li>
                  <li class="navigation__item"><a class="navigation__link navigation__link_white" href="#">about</a>
                  </li>
                  <li class="navigation__item"><a class="navigation__link navigation__link_white" href="#">contact</a>
                  </li>
               </ul>
            </nav>
         </div>
      </header>
      <h1 class="header__title title title_white">Let's do it together.</h1>
      <div class="header__subtitle subtitle subtitle_white">We travel the world in search of stories. Come along for the
         ride.</div>
      <a href="#" class="header__button">View Latest Posts</a>
      <!-- href -->

   </div>
   <div class="page">
      <nav class="page__navigation navigation">
         <ul class="navigation__list container">
            <li class="navigation__item"><a href="#" class="navigation__link navigation__link_page">Nature</a></li>
            <li class="navigation__item"><a href="#" class="navigation__link navigation__link_page">Photography</a></li>
            <li class="navigation__item"><a href="#" class="navigation__link navigation__link_page">Relaxation</a></li>
            <li class="navigation__item"><a href="#" class="navigation__link navigation__link_page">Vacation</a></li>
            <li class="navigation__item"><a href="#" class="navigation__link navigation__link_page">Travel</a></li>
            <li class="navigation__item"><a href="#" class="navigation__link navigation__link_page">Adventure</a></li>
         </ul>
      </nav>
      <div class="sections-container">
         <section class="featured-posts">
            <h2 class="featured-post__section-title section-title title">Featured Posts</h2>
            <div class="featured-post__section-flex-box section-flex-box">
               <a href="#" class="featured-post__card card">
                  <img class="card__image card__image_featured-post" src="./static/images/the-road-ahead-card.png"
                     alt="the-road-ahead">
                  <h2 class="card__title title">The Road Ahead</h2>
                  <div class="card__subtitle subtitle">The road ahead might be paved - it might not be.</div>
                  <div class="card__footer card__footer_featured-post">
                     <div class="card__subscrybe">
                        <img class="card__icon" src="./images/mat-vogel.jpg" alt="mat-vogel">
                        <div class="card__name">Mat Vogels</div>
                     </div>
                     <div class="card__date">September 25, 2015</div>
                  </div>
               </a>
               <a href="#" class="featured-post__card card">
                  <img class="card__image card__image_featured-post" src="/static/images/from-top-down-card.png"
                     alt="from-top-down">
                  <div class="from-top-down__sticker sticker subtitle">adventure</div>
                  <h2 class="card__title title">From Top Down</h2>
                  <div class="card__subtitle subtitle">Once a year, go someplace you’ve never been before.</div>
                  <div class="card__footer card__footer_featured-post">
                     <div class="card__subscrybe">
                        <img src="./images/william-wong.jpg" alt="william-wong" class="card__icon">
                        <div class="card__name">William Wong</div>
                     </div>
                     <div class="card__date">September 25, 2015</div>
                  </div>
               </a>
            </div>
         </section>
         <section class="most-resent">
            <h2 class="most-resent__section-title section-title title">Most Resent</h2>
            <div class="most-resent__section-flex-box section-flex-box">
               <a href="#" class="most-resent__card card">
                  <img class="card__image" src="./images/still-standing-tall.jpg" alt="still-standing-tall">
                  <!-- class bem потерялся -->
                  <div class="card__heading">
                     <h2 class="card__title_most-resent card__title title">Still Standing Tall</h2>
                     <div class="card__subtitle_most-resent card__subtitle subtitle">Life begins at the end of your
                        comfort zone.</div>
                  </div>
                  <div class="card__footer card__footer_most-resent">
                     <div class="card__subscrybe">
                        <img src="./images/william-wong.jpg" alt="william-wong" class="card__icon">
                        <div class="card__name card__name_most-resent">William Wong</div>
                     </div>
                     <div class="card__date card__date_most-resent">September 25, 2015</div>
                  </div>
               </a>
               <a href="#" class="most-resent__card card">
                  <img class="card__image" src="./images/sunny-side-up.png" alt="sunny-side-up">
                  <div class="card__heading">
                     <h2 class="card__title_most-resent card__title title">Sunny Side Up</h2>
                     <div class="card__subtitle_most-resent card__subtitle subtitle">No place is ever as bad as they
                        tell you it’s going to be.</div>
                  </div>
                  <div class="card__footer card__footer_most-resent">
                     <div class="card__subscrybe">
                        <img src="./images/mat-vogel.jpg" alt="mat-vogel" class="card__icon">
                        <div class="card__name card__name_most-resent">Mat Vogel</div>
                     </div>
                     <div class="card__date card__date_most-resent">September 25, 2015</div>
                  </div>
               </a>
               <a href="#" class="most-resent__card card">
                  <img class="card__image" src="./images/water-falls.png" alt="water-falls">
                  <div class="card__heading">
                     <h2 class="card__title_most-resent card__title title">Water Falls</h2>
                     <div class="card__subtitle_most-resent card__subtitle subtitle">We travel not to escape life, but
                        for life not to escape us.</div>
                  </div>
                  <div class="card__footer card__footer_most-resent">
                     <div class="card__subscrybe">
                        <img src="./images/mat-vogel.jpg" alt="mat-vogel" class="card__icon">
                        <div class="card__name card__name_most-resent">Mat Vogel</div>
                     </div>
                     <div class="card__date card__date_most-resent">September 25, 2015</div>
                  </div>
               </a>
               <a href="#" class="most-resent__card card">
                  <img class="card__image" src="./images/trough-the-mist.png" alt="trough-the-mist">
                  <div class="card__heading">
                     <h2 class="card__title_most-resent card__title title">Through the Mist</h2>
                     <div class="card__subtitle_most-resent card__subtitle subtitle">Travel makes you see what a tiny
                        place you occupy in the world.</div>
                  </div>
                  <div class="card__footer card__footer_most-resent">
                     <div class="card__subscrybe">
                        <img src="./images/william-wong.jpg" alt="william-wong" class="card__icon">
                        <div class="card__name card__name_most-resent">William Wong</div>
                     </div>
                     <div class="card__date card__date_most-resent">September 25, 2015</div>
                  </div>
               </a>
               <a href="#" class="most-resent__card card">
                  <img class="card__image" src="./images/awaken-early.png" alt="awaken-early">
                  <div class="card__heading">
                     <h2 class="card__title_most-resent card__title title">Awaken Early</h2>
                     <div class="card__subtitle_most-resent card__subtitle subtitle">Not all those who wander are lost.
                     </div>
                  </div>
                  <div class="card__footer card__footer_most-resent">
                     <div class="card__subscrybe">
                        <img src="./images/mat-vogel.jpg" alt="mat-vogel" class="card__icon">
                        <div class="card__name card__name_most-resent">Mat Vogel</div>
                     </div>
                     <div class="card__date card__date_most-resent">September 25, 2015</div>
                  </div>
               </a>
               <a href="#" class="most-resent__card card">
                  <img class="card__image" src="./images/try-it-always.png" alt="try-it-always">
                  <div class="card__heading">
                     <h2 class="card__title_most-resent card__title title">Try it Always</h2>
                     <div class="card__subtitle_most-resent card__subtitle subtitle">The world is a book, and those who
                        do not travel read only one page.</div>
                  </div>
                  <div class="card__footer card__footer_most-resent">
                     <div class="card__subscrybe">
                        <img src="./images/mat-vogel.jpg" alt="mat-vogel" class="card__icon">
                        <div class="card__name card__name_most-resent">Mat Vogel</div>
                     </div>
                     <div class="card__date card__date_most-resent">September 25, 2015</div>
                  </div>
               </a>
            </div>
         </section>
      </div>
   </div>
   <footer class="footer">
      <div class="footer__container container">
         <a class="footer__logotype logotype logotype_white">Escape.</a>
         <nav class="footer__navigation navigation">
            <ul class="navigation__list container">
               <li><a class="navigation__link navigation__link_white" href="#">home</a></li>
               <li><a class="navigation__link navigation__link_white" href="#">categoris</a></li>
               <li><a class="navigation__link navigation__link_white" href="#">about</a></li>
               <li><a class="navigation__link navigation__link_white" href="#">contact</a></li>
            </ul>
         </nav>
      </div>
   </footer>
</body>

</html>