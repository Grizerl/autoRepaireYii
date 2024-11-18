<?php

use yii\helpers\Url;

 $this->title=Yii::$app->name;?>

<div class="App">
</div>
<div class="wrapper">
    <div class="banner-area">
       <div class="container-area">
          <h2 class="sc-ttl-cont">Про нас</h2>
          <div>
             <ul class="container-nav-item">
                <li>
                   <a  class="cont-list" href="<?= Url::to(['post/index']) ?>">Головна</a>
                </li>
                <li  class="cont-list"><i class="fas fa-angle-right"></i></li>
                <li>
                   <a  class="cont-list">Про компанію</a>
                </li>
             </ul>
          </div>
       </div>
    </div>
 <section>
    <div>
       <div>
          <div>
             <div style="display: flex; align-items: center; justify-content: center; flex-direction: column; ">
             <h1 class="section-gallery-title">Автотовари: Аксесуари,<br> Розхідники та Багато Іншого</h1>
             <h3 class="section-gallery-subtitle">Автосервіс — це спеціалізований заклад, який пропонує широкий вибір<br>популярних товарів для автомобілів.</h3>
             </div>
             <div>
                <div class="first-box">
                   <img class="gallery-first-box" src="../img/gallery/gallery1.png" alt="gallery1">
                   <img class="gallery-first-box" src="../img/gallery/gallery2.png" alt="gallery2">
                   <img class="gallery-first-box" src="../img/gallery/gallery3.png" alt="gallery3">
                </div>
                <div class="second-box">
                   <img class="gallery-second-box" src="../img/gallery/gallery4.png" alt="gallery4">
                   <img class="gallery-second-box" src="../img/gallery/gallery5.png" alt="gallery5">
                   <img class="gallery-second-box" src="../img/gallery/gallery6.png" alt="gallery6">
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <section>
    <div>
       <div class="section-about-company">
          <div>
             <h1 class="section-about-company-title">Про компанію</h1>
             <div class="section-form-container">
                <p>
                    Наша компанія спеціалізується на наданні високоякісних послуг у сфері обслуговування та ремонту автомобілів.<br> Ми маємо багаторічний досвід і команду кваліфікованих фахівців, які завжди готові допомогти нашим клієнтам. <br>Наша мета — забезпечити вас надійним обслуговуванням та продукцією, що відповідає найвищим стандартам якості.
                    <br><br>
                    У нашому автосервісі ви знайдете сучасне обладнання, яке дозволяє швидко і точно діагностувати проблеми вашого автомобіля. Ми пропонуємо широкий спектр послуг, від технічного обслуговування до складних ремонтів, а також продаж автотоварів та аксесуарів.
                    <br><br>
                    Ми цінуємо кожного клієнта і прагнемо досягти максимального задоволення від співпраці. Ваш автомобіль <br>у надійних руках!
                </p>
             </div>
          </div>
       </div>
    </div>
 </section>
</div>

<script>AOS.init();</script>
</body>
</html>
