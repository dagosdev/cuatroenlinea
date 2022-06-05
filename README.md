
Instrucciones para ejecutar el Cuatro En Línea utilizando ddev:

1- Posicionarse sobre el directorio en el cual se desee clonar este repositorio

2- Clonar este repositorio ejecutando siguiente comando:

`git clone https://github.com/julian4132/cuatroenlinea`

3- Cambiar al directorio cuatroenlinea ingresando el siguiente comando:

`cd cuatroenlinea`

4- Ejecutar el siguiente comando para crear el archivo .ddev/.config.yaml:

`ddev config`

5- Especificar los datos que serán solicitados. Más precisamente, se solicitará la siguiente información:

Project name: será el nombre del proyecto de Laravel a crear. Dejar en blanco si se desea que el nombre sea cuatroenlinea

Docroot location: es la ubicación del Docroot. Se recomienda dejar en blanco para que se ubique en la raíz del proyecto.

Project Type: dejar en blanco, ya que la opción por defecto (laravel) es la correcta

6- Ejecutar el siguiente comando:

`ddev composer install`

7- Crear el archivo .env para poder abrir el proyecto. Una forma rápida de hacerlo es copiar el archivo de ejemplo creado por Laravel con el siguiente comando:

`cp .env.example .env`

8- Generar los certificados para el sitio web ingresando este comando:

`ddev php artisan key:generate`

9- Ya es posible ingresar al Cuatro en Línea a través de la siguiente url:

`https://cuatroenlinea.ddev.site/jugar/1`

El número 1 puede ser reemplazado por cualquier secuencia no vacía de números comprendidos entre 1 y 7 inclusive, dando lugar a diferentes posiciones de la jugada inicial del Cuatro en Línea.


A continuación, se aclararán algunos errores comunes:

1-
Supongamos que se obtiene un error similar al siguiente:

**Warning:** require(/var/www/html/public/../vendor/autoload.php): Failed to open stream: No such file or directory in **/var/www/html/public/index.php** on line **34**

**Fatal error:** Uncaught Error: Failed opening required '/var/www/html/public/../vendor/autoload.php' (include_path='.:/usr/share/php') in /var/www/html/public/index.php:34 Stack trace: #0 {main} thrown in **/var/www/html/public/index.php** on line **34**

En tal caso, es probable que no se haya ejecutado correctamente el paso 6. El archivo en cuestión se crea al ingresar el comando `ddev composer install`


2-
Si se obtiene un error 500 (SERVER ERROR) al ingresar al sitio, es probable que no se haya ejecutado correctamente el paso 7. Esto se debe a que Laravel requiere la existencia de un archivo .env.

3-
Supongamos que se obtiene un error de este estilo:

Illuminate\Encryption\MissingAppKeyException
**No application encryption key has been specified.**

Entonces, es probable que se haya omitido el paso 8. Es necesario ejecutar el comando `ddev php artisan key:generate`  para generar los certificados correspondientes.

4-
Un error frecuente es intentar ingresar al Cuatro en Línea a través del comando `ddev start`.

El comando `ddev start` realmente abre la url `https://cuatroenlinea.ddev.site`, la cual solo nos redirige a la página de inicio de Laravel.

Para abrir el cuatro en línea, hay que entrar a `https://cuatroenlinea.ddev.site/jugar/1` u otras url en las que el número 1 se reemplace por cualquier secuencia no vacía de números comprendidos entre 1 y 7 inclusive.

5-
Otro error frecuente relacionado a la url es intentar ingresar a:

`https://cuatroenlinea.ddev.site/jugar/`

Sin embargo esto arroja un error 404. Esto se debe a que la secuencia de números del 1 al 7 luego de `jugar/` no debe ser vacía.

6-
Otra manera más en la que puede obtenerse el error 404 es a causa de un error de tipeo. Es indispensable verificar que la url haya sido escrita correctamente.















