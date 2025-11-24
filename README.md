<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>
## PRY_AUTENTICACION_MICROSERVICIO PRUEBA FINAL 

## Nombre Alanis Tenemaza

Este proyecto es un **microservicio de autenticación** desarrollado en **Laravel 12**. Está preparado para gestionar usuarios, sesiones y autenticación usando Laravel Sanctum y se conecta a una base de datos MySQL.

---

## Requisitos

- **PHP** >= 8.2  
- **Composer** >= 2.9  
- **MySQL**  
- **XAMPP** (opcional, para entorno local con Apache y MySQL)  
- Extensiones PHP activadas: `pdo_mysql`, `mbstring`, `openssl`, `curl`, `zip`  

---

## Instalación

1. **Clonar o crear el proyecto:**

   ```bash
   cd C:\xampp\htdocs
   composer create-project laravel/laravel PRY_AUTENTICACION_MICROSERVICIO
   cd PRY_AUTENTICACION_MICROSERVICIO
   Configurar el archivo .env:

Ajustar los parámetros de conexión a la base de datos:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_autenticacion
DB_USERNAME=root
DB_PASSWORD=


Generar la clave de la aplicación:

php artisan key:generate


Crear la base de datos en phpMyAdmin o MySQL:

Nombre sugerido: db_autenticacion

Ejecutar migraciones:

php artisan migrate


Levantar el servidor de desarrollo:

php artisan serve


Por defecto se abrirá en:
http://127.0.0.1:8000

Observaciones

Durante la instalación se detectaron problemas con la extensión zip de PHP, por lo que Composer descargó algunos paquetes desde el source en lugar de usar dist.

El proyecto originalmente intentó usar Laravel 9 y 12, pero la versión final fue Laravel 12 con PHP 8.2.

Si al abrir la URL en el navegador aparece un 404 Not Found, asegúrate de que:

El servidor se levantó correctamente con php artisan serve.

Estás accediendo a la ruta correcta (ej. / o /api).

Las rutas definidas en routes/web.php o routes/api.php existen.

Dependencias principales

Laravel Framework 12.x

Laravel Sanctum (para autenticación de API)

Composer packages: Se instalaron automáticamente durante composer create-project




