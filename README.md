# Sistema de Ventas en Laravel

## Panel de Control
![Panel Principal](assets/images/dashboard.png)

## Gestión de Productos
![Lista de Productos](assets/images/productos_index.png)
![Crear Producto](assets/images/producto_create.png)

## Base de Datos
![Estructura DB](assets/images/phpmyadmin_ventas.png)
![Importación](assets/images/phpmyadmin_import.png)

## Características Principales
- Gestionar productos y sus categorías
- Administrar clientes
- Registrar ventas y ver su detalle
- Control de usuarios y accesos
- Ver reportes en el dashboard

## Requisitos Previos

- XAMPP (Apache y MySQL)
- PHP 8.x
- Composer
- Node.js y npm (opcional, para modificar estilos)

## Instalación
1. PREPARAR LA BASE DE DATOS
   - Abre XAMPP y arranca Apache y MySQL
   - Ve a phpMyAdmin (http://localhost/phpmyadmin)
   - Crea una base de datos llamada `sistema_ventas` (recomendado)

2. CONFIGURAR EL PROYECTO
   - Copia `.env.example` a `.env`
   - Configura la base de datos en `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sistema_ventas
DB_USERNAME=root
DB_PASSWORD=
```

3. INSTALAR DEPENDENCIAS
```bash
composer install
php artisan key:generate
npm install && npm run build
```

4. CREAR LAS TABLAS
```bash
php artisan migrate --force
php artisan db:seed
```

5. INICIAR EL SISTEMA
```bash
php artisan serve
```

## Estructura del Proyecto

```
sistema_ventas/
├── app/
│   ├── Http/Controllers/
│   └── Models/
├── resources/
│   └── views/
├── database/
│   └── migrations/
├── routes/
│   └── web.php
└── public/
```

## Conexión a la Base de Datos (breve)
En `.env` ajusta las variables de conexión como se muestra arriba. No es obligatorio importar un SQL de ejemplo: si ejecutas las migraciones (`php artisan migrate --seed`) el esquema se creará automáticamente.

## Solución rápida si las imágenes no se ven
1. Comprueba que los archivos existen en `assets/images` y que sus nombres coinciden exactamente con los usados arriba (por ejemplo `dashboard.png`).
2. Haz `git add`, `commit` y `push` para subir las imágenes y el `README.md` a GitHub.
3. En GitHub la página principal del repo muestra `README.md` (no `README.txt`), así que usa `README.md` para que las imágenes se rendericen.

---

Si quieres, puedo preparar los comandos exactos para añadir/commitear/pushear los cambios desde PowerShell.
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
