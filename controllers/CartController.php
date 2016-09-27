<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2016/9/26
 * Time: 13:57
 */

namespace app\controllers;


use yii\web\Controller;

class CartController extends Controller
{
    public $layout = 'head';

    public function actionIndex()
    {

        return $this->render('index', []);
    }

}