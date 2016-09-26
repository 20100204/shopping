<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2016/9/7
 * Time: 10:31
 */

namespace app\components;


use yii\base\Behavior;

class MyBehavious extends Behavior
{

    public $p1;
    public $p2;
    const EVENT_A='a';
    const EVENT_B='b';
    public function setP($v){
        $this->p1 = $v;
    }

    public function getP($v){
        echo $v;
    }

    public function events()
    {
        return [
          self::EVENT_A=>'a',
          self::EVENT_B=>'b',
        ];
    }

    public function a($event){
        echo 'aaaaaaaa';
    }
    public function b($event){
        echo 'bbbbbbbbbbb';
    }

}