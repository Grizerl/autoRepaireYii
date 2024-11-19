<?php

use yii\helpers\Url;

 $this->title=Yii::$app->name;?>

<div class="App">
<div class="wrapper">
    <div class="banner-area">
       <div class="container-area">
          <h2 class="sc-ttl-cont">Пропозиція</h2>
          <div>
             <ul class="container-nav-item">
                <li>
                   <a  class="cont-list" href="<?= Url::to(['post/index']) ?>">Головна</a>
                </li>
                <li  class="cont-list"><i class="fas fa-angle-right"></i></li>
                <li>
                   <a  class="cont-list">Пропозиція дня</a>
                </li>
             </ul>
          </div>
       </div>
    </div>
 <section>
     <div class="sn-offer-media-container">
         <div>
             <div class="sn-title-container">
             <h2 class="sn-title">ВЕЛИКА ПРОПОЗИЦІЯ</h2>
             <!--  -->
             <!--  -->
             <h3 class="sn-subtitle">Знижка на автомобіль <span class="sn-discount">15%</span>Пропозиції</h3>
             </div>
             <div class="search-container">
               <input type="text" id="car-search" placeholder="Пошук за моделлю автомобіля" onkeyup="searchByModel()">
           </div>
             <div class="shop_header">
                 <div class="shop_container">
                     <div class="shop_content">
                    <?php foreach($posts as $post): ?>
                 <div class="shop-car-card-container">
                        <?= \yii\helpers\Html::img("@web/{$post->img}") ?>
                     <div>
                         <h2 class="car-brand"><?= $post->name ?></h2>
                         <!--  -->
                         <!--  -->
                         <h3 class="car-model"><?= $post->model ?></h3>
                         <!--  -->
                         <!--  -->
                         <h1 class="car-price"><?= $post->price ?>$ <span class="old-price"><?= $post->old_price ?>$</span></h1>
                         <!--  -->
                         <!--  -->
                         <p class="car-description">Отримайте бонус на суму до $20 000/-</p>
                         <!--  -->
                         <!--  -->
                         <a href="<?= Url::to(['post/form']) ?>" class="btn-st-car" type="submit">Натисніть тут</a>
                     </div>
                 </div>
                 <?php endforeach; ?>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <section style="margin-top: 8vh;" >
    <!-- Contact info section -->
    <div>
       <div class="aside-container-main-info">
          <div class="aside-content-info">
             <i class="fa-solid fa-map-location-dot fa-icon-info"></i>
             <div>
                <h3 class="aside-container-title">АДРЕСА:</h3>
                <p class="aside-container-info">Mulatol Pakar Matha, Dhaka Bus<br> Stand Road, 5400</p>
             </div>
          </div>
          <div class="aside-content-info">
             <i class="fa-solid fa-phone-volume fa-icon-info"></i>
             <div>
                <h3 class="aside-container-title">ТЕЛЕФОНИ:</h3>
                <p class="aside-container-info">
                   <a style="color:#fff" href="tel:0950660959">+380 95 066 09 59</a>
                   <a style="color:#fff; margin-left:10px;" href="tel:0950650385">+380 95 065 03 85</a>
                   <br>
                   <a style="color:#fff" href="tel:0950564505">+380 95 056 46 05</a>
                </p>
             </div>
          </div>
          <div class="aside-content-info">
             <i class="fa-solid fa-calendar-check fa-icon-info"></i>
             <div>
                <h3 class="aside-container-title">ЧАС РОБОТИ:</h3>
                <p class="aside-container-info">понеділок–субота: 08:00–18:00;<br> П'ятниця - вихідний</p>
             </div>
          </div>
       </div>
    </div>
 </section>
</div>
<script>AOS.init();</script>
</body>
</html>
