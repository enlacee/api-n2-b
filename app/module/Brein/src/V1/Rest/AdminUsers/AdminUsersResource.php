<?php

namespace Brein\V1\Rest\AdminUsers;

use Laminas\ApiTools\DbConnectedResource;
use Laminas\Paginator\Adapter\DbTableGateway as TableGatewayPaginator;
use Laminas\ApiTools\ApiProblem\ApiProblem;

class AdminUsersResource extends DbConnectedResource
{

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
}
