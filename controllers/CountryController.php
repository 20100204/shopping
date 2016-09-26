<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2016/9/2
 * Time: 13:52
 */

namespace app\controllers;


use app\components\MyBehavious;
use app\components\Mysql;
use app\components\Oracle;
use app\components\Test;
use app\models\Country;
use yii\base\Event;
use yii\data\Pagination;
use yii\db\Query;
use yii\filters\HttpCache;
use yii\web\Controller;
use yii\web\XmlResponseFormatter;
use Yii;

class CountryController extends Controller
{
    const Event_CHJ='chj';
    const EVENT_TEST='test';
    public $name;
        public function actionIndex(){
echo '<pre>';

            $yldz = new Test(new Oracle()
            );
            print_r($yldz->getList());
            exit;
           // $this->event();
          $query= Country::findOne(2);
           // print_r($query->ss->content_type);
            exit;
            //$query = Country::find();
            $pagination =new Pagination(
                [
                    'defaultPageSize' =>5,
                    'totalCount' =>$query->count(),
                ]
            );
         //   $this->off(self::Event_CHJ);
        //  $this->trigger(self::Event_CHJ);
          //  exit;
            $countries = $query->orderBy('name')->offset($pagination->offset)->limit($pagination->limit)->all();
            return $this->render('index',['countries'=>$countries,'page'=>$pagination]);

        }


        public function event(){

             $this->on(self::Event_CHJ,function(Event $event){
                 echo $event->data.'<br />';
                 $event->handled = true;
             },'我是要发送的数据');

            $this->on(self::Event_CHJ,function(Event $event){
                echo $event->name;
            },'',false);




        }


    public function behaviors()
    {
        return [
            [
                'class'=>MyBehavious::className(),
                'p1'=>111111,
                'p2'=>2222222,
            ]
        ];
    }

    public function actionQ(){
        Yii::$app->on('bar',function($event){
            echo get_class($event->sender);
        });


        Yii::$container->set($this::className(),[
            'name'=>'nono'
        ]);

        if(!Yii::$app->has('chj')){
            Yii::$app->set('chj',[
                'class' => 'yii\db\Connection',
                'dsn' => 'mysql:host=localhost;dbname=demo',
                'username' => 'root',
                'password' => '',
            ]);
        }
       echo '<pre>';

        print_r(Yii::$app->chj);
       // Yii::setAlias('@web','yii.chj');

       // print_r(Yii::$aliases);
        //print_r($this->getBehaviors());


    }
}