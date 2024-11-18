<?php

use yii\helpers\Url;

 $this->title=Yii::$app->name;?>

<div class="App">
<div class="wrapper">
    <div class="banner-area">
       <div class="container-area">
          <h2 class="sc-ttl-cont">Партнери</h2>
          <div>
             <ul class="container-nav-item">
                <li>
                   <a  class="cont-list" href="<?= Url::to(['post/index']) ?>">Головна</a>
                </li>
                <li  class="cont-list"><i class="fas fa-angle-right"></i></li>
                <li>
                   <a  class="cont-list">Партнери компанії</a>
                </li>
             </ul>
          </div>
       </div>
    </div>
 <section>
     <div class="section-licenses-container">
         <div class="section-licenses-content">
             <h1 class="section-licenses-content-title">Ліцензії</h1>
         </div>
             <div  class="section-charter-container">
                 <div class="charter-box-first">
                     <div class="charter-box-first-img"> <img  src="../img/partners/charter.png" alt="Charter"><span>Офіційний дистриб'ютор матеріалів марки ELF</span></div>
                     <div class="charter-box-first-img"> <img src="../img/partners/charter.png" alt="Charter"><span>Офіційний дистриб'ютор матеріалів марки Moly</span></div>
                     <div class="charter-box-first-img"> <img  src="../img/partners/charter.png" alt="Charter"><span>Офіційний партнер Castrol</span></div>
                 </div>
                 <div  class="charter-box-second">
                 <div class="charter-box-second-img"> <img  src="../img/partners/charter.png" alt="Charter"><span>Офіційний дистриб'ютор матеріалів марки ШЕЛЛ</span></div>
                 <div class="charter-box-second-img"> <img  src="../img/partners/charter.png" alt="Charter"><span>Офіційний дистриб'ютор матеріалів марки Mobil</span></div>
                 <div class="charter-box-second-img"> <img  src="../img/partners/charter.png" alt="Charter"><span>Офіційний дистриб'ютор матеріалів марки Motul</span></div>
                 </div>
             </div>
     </div>
 </section>
 <section>
     <div>
         <div class="section-partners-container">
             <div class="section-partners-container">
                 <div style="display: flex; align-items: center; justify-content: center;"><h1 class="section-partners-title">Партнери</h1> </div>
                 <div class="partners-box-first">
                     <div class="partners-box-first-img"><img class="logo-partners" src="../img/partners/PartnersCompany/ArmTek.png" alt="Компанія «АРМТЕК»"><span class="title-company">Компанія «АРМТЕК»</span></div>
                     <div  class="partners-box-first-img"><img class="logo-partners" src="../img/partners/PartnersCompany/Sachs.png" alt="Компанія «Sachs"><span  class="title-company">Компанія «Sachs»</span></div>
                     <div  class="partners-box-first-img"><img class="logo-partners" src="../img/partners/PartnersCompany/Kyb.png" alt="Компанія «Kyb»"><span  class="title-company">Компанія «Kyb»</span></div>
                     <div class="partners-box-first-img"><img class="logo-partners" src="../img/partners/PartnersCompany/Smotor.png" alt="Компанія «SMotor»"><span  class="title-company">Компанія «SMotor»</span></div>
                 </div>
                 <div  class="partners-box-second">
                     <div  class="partners-box-second-img"><img class="logo-partners" src="../img/partners/PartnersCompany/avtoExperet.png" alt="Компанія «AvtoExpert»"><span  class="title-company">Компанія «AvtoExpert»</span></div>
                     <div  class="partners-box-second-img"><img class="logo-partners" src="../img/partners/PartnersCompany/Bosch.jpg" alt="Компанія «Bosch»"><span  class="title-company">Компанія «Bosch»</span></div>
                     <div class="partners-box-second-img"><img class="logo-partners" src="../img/partners/PartnersCompany/Smile.png" alt="Компанія «Smile»"><span  class="title-company">Компанія «Smile»</span></div>
                 </div>
             </div>
         </div>
     </div>
 </section>
</div>

<script>AOS.init();</script>
</body>
</html>
