<?php
namespace Brein\V1\Rest\Login;

use Laminas\Db\Sql\Select;
use Laminas\Db\Adapter\AdapterInterface;
use Laminas\Paginator\Adapter\DbSelect;

class LoginMapper
{
	protected $adapter;

	public function __construct(AdapterInterface $adapter)
	{
		$this->adapter = $adapter;
	}

	public function login($username, $password)
	{
		$sql = 'SELECT count(*) as foundit FROM admin_users WHERE username= ? AND password= ?';
		$resultSet = $this->adapter->query($sql, array(
			$username,
			$password
		));

		$data = $resultSet->toArray();
		if (isset($data[0]['foundit']) && $data[0]['foundit'] === '1') {
			return true;
		}

		return false;
	}
}
