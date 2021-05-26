<?php


namespace Toolz\Db;


interface AdapterInterface
{
    public function query($sql,$params = []);
}