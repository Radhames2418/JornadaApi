# jornadaApi


| Method                           | HTTP request                             | Description                                                         |
| -------------------------------- | ---------------------------------------- | ------------------------------------------------------------------- |
| [**index**](jornadaApi.md#jornadaAPITODOS)                      | **GET** /api/residentes                  | _Retorna Todos los registro_                                        |
| [**show**](jornadaApi.md#jornadaAPIUNO)                       | **GET** /api/residentes/{residente}      | _Retorna un registro por ID_                                        |
| [**store**](jornadaApi.md#jornadaEnviar)                      | **POST** /api/residentes                 | _Enviar un registro_                                                |
| [**update**](jornadaApi.md#jornadaActualizar)                    | **PUT** /api/residentes/{residente}      | _Actualizar un registro en especifico_                              |
| [**destroy**](jornadaApi.md#jornadaEliminar)                    | **DELETE** /api/residentes/{residente}   | _Eliminar un registro especifico_                                   |
| [**name**](jornadaApi.md#jornadaName)                        | **GET** /api/nombre/{nombre}             | _Retorna un/os registro/s por el nombre_                            |
| [**email**](jornadaApi.md#jornadaEmail)                      | **GET** /api/correo/{correo}             | _Retorna un registro por el correo_                                 |
| [**filter**](jornadaApi.md#jornadaletra)                     | **GET** /api/letra/{letra}               | _Filtra un/os registro/s por la primera letra de su nombre_         |
| [**down**](jornadaApi.md#jornadaedad)                        | **GET** /api/edad/{edad}                 | _Filtra un/os registro/s por su edad de mayor a menor_              |
| [**paginado**](jornadaApi.md#jornadapagina)                   | **GET** /api/pagina/{pagina}             | _Retorna diez registro orginado desde el más reciente al más viejo_ |


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



<a name="jornadaEnviar"></a>
# **jornadaEnviar**
> [jornadaAPIUNO] Enviar un registro

### Ejemplo en javaScript de como consumir
```javascript
async function guardarResidente() {

  const Residente = {
        "nombre": "Radhames",
        "apellidos": "Encarnacion Encarnacion",
        "telefono": 8492052418,
        "correo": "Radhamesenc24102@gmail.com",
        "edad": 20,
        "direccion": "Hondo Valle",
        "comida_entregable": 1,
        "observacion": "Gracias por el servicio"
    }
  
  }
  const { nombre, apellidos, telefono, correo, edad, direccion, comida_entregable, observacion } = Residente;

  const datos = new FormData();
  datos.append("nombre", nombre);
  datos.append("apellidos", apellidos);
  datos.append("telefono", telefono);
  datos.append("correo", correo);
  datos.append("edad", edad);
  datos.append("direccion", direccion);
  datos.append("comida_entregable", comida_entregable);
  datos.append("observacion", observacion);


  try {
    //Peticion hacia la api
    const url = "http://127.0.0.1:8000/api/residentes";
    const respuesta = await fetch(url, {
      method: "POST",
      body: datos,
    });

    const resultado = await respuesta.json();
    const Mostrar = resultado.resultado;
    console.log(Mostrar);

    if (Mostrar.resultado === true) {
    console.log(Mostrar);
    }
  } catch (error) {
    console.log(error);
  }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **BODY** | **JSON**|  | [request] 

### Return type

null (empty response body)

### Autorización

No autorización requirida

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json



<a name="jornadaActualizar"></a>
# **jornadaActualizar**
> [jornadaActualizar] Actualizar un registro

### Ejemplo en javaScript de como consumir
```javascript
async function ActualizarRegistro() {

  const Residente = {
        "nombre": "Radhames",
        "apellidos": "Encarnacion Encarnacion",
        "telefono": 8492052418,
        "correo": "Radhamesenc24102@gmail.com",
        "edad": 20,
        "direccion": "Hondo Valle",
        "comida_entregable": 1,
        "observacion": "Gracias por el servicio"
    }
  
  }
  const { nombre, apellidos, telefono, correo, edad, direccion, comida_entregable, observacion } = Residente;

  const datos = new FormData();
  datos.append("nombre", nombre);
  datos.append("apellidos", apellidos);
  datos.append("telefono", telefono);
  datos.append("correo", correo);
  datos.append("edad", edad);
  datos.append("direccion", direccion);
  datos.append("comida_entregable", comida_entregable);
  datos.append("observacion", observacion);


  try {
    //Peticion hacia la api
    const url = "http://127.0.0.1:8000/api/residentes/{residente}";
    const respuesta = await fetch(url, {
      method: "UPDATE",
      body: datos,
    });

    const resultado = await respuesta.json();
    const Mostrar = resultado.resultado;
    console.log(Mostrar);

    if (Mostrar.resultado === true) {
    console.log(Mostrar);
    }
  } catch (error) {
    console.log(error);
  }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **BODY** | [**[Residente]**](Residente.md) |  | [request] 

### Return type

null (empty response body)

### Autorización

No autorización requirida

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json



<a name="jornadaEliminar"></a>
# **jornadaEliminar**
> [jornadaEliminar] Eliminar un registro

### Ejemplo en javaScript de como consumir
```javascript
async function ActualizarRegistro() {

  try {
    //Peticion hacia la api
    const url = "http://127.0.0.1:8000/api/residentes/{residente}";
    const respuesta = await fetch(url, {
      method: "DELETE",
    });

    const resultado = await respuesta.json();
    const Mostrar = resultado.resultado;
    console.log(Mostrar);

    if (Mostrar.resultado === true) {
    console.log(Mostrar);
    }
  } catch (error) {
    console.log(error);
  }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **BODY** | [**[Residente]**](Residente.md) |  | [request] 

### Return type

null (empty response body)

### Autorización

No autorización requirida

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json




<a name="jornadaName"></a>
# **jornadaName**
> [jornadaName] Obtener un registro o registros por el nombre

### Ejemplo en javaScript de como consumir
```javascript
async function consultarAPI() {
  try {
    const url = "http://127.0.0.1:8000/api/name/Radhames";
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
 **Nombre** | **string**|  | [required] 

### Return type

[**[Residente]**](Residente.md)

### Autorización

No autorización requirida

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json



<a name="jornadaEmail"></a>
# **jornadaEmail**
> [jornadaEmail] Obtener un registro o registros por el email

### Ejemplo en javaScript de como consumir
```javascript
async function consultarAPI() {
  try {
    const url = "http://127.0.0.1:8000/api/correo/Radhamesenc24102@gmail.com";
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
 **correo** | **string**|  | [required] 

### Return type

[**[Residente]**](Residente.md)

### Autorización

No autorización requirida

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json



<a name="jornadaletra"></a>
# **jornadaletra**
> [jornadaletra] Obtener un registro o registros por la primera letra de su nombre

### Ejemplo en javaScript de como consumir
```javascript
async function consultarAPI() {
  try {
    const url = "http://127.0.0.1:8000/api/letra/a";
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
 **letra** | **string**|  | [required] 

### Return type

[**[Residente]**](Residente.md)

### Autorización

No autorización requirida

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json




<a name="jornadaedad"></a>
# **jornadaedad**
> [jornadaedad] Obtener un registro o registros por la edad de mayor a menor

### Ejemplo en javaScript de como consumir
```javascript
async function consultarAPI() {
  try {
    const url = "http://127.0.0.1:8000/api/edad/52";
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
 **edad** | **numero**|  | [required] 

### Return type

[**[Residente]**](Residente.md)

### Autorización

No autorización requirida

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json





<a name="jornadapagina"></a>
# **jornadapagina**
> [jornadapagina] Retorna diez registro orginado desde el más reciente al mas antiguo

### Ejemplo en javaScript de como consumir
```javascript
async function consultarAPI() {
  try {
    const url = "http://127.0.0.1:8000/api/pagina/1";
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
 **pagina** | **numero**|  | [required] 

### Return type

[**[Residente]**](Residente.md)

### Autorización

No autorización requirida

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json


