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

## Estructura del proyecto

## URLs de acciones y como implementarlo de forma detallada.

Todas las URL relativa al proyecto.
**NOTA: LAS RUTAS SE ENCUENTRAN EN LA CARPETA routes\api.php**


| Class           | Method                           | HTTP request                             | Description                                                         |
| --------------- | -------------------------------- | ---------------------------------------- | ------------------------------------------------------------------- |
| _APIController_ | [**index**]                      | **GET** /api/residentes                  | _Retorna Todos los registro_                                        |
| _APIController_ | [**show**]                       | **GET** /api/residentes/{residente}      | _Retorna un registro por ID_                                        |
| _APIController_ | [**store**]                      | **POST** /api/residentes                 | _Enviar un registro_                                                |
| _APIController_ | [**update**]                     | **PUT** /api/residentes/{residente}      | _Actualizar un registro en especifico_                              |
| _APIController_ | [**destroy**]                    | **DELETE** /api/residentes/{residente}   | _Eliminar un registro especifico_                                   |
| _APIController_ | [**name**]                       | **GET** /api/nombre/{nombre}             | _Retorna un/os registro/s por el nombre_                            |
| _APIController_ | [**email**]                      | **GET** /api/correo/{correo}             | _Retorna un registro por el correo_                                 |
| _APIController_ | [**filter**]                     | **GET** /api/letra/{letra}               | _Filtra un/os registro/s por la primera letra de su nombre_         |
| _APIController_ | [**down**]                       | **GET** /api/edad/{edad}                 | _Filtra un/os registro/s por su edad de mayor a menor_              |
| _APIController_ | [**paginado**]                   | **GET** /api/pagina/{pagina}             | _Retorna diez registro orginado desde el más reciente al más viejo_ |

## Documentación del modelo

-   [JornadaAPI.Residente](docs/Residente.md)





