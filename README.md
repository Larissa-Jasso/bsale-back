## Especificaciones:
<p> 

## Instalar vendor: Correr el comando de 'composer install' para generar el vendor
## Levantar servidor (para correr en modo local): php artisan serve --host=localhost --port=8000
## El env ya se encuentra en modo de produccion
</p>

   ## GET api/categories retornara todas las categorias existentes: 
 
headers:{
    Accept: application/json
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

   ## GET api/produts_by_category/{id} retornara los productos filtrados por la categoria: 

   params:{
    id:integer (enviar en url),
}
headers:{
    Accept: application/json
}
response:
[
    {
        "id": 5,
        "name": "ENERGETICA MR BIG",
        "url_image": "https://dojiw2m9tvv09.cloudfront.net/11132/product/misterbig3308256.jpg",
        "price": 1490,
        "discount": 20,
        "category": 1
    },
    {
        "id": 6,
        "name": "ENERGETICA RED BULL",
        "url_image": "https://dojiw2m9tvv09.cloudfront.net/11132/product/redbull8381.jpg",
        "price": 1490,
        "discount": 0,
        "category": 1
    },
    ....
]

-   id: Identificar del producto (integer).
-   name: Nombre del producto (varchar).
-   url_image: Url de la imagen identificadora (varchar).
-   price: Precio del producto (float).
-   discount: Descuento aplicado al producto (int).
-   category: Categoria a la que pertenece el producto (int).


   ## POST api/search_product retornara los productos filtrados por la nombre: 
   params:{
    name:string,
}
headers:{
    Accept: application/json
}
response:
[
    {
        "id": 34,
        "name": "ENERGETICA MONSTER RIPPER",
        "url_image": "https://dojiw2m9tvv09.cloudfront.net/11132/product/mosterriper0436.jpg",
        "price": 1990,
        "discount": 0,
        "category": 1
    },
    {
        "id": 77,
        "name": "ENERGETICA MONSTER RIPPER",
        "url_image": "",
        "price": 1990,
        "discount": 0,
        "category": 1
    }
]

-   id: Identificar del producto (integer).
-   name: Nombre del producto (varchar).
-   url_image: Url de la imagen identificadora (varchar).
-   price: Precio del producto (float).
-   discount: Descuento aplicado al producto (int).
-   category: Categoria a la que pertenece el producto (int).


