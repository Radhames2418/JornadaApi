## Resumen del proyeto
El proyecto es una API con una arquitectura REST de manera completa.

Entre las funcionalidades de la API estan:

-  CRUD.
-  Paginado.
-  Validación. 
-  Filtrar registro.
-  Estandarizar respuestas JSON.

## Librerias utilizadas

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

Para este proyecto se utilizo la libereria de Laravel, esta, se encarga de agilizar en la **creación de modelos, controladores y rutas**, necesario para el funcionamiento de la API RestFull, ademas, utilizando sus herramienta para la **validación de campos requeridos**, **conexión a la base de datos**, **Migración de tabla** Y entre otras opciones, para agilizar la creación de la aplicación.



## Pasos requeridos para montar la app en un entorno
### Pasos que realizó para montar la aplicación para en un entorno de desarrollo y prueba:
1. Instalar un entorno de desarrollo(xampp, wamp, lamp, laragon).
2. Correr los servicios de apache y mysql de los servicios.
3. Descargar el proyecto del github y moverlo a la carpeta de htdocs, o la respectiva carpeta de su entorno.
4. Descargar e instalar Composer.
5. Instalar dentro de la carpeta, por medio de la terminar, laravel, con el comando: composer global require "laravel/installer".
7. Dentro del proyecto correr el comando composer update.
8. Conectarse a la base de datos con el env.
9. Servir el proyecto con el comando: php artisan serve.
10. realizar la migraciónes y seeder con el comando: php artisan migrate --seed
11. Descargar Postman.
12. Testear cada ruta con Postman. **NOTA HEADER: ACCEPT : APLICACTION/JSON**



## Estructura del proyecto
### La estructura es:

- **/app:** Es donde se localiza nuestra aplicación, Dentro de app, encontrar varias carpetas pero, la mas importante son **/Models** y **/Http/Controllers**, En model estara el modelo de nuestra aplicación y en controller estara los controladores de nuestra aplicación.
- **/classes:** Es una carpeta creada para la creación de clases de ayuda.
- **/docs:** Documentación del proyecto.
- **/database:** En esta carpeta podremos realizar la migración del modelo en la base de datos y tambien seeder, que son datos de pruebas para la API.
- **/includes:** Es una carpeta creada para la creación de funciones de ayuda.
- **/routes**: Dentro de route, esta, el documento **api.php**, donde, se encontraran las rutas de la APIREST.
- **composer.json:** Dependencia de php.
- **package.json:** Dependencia de node.
- **bd_jornada.sql:** Base de datos exportada en lenguaje sql.



## URLs de acciones y como implementarlo de forma detallada.

Todas las URL relativa al proyecto.
**NOTA: LAS RUTAS SE ENCUENTRAN EN LA CARPETA routes\api.php**


| Class           | Method                           | HTTP request                             | Description                                                         |
| --------------- | -------------------------------- | ---------------------------------------- | ------------------------------------------------------------------- |
| _APIController_ | [**index**](docs/jornadaApi.md#jornadaAPITODOS)                      | **GET** /api/residentes                  | _Retorna Todos los registro_                                        |
| _APIController_ | [**show**](docs/jornadaApi.md#jornadaAPIUNO)                       | **GET** /api/residentes/{residente}      | _Retorna un registro por ID_                                        |
| _APIController_ | [**store**](docs/jornadaApi.md#jornadaEnviar)                      | **POST** /api/residentes                 | _Enviar un registro_                                                |
| _APIController_ | [**update**](docs/jornadaApi.md#jornadaActualizar)                     | **PUT** /api/residentes/{residente}      | _Actualizar un registro en especifico_                              |
| _APIController_ | [**destroy**](docs/jornadaApi.md#jornadaEliminar)               | **DELETE** /api/residentes/{residente}   | _Eliminar un registro especifico_                                   |
| _APIController_ | [**name**](docs/jornadaApi.md#jornadaName)                       | **GET** /api/nombre/{nombre}             | _Retorna un/os registro/s por el nombre_                            |
| _APIController_ | [**email**](docs/jornadaApi.md#jornadaEmail)                      | **GET** /api/correo/{correo}             | _Retorna un registro por el correo_                                 |
| _APIController_ | [**filter**](docs/jornadaletra)                     | **GET** /api/letra/{letra}               | _Filtra un/os registro/s por la primera letra de su nombre_         |
| _APIController_ | [**down**](docs/jornadaApi.md#jornadaedad)                       | **GET** /api/edad/{edad}                 | _Filtra un/os registro/s por su edad de mayor a menor_              |
| _APIController_ | [**paginado**](docs/jornadaApi.md#jornadapagina)                   | **GET** /api/pagina/{pagina}             | _Retorna diez registro orginado desde el más reciente al más viejo_ |

## Documentación del modelo

-   [JornadaAPI.Residente](docs/Residente.md)





