<?php

namespace Brein\V1\Rest\AdminUsers;

use Laminas\ApiTools\DbConnectedResource;
use Laminas\Paginator\Adapter\DbTableGateway as TableGatewayPaginator;

class AdminUsersResource extends DbConnectedResource
{
	public function fetchAll($data = array())
	{
		var_dump($data);exit;
		// WHERE CLAUSE
		$where = '';
		foreach($data->where as $clause)
		{
		$where .= $clause.' AND ';
		}
		//chop off the last AND
		$where = substr($where,0,-4);

		// ORDER CLAUSE
		$order = '';
		foreach($data->order as $clause)
		{
		$order .= $clause.' , ';
		}
		//chop off the last comma
		$order = substr($order,0,-2);

		// GROUP CLAUSE
		$group = '';
		foreach($data->group as $clause)
		{
		$group .= $clause.' , ';
		}
		//chop off the last comma
		$group = substr($group,0,-2);

		// HAVING CLAUSE
		$having = '';
		foreach($data->having as $clause)
		{
		$having .= $clause.' AND ';
		}
		//chop off the last AND
		$having = substr($having,0,-4);
		$adapter = new TableGatewayPaginator($this->table,$where, $order, $group, $having);
		return new $this->collectionClass($adapter);
	}
}
