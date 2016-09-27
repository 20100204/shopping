<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2016/9/26
 * Time: 11:43
 */

namespace app\controllers;


use yii\web\Controller;

class IndexController extends Controller
{
    public $layout = 'head';

    public function actionIndex()
    {

        return $this->render('index', []);
    }
}