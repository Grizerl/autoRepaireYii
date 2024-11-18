<?php

use yii\helpers\Url;

 $this->title=Yii::$app->name;?>
<aside>
        <div class="aside-container">
           <div class="aside-content">
              <div class="swiper-1">
                 <!-- Swiper for slides -->
                 <div class="swiper-wrapper">
                    <!-- First slide -->
                    <div class="swiper-slide">
                       <div class="back-img-slide-1">
                          <div class="slide-1-content">
                             <h2 class="slide-1-title">Найкращі майстри<br>для обслуговування</h2>
                             <p class="slide-1-text">Наші фахівці гарантують якісне та професійне обслуговування,<br> 
                              забезпечуючи індивідуальний підхід до кожного клієнта. 
                             </p>
                             <a class="slide-1-btn" href="#contacts">Запишіться на діагностику</a>
                          </div>
                       </div>
                    </div>
                    <!-- Second slide -->
                    <div class="swiper-slide">
                       <div class="back-img-slide-2">
                          <div class="slide-2-content">
                             <h2 class="slide-2-title">Найкраща автомайстерня<br>для обслуговування</h2>
                             <p class="slide-2-text">Наші професіонали забезпечують повний спектр ремонтних 
                              послуг<br> для вашого авто. Висока якість, надійність та індивідуальний підхід.
                             </p>
                             <a class="slide-2-btn" href="<?= Url::to(['post/monthly']) ?>">Більше інформації +</a>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </aside>
     <section id="about">
        <!-- About section -->
        <div class="section-about-card-content">
           <div class="card-list">
              <!-- Appointment Card -->
              <div class="card">
                 <div><i class="fa-solid fa-car-rear"></i></div>
                 <h2>Призначення</h2>
                 <p class="card-p">Ми прагнемо надавати послуги<br> найвищої якості.</p>
                 <div class="card-btn-active">
                    <div class="card-pseudo-btn"><a href="#">Забронювати зараз</a></div>
                 </div>
              </div>
              <!-- Service Packages Card -->
              <div class="card">
                 <div><i class="fa-solid fa-gear"></i></div>
                 <h2>Пакети послуг</h2>
                 <p class="card-p">Ми пропонуємо гнучкі пакети<br>послуг для ваших потреб.</p>
                 <div class="card-btn-active">
                    <div class="card-pseudo-btn"><a href="<?= Url::to(['post/monthly']) ?>">Перейти до пропозицій</a></div>
                 </div>
              </div>
              <!-- Find A Repair Card -->
              <div class="card">
                 <div><i class="fa-solid fa-screwdriver-wrench"></i></div>
                 <h2>Відремонтувати</h2>
                 <p class="card-p">Майстри швидко і надійно<br>відновлять ваше авто.</p>
                 <div class="card-btn-active">
                    <div class="card-pseudo-btn"><a href="#contacts">Зв'язок з нами</a></div>
                 </div>
              </div>
           </div>
        </div>
        <aside>
           <!-- Aside section with animation -->
           <div class="aside-container-section-card">
              <div style="width: 40%;">
                 <span class="aside-subtitle">Про компанію</span>
                 <h1 class="aside-title">Ми завжди готові допомогти</h1>
                 <p class="aside-text">Наша команда завжди на зв'язку, щоб забезпечити вам швидку та професійну допомогу. Ви можете розраховувати на нас у будь-який час для вирішення будь-яких питань з обслуговування вашого авто.</p>
                 <div>
                    <a href="<?= Url::to(['post/news']) ?>" class="aside-btn animation-btn"><span>Докладніше</span></a>
                 </div>
              </div>
              <div>
                 <img class="img-aside-one" src="../img/circle-one.jpg" alt="A man who cuts a car">
                 <img class="img-aside-two" src="../img/circle-two.jpg" alt="tools">
              </div>
           </div>
        </aside>
     </section>
     <section id="support">
        <!-- Support section -->
        <div class="section-support-container">
           <div class="section-support-content">
              <div class="section-support-content-title">
                 <h2 class="section-support-title">НАША ПІДТРИМКА</h2>
                 <h3 class="section-support-subtitle">Наші послуги</h3>
              </div>
              <div class="card-support-list">
                 <div class="card-support">
                    <i class="fa-solid fa-screwdriver-wrench"></i>
                    <h2>Ремонт & Заміна</h2>
                    <p class="card-p cd-p">Ми надаємо комплексні послуги з <br> ремонту та заміни деталей вашого<br> автомобіля</p>
                 </div>
                 <div class="card-support">
                    <i class="fa-regular fa-compass"></i>
                    <h2>Лазерне різання</h2>
                    <p class="card-p cd-p">Пропонуємо високоточне лазерне<br> різання металу для виготовлення<br> деталей</p>
                 </div>
                 <div class="card-support">
                    <i class="fa-solid fa-car-rear"></i>
                    <h2>Заміна олії </h2>
                    <p class="card-p cd-p">Наша послуга з заміни олії забезпечує вашому автомобілю продуктивність та довговічність</p>
                 </div>
              </div>
              <div class="card-support-list cd-lt-sup">
                 <div class="card-support">
                    <i class="fa-solid fa-hammer"></i>
                    <h2>Гарантія на обслуговування</h2>
                    <p class="card-p cd-p">Ми надаємо гарантію що свідчить про впевненість у робіті</p>
                 </div>
                 <div class="card-support">
                    <i class="fa-solid fa-gears"></i>
                    <h2>Безкоштовна діагностика</h2>
                    <p class="card-p cd-p">Скористайтеся безкоштовною діагностикою вашого авто.</p>
                 </div>
                 <div class="card-support">
                    <i class="fa-solid fa-life-ring"></i>
                    <h2>Довічна гарантія <br> на роботу</h2>
                    <p class="card-p cd-p">Наша довічна гарантія свідчить про впевненість у якості виконаних робіт</p>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <section>
        <!-- Advantages section -->
        <div>
           <div class="section-advantages-conteiner">
              <div>
                 <h1 class="section-advantages-title">НАШІ ПЕРЕВАГИ</h1>
              </div>
              <div class="section-advantages-card-content">
                 <div class="section-advantages-card-list">
                    <div><i class="fa-solid fa-headset fa-i" aria-hidden="true"></i></div>
                    <div>
                       <h3 class="section-advantages-card-title">ЯКІСНА ПІДТРИМКА</h3>
                       <p class="section-advantages-card-p">Ми надаємо професійну підтримку клієнтів, щоб ви завжди почувалися впевнено у наших послугах.</p>
                    </div>
                 </div>
                 <div class="section-advantages-card-list sc-cd-lt-tw">
                    <div><i class="fa-solid fa-gears fa-i" aria-hidden="true"></i></div>
                    <div>
                       <h3 class="section-advantages-card-title">РІЗНОМАНІТНІСТЬ ПОСЛУГ</h3>
                       <p class="section-advantages-card-p">Ми пропонуємо широкий спектр послуг,щоб задовольнити потреби в обслуговуванні автомобіля.</p>
                    </div>
                 </div>
              </div>
              <div class="section-advantages-card-content">
                 <div  class="section-advantages-card-list sn-cd-lt">
                    <div><i class="fa-solid fa-life-ring fa-i" aria-hidden="true"></i></div>
                    <div>
                       <h3 class="section-advantages-card-title">ДОВІЧНА ГАРАНТІЯ</h3>
                       <p class="section-advantages-card-p">Наша довічна гарантія підтверджує нашу впевненість у якості наданих послуг. Ми прагнемо до бездоганності в роботі.</p>
                    </div>
                 </div>
                 <div  class="section-advantages-card-list sn-cd-lt">
                    <div><i class="fa-solid fa-car-rear fa-i" aria-hidden="true"></i></div>
                    <div>
                       <h3 class="section-advantages-card-title">СУЧАСНЕ ОБЛАДНАННЯ</h3>
                       <p class="section-advantages-card-p">Ми використовуємо лише сучасне обладнання, що дозволяють нам виконувати роботи з високою точністю та ефективністю.</p>
                    </div>
                 </div>
              </div>
              <a class="section-advantages-card-btn sc-cd-btn" href="<?= Url::to(['post/about']) ?>">БІЛЬШЕ ПЕРЕВАГ</a>
           </div>
        </div>
     </section>
     <section id="client-say">
        <!-- Client testimonials section -->
        <div class="section-client-container">
           <div class="section-client-content">
              <h2 class="section-client-title">Автосервіс</h2>
              <h3 class="section-client-subtitle">Наш клієнт каже</h3>
              <p class="section-client-text">
               Ми завжди цінуємо відгуки наших клієнтів, адже їхня думка — наш найкращий показник якості.Ось що кажуть наші <br>задоволені клієнти про співпрацю з нами.
              </p>
           </div>
        </div>
        <div class="swiper mySwiper">
           <!-- Swiper for client testimonials -->
           <div class="swiper-wrapper">
              <div class="swiper-slide sr-r">
                 <div class="swiper-slide-content">
                    <div class="slider-client-content">
                       <img id="swiper-img-box" src="../img/hackery-user.png" alt="User Male Icon">
                       <div>
                          <h6 class="swiper-name-box">David Sockar</h6>
                          <span class="swiper-role-box">Сlient</span>
                       </div>
                    </div>
                    <p class="swiper-text-box">Справжні професіонали! Обслуговування було швидким. Я залишився дуже задоволений результатом!</p>
                    <div class="star-container">
                       <h5 class="swiper-date-box">2024-02-04</h5>
                       <ul class="star-content">
                          <li><i class="fa-solid fa-star"></i></li>
                          <li><i class="fa-solid fa-star"></i></li>
                          <li><i class="fa-solid fa-star"></i></li>
                          <li><i class="fa-solid fa-star"></i></li>
                          <li><i class="fa-solid fa-star"></i></li>
                       </ul>
                    </div>
                 </div>
              </div>
                <div class="swiper-slide sr-r">
                 <div class="swiper-slide-content">
                    <div class="slider-client-content">
                       <img id="swiper-img-box" src="../img/hackery-user.png" alt="User Male Icon">
                       <div>
                          <h6 class="swiper-name-box">Liton Markers</h6>
                          <span class="swiper-role-box">Сlient</span>
                       </div>
                    </div>
                    <p class="swiper-text-box">Чудове обслуговування! Всі проблеми з моїм авто були усунуті швидко та без зайвих витрат. Рекомендую всім!</p>
                    <div class="star-container">
                       <h5 class="swiper-date-box">2024-08-05</h5>
                       <ul class="star-content">
                          <li><i class="fa-solid fa-star"></i></li>
                          <li><i class="fa-solid fa-star"></i></li>
                          <li><i class="fa-solid fa-star"></i></li>
                          <li><i class="fa-solid fa-star"></i></li>
                       </ul>
                    </div>
                 </div>
              </div>
              <div class="swiper-slide sr-r">
                <div class="swiper-slide-content">
                   <div class="slider-client-content">
                      <img id="swiper-img-box" src="../img/hackery-user.png" alt="User Male Icon">
                      <div>
                         <h6 class="swiper-name-box">Mr Anderson</h6>
                         <span class="swiper-role-box">Сlient</span>
                      </div>
                   </div>
                   <p class="swiper-text-box">Дякую за якісну діагностику! Завдяки вам я зміг уникнути серйозних проблем з двигуном. Ви – кращі!</p>
                   <div class="star-container">
                      <h5 class="swiper-date-box">2024-08-10</h5>
                      <ul class="star-content">
                         <li><i class="fa-solid fa-star"></i></li>
                         <li><i class="fa-solid fa-star"></i></li>
                         <li><i class="fa-solid fa-star"></i></li>
                         <li><i class="fa-solid fa-star"></i></li>
                      </ul>
                   </div>
                </div>
             </div>
               <div class="swiper-slide sr-r">
                <div class="swiper-slide-content">
                   <div class="slider-client-content">
                      <img id="swiper-img-box" src="../img/hackery-user.png" alt="User Male Icon">
                      <div>
                         <h6 class="swiper-name-box">Stiw Ander</h6>
                         <span class="swiper-role-box">Сlient</span>
                      </div>
                   </div>
                   <p class="swiper-text-box">Сучасне обладнання та висококваліфіковані майстри – саме те, що потрібно для якісного обслуговування.</p>
                   <div class="star-container">
                      <h5 class="swiper-date-box">2024-07-23</h5>
                      <ul class="star-content">
                         <li><i class="fa-solid fa-star"></i></li>
                         <li><i class="fa-solid fa-star"></i></li>
                         <li><i class="fa-solid fa-star"></i></li>
                         <li><i class="fa-solid fa-star"></i></li>
                         <li><i class="fa-solid fa-star"></i></li>
                      </ul>
                   </div>
                </div>
             </div>
             <div class="swiper-slide sr-r">
                <div class="swiper-slide-content">
                   <div class="slider-client-content">
                      <img id="swiper-img-box" src="../img/hackery-user.png" alt="User Male Icon">
                      <div>
                         <h6 class="swiper-name-box">Roza Karnel</h6>
                         <span class="swiper-role-box">Сlient</span>
                      </div>
                   </div>
                   <p class="swiper-text-box">Завжди отримую відмінну підтримку. Ваше обслуговування на вищому рівні, продовжуйте.</p>
                   <div class="star-container">
                      <h5 class="swiper-date-box">2024-09-20</h5>
                      <ul class="star-content">
                         <li><i class="fa-solid fa-star"></i></li>
                         <li><i class="fa-solid fa-star"></i></li>
                         <li><i class="fa-solid fa-star"></i></li>
                         <li><i class="fa-solid fa-star"></i></li>
                      </ul>
                   </div>
                </div>
             </div>
               <div class="swiper-slide sr-r">
                <div class="swiper-slide-content">
                   <div class="slider-client-content">
                      <img id="swiper-img-box" src="../img/hackery-user.png" alt="User Male Icon">
                      <div>
                         <h6 class="swiper-name-box">Alan Nural</h6>
                         <span class="swiper-role-box">Сlient</span>
                      </div>
                   </div>
                   <p class="swiper-text-box">Після заміни олії авто почало працювати набагато краще. Ваша команда дійсно знає свою справу!</p>
                   <div class="star-container">
                      <h5 class="swiper-date-box">2024-07-15</h5>
                      <ul class="star-content">
                         <li><i class="fa-solid fa-star"></i></li>
                         <li><i class="fa-solid fa-star"></i></li>
                         <li><i class="fa-solid fa-star"></i></li>
                         <li><i class="fa-solid fa-star"></i></li>
                         <li><i class="fa-solid fa-star"></i></li>
                      </ul>
                   </div>
                </div>
             </div>
           </div>
        </div>
     </section>
     <section style="margin-top: 10vh;">
        <!-- Before and after image slider -->
        <div class="swiper-2">
           <div class="swiper-wrapper">
              <div class="swiper-slide">
                 <div>
                    <img style="width: 100%;" src="../img/before.jpg" alt="Car before">
                 </div>
              </div>
              <div class="swiper-slide">
                 <div>
                    <img style="width: 100%;" src="../img/after.jpg" alt="Car after">
                 </div>
              </div>
           </div>
        </div>
     </section>
     <section>
        <!-- Team members section -->
        <div class="section-member-container">
           <h3 class="section-member-title">Наша команда</h3>
           <div class="swiper mySwiper">
              <div class="swiper-wrapper">
                 <div class="swiper-slide sr-r">
                    <img class="member-img" src="../img/members/team-img1.jpg" alt="Team member 1">
                    <h3>John Delos</h3>
                    <span class="section-member-role">Менеджер</span>
                 </div>
                 <div class="swiper-slide sr-r">
                    <img class="member-img" src="../img/members/team-img2.jpg" alt="Team member 2">
                    <h3>Ajura Agoh</h3>
                    <span class="section-member-role">Інженер</span>
                 </div>
                 <div class="swiper-slide sr-r">
                    <img class="member-img" src="../img/members/team-img3.jpg" alt="Team member 3">
                    <h3>Sabina Nur</h3>
                    <span class="section-member-role">Директор</span>
                 </div>
                 <div class="swiper-slide sr-r">
                    <img class="member-img" src="../img/members/team-img4.jpg" alt="Team member 4">
                    <h3>Alan Nural</h3>
                    <span class="section-member-role">Менеджер</span>
                 </div>
                 <div class="swiper-slide sr-r">
                    <img class="member-img" src="../img/members/team-img5.jpg" alt="Team member 5">
                    <h3>Liton Sokar</h3>
                    <span class="section-member-role">Інженер</span>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <section id="contacts">
        <!-- Contact form section -->
        <div class="section-contact-container">
           <div class="section-contact-content">
              <div class="">
                 <img style="width: 80%;" src="../img/Contact.png" alt="Car Mercedes-Benz">
              </div>
              <div class="section-contact-container-form">
                 <h1 class="section-contact-container-title">Поспілкуйтеся з нами</h1>
                 <h2 class="section-contact-container-subtitle">Напишіть нам</h2>
                 <form class="js-form" action="#" novalidate>

                    <input class="js-input" name="name" type="text" placeholder="Ваше ім'я*">

                    <input class="js-input js-input-phone" name="phone" type="tel" placeholder="Ваш номер телефону*">

                    <input class="js-input" name="car" type="text" placeholder="Ваше автo*">

                    <input class="js-input" name="comment" class="section-contact-form-comment" type="text" placeholder="Ваша проблема*">

                    <button type="submit" class="section-contact-form-btn" value="Send Request">Надіслати запит</button>

                    <div class="FormSubmit"></div>
                 </form>
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