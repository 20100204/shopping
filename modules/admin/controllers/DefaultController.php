<?php
namespace app\modules\admin\controllers;
use yii\web\Controller;

/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2016/9/26
 * Time: 14:54
 */
class DefaultController extends Controller
{

        public function actionIndex(){
          
            $this->layout = 'common';
            return $this->render('index');
        }
}