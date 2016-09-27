<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2016/9/26
 * Time: 13:38
 */

namespace app\controllers;


use yii\web\Controller;

class ProductController extends Controller
{

    public $layout = 'product';

    public function actionIndex()
    {

        return $this->render('index', []);
    }

    public function actionDetail()
    {

        return $this->render('detail', []);
    }
}