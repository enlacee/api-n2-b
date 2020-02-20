<?php

namespace Brein\V1\Rest\AdminRoles;

use Laminas\ApiTools\DbConnectedResource;
use Laminas\Paginator\Adapter\DbTableGateway as TableGatewayPaginator;
use Laminas\ApiTools\ApiProblem\ApiProblem;

class AdminRolesResource extends DbConnectedResource
{
	public function delete($id)
	{
		return new ApiProblem(405, 'The DELETE method has not been defined for individual resources');
	}

}
