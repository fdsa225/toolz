<?php


namespace Toolz;

class Output
{
    protected static $useBuffering = false;
    protected static $output;

    public  CONST TYPE_HTML = 'html';
    public  CONST TYPE_TEXT = 'text';

    protected  CONST EOL_TEXT = PHP_EOL;
    protected  CONST EOL_HTML = '<br>';

    protected static $type = 'html';


    protected static function EOL(){
        $eol = '11';
        if(self::type() == self::TYPE_HTML) $eol = self::EOL_HTML;
        else $eol = self::EOL_TEXT;
        return $eol;
    }
    public static function setType($type){
        self::$type = $type;
    }
    public static function setTypeText(){
        self::setType(self::TYPE_TEXT);
    }
    public static function setTypeHtml(){
        self::setType(self::TYPE_HTML);
    }
    public static function type(){
        return self::$type;
    }

    public static function echo($string){
        if(self::$useBuffering){
            self::$output .= $string;
        }else {
            echo($string);
        }
    }
    public static function echoLn($string){
        self::echo($string.self::EOL());
    }

    public static function  echoArray($array){
        echo_ln(var_export($array));
    }
}

