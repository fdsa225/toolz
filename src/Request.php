<?php


namespace Toolz;
use  Laminas\Diactoros\ServerRequest as Laminas_Request;
use Laminas\Diactoros\ServerRequestFactory;


class Request
{

    /**
     * @var
     */
    protected static $instance;

    /**
     * @var Laminas_Request
     */
    protected static $provider;


    /**
     * @return Request
     */
    static function instance(){

        if(!isset(self::$instance)){

            self::initProvider();
            self::$instance = new self();
        }
          return self::$instance;
    }

    protected static function initProvider(){

        self::$provider = ServerRequestFactory::fromGlobals(
            $_SERVER,
            $_GET,
            $_POST,
            $_COOKIE,
            $_FILES
        );

    }
    /**
     * @return Laminas_Request
     */
    static function provider(){
        if(!isset(self::$provider)){
            self::initProvider();
        }

        return self::$provider;
    }

    public function getPath() : string{
        self::provider()->getUri()->getPath();
    }

    public function getPathArray() : array{

        $string = self::provider()->getUri()->getPath();

        if(!empty($stringArray = preg_split("/\//",$string))){
               array_shift($stringArray);
        }
        return $stringArray;
    }

    public function  queryAll()  {
        //self::provider()->f
        //print_r(self::provider()->getUri()->getHost());

        //echo print_r(self::provider());
        exit('ddd');
    }
    public function  getFirst(){

    }



}