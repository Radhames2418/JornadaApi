# jornadaApi


| Method                           | HTTP request                             | Description                                                         |
| -------------------------------- | ---------------------------------------- | ------------------------------------------------------------------- |
| [**index**](jornadaApi.md#jornadaAPITODOS)                      | **GET** /api/residentes                  | _Retorna Todos los registro_                                        |
| [**show**](jornadaApi.md#jornadaAPIUNO)                       | **GET** /api/residentes/{residente}      | _Retorna un registro por ID_                                        |
| [**store**]                      | **POST** /api/residentes                 | _Enviar un registro_                                                |
| [**update**]                     | **PUT** /api/residentes/{residente}      | _Actualizar un registro en especifico_                              |
| [**destroy**]                    | **DELETE** /api/residentes/{residente}   | _Eliminar un registro especifico_                                   |
| [**name**]                       | **GET** /api/nombre/{nombre}             | _Retorna un/os registro/s por el nombre_                            |
| [**email**]                      | **GET** /api/correo/{correo}             | _Retorna un registro por el correo_                                 |
| [**filter**]                     | **GET** /api/letra/{letra}               | _Filtra un/os registro/s por la primera letra de su nombre_         |
| [**down**]                       | **GET** /api/edad/{edad}                 | _Filtra un/os registro/s por su edad de mayor a menor_              |
| [**paginado**]                   | **GET** /api/pagina/{pagina}             | _Retorna diez registro orginado desde el más reciente al más viejo_ |


<a name="jornadaAPITODOS"></a>
# **jornadaAPITODOS**
> [jornadaAPITODOS] Obtener Todos los registro

### Ejemplo en javaScript de como consumir
```javascript
async function consultarAPI() {
  try {
    const url = "http://127.0.0.1:8000/api/residentes/";
    const resultado = await fetch(url);
    const servicios = await resultado.json();
    return servicios;
  } catch (error) {
    console.log(error);
  }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **None** | **NONE**|  | [optional] 

### Return type

[**[Residente]**](Residente.md)

### Autorización

No autorización requirida

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="jornadaAPIUNO"></a>
# **jornadaAPIUNO**
> [jornadaAPIUNO] Obtener un solo registro

### Ejemplo en javaScript de como consumir
```javascript
async function consultarAPI() {
  try {
    const url = "http://127.0.0.1:8000/api/residentes/1";
    const resultado = await fetch(url);
    const servicios = await resultado.json();
    return servicios;
  } catch (error) {
    console.log(error);
  }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ID** | **number**|  | [optional] 

### Return type

[**[Residente]**](Residente.md)

### Autorización

No autorización requirida

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json



