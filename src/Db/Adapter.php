<?php


namespace Toolz\Db;


class Adapter
{

    protected $vendor;

    /**
     * @return mixed
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * @param mixed $vendor
     */
    public function setVendor($vendor): void
    {
        $this->vendor = $vendor;
    }

    public static function newInstance($vendorName = 'Laminas',$params = []){
        $adapter = new \Toolz\Db\Adapter\Laminas();
        return $adapter;
    }

}