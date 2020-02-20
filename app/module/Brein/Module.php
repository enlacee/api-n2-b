<?php
namespace Brein;

use Laminas\ApiTools\Provider\ApiToolsProviderInterface;
use Brein\V1\Rest\Login\LoginMapper;

class Module implements ApiToolsProviderInterface
{
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return [
            'Laminas\ApiTools\Autoloader' => [
                'namespaces' => [
                    __NAMESPACE__ => __DIR__ . '/src',
                ],
            ],
        ];
    }

	public function getServiceConfig()
	{
		return array(
			'factories' => array(
				'Brein\V1\Rest\Login\LoginMapper' => function($sm) {
					$adapter = $sm->get('BrainDBAdapter');

					return new LoginMapper($adapter);
				},
			)
		);
	}
}
