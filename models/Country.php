<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2016/9/2
 * Time: 13:49
 */

namespace app\models;


use yii\db\ActiveRecord;

class Country extends ActiveRecord
{
    
    public function getSs($threshold = 100)
    {
        return $this->hasOne(Bass::className(), ['content_id' => 'id']);
    }
    
    
    
}