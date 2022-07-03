## ¿Que es?.

PHPUnit es un framework de prueba para PHP. Es una isntancia de la arquitectura xUnit para testear frameworks. En esta documentacion se vera unicamente la creacion de los tests, no se entrara en detalle de como se escriben dichos tests.

Pagina de PHPUnit: https://phpunit.de

## Como instalar.

Para poder instalar PHPUnit primero debemos acceder a la consola de la pagina. Asi que iniciamos el proyecto con `ddev start`, luego accederemos a la consola con `ddev ssh`.

Luego de esto la instalacion se puede seguir desde la pagina de PHPUnit. pero lo unico que hay que hacer es utilizar el comando.

```cmd
	composer require --ddev phpunit/phpunit ^9
```

Esto instalara la version actual de PHPUnit (es preferible utilizar la guia de la pagina en caso de actualizaciones al software).

## Uso de PHPUnit mediante Laravel.

Para la creacion y uso de los test automatizados usaremos la implementacion de tests nativa de laravel (artisan) mezclado con PHPUnit para poder crear los tests facilmente.

### Crear un test.

#### Creando un archivo.

La opcion mas basica para crear un test es simplemente creando un archivo cuyo nombre acabe en "Test" y que tenga la extension ".php" dentro de la carpeta `.tests&/Feature`.

Puede encontrarse algo de informacion sobre como escribir test automatizados en la documentacion de PHPUnit: 

- https://phpunit.readthedocs.io/es/latest/ (Español)

- https://phpunit.readthedocs.io/en/9.5/ (Ingles)

- https://phpunit.de/documentation.html (más idiomas)

#### Usando artisan.

Se puede crear un test se puede usar el siguiente comando  dentro de la carpeta `./test`:

```cmd
	ddev php artisan make:test nombreTest
```
donde la parte "nombre" se intercambiara por el nombre del test (recordar que todo test debe terminar con la palabra Test).

Esto creara un archivo con este contenido:

```php
	<?php

	namespace Tests\Feature;

	use Illuminate\Foundation\Testing\RefreshDatabase;
	use Illuminate\Foundation\Testing\WithFaker;
	use Tests\TestCase;

	class nombreTest extends TestCase
	{
	    /**
	     * A basic feature test example.
	     *
	     * @return void
	     */
	    public function test_example()
	    {
	        $response = $this->get('/');

	        $response->assertStatus(200);
	    }
	}
```
Aqui es odnde podremos programar lo que el test hara. Cada funcion es uan prueba que se hara cada vez que se ejecute el test. Algo importante es que, para que PHPUnit las considere, cada funcion debe empezar con el sufijo `test`, similar a como el nombre del archivo debe terminar con la palabra "Test".

### Ejecutar tests.

Una vez creado el test se pueden usar entrando en la consola con el comando `ddev ssh` y una vez ahi ejecutando el comando:

```cmd
	./vendor/bin/phpunit
```
Lo que devolvera algo como esto:

```cmd
	PHPUnit 9.5.18 #StandWithUkraine

	...                                                                 3 / 3 (100%)

	Time: 00:07.366, Memory: 10.00 MB

	OK (3 tests, 3 assertions)
```