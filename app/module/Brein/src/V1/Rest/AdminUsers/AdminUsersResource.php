<?php

namespace Brein\V1\Rest\AdminUsers;

use Laminas\ApiTools\DbConnectedResource;
use Laminas\Paginator\Adapter\DbTableGateway as TableGatewayPaginator;

class AdminUsersResource extends DbConnectedResource
{
	public function create($data)
	{
		return parent::create($data);
	}

	public function update($id, $data)
	{
		return parent::update($id, $data);
	}

	public function patch($id, $data)
	{
		if (
			is_object($data) &&
			isset($data->password) &&
			empty($data->password)
		) {
			unset($data->password);
		}

		return parent::patch($id, $data);
	}

	public function delete($id)
	{
		return parent::delete($id);
	}

	public function fetch($id)
	{
		return parent::fetch($id);
	}

	public function fetchAll($data = [])
	{
		return parent::fetch($data);
	}
}
