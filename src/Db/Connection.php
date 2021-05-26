<?php


namespace Toolz\Db;

use Toolz\Db\AdapterInterface;
use Toolz\Std;

class Connection extends Std
{

    protected $adapter;

    /**
     * @return AdapterInterface
     */
    public function getAdapter()
    {
        return $this->adapter;
    }

    /**
     * @param mixed $adapter
     */
    public function setAdapter(AdapterInterface $adapter): void
    {
        $this->adapter = $adapter;
    }
    public function __construct($name)
    {
        $this->setName($name);
    }


    /**
     * @param $name
     * @param $adapter
     * @return Connection
     */
    public static function newInstance($name, $adapter){
        $connection = new self($name);
        $connection->setAdapter($adapter);
        return $connection;
    }

    public static function create($name,$adapter){
        return self::newInstance($name,$adapter);
    }

}