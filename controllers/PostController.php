<?php

namespace app\controllers;

use yii\web\Controller;

class PostController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionAbout()
    {
        return $this->render('about/about');
    }

    public function actionNews()
    {
        return $this->render('about/news/autoNews');
    }

    public function actionContacts()
    {
        return $this->render('contacts/contact'); 
    }

    public function actionSale()
    {
        return $this->render('pages/sale'); 
    }

    public function actionMonthly()
    {
        return $this->render('pages/subscription/monthlyPlan'); 
    }

    public function actionParthners()
    {
        return $this->render('pages/partners/partnersCompany'); 
    }

    public function actionForm()
    {
        return $this->render('BuyForm/form'); 
    }
}