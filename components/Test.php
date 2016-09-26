<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2016/9/9
 * Time: 17:25
 */

namespace app\components;


class Test
{

    public $db;
    public function __construct(Db $db)
    {
        $this->db = $db;
    }
    public function getList(){
        return $this->db->getList();

    }
}
interface Db{
    public function getList();
}

class Mysql implements Db{

    public function getList(){
        return ['name'=>'mysql','age'=>100];
    }
}

class Oracle implements Db{
    public function getList(){
        return ['name'=>'oracle','age'=>100];
    }
}