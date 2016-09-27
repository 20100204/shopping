<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2016/9/27
 * Time: 11:45
 */

namespace app\modules\admin\controllers;

use app\modules\admin\models\AdminUser;
use Yii;

use yii\data\Pagination;
use yii\web\Controller;

class ManagerController extends Controller
{

    public function actionMailchangepasswd()
    {
        $this->layout = false;
        $model = new AdminUser(['scenario' => 'repass']);
        if (Yii::$app->request->isPost) {
            $post = Yii::$app->request->post();
            if ($model->changePass($post)) {
                //修改成功后，跳转到登录也
                Yii::$app->session->setFlash('info', '密码修改成功');
                return $this->render('mailchangepasswd', ['model' => $model]);
            }
        }
        $data = Yii::$app->request->get();
        if (isset($data['adminuser']) && isset($data['token']) && isset($data['timestamp'])) {
            $this->layout = false;
            $model->adminuser = $data['adminuser'];
        }

        return $this->render('mailchangepasswd', ['model' => $model]);
    }


    public function actionList()
    {
        $this->layout = 'common';
        $model = AdminUser::find();
        $total = $model->count();
        $pagenation = new Pagination(['totalCount'=>$total,'pageSize'=>Yii::$app->params['pageSize']]);
        $list = $model->offset($pagenation->offset)->limit($pagenation->limit)->orderBy('adminid desc')->all();

        return $this->render('list', ['list' => $list,'page'=>$pagenation]);
    }

    public function actionAdd()
    {
        $this->layout = 'common';
        $model =  new AdminUser();
        return $this->render('add',['model'=>$model]);
    }

    public function actionDel()
    {

    }
}