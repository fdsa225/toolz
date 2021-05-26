<?php
namespace Toolz;


use Toolz\Db\AdapterInterface;
use Toolz\Db\Connection;

class Db
{
    protected static $connection = [];

    /**
     * @param string $connectionName
     * @param Db\Adapter $adapter
     * @return Connection
     */
    public static function createConnection(string $name, AdapterInterface $adapter){
           $connection = Connection::create($name,$adapter);
           self::addConnection($name, $connection);
           return $connection;
    }

    protected static function addConnection($name,$connection)
    {
        self::$connection[$name] = $connection;
    }
    protected static function getConnection($name)
    {
        if(!isset(self::$connection[$name])) throw new \Exception("Connection {$name} not exists");
        return self::$connection[$name] = $connection;
    }

    public static function connection($name){
        return self::getConnection($name);
    }


}