<?php

namespace app\controllers;

use app\models\Members;
use app\models\Post;
use yii\web\Controller;

class PostController extends Controller
{
    public function actionIndex()
    {
        $members=Members::find()->all();
        return $this->render('index',compact('members'));
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
        $posts =Post::find()->all();
        return $this->render('pages/sale',compact('posts')); 
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