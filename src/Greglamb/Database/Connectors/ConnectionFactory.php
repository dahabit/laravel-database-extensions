<?php namespace Greglamb\Database\Connectors;

use Illuminate\Database\Connectors as Laravel;

use PDO;
use Greglamb\Database\ODBCConnection;

class ConnectionFactory extends Laravel\ConnectionFactory {

	/**
	 * Create a connector instance based on the configuration.
	 *
	 * @param  array  $config
	 * @return Illuminate\Database\Connectors\ConnectorInterface
	 */
	public function createConnector(array $config)
	{
		switch ($config['driver'])
		{
			case 'odbc':
				return new ODBCConnector;
			case 'firebird':
				return new FirebirdConnector;
		}

		return parent::createConnector($config);
	}

	/**
	 * Create a new connection instance.
	 *
	 * @param  string  $driver
	 * @param  PDO     $connection
	 * @param  string  $database
	 * @param  string  $tablePrefix
	 * @return Illuminate\Database\Connection
	 */
	protected function createConnection($driver, PDO $connection, $database, $tablePrefix = '')
	{
		switch ($driver)
		{
			case 'odbc':
				return new ODBCConnection($connection, $database, $tablePrefix);
			case 'firebird':
				return new FirebirdConnection($connection, $database, $tablePrefix);
		}

		return parent::createConnection($driver, $connection, $database, $tablePrefix);
	}

}