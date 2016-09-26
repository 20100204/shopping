<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2016/9/18
 * Time: 10:44
 */

namespace app\components;


class Bll
{
    public $dal;
    public function __construct()
    {
        $this->dal = Factory::getInstance('Dal');
    }

    public function getList(){
        $this->dal->getList();
    }

}

interface Dal{
    public function getList();
}

class MysqlDal implements Dal{
    public function getList(){
        return ['id'=>1,'name'=>'jason'];
    }
}

class OracleDal implements Dal{
    public function getList(){
        return  ['id'=>1,'name'=>'jason'];
    }
}

class Factory{
    public static function getInstance($name){


        return new $name;
    }
}

 