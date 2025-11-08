# Sistema de Ventas en Laravel

## Panel de Control
![Panel Principal](./assets/images/dashboard.png.png)

## Gestión de Productos
![Lista de Productos](./assets/images/productos_index.png.png)
![Crear Producto](./assets/images/producto_create.png.png)

## Base de Datos
![Estructura DB](./assets/images/phpmyadmin_ventas.png.png)
![Importación](./assets/images/phpmyadmin_import.png.png)

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
   - Crea una base de datos llamada 'ventas'
   - Puedes importar los datos de ejemplo desde ventas.sql o sistemaventa.sql

2. CONFIGURAR EL PROYECTO
      - Copia `.env.example` a `.env`
      - Configura la base de datos en `.env`.
         Nota importante: en MySQL es recomendable evitar espacios en el nombre de la base de datos. Si tu base de datos actual se llama `sistema ventas`, te sugiero renombrarla a `sistema_ventas` para evitar problemas.

         Ejemplo (recomendado):

         DB_CONNECTION=mysql
         DB_HOST=127.0.0.1
         DB_PORT=3306
         DB_DATABASE=sistema_ventas
         DB_USERNAME=root
         DB_PASSWORD=

         Si realmente necesitas usar un nombre con espacio (no recomendado), algunas herramientas pueden aceptar nombres entre comillas, pero Laravel y el cliente MySQL suelen trabajar mejor con nombres sin espacios. Evita espacios para prevenir errores inesperados.

3. INSTALAR DEPENDENCIAS
   - Abre una terminal en la carpeta del proyecto
   - Ejecuta: composer install
   - Luego: php artisan key:generate
   - Si vas a modificar estilos: npm install && npm run build

4. CREAR LAS TABLAS
   - Ejecuta: php artisan migrate --force
   - Si quieres datos de prueba: php artisan db:seed

5. INICIAR EL SISTEMA
   - Con Apache: accede a http://localhost/sistema_ventas
   - O usa: php artisan serve
   - Abre http://127.0.0.1:8000 en tu navegador

## Estructura de la Base de Datos

### Tablas Principales

#### Categorías
```sql
CREATE TABLE categorias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    nombre VARCHAR(50),
    created_at TIMESTAMP,
    updated_at TIMESTAMP
);
```

#### Productos
```sql
CREATE TABLE productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_user INT,
    id_categoria INT,
    nombre VARCHAR(50),
    descripcion VARCHAR(50),
    cantidad INT,
    precio DECIMAL(10,2),
    created_at TIMESTAMP,
    updated_at TIMESTAMP
);
```

CLIENTES
- id (automático)
- id_usuario
- apellido (máx 50)
- nombre (máx 50)
- email (máx 50)
- timestamps

VENTAS
- id (automático)
- id_cliente
- total_venta (decimal)
- fecha_compra
- timestamps

DETALLE_VENTAS
- id (automático)
- id_venta
- id_producto
- cantidad
- precio_unitario (decimal)
- sub_total (decimal)
- timestamps

RUTAS PRINCIPALES
---------------
* Autenticación:
  - / → Página de inicio de sesión
  - /home → Dashboard principal
  - /register → Registro de usuarios

* Productos:
  - /productos → Lista de productos
  - /productos/create → Crear producto
  - /productos/{id}/edit → Editar producto

* Ventas:
  - /ventas → Lista de ventas
  - /ventas/create → Nueva venta
  - /ventas/{id} → Detalle de venta

* Clientes:
  - /clientes → Lista de clientes
  - /clientes/create → Registrar cliente
  - /clientes/{id}/edit → Editar cliente

* Categorías:
  - /categorias → Lista de categorías
  - /categorias/create → Nueva categoría

## Estructura del Proyecto

```
sistema_ventas/
├── app/
│   ├── Http/Controllers/    # Controladores
│   └── Models/             # Modelos
├── resources/
│   └── views/             # Vistas Blade
├── database/
│   └── migrations/        # Migraciones
├── routes/
│   └── web.php           # Rutas
└── public/               # Archivos públicos
```

## Solución de Problemas
1. "No se puede conectar a la base de datos"
   - Revisa que MySQL esté corriendo en XAMPP
   - Verifica las credenciales en .env
   - Comprueba que la base 'ventas' existe

2. "Error en las migraciones"
   - Intenta: php artisan migrate:fresh
   - Nota: esto borrará los datos existentes

3. "No se pueden subir productos"
   - Verifica que existan categorías
   - Comprueba los permisos del usuario

MANTENIMIENTO
------------
- Haz respaldos regulares de la base de datos
- Revisa los logs en storage/logs/
- Mantén actualizado PHP y Laravel

CONTRIBUIR AL PROYECTO
--------------------
1. Haz un fork del repositorio
2. Crea una rama para tus cambios
3. Envía un pull request
4. Describe bien tus cambios

¿NECESITAS AYUDA?
---------------
- Revisa la documentación de Laravel
- Verifica los archivos de migración para entender la estructura
- Consulta el código de los controladores para ver la lógica

Este sistema está pensado para ser fácil de usar y mantener. Si tienes dudas,
revisa primero la estructura de la base de datos y los controladores principales.
