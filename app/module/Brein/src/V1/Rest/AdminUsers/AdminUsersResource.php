<?php

namespace Brein\V1\Rest\AdminUsers;

use Laminas\ApiTools\DbConnectedResource;
use Laminas\Paginator\Adapter\DbTableGateway as TableGatewayPaginator;
use Laminas\ApiTools\ApiProblem\ApiProblem;

use Laminas\Paginator\Adapter\DbSelect;

use Brein\V1\Rest\AdminUsers\AdminUsersCollection;

class AdminUsersResource extends DbConnectedResource
{
	/**
	 * Table name relation
	 */
	private $tableNameRol = 'admin_roles';

	public function patch($id, $data)
	{

		if (isset($data->name) == true) {
			$newData['name'] = $data->name;
		}

		if (isset($data->lastname) == true) {
			$newData['lastname'] = $data->lastname;
		}

		if (isset($data->password) == true && !empty($data->password)) {
			$newData['password'] = $data->password;
		}

		if (isset($data->active) == true) {
			$newData['active'] = $data->active;
		}

		if (isset($data->is_superuser) == true) {
			$newData['is_superuser'] = $data->is_superuser;
		}

		$newData['updated_at'] = date('Y-m-d H:i:s');

		$rs =  $this->table->update($newData, array('id' => $id));

		if ($rs === 0) {
			return new ApiProblem(404, '');
		}

		return true;
	}

	/**
	 * GET by ID
	 */
	public function fetch($id)
	{
		$tableGateWay = $this->table;
		$select = $tableGateWay->getSql()->select();
		$select
			->columns([
				'id',
				'admin_roles_id',
				'name',
				'lastname',
				'username',
				'active',
				'is_superuser',
				'created_at',
				'updated_at',
			])
			->join(
				['l' => $this->tableNameRol],
				$tableGateWay->getTable() . '.admin_roles_id = l.id',
				['admin_roles_id_name' => 'name']
			)->where([ $tableGateWay->getTable() .'.id' => $id]);

			// echo $select->getSqlString();exit;
			// echo $tableGateWay->getTable();
			// var_dump(get_class_methods($tableGateWay));exit;
			// var_dump($resultSet);exit;

		$resultSet = $tableGateWay->selectWith($select);

		return $resultSet->current();
	}

	/**
	 * GET all
	 */
	public function fetchAll($data = [])
	{
		$tableGateWay = $this->table;
		$select = $tableGateWay->getSql()->select();
		$select
			->columns([
				'id',
				'admin_roles_id',
				'name',
				'lastname',
				'username',
				'active',
				'is_superuser',
				'created_at',
				'updated_at',
			])
			->join(
				['l' => $this->tableNameRol],
				$tableGateWay->getTable() . '.admin_roles_id = l.id',
				['admin_roles_id_name' => 'name']
			);

		$paginatorAdapter = new DbSelect($select, $tableGateWay->getAdapter());
		$collection = new AdminUsersCollection($paginatorAdapter);

		return $collection;
	}

}
