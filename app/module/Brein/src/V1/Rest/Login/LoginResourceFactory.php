<?php
namespace Brein\V1\Rest\Login;

class LoginResourceFactory
{
    public function __invoke($services)
    {
        return new LoginResource();
    }
}
