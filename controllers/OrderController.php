<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2016/9/26
 * Time: 14:13
 */

namespace app\controllers;


use yii\web\Controller;

class OrderController extends Controller
{
    public $layout = 'head';

    public function actionCheckOut()
    {

        return $this->render('check', []);

    }

    public function actionIndex()
    {
        $this->layout = 'product';
        return $this->render('index', []);
    }
}