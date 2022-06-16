## Requisitos.

Para poder armar el proyecto en una computadora nueva se debera usar DDEV, Composer y Docker Desktop, ademas se usara Git para descargar y mantener un registro de los cambios en los archivos. A continuacion se incluyen links para poder instalarlos.

DDEV: https://ddev.readthedocs.io/en/stable/
Composer: https://getcomposer.org/download/
Docker Desktop: https://www.docker.com/products/docker-desktop/
Git: https://git-scm.com/downloads

## Procedimiento.

Para empezar se deben de descargar los archivos en una carpeta deseada. Para ello, usando la consola, dirijase a la carpeta seleccionada e ingrese los siguientes comandos:

```cmd
	git init
```
Permitira que git pueda interactuar con la carpeta.

```
	git clone https://github.com/MatiasMK/cuatroenlinea.git
```
Descargara los archivos de github en la carpeta.

### 1- Configuracion de DDEV.

El siguiente paso a seguir es configurar un proyecto de DDEV para poder hacer que la página funcione.
Ingresamos los siguientes comandos:
```cmd
	ddev config
```
Inicia el proceso de configuracion del proyecto y nos dara una respuesta como esta.
```cmd
	Project name (cuatroenlinea):
```
Aqui pondremos el nombre del proyecto, se lo puede dejar en blanco para usar el nombre anterior que seria `cuatroenlinea`.

Luego pedira la localizacion del `root` del proyecto. Debemos dejar esta casilla en blanco sin tocar nada.
```cmd
	You may leave this value blank if your site files are in the project root
	Docroot Location (public):
```

Al continuar, nos dara este mensaje:
```cmd
	Project Type [backdrop, drupal10, drupal6, drupal7, drupal8, drupal9, laravel, magento, magento2, php, shopware6, typo3, wordpress] (laravel):
```
Esto nos pide que ingresemos el tipo de proyecto que usaremos, en este caso elegiremos laravel.

Una vez terminado esto, nos dira que podemos iniciar el proyecto con el comando `ddev start`, al usarlo tardara un rato en terminar de configurar todo y luego nos dira que el proyecto esta iniciado.

### 2- Actualizacion de Composer.


Para aplicar Composer al proyecto primero tendremos que ingresar el comando:
```cmd
	ddev ssh
```
para luego poder ingresar el comando:
```cmd
	composer install
```
Este proceso tardara un tiempo hasta que pueda instalar composer para su uso dentro del proyecto.

### 3- Configuraciones finales.

Si el paso anterior concluyo de forma correcta ya solo queda crear un par de cosas mas para que el pryecto este listo para su uso.

Primero se crea el archivo de ambiente.
```cmd
	cp .env.example .env
```

Segundo se crea una llave de aplicacion del proyecto.
```cmd
	php artisan key:generate
```

Con este ultimo comando deberia estar todo preparado y listo para usar.

### 4- Iniciar el producto listo para su uso.

Primero se debe salir de la consola ssh usando el comando `exit` y se reinicia el proyecto con el comando `ddev restart`
Se deberian ver dos links en una linea que dice `Your project can be reached at`, esos son los links de acceso al proyecto, basta con copiarlos y pegarlos en el buscador de preferencia y se podra acceder al proyecto.

Cuando se use cualquiera de los dos links ellos dirigiran a una pagina de `laravel`, aqui es donde se encuentra nuestra página, con solo agregar la extension `/jugar/1` al link se puede acceder al juego de cuatro en linea con una ficha puesta en la posicion `1`.