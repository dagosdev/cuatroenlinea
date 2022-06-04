
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
