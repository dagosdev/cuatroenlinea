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

### Configuracion de DDEV.

El siguiente paso a seguir es configurar un proyecto de DDEV para poder hacer que la página funcione.
Ingresamos los siguientes comandos:
```cmd
	ddev config
```
y nos dara una respuesta como esta
```cmd
	Creating a new ddev project config in the current directory (C:\Users\mono1\OneDrive\Documentos\Trabajo\Proyectos. escuela\AAT\cuatroenlinea)
	Once completed, your configuration will be written to C:\Users\mono1\OneDrive\Documentos\Trabajo\Proyectos. escuela\AAT\cuatroenlinea\.ddev\config.yaml

	Project name (cuatroenlinea):
```