<?php

use yii\helpers\Url;

 $this->title=Yii::$app->name;?>

      <div class="App">
      <div class="wrapper">
         <div class="banner-area">
            <div class="container-area">
               <h2 class="sc-ttl-cont">Новини</h2>
               <div>
                  <ul class="container-nav-item">
                     <li>
                        <a  class="cont-list" href="<?= Url::to(['post/index']) ?>">Головна</a>
                     </li>
                     <li  class="cont-list"><i class="fas fa-angle-right"></i></li>
                     <li>
                        <a  class="cont-list">Новини компанії</a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <section>
            <div>
               <div>
                  <div style="display: flex; align-items: center; justify-content: center; flex-direction: column; ">
                     <h1 class="section-about-news-title">НОВИНИ</h1>
                     <p class="section-about-news-subtitle">Слідкуйте за новинами Автосервіса</p>
                  </div>
                  <div class="swiper-news-container">
                     <img src="../img/disc.png" alt="Car disc">
                     <div class="swiper-3 mySwiper-3">
                        <div class="swiper-wrapper">
                           <div class="swiper-slide sw-3">
                              <h3 class="date-sw-slide">24 вересня 2024 року</h3>
                              <p class="text-sw-slide">Ми раді оголосити про запуск нової послуги з діагностики електросистем автомобілів! Тепер ви можете швидко виявити і усунути будь-які проблеми.</p>
                           </div>
                           <div class="swiper-slide sw-3">
                              <h3 class="date-sw-slide">20 вересня 2024 року</h3>
                              <p class="text-sw-slide">Цього місяця ми пропонуємо знижку 20% на всі послуги з технічного обслуговування! Не пропустіть можливість подбати про свій автомобіль за вигідною ціною.</p>
                           </div>
                           <div class="swiper-slide sw-3">
                              <h3 class="date-sw-slide">21 вересня 2024 року</h3>
                              <p class="text-sw-slide">Приєднуйтесь до нас на відкритті нашого нового сервісного центру! Чекаємо вас на безкоштовну діагностику та цікаві подарунки.</p>
                           </div>
                           <div class="swiper-slide sw-3">
                              <h3 class="date-sw-slide">20 вересня 2024 року</h3>
                              <p class="text-sw-slide">Ми оновили наше обладнання для діагностики автомобілів! Тепер ми можемо надавати ще швидше та точніше обслуговування.</p>
                           </div>
                        </div>
                     </div>
                     <div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section style="margin-top: 5vh;">
         <div>
            <div class="backround-images">
               <div style="display: flex; align-items: center; justify-content: center; flex-direction: column; ">
                  <h1 class="section-faq-title">F. A. Q</h1>
                  <span class="section-faq-subtitle">У даному розділі наведені відповіді на запитання наших клієнтів.</span>
               </div>
               <div style="display: flex; align-items: center; justify-content: center; flex-direction: column; ">
                  <div class="header-hidden-container">
                     <div class="main-hidden-container">
                        <h3 class="title-hidden">Як часто потрібно міняти щітки склоочисника?</h3>
                        <div class="according-bth">+</div>
                     </div>
                     <p class="content">Ми звикли експлуатувати автомобіль, поки щось не зламається. Так і зі щітками - не замінимо, поки зовсім <br> не втратимо можливість бачити перед собою через брудне лобове скло. Слідкуйте за своїми щітками і змінюйте <br> їх на кожен сезон, адже безпека на дорозі понад усе!</p>
                  </div>
                  <!--  -->
                  <div class="header-hidden-container">
                     <div class="main-hidden-container">
                        <h3 class="title-hidden">Як дізнатися, чи потрібно міняти гальмівні колодки?</h3>
                        <div class="according-bth">+</div>
                     </div>
                     <p class="content">Зверніть увагу на свист або гудіння під час гальмування, а також на зменшення ефективності гальм.  <br>Рекомендуємо перевіряти колодки щонайменше раз на рік.</p>
                  </div>
                  <!--  -->
                  <div class="header-hidden-container">
                     <div class="main-hidden-container">
                        <h3 class="title-hidden">Які послуги ви пропонуєте?</h3>
                        <div class="according-bth">+</div>
                     </div>
                     <p class="content">Ми пропонуємо широкий спектр послуг, включаючи технічне обслуговування, ремонт двигунів, діагностику електросистем, заміну олії, шиномонтаж та багато іншого.</p>
                  </div>
                  <!--  -->
                  <div class="header-hidden-container">
                     <div class="main-hidden-container">
                        <h3 class="title-hidden">Чи потрібно мити автомобіль взимку?</h3>
                        <div class="according-bth">+</div>
                     </div>
                     <p class="content">Так, взимку важливо мити автомобіль, щоб видалити сіль та бруд, які можуть пошкодити лакофарбове покриття і корозувати метал.</p>
                  </div>
                  <!--  -->
                  <div class="header-hidden-container hd-cont-hidden">
                     <div class="main-hidden-container">
                        <h3 class="title-hidden">Які документи потрібні для обслуговування автомобіля?</h3>
                        <div class="according-bth">+</div>
                     </div>
                     <p class="content">Зазвичай вам знадобляться паспорт транспортного засобу, сервісна книжка та документи на право власності на автомобіль.</p>
                  </div>
                  <!--  -->
                  <div style="margin-bottom: 5vh;">
                     <a class="according-psevdo-btn" href="<?= Url::to(['post/contacts']) ?>">ЗАДАТИ ПИТАННЯ</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script>AOS.init();</script>
   </body>
</html>