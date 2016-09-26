<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2016/9/2
 * Time: 11:39
 */

namespace app\models;

 use Yii;

use yii\base\Model;

class EnterForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return[
            [['name','email'],'required'],
            ['email','email']
        ];
    }
}