
app/module/Brein/src/V1/Rest/AdminUsers/AdminUsersResource.php

	public function fetch($id)
	{
		$tableGateWay = $this->table;
		$select = $tableGateWay->getSql()->select();
		$select
			->columns([
				'id',
				'admin_roles_id',
				'lastname',
				'username',
				'active',
				'is_superuser',
				'created_at',
				'updated_at',
			])
			->join(['l' => 'admin_roles'], 'admin_users.admin_roles_id = l.id', ['admin_roles_id_name' => 'name'])
			->where(['admin_users.id' => $id]);
			// echo $select->getSqlString();exit;
			// var_dump(get_class_methods($select));exit;
			// var_dump($resultSet);exit;

		$resultSet = $tableGateWay->selectWith($select);

		return $resultSet->current();
	}



ON header .htacces

	Header set Access-Control-Allow-Origin "*"
	Header set Access-Control-Allow-Methods: "GET,POST,OPTIONS,DELETE,PUT"


on PHP enable cors

	header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
	header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
	header("Allow: GET, POST, OPTIONS, PUT, DELETE");
