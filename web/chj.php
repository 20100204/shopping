<?php
header("Content-Type: text/html; charset=UTF-8");
echo '===================<br />';
echo '==      测试          ==<br /> ';

class loader{
    
    public static function load($class){
     //    echo __DIR__.'/lianxi/a/'.$class.'.php'.'<br />';
        if(is_file(__DIR__.'/lianxi/a/'.$class.'.php')){
            require __DIR__.'/lianxi/a/'.$class.'.php';
        }
    }
    public static function se($class){
      //    echo __DIR__.'/lianxi/a/'.$class.'.php'.'<br />';
        if(is_file(__DIR__.'/lianxi/b/'.$class.'.php')){
            require __DIR__.'/lianxi/b/'.$class.'.php';
        }
        
    }
}
spl_autoload_register(['loader','load'],true,true);
spl_autoload_register(['loader','se'],true,true);

$new = new T();
echo $new->test();




