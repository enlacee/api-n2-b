<?php
/**
 * Autoconfigure Phinx with the application's credentials.
 *
 * @author Jaime G. Wong <j@jgwong.org>
 */

$configFile = __DIR__ . '/config/autoload/local.php';
if (!file_exists($configFile)) {
	echo PHP_EOL;
	echo 'FATAL ERROR: No config/autoload/local.php file found.' . PHP_EOL;
	echo 'Have you configured your database yet?' . PHP_EOL;
	echo PHP_EOL;
	exit;
}

$rs = include $configFile;
if (!isset($rs['db']) && !isset($rs['db']['adapters'])) {
	echo PHP_EOL;
	echo 'FATAL ERROR: No yet create db adapters.' . PHP_EOL;
	echo PHP_EOL;
	exit;
}

$db = $rs['db']['adapters'];
$theFirstKey = key($db);
if ($db[$theFirstKey]['driver'] !== 'PDO_Mysql') {
	echo PHP_EOL;
	echo 'FATAL ERROR: the database is not MYSQL.' . PHP_EOL;
	echo PHP_EOL;
	exit;
}

$dbr = $db[$theFirstKey];

return [
	'paths' => [
		'migrations' => __DIR__ . '/migrations',
		'seeds'      => __DIR__ . '/migrations/seeds',
	],

	'environments' => [
		'default_migration_table' => 'phinxlog',
		'default_database' => 'default',
		'default' => [
			'adapter' => 'mysql',
			'host'    => '127.0.0.1',
			'name'    => $dbr['database'],
			'user'    => $dbr['username'],
			'pass'    => $dbr['password'],
			'port'    => 3306,
			'charset' => 'utf8mb4',
		],
		'test' => [
			'adapter' => 'mysql',
			'host'    => '127.0.0.1',
			'name'    => $dbr['database'] . '_test',
			'user'    => $dbr['username'],
			'pass'    => $dbr['password'],
			'port'    => 3306,
			'charset' => 'utf8mb4',
		],
	],
];
