
## Especificaciones:
## Lenguaje PHP, framework de Laravel.
## Instalar vendor: Correr el comando de 'composer install' para generar el vendor
## Levantar servidor (para correr en modo local): php artisan serve --host=localhost --port=8000
## El env ya se encuentra en modo de produccion.

## Estructura:
## La seccion de apis se encuentra en la carpeta de app/http/controllers/ProductController
## La seccion de rutas se encuentra en la carpeta de routes/api.php

## Objetivo: Permitir al usuario obtener las categorias existentes asi como los productos en general o bien filtrarlos por los parametros de categoria, nombre, precio, descuento o alfabeticamente.


## GET api/categories retornara todas las categorias existentes:

+ headers:{
+ Accept: application/json
}
response:
[
{
    "id": 1,
    "name": "bebida energetica"
},
{
    "id": 2,
    "name": "pisco"
},
...
]

-   id: Identificar de la categoria (PK).
-   name: Nombre de la categoria.

## POST api/produts retornara los productos filtrados acorde los parametros recibidos, es decir por la categoria, nombre, precio, descuento o alfabeticamente segun sea el caso:

+ params:{
-    name: string,
-    category: int,
-    alphabetic: boolean,
-    price: boolean,
-    discount: boolean,
}

+ headers:{
Accept: application/json
}
+ response:
[

{
    id: 5, 
    name: "ENERGETICA MR BIG"
    category:1
    discount:20
    id:5
    name:"ENERGETICA MR BIG"
    price:1490
    url_image:"https://dojiw2m9tvv09.cloudfront.net/11132/product/misterbig3308256.jpg"
}
....
]

-   id: Identificar del producto (integer).
-   name: Nombre del producto (varchar).
-   url_image: Url de la imagen identificadora (varchar).
-   price: Precio del producto (float).
-   discount: Descuento aplicado al producto (int).
-   category: Categoria a la que pertenece el producto (int).
