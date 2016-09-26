<?php
namespace app\components;


use yii\base\Widget;

class HelloWidget  extends Widget
{
    public $msg=null;

    public function init()
    {
        parent::init();
       
        if($this->msg===null){
            $this->msg='hello world';
        }


    }

    public function run()
    {

       return $this->render('a');
    }
}