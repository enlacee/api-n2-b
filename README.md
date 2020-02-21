BREIN
===========
Copyright (C) 2018 Nodos \<http://nodos.pe\>


## PHP EXTENSION

	sudo apt-get install php7.2-bcmath
	sudo apt-get install php7.2-gmp

## Enviroment dev

	cd app

	composer development-enable
	composer install
	php -S 0.0.0.0:8888 -ddisplay_errors=1 -t public public/index.php

## Ver documentación Swagger

	http://localhost:8888/api-tools/swagger

## Crear base de datos

	CREATE DATABASE breinapi CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

## Acceder a phinx

	vendor/bin/phinx
	vendor/bin/phinx migrate

Util para crear tablas

	vendor/bin/phinx create MyFirstMigration


## Status Response

	/app/vendor/laminas/laminas-http/src/Response.php

