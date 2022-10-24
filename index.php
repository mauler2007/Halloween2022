<?php
// Массив доступных для выбора языков
$langArray = array("ru", "pt", "en", "tr", "ua", "br");

//  !!! подключать ИСКЛЮЧИТЕЛЬНО НА ТЕСТОВОМ ХОСТИНГЕ
include '../__!!ONLY-TEST!!__/time-variables.php'; 
//  !!! подключать ИСКЛЮЧИТЕЛЬНО НА ТЕСТОВОМ ХОСТИНГЕ 

include '../__LOCALISATIONS__/processingLang.php';
include '../__LOCALISATIONS__/processingRegion.php';
include '../__LOCALISATIONS__/processingBrowser.php';
include '../__LINKS__/rootURL.php';

include_once ("languages/lang-".$contentLang.".php");
// echo $region; 
// echo $activeLang;
// echo $rootURL;
// echo content_lang;
// echo $rootRegURL;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/x-icon" sizes="16x16" href="images/favicon/icon.ico">
    <link rel="mask-icon" href="images/favicon/icon.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#1e0b0b">
    <title>halloween | B&amp;U</title>
    <link rel="stylesheet" href="css/style.min.css<?= $updateFile; ?>">
     
  </head>
  <body>
    <div class="body">
      <div class="backgrounds">
          <picture>
            <source srcset="images/main-bg/lend1-576.webp 576w, images/main-bg/lend1.webp"><img class="backgrounds__img backgrounds__img--1" src="images/main-bg/lend1.jpg" alt="">
          </picture>
          <picture>
            <source srcset="images/main-bg/down2-576.webp 576w, images/main-bg/down2.webp"><img class="backgrounds__img backgrounds__img--2" src="images/main-bg/down2.png" alt="">
          </picture>
          <picture>
            <source srcset="images/main-bg/mouses-mobile-576.webp 576w, images/main-bg/mouses3.webp"><img class="backgrounds__img backgrounds__img--3" src="images/main-bg/mouses3.png" alt="">
          </picture>
          <picture>
            <source srcset="images/main-bg/moon4.png" media="(max-width: 576px)"><img class="backgrounds__img backgrounds__img--4" src="images/main-bg/moon4.png" alt="">
          </picture>
          <picture>
            <source srcset="images/main-bg/pumpkin5.png" media="(max-width: 576px)"><img class="backgrounds__img backgrounds__img--5 animShowPumpkin" src="images/main-bg/pumpkin5.png" alt="">
          </picture>
          <picture>
            <source srcset="images/main-bg/wing6.png"><img class="backgrounds__img backgrounds__img--6" src="images/main-bg/wing6.png" alt="">
          </picture>
          <div class="lightning flashit"></div>
      </div>
      <header class="header">
        <div class="container">
          <div class="header__inner">
            <div class="header__left">
              <div class="logo"> <a href="<?= $rootURL;?>">
                  <picture>
                    <source srcset="images/mobile-logo.svg" media="(max-width: 576px)"><img src="images/desktop-logo.svg" alt="">
                  </picture></a>
                <div class="logo__slogan"> 
                  <p class="logo__text min-font">best bets for you</p>
                </div>
                <div class="logo__hand"> 
                  <svg class="logo__hand-icon">
                    <use xlink:href="images/sprite.svg#icon-hand"></use>
                  </svg>
                </div>
              </div>
            </div>
            <ul class="socials">
              <li class="socials__item"> <a class="socials__link" href="<?= $socFB; ?>" target="_blank">
                  <svg class="socials__icon"> 
                    <use xlink:href="images/sprite.svg#icon-fb"></use>
                  </svg></a></li>
              <li class="socials__item"> <a class="socials__link" href="<?= $socINSTAGRAM; ?>" target="_blank">
                  <svg class="socials__icon"> 
                    <use xlink:href="images/sprite.svg#icon-instagramm"></use>
                  </svg></a></li>
              <li class="socials__item"> <a class="socials__link" href="<?= $socTELEGRAM; ?>" target="_blank">
                  <svg class="socials__icon"> 
                    <use xlink:href="images/sprite.svg#icon-telegramm"></use>
                  </svg></a></li>
            </ul>
            <div class="header__box">
              <div class="langCheck">
                <div class="langCheck__wrapper">
                  <?php include '../__LOCALISATIONS__/langSwitcher.php' ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <div class="wrapper">
        <main class="main">
          <section class="page">
            <div class="container"> 
              <div class="page__inner"> 
                <div class="page__content"> 
                  <div class="page__images">
                    <div class="page__image page__image--pumpkin"><img class="page__img animShowPumpkin" src="images/main-bg/pumpkin5.png" alt="pumpkin"></div>
                    <div class="page__image page__image--moon"> <img class="page__img" src="images/main-bg/moon4.png" alt="moon"></div>
                  </div>
                  <div class="page__bonus">

                    <?php if($contentLang == "tr" || $contentLang == "pt" || $contentLang == "en" ) { ?> 
                      <p class="page__text" >
                        <strong class="gradient-text"><?= $local['top_text']?></strong>
                        <span> <?= $local['top_text2']?></span> 
                      </p>
                      <h1 class="page__call"><?= $local['top_amount']?></h1>
                    <p class="page__text"><?= $local['top_text3']?></p>
                    <?php } else { ?> 
                    <p class="page__text" >
                      <strong class="gradient-text"><?= $local['top_text']?></strong>
                      <span> <?= $local['top_text2']?></span> 
                    </p>
                    <p class="page__text"><?= $local['top_text3']?></p>
                    <h1 class="page__call"><?= $local['top_amount']?></h1>
                    <?php } ?>
                    <!-- <p class="page__text"><?= $local['top_amount2']?></p> -->
                  </div>
                  <div class="btn-boxtop">
                    
                      <a class="btn-boxtop__new target-btn" id="getTop" href="<?= $rootRegURL; ?>" target="_blank"> <?= $local['recive_bonus']?></a>
                    
                    <p class="btn-boxtop__rules" id="rulesTop" data-modal="popup-modal"><?= $local['therms']?></p>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </main>
      </div>
      <div class="popup modal" id="popup-modal">
        <div class="popup__wrapper">
          <div class="popup__close"> <span class="popup__close-btn"></span></div>
          <div class="popup__content"> 
            <h2 class="popup__name"><?= $local['rule_title']?></h2>
            <p class="popup__date"> 
              <time class="pupup__time" datetime="2021-10-01T00:01"></time>
            </p>
            <div class="popup__frame"> 
              <ul class="popup__rules">
                <li class="popup__rule"> 
                  <p>1. <?= $local['rule1']?></p>
                </li>
                <li class="popup__rule"> 
                  <p>2. <?= $local['rule2']?></p>
                </li>
                <li class="popup__rule"> 
                  <p>3. <?= $local['rule3']?></p>
                     <table class="table" style="text-align: center;">
                      <caption><?= $local['rule3_table_capture']?></caption>
                      <thead>
                        <tr>
                          <th scope="col"><?= $local['rule3_table_sum']?></th>
                          <th scope="col"><?= $local['rule3_table_amount']?></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>2500-3500</td>
                          <td>15</td>
                        </tr>
                        <tr>
                          <td>3501-5000</td>
                          <td>25</td>
                        </tr>
                        <tr>
                          <td>5001-7500</td>
                          <td>50</td>
                        </tr>
                        <tr>
                          <td>7500+</td>
                          <td>100</td>
                        </tr>
                      </tbody>
                    </table>
                </li>
                <li class="popup__rule"> 
                  <p>4. <?= $local['rule4']?></p>
                    <table class="table" style="text-align: center;">
                      <thead>
                        <tr>
                          <th scope="col"><?= $local['rule4_table_provider']?></th>
                          <th scope="col"><?= $local['rule4_table_game']?></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><?= $local['rule4_table_operator_1']?></td>
                          <td><?= $local['rule4_table_slot_1']?></td>
                        </tr>
                        <tr>
                          <td><?= $local['rule4_table_operator_2']?></td>
                          <td><?= $local['rule4_table_slot_2']?></td>
                        </tr>
                        <tr>
                          <td><?= $local['rule4_table_operator_3']?></td>
                          <td><?= $local['rule4_table_slot_3']?></td>
                        </tr>
                        <tr>
                          <td><?= $local['rule4_table_operator_4']?></td>
                          <td><?= $local['rule4_table_slot_4']?></td>
                        </tr>
                        <tr>
                          <td><?= $local['rule4_table_operator_5']?></td>
                          <td><?= $local['rule4_table_slot_5']?></td>
                        </tr>
                      </tbody>
                    </table>
                </li>
                <li class="popup__rule"> 
                  <p>5. <?= $local['rule5']?></p>
                </li>
                <li class="popup__rule"> 
                  <p>6. <?= $local['rule6']?></p>
                </li>
                <li class="popup__rule"> 
                  <p>7. <?= $local['rule7']?></p>
                </li>
                <li class="popup__rule"> 
                  <p>8. <?= $local['rule8']?></p>
                </li>
                <li class="popup__rule"> 
                  <p>9. <?= $local['rule9']?> </p>
                </li>
                <li class="popup__rule"> 
                  <p>10. <?= $local['rule10']?></p>
                </li>
                <li class="popup__rule"> 
                  <p>11. <?= $local['rule11']?></p>
                </li>
                <li class="popup__rule"> 
                  <p>12. <?= $local['rule12']?></p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="js/main.min.js"></script>
  </body>
</html>