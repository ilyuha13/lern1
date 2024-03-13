<?php
// 1. вывести все данные о сервере и заголовках
echo 'Данные в глоабльном массиве $_SERVER';
foreach ($_SERVER as $key => $header) {
  echo "{$key} = {$header} </br>";
};
echo '<br>---------------<br>';
$requestTime = $_SERVER['REQUEST_TIME'];
echo "Timestamp запроса {$requestTime} <br>";

// 3.1 работа с timestamp: вывести текущее дата+время в определенном формате
// все форматы https://www.php.net/manual/ru/datetime.format.php
$now = date("Y-m-d H:i:s");
echo "Текущая дата и время: {$now} <br>";


// 3.2 работа с timestamp: вывести определенную дату и время в определенном формате
$requestDateTime = date("Y-m-d H:i:s", $requestTime);
echo "Дата и время запроса: {$requestDateTime} <br>";

$lastDay = date("H-i-s Y.m.d", 1717189199);
echo "Последний день учебы: {$lastDay} <br>";


// 3.3 работа с timestamp: превратить дату в timestamp
$timestampNow = strtotime('now');
echo "Текущий timestamp: {$timestampNow} <br>";

$timestampDatetime = strtotime($now);
echo "Текущий timestamp: {$timestampDatetime} <br>";

$timestampNextWeek = strtotime('+1 week 2 days 4 hours 2 seconds');
echo "Какой-то timestamp на след неделе {$timestampNextWeek} <br>";

echo mktime(9, 24, 57, 5, 23, 1995) . '<br>';

echo '<br>---------------<br>';

// 4. вывести метод, URL и IP
$method = $_SERVER['REQUEST_METHOD'];
$url = $_SERVER['REQUEST_URI'];
$ipAddress = $_SERVER['REMOTE_ADDR'];

echo 'Method: ' . $method . '</br>';
echo 'URL: ' . $url . '</br>';
echo 'IP Address: ' . $ipAddress . '</br>';

echo '<br>---------------<br>';

// 5. Распечатаем все GET-параметры
foreach ($_GET as $key => $value) {
   echo "{$key} = {$value} </br>";
 }

 // 6. Распечатаем все POST-параметры
foreach ($_POST as $key => $value) {
   echo "{$key} = {$value} </br>";
 }
?>


<?php
$featured_posts = [
   [
      'title' => 'The Road Ahead',
      'subtitle' => 'The road ahead might be paved - it might not be.',
      'img_modifier' => './images/the-road-ahead-card.png',
      'author' => 'Mat Vogels',
      'author_avatar' => './images/mat-vogel.jpg',
      'date' => 'September 25, 2015',
      'sticker' => ''
   ],
   [
      'title' => 'From Top Down',
      'subtitle' => 'Once a year, go someplace you’ve never been before.',
      'img_modifier' => './images/from-top-down-card.png',
      'author' => 'William Wong',
      'author_avatar' => './images/william-wong.jpg',
      'date' => 'September 25, 2015',
      'sticker' => 'Adventure'
   ]
];
?>
<?php
$most_resent = [
   [
      'title' => 'Still Standing Tall',
      'subtitle' => 'Life begins at the end of your comfort zone.',
      'img_modifier' => './images/still-standing-tall.jpg',
      'author' => 'William Wong',
      'author_avatar' => './images/william-wong.jpg',
      'date' => 'September 25, 2015'
      // другие свойства этого поста
   ],
   [
      'title' => 'Sunny Side Up',
      'subtitle' => 'No place is ever as bad as they tell you it’s going to be.',
      'img_modifier' => './images/sunny-side-up.png',
      'author' => 'Mat Vogel',
      'author_avatar' => './images/mat-vogel.jpg',
      'date' => 'September 25, 2015'
      // свойства второго поста
   ],
   [
      'title' => 'Water Falls',
      'subtitle' => 'We travel not to escape life, but for life not to escape us.',
      'img_modifier' => './images/water-falls.png',
      'author' => 'Mat Vogel',
      'author_avatar' => './images/mat-vogel.jpg',
      'date' => 'September 25, 2015'
      // свойства второго поста
   ],
   [
      'title' => 'Through the Mist',
      'subtitle' => 'Travel makes you see what a tiny place you occupy in the world.',
      'img_modifier' => './images/trough-the-mist.png',
      'author' => 'William Wong',
      'author_avatar' => './images/william-wong.jpg',
      'date' => 'September 25, 2015'
      // свойства второго поста
   ],
   [
      'title' => 'Awaken Early',
      'subtitle' => 'Not all those who wander are lost.',
      'img_modifier' => './images/awaken-early.png',
      'author' => 'Mat Vogels',
      'author_avatar' => './images/mat-vogel.jpg',
      'date' => 'September 25, 2015'
      // свойства второго поста
   ],
   [
      'title' => 'Try it Always',
      'subtitle' => 'The world is a book, and those who do not travel read only one page.',
      'img_modifier' => './images/try-it-always.png',
      'author' => 'Mat Vogels',
      'author_avatar' => './images/mat-vogel.jpg',
      'date' => 'September 25, 2015'
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
   <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Lora:ital@0;1&family=Oxygen&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="/style/style.css">
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
               <?php
               foreach ($featured_posts as $post) {
                  include 'featured_posts_preview.php';
               }
               ?>
            </div>
         </section>
         <section class="most-resent">
            <h2 class="most-resent__section-title section-title title">Most Resent</h2>
            <div class="most-resent__section-flex-box section-flex-box">
               <?php
               foreach ($most_resent as $post) {
                  include 'most_resent_preview.php';
               }
               ?>
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