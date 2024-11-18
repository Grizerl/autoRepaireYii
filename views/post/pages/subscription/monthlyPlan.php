<?php

use yii\helpers\Url;

 $this->title=Yii::$app->name;?>
<div class="App">
<div class="wrapper">
    <div class="banner-area">
       <div class="container-area">
          <h2 class="sc-ttl-cont">Ціновий план</h2>
          <div>
             <ul class="container-nav-item">
                <li>
                   <a  class="cont-list" href="<?= Url::to(['post/index']) ?>">Головна</a>
                </li>
                <li  class="cont-list"><i class="fas fa-angle-right"></i></li>
                <li>
                   <a  class="cont-list">ціна</a>
                </li>
             </ul>
          </div>
       </div>
    </div>
 <section class="section-header">
     <div>
         <div class="section-element-title-conteiner">
             <h2 class="title-element">Ціна</h2>
             <!--  -->
             <!--  -->
             <h3 class="subtitle-element">Ціновий план</h3>
         </div>
         <div class="section-element-navbar-conteiner">
             <ul class="section-element-nav">
                 <li class="element-nav-item">
                     <a id="btn-silver-plan" class="element-nav-link" href="#"><strong>Срібний пакет</strong></a>
                 </li>
                 <li class="element-nav-item">
                     <a id="btn-platinum-plan" class="element-nav-link active" href="#"><strong>Платиновий пакет</strong></a>
                 </li>
                 <li class="element-nav-item">
                     <a id="btn-gold-plan" class="element-nav-link" href="#"><strong>Золотий пакет</strong></a>
                 </li>
             </ul>
         </div>
         <div>
         <div id="card-silver" class="section-card-list-pricing">
             <div class="section-card-list-pricing-plan-content">
                 <div  class="card-items-pricing">
                     <div class="with-pricing-icon"><i class="fa-solid fa-snowflake"></i></div>
                     <!--  -->
                     <!--  -->
                     <h4>Базовий план</h4>
                     <!--  -->
                     <!--  -->
                     <h6>58$</h6>
                     <!--  -->
                     <h5><span>$</span>12.99<span>/m</span></h5>
                     <!--  -->
                     <div class="conditions-part">
                         <ul>
                             <li>
                                 <a href="#">Традиційна заміна масла<i class="fa-regular fa-circle-xmark"></i></a>
                             </li>
                             <li>
                                 <a href="#">Візуальна перевірка гальм<i class="fa-solid fa-check"></i></a>
                             </li>
                             <li>
                                 <a href="#">Обслуговування трансмісії<i class="fa-regular fa-circle-xmark"></i></a>
                             </li>
                             <li>
                                 <a href="#">Чистка паливної системи<i class="fa-solid fa-check"></i></a>
                             </li>
                             <li>
                                 <a href="#">Перевірка батареї<i class="fa-regular fa-circle-xmark"></i></a>
                             </li>
                             <li>
                                 <a href="#">Протектор шин<i class="fa-regular fa-circle-xmark"></i></a>
                             </li>
                         </ul>
                     </div>
                     <a href="<?= Url::to(['post/form']) ?>" class="btn-pricing-card" type="submit">Купити зараз</a>
                 </div>
                 <div class="card-items-pricing">
                     <div class="with-pricing-icon"><i class="fa-regular fa-money-bill-1"></i></div>
                     <!--  -->
                     <!--  -->
                     <h4>Розширений план</h4>
                     <!--  -->
                     <!--  -->
                     <h6>80$</h6>
                     <!--  -->
                     <h5><span>$</span>29.99<span>/m</span></h5>
                     <!--  -->
                     <div  class="conditions-part">
                         <ul>
                             <li>
                                 <a href="#">Традиційна заміна масла<i class="fa-solid fa-check"></i></a>
                             </li>
                             <li>
                                 <a href="#">Візуальна перевірка гальм<i class="fa-solid fa-check"></i></a>
                             </li>
                             <li>
                                 <a href="#">Обслуговування трансмісії<i class="fa-solid fa-check"></i></a>
                             </li>
                             <li>
                                 <a href="#">Чистка паливної системи<i class="fa-solid fa-check"></i></a>
                             </li>
                             <li>
                                 <a href="#">Перевірка батареї<i class="fa-regular fa-circle-xmark"></i></a>
                             </li>
                             <li>
                                 <a href="#">Протектор шин<i class="fa-regular fa-circle-xmark"></i></a>
                             </li>
                         </ul>
                     </div>
                     <a href="<?= Url::to(['post/form']) ?>" class="btn-pricing-card" type="submit">Купити зараз</a>
                 </div>
                 <div class="card-items-pricing">
                     <div class="with-pricing-icon"><i class="fa-solid fa-star"></i></div>
                     <!--  -->
                     <!--  -->
                     <h4>Преміальний план</h4>
                     <!--  -->
                     <!--  -->
                     <h6>120$</h6>
                     <!--  -->
                     <h5><span>$</span>63.99<span>/m</span></h5>
                     <!--  -->
                     <div  class="conditions-part">
                         <ul>
                             <li>
                                 <a href="#">Традиційна заміна масла<i class="fa-solid fa-check"></i></a>
                             </li>
                             <li>
                                 <a href="#">Візуальна перевірка гальм<i class="fa-solid fa-check"></i></a>
                             </li>
                             <li>
                                 <a href="#">Обслуговування трансмісії<i class="fa-solid fa-check"></i></a>
                             </li>
                             <li>
                                 <a href="#">Чистка паливної системи<i class="fa-solid fa-check"></i></a>
                             </li>
                             <li>
                                 <a href="#">Перевірка батареї<i class="fa-solid fa-check"></i></a>
                             </li>
                             <li>
                                 <a href="#">Протектор шин<i class="fa-solid fa-check"></i></a>
                             </li>
                         </ul>
                     </div>
                     <a href="<?= Url::to(['post/form']) ?>" class="btn-pricing-card"  type="submit">Купити зараз</a>
                 </div>
             </div>
         </div>
             <!--  -->
         <div id="card-platinum" class="section-card-list-pricing show">
            <div class="section-card-list-pricing-plan-content">
                 <div class="card-items-pricing">
                     <div class="with-pricing-icon"><i class="fa-solid fa-fire"></i></div>
                     <!--  -->
                     <!--  -->
                     <h4>Базовий план </h4>
                     <!--  -->
                     <!--  -->
                     <h6>125$</h6>
                     <!--  -->
                     <h5><span>$</span>80.99<span>/m</span></h5>
                     <!--  -->
                     <div class="conditions-part">
                         <ul>
                             <li>
                                 <a href="#">Ремені та шланги<i class="fa-regular fa-circle-xmark"></i></a>
                             </li>
                             <li>
                                 <a href="#">Підвіска та амортизатори<i class="fa-solid fa-check"></i></a>
                             </li>
                             <li>
                                 <a href="#">Обслуговування трансмісії<i class="fa-regular fa-circle-xmark"></i></a>
                             </li>
                             <li>
                                 <a href="#">Чистка паливної системи<i class="fa-solid fa-check"></i></a>
                             </li>
                             <li>
                                 <a href="#">Вихлопна система<i class="fa-regular fa-circle-xmark"></i></a>
                             </li>
                             <li>
                                 <a href="#">Компоненти інтер'єру<i class="fa-regular fa-circle-xmark"></i></a>
                             </li>
                         </ul>
                     </div>
                     <a href="<?= Url::to(['post/form']) ?>" class="btn-pricing-card" type="submit">Купити зараз</a>
                 </div>
                 <div class="card-items-pricing">
                     <div class="with-pricing-icon"><i class="fa-solid fa-bolt"></i></div>
                     <!--  -->
                     <!--  -->
                     <h4>Розширений план</h4>
                     <!--  -->
                     <!--  -->
                     <h6>250$</h6>
                     <!--  -->
                     <h5><span>$</span>200.99<span>/m</span></h5>
                     <!--  -->
                     <div  class="conditions-part">
                         <ul>
                             <li>
                                 <a href="#">Ремені та шланги<i class="fa-solid fa-check"></i></a>
                             </li>
                             <li>
                                 <a href="#">Підвіска та амортизатори<i class="fa-regular fa-circle-xmark"></i></a>
                             </li>
                             <li>
                                 <a href="#">Обслуговування трансмісії<i class="fa-regular fa-circle-xmark"></i></a>
                             </li>
                             <li>
                                 <a href="#">Чистка паливної системи<i class="fa-solid fa-check"></i></a>
                             </li>
                             <li>
                                 <a href="#">Вихлопна система<i class="fa-regular fa-circle-xmark"></i></a>
                             </li>
                             <li>
                                 <a href="#">Компоненти інтер'єру<i class="fa-solid fa-check"></i></a>
                             </li>
                         </ul>
                     </div>
                     <a href="<?= Url::to(['post/form']) ?>" class="btn-pricing-card" type="submit">Купити зараз</a>
                 </div>
                 <div class="card-items-pricing">
                     <div class="with-pricing-icon"><i class="fa-solid fa-star"></i></div>
                     <!--  -->
                     <!--  -->
                     <h4>Преміальний план</h4>
                     <!--  -->
                     <!--  -->
                     <h6>300$</h6>
                     <!--  -->
                     <h5><span>$</span>299.99<span>/m</span></h5>
                     <!--  -->
                     <div  class="conditions-part">
                         <ul>
                             <li>
                                 <a href="#">Ремені та шланги<i class="fa-solid fa-check"></i></a>
                             </li>
                             <li>
                                 <a href="#">Підвіска та амортизатори<i class="fa-solid fa-check"></i></a>
                             </li>
                             <li>
                                 <a href="#">Обслуговування трансмісії<i class="fa-solid fa-check"></i></a>
                             </li>
                             <li>
                                 <a href="#">Чистка паливної системи<i class="fa-solid fa-check"></i></a>
                             </li>
                             <li>
                                 <a href="#">Вихлопна система<i class="fa-solid fa-check"></i></a>
                             </li>
                             <li>
                                 <a href="#">Компоненти інтер'єру<i class="fa-solid fa-check"></i></a>
                             </li>
                         </ul>
                     </div>
                     <a href="<?= Url::to(['post/form']) ?>" class="btn-pricing-card"  type="submit">Купити зараз</a>
                 </div>
            </div>
         </div>
             <!--  -->
         <div id="card-gold" class="section-card-list-pricing">
             <div class="section-card-list-pricing-plan-content">
                 <div class="card-items-pricing">
                     <div class="with-pricing-icon"><i class="fa-solid fa-layer-group"></i></div>
                     <!--  -->
                     <!--  -->
                     <h4>Базовий план </h4>
                     <!--  -->
                     <!--  -->
                     <h6>400$</h6>
                     <!--  -->
                     <h5><span>$</span>359.99<span>/m</span></h5>
                     <!--  -->
                     <div class="conditions-part">
                         <ul>
                             <li>
                                 <a href="#">Традиційна заміна масла<i class="fa-regular fa-circle-xmark"></i></a>
                             </li>
                             <li>
                                 <a href="#">Сигнал і сигнальні вогні<i class="fa-regular fa-circle-xmark"></i></a>
                             </li>
                             <li>
                                 <a href="#">Suspension Components <i class="fa-solid fa-check"></i></a>
                             </li>
                             <li>
                                 <a href="#">Вихлопний дим<i class="fa-solid fa-check"></i></a>
                             </li>
                             <li>
                                 <a href="#">Підсилювач керма<i class="fa-regular fa-circle-xmark"></i></a>
                             </li>
                             <li>
                                 <a href="#">Радіатор і система охолодження<i class="fa-regular fa-circle-xmark"></i></a>
                             </li>
                         </ul>
                     </div>
                     <a href="<?= Url::to(['post/form']) ?>" class="btn-pricing-card" type="submit">Купити зараз</a>
                 </div>
                 <div class="card-items-pricing">
                     <div class="with-pricing-icon"><i class="fa-solid fa-joint"></i></div>
                     <!--  -->
                     <!--  -->
                     <h4>Розширений план</h4>
                     <!--  -->
                     <!--  -->
                     <h6>500$</h6>
                     <!--  -->
                     <h5><span>$</span>498.99<span>/m</span></h5>
                     <!--  -->
                     <div  class="conditions-part">
                         <ul>
                             <li>
                                 <a href="#">Традиційна заміна масла<i class="fa-regular fa-circle-xmark"></i></a>
                             </li>
                             <li>
                                 <a href="#">Сигнал і сигнальні вогні<i class="fa-solid fa-check"></i></a>
                             </li>
                             <li>
                                 <a href="#">Suspension Components <i class="fa-solid fa-check"></i></a>
                             </li>
                             <li>
                                 <a href="#">Вихлопний дим <i class="fa-solid fa-check"></i></a>
                             </li>
                             <li>
                                 <a href="#">Підсилювач керма<i class="fa-regular fa-circle-xmark"></i></a>
                             </li>
                             <li>
                                 <a href="#">Радіатор і система охолодження<i class="fa-regular fa-circle-xmark"></i></a>
                             </li>
                         </ul>
                     </div>
                     <a href="<?= Url::to(['post/form']) ?>" class="btn-pricing-card" type="submit">Купити зараз</a>
                 </div>
                 <div class="card-items-pricing">
                     <div class="with-pricing-icon"><i class="fa-solid fa-star"></i></div>
                     <!--  -->
                     <!--  -->
                     <h4>Преміальний план</h4>
                     <!--  -->
                     <!--  -->
                     <h6>800$</h6>
                     <!--  -->
                     <h5><span>$</span>700.99<span>/m</span></h5>
                     <!--  -->
                     <div  class="conditions-part">
                         <ul>
                             <li>
                                 <a href="#">Традиційна заміна масла<i class="fa-solid fa-check"></i></a>
                             </li>
                             <li>
                                 <a href="#">Сигнал і сигнальні вогні<i class="fa-solid fa-check"></i></a>
                             </li>
                             <li>
                                 <a href="#">Suspension Components <i class="fa-solid fa-check"></i></a>
                             </li>
                             <li>
                                 <a href="#">Вихлопний дим<i class="fa-solid fa-check"></i></a>
                             </li>
                             <li>
                                 <a href="#">Підсилювач керма<i class="fa-solid fa-check"></i></a>
                             </li>
                             <li>
                                 <a href="#">Радіатор і система охолодження<i class="fa-solid fa-check"></i></a>
                             </li>
                         </ul>
                     </div>
                     <a href="<?= Url::to(['post/form']) ?>" class="btn-pricing-card"  type="submit">Купити зараз</a>
                 </div>
             </div>
         </div>
         </div>
     </div>
 </section>
 <section>
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
