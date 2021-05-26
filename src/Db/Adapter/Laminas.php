<?php

namespace Toolz\Db\Adapter;

use Toolz\Db\AdapterInterface;
use Toolz\Std;

class Laminas extends Std implements AdapterInterface
{

    public function query($sql,$params = []){
        \Toolz\Output::echoLn('Laminas query: '.$sql);
    }

}