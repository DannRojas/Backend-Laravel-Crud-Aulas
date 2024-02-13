# Saint Andrew's School

## Administración de Aulas

Este proyecto del lado del backend ha sido desarrollado con el framework **Laravel**

### Requisitos:

-   **MySQL**
-   **PHP V8.1 o superior**
-   **Composer / Laravel**
-   **Node.js V 20.11 o superior**

### Ejecución:

1. Ejecutar en la consola el comando **"php artisan install"**
2. Para crear las tablas necesárias en la base de datos ejecutar el comando **"php artisan migrate"**
3. Por defecto en las variables de entorno de ejemplo del proyecto se encuentran las credenciales para consumir una base de datos desplegada remotamente, Debería verse de la siguiente manera

```Typescript
DB_CONNECTION=mysql
DB_HOST=monorail.proxy.rlwy.net
DB_PORT=16731
DB_DATABASE=railway
DB_USERNAME=root
DB_PASSWORD=34feFH3-cg1bceCHcGhc3Ee5EDdAcegd
```

Modifique estas propiedades según se requiera 4. Por último ejecute el comando **"php artisan serve"** para poner en marchael sistema
