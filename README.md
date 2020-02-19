BREIN
===========
Copyright (C) 2018 Nodos \<http://nodos.pe\>


## Enviroment dev

	cd app

	composer development-enable
	composer install
	php -S 0.0.0.0:8888 -ddisplay_errors=1 -t public public/index.php

## Ver documentación Swagger

	http://localhost:8888/api-tools/swagger


## Acceder a phinx

	vendor/bin/phinx
	vendor/bin/phinx migrate

Util para crear tablas

	vendor/bin/phinx create MyFirstMigration
