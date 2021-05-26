<?php


namespace Toolz;


class Registry
{
    protected static $repo = [];

    public static function set($name,$value){
        self::$repo[$name] = $value;
    }

    protected static function get($name){
        $returnValue = null;
        if(isset(self::$repo[$name])) $returnValue = self::$repo[$name];
        return $returnValue;
    }

}