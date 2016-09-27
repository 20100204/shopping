<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2016/9/26
 * Time: 15:27
 */

namespace app\modules\admin\controllers;


use app\modules\admin\models\AdminUser;
use yii\web\Controller;
use Yii;

class PublicController extends Controller
{
    public function actionLogin(){
       /* echo '<pre>';
        session_start();
        print_r($_SESSION);
        print_r($_COOKIE);
        exit;*/
        $this->layout = false;
        $model = new AdminUser(['scenario'=>'login']);
        if(Yii::$app->request->isPost){
            $post  = Yii::$app->request->post();
            if($model->login($post)){
                $this->redirect(['default/index']);
            }
        }
        return $this->render('login',['model'=>$model]);
    }

    public function actionLogout(){
        Yii::$app->session->removeAll();
        if(!isset(Yii::$app->session['adminuser']['isLogin'])){
            $this->redirect(['login']);
            Yii::$app->end();
        }
        $this->goBack();
    }

    public function actionSeekPasswd(){
        
        $this->layout = false;
        $model = new AdminUser(['scenario'=>'seek']);
        if(Yii::$app->request->isPost){
            $post = Yii::$app->request->post();
            if($model->seekPasswd($post)){
               Yii::$app->session->setFlash('info','邮件发送成功');

               // $this->redirect(['findpasswd']);
            }

        }
        return $this->render('seekpasswd',['model'=>$model]);
    }
    
    
  
    /*public function actionFindpasswd(){
        $this->layout = false;
        $model = new AdminUser();
        return $this->render('confirmpasswd');

    }*/

}