<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://fonts.googleapis.com/css2?family=Assistant:wght@200..800&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap',
        'https://fonts.googleapis.com/css2?family=Assistant:wght@200..800&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap',
        'https://fonts.googleapis.com/css2?family=Assistant:wght@200..800&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap',
        'https://cdn.jsdelivr.net/npm/swiper@11.1.9/swiper-bundle.min.css',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
        'css/index.css',
        'https://unpkg.com/aos@2.3.1/dist/aos.css',
        'css/about/aboutCompany.css',
        'css/about/autoNews.css',
        'css/contact/contact.css',
        'css/pages/sale.css',
        'css/pages/plan.css',
        'css/pages/partners.css',
        'css/form/form.css',

       
    ];
    public $js = [
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
        'https://unpkg.com/aos@2.3.1/dist/aos.js',
        'https://kit.fontawesome.com/46a432ef36.js',
        'js/index.js',
        'js/validateForm/formContact.js',
        'js/Client_href.js',
        'js/about/autoNews.js',
        'js/validateForm/DetailContact/DetailContact.js',
        'js/Search/search.js',
        'js/pages/monthly.js',
        'js/validateForm/BuyForm/form.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        // 'yii\bootstrap5\BootstrapAsset'
    ];
}
