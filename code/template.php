<?php

$obj = new Y4TACKER();
$obj -> Y5TACKER("aaaaaaa");

class Father{

    public function __get($name){
        $this -> funcName = $name;
        $this -> $name = $this;
        return $this -> $name;
    }
    public function __call($funcName, $funcValue){
        $classes = get_declared_classes();
        $keylen = array_search('Father', $classes);
        foreach ($classes as $key => $value) {
            if ($key > ($keylen - 1)) {
                try{
                    $obj = new $value;
                    if(method_exists($obj, $funcName)){
                        $tmp = $this -> funcName;
                        $this -> {$tmp} = $obj;
                        $obj -> $funcName($funcValue[0]);
                    }
                }catch(Exception $e){
                }
            }
        }
        unset($this -> {$tmp});
    }

}
function generateStr($value)
{
    if(substr($value, 0, 7) == 'aaaaaaa'){
        echo urlencode(serialize($GLOBALS['obj']));
        die();
    }

}