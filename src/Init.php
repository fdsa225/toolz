<?php

namespace Toolz;

use Toolz\Db\Adapter;

class Init{


	public static function test(){
		return $a =  new self();
		
	}
	public function __construct($say = 'hello'){
	    Output::setTypeHtml();
		Output::echoLn($say);

		$dbParams =
        $connection =  Db::createConnection('mssql',Adapter::newInstance('Laminas'));
        $connection->getAdapter()->query('select * from table');
	}

}
