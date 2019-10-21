# php-laravel
Repositorio php-laravel

- primero creamos cuenta en ``` https://github.com ```
- crear repositorio en github
- clonar repositorio en github

``` bash
git clone <ruta_repositorio>
```
- Instalamos Composer
- Para instalar las dependencia

``` bash
	composer update
```
- Vamos a crear un proyecto de laravel desde 0
``` bash
	composer create-project --prefer-dist laravel/laravel <mi-proyecto>
```

-Vamos a inicia el proyecto
``` bash
	php artisan serve --host=10.0.1.99 --port=8000
```

-Para ejecutar pruebas

``` bash
	vendor/bin/phpunit
```

-va a ejecutar todas las pruebas de la carpeta ``` test/Feature ```

- para crear un nuevo test , ejecutamos el comando
``` bash
	php artisan make:test DiarioModuleTest
```

- para crear un nuevo controlador , ejecutamos el comando
``` bash
	php artisan make:controller diario/IndexController
```


##LINK
[Pagina de github](https://github.com)