<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2016/9/26
 * Time: 14:35
 */

namespace app\controllers;


use yii\web\Controller;

class MemberController extends Controller
{
    public function actionAuth(){
        $this->layout = 'product';
        return $this->render('auth');
    }
}