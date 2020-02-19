<?php
namespace Brein\V1\Rest\Login;

class LoginResourceFactory
{
	public function __invoke($services)
	{
		$mapper = $services->get('Brein\V1\Rest\Login\LoginMapper');
		return new LoginResource($mapper);
	}
}
