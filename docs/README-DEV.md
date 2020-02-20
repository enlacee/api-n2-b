
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
