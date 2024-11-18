<?php
use app\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="icon" href="<?= Yii::$app->getUrlManager()->getBaseUrl() ?>/img/website-logo.png">
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="App">
    <!-- Preloader -->
    <div class="preload" data-preload>
        <div class="preloader-content">
            <p class="text">Loading</p>
            <img class="circle" src="../../../img/circle.png" alt="Car brake">
        </div>
    </div>

    <!-- Advertising Line -->
    <div class="advertising-line">
        <div class="row">
            <ul class="top-left">
                <li>
                    <i style="color:#fff;" class="fa-solid fa-house"></i>
                    <a href="https://google.com.ua/maps/place/%D0%9A%D0%B8%D1%97%D0%B2,+02000/@50.4018377,30.2208891,11z/data=!3m1!4b1!4m12!1m5!3m4!2zNTDCsDQ1JzMzLjciTiAyNcKwMTYnMzguNyJF!8m2!3d50.759347!4d25.277409!3m5!1s0x40d4cf4ee15a4505:0x764931d2170146fe!8m2!3d50.4503596!4d30.5245025!16zL20vMDJzbjM0?entry=ttu&g_ep=EgoyMDI0MDgyMC4xIKXMDSoASAFQAw%3D%3D">Car Service Floor UK</a>
                </li>
                <li>
                    <i style="color:#fff;" class="fa-solid fa-phone"></i>
                    <a  href="tel:+380950660959">+38(095)-066-09-59</a>
                </li>
                <li>
                    <i style="color:#fff;" class="fa-solid fa-envelope"></i>
                    <a  href="mailto:autorepaire@gmail.com">autorepaire@gmail.com</a>
                </li>
            </ul>
            <ul class="top-right">
                <li>
                    <a title="Facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li>
                    <a  title="Twitter" href="#"><i class="fab fa-x-twitter"></i></a>
                </li>
                <li>
                    <a title="Instagram" href="#"><i class="fab fa-instagram"></i></a>
                </li>
                <li>
                    <a  title="Google Plus" href="#"><i class="fab fa-google-plus-g"></i></a>
                </li>
                <li>
                    <a  title="Dribbble" href="#"><i class="fab fa-dribbble"></i></a>
                </li>
            </ul>
        </div>
    </div>
    
    <!-- Main Container -->
    <div class="container">
        <div class="navbar-content">
            <div class="main-logo">
                <h2 class="logo-slogan">Автосервіс</h2>
            </div>
            <div class="nav-bar-collapse">
                <ul class="nav-content">
                    <li class="nav-item">
                        <a class="nav-link" tabindex="1" href="<?= Url::to(['post/index']) ?>">Home</a>
                    </li>
                    <li class="nav-item menu-item">
                        <a class="nav-link" tabindex="2" id="about-link" href="<?= Url::to(['post/index']) ?>#about">About us<i style="margin-left:3px;" class="fa-solid fa-caret-down"></i></a>
                        <ul class="sub-menu">
                            <li><a href="<?= Url::to(['post/news']) ?>">Сompany news</a></li>
                            <li><a href="<?= Url::to(['post/about']) ?>">About the company</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" tabindex="3" href="<?= Url::to(['post/index']) ?>#client-say">Reviews</a>
                    </li>
                    <li class="nav-item menu-item">
                        <a class="nav-link" tabindex="4" href="<?= Url::to(['post/index']) ?>#contacts">Contacts <i style="margin-left:3px;" class="fa-solid fa-caret-down"></i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="<?= Url::to(['post/contacts']) ?>">More detailed information</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item menu-item">
                        <a class="nav-link" tabindex="5" href="#">Pages <i style="margin-left:3px;" class="fa-solid fa-caret-down"></i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="<?= Url::to(['post/sale']) ?>">Car for sale</a>
                            </li>
                            <li>
                                <a href="<?= Url::to(['post/monthly']) ?>">Monthly subscription</a>
                            </li>
                            <li>
                                <a href="<?= Url::to(['post/parthners']) ?>">Partners of the company</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <span class="nav-link lk-content">Cлужба продаж
                            <div style="padding-top:5px;">
                                <a href="tel:+380950660959" class="nav-link-number">+380 95 066 09 59</a> 
                            </div>
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?= $content ?>

<footer>
<div class="footer-container">
    <!-- Skills Section -->
    <div class="copy">
        <h3 class="copy-title">Skills</h3>
        <div class="copy-list">
            <span class="copy-link">Sale of cars</span>
            <span class="copy-link">Сar repair</span>
        </div>
        
        <!-- Community Section -->
        <div>
            <h3 class="copy-title">Community</h3>
            <div class="copy-list">
                <span class="copy-link">B2B Ukraine (b2b.ukraine)</span>
                <span class="copy-link">Automechanika Ukraine</span>
                <span class="copy-link">Drive2.ua</span>
                <span class="copy-link">Avtoforum.ua</span>
            </div>
        </div>
   </div>

     <!-- Partners Section -->
     <div class="copy">
            <h3 class="copy-title">Partners</h3>
            <div class="copy-list">
                <span class="copy-link">Arm Tek</span>
                <span class="copy-link">Smotor</span>
                <span class="copy-link">Bosch/Kyb</span>
                <span class="copy-link">Smile</span>
                <span class="copy-link">Sachs</span>
                <span class="copy-link">AvtoExpert</span>
            </div>
        </div>

        <!-- Services Section -->
        <div class="copy">
            <h3 class="copy-title">Our Service Repairs</h3>
            <div class="copy-list">
                <span class="copy-link">Belts and Hoses</span>
                <span class="copy-link">Engine Diagnostics</span>
                <span class="copy-link">Oil and Filters</span>
                <span class="copy-link">Air Conditioning</span>
                <span class="copy-link">Brake Repair</span>
            </div>
        </div>

        <!-- Contact Information Section -->
        <div class="copy">
            <h3 class="copy-title">Contact us</h3>
            <div class="copy-list">
                <a href="tel:+380950660959"><span class="copy-link">Tel: +380 95 066 09 59</span></a>
                <a href="tel:+380950650385"><span class="copy-link">Telegram: +380 95 065 03 85</span></a>
                <a href="mailto:autorepaire@gmail.com"><span class="copy-link">autorepaire@gmail.com</span></a>
                <a href="https://google.com.ua/maps/place/%D0%9A%D0%B8%D1%97%D0%B2,+02000/@50.4018377,30.2208891,11z/data=!3m1!4b1!4m12!1m5!3m4!2zNTDCsDQ1JzMzLjciTiAyNcKwMTYnMzguNyJF!8m2!3d50.759347!4d25.277409!3m5!1s0x40d4cf4ee15a4505:0x764931d2170146fe!8m2!3d50.4503596!4d30.5245025!16zL20vMDJzbjM0?entry=ttu&g_ep=EgoyMDI0MDgyMC4xIKXMDSoASAFQAw%3D%3D"><span class="copy-link">50°45'33.7"N 25°16'38.7"E</span></a>
                <span class="copy-link">Producing Future Beats</span>
            </div>
        </div>
    </div>

    <!-- Copyright Section -->
    <aside style="display: flex; align-items: center; justify-content: space-around;">
        <div class="aside-copyright">
            <div>
                <p class="aside-copyright-text">
                    Copyright © car service all rights reserved 
                </p>
            </div>
            <div>
                <ul class="aside-copyright-list">
                    <li>
                        <a href="{{route('contacts')}}">Terms & Conditions</a>
                    </li>
                    <li>
                        <a href="{{route('home_auto')}}">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="{{route('contacts')}}">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </aside>
</footer>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
