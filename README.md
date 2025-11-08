# ejemplo3

> Proyecto de ejemplo para la entrega de una tarea académica, diseñado para mostrar buenas prácticas en el uso de tecnologías modernas de desarrollo web.

---

## Tabla de Contenidos

- [¿Qué es este proyecto?](#qué-es-este-proyecto)
- [Objetivos del proyecto](#objetivos-del-proyecto)
- [Tecnologías y su propósito](#tecnologías-y-su-propósito)
- [Extensiones recomendadas en VSCode](#extensiones-recomendadas-en-vscode)
- [Requisitos previos](#requisitos-previos)
- [Instalación paso a paso](#instalación-paso-a-paso)
- [Estructura y explicación de carpetas](#estructura-y-explicación-de-carpetas)
- [Imágenes ilustrativas](#imágenes-ilustrativas)
- [Preguntas frecuentes (FAQ)](#preguntas-frecuentes-faq)
- [Autor](#autor)
- [Licencia](#licencia)

---

## ¿Qué es este proyecto?

Este repositorio contiene una maqueta para la entrega de tareas de programación web. Incluye código fuente y ejemplos que demuestran la integración de diferentes tecnologías y la estructura recomendada en proyectos académicos y prácticos.

---

## Objetivos del proyecto

- **Mostrar la estructura recomendada** para un repositorio de proyecto web.
- Enseñar **cómo integrar Blade y PHP** para lógica y vistas dinámicas.
- Ejemplificar la **organización de archivos** para frontend (HTML, CSS, SCSS, JS) y backend (PHP).
- Ilustrar la **importancia de la documentación** y el uso de imágenes/capturas de pantalla representativas.

---

## Tecnologías y su propósito

Este proyecto utiliza las siguientes tecnologías (porcentajes aproximados del código del repositorio):

| Tecnología   | Porcentaje | ¿Para qué sirve?                                                         |
|--------------|------------|--------------------------------------------------------------------------|
| HTML         | 43.3%      | Estructura básica de las páginas web.                                    |
| CSS          | 26.2%      | Estilos visuales generales para el sitio.                                |
| Blade        | 16.7%      | Motor de plantillas de Laravel para crear vistas dinámicas en PHP.        |
| PHP          | 8.8%       | Lógica de servidor y procesamiento de formularios.                       |
| SCSS         | 3.2%       | Preprocesador de CSS para organizar y reutilizar estilos.                |
| JavaScript   | 1.8%       | Funcionalidades interactivas y dinámicas en el navegador.                |

---

## Extensiones recomendadas en VSCode

Para mejorar la productividad, organización y experiencia de desarrollo, se recomienda instalar las siguientes extensiones:

<img src="images/img1.png" alt="Extensiones VSCode 1" width="300">
<img src="images/img2.png" alt="Extensiones VSCode 2" width="300">

#### Explicación de cada extensión:

- **Laravel Blade Formatter:** Da formato automáticamente al código Blade, facilitando su lectura.
- **Laravel Blade Snippets:** Agrega fragmentos útiles para escribir menos código repetitivo en Blade.
- **Laravel Snippets:** Fragmentos de Laravel directamente en el editor para facilitar el trabajo.
- **Live Server:** Permite probar el sitio en tiempo real, refrescando el navegador al guardar cambios.
- **Material Icon Theme:** Iconos visuales que diferencian tipos de archivos y carpetas.
- **Monokai Night Theme:** Proporciona un tema oscuro y moderno para cuidar tu vista.
- **PHP Intelephense:** Autocompletado inteligente, ayuda y referencias rápidas para PHP.

---

## Requisitos previos

- Editor recomendado: **VSCode**
- **PHP** (versión >= 7.4)
- **Composer** (para dependencias PHP/Laravel)
- **Node.js y npm** (para compilar SCSS)
- Servidor local (XAMPP, WAMP, Laragon, MAMP) si es proyecto básico, o **Laravel** si usas Blade.

---

## Instalación paso a paso

1. **Clona el repositorio:**
    ```sh
    git clone https://github.com/Ronaldfer00/ejemplo3.git
    cd ejemplo3
    ```

2. **Instala dependencias:**
    - Si el proyecto usa Laravel y Blade:
        ```sh
        composer install
        ```
    - Si el proyecto tiene SCSS:
        ```sh
        npm install
        npm run dev      # Compilar SCSS y obtener los CSS finales
        ```

3. **Levanta el servidor local:**
    - Laravel:
        ```sh
        php artisan serve
        ```
        Ingresa a `http://localhost:8000` en tu navegador.
    - Proyecto PHP básico:
        - Copia los archivos a la carpeta `htdocs` de XAMPP/MAMP/etc y accede desde el navegador.
    - Proyecto solo HTML:
        - Usa Live Server de VSCode para abrir `index.html` y probar el sitio.

---

## Estructura y explicación de carpetas

Así está organizado el proyecto para facilitar el desarrollo y el mantenimiento:

```
ejemplo3/
├── assets/
│   └── images/            # Imágenes del sistema, capturas de pantalla y recursos gráficos
│       ├── dashboard.png
│       ├── phpmyadmin_import.png
│       ├── phpmyadmin_ventas.png
│       ├── producto_create.png
│       ├── productos_index.png
├── public/                # Archivos accesibles por el navegador (index.php, assets, etc)
├── resources/
│   ├── views/             # Archivos Blade (.blade.php) para las vistas dinámicas
│   └── scss/              # Archivos fuente SCSS para los estilos
├── css/                   # Archivos CSS finales después de compilar los SCSS
├── js/                    # Archivos JavaScript para funcionalidad dinámica
├── index.html / index.php # Página principal del proyecto
├── README.md              # Documentación principal del repositorio
```

---

## Imágenes ilustrativas

Aquí se muestran ejemplos de las diferentes vistas y funcionalidades que el proyecto puede ofrecer:

- **Dashboard principal**
  ![Dashboard](assets/images/dashboard.png)

- **Importar base de datos en phpMyAdmin**
  ![Importación en phpMyAdmin](assets/images/phpmyadmin_import.png)

- **Registro de ventas en phpMyAdmin**
  ![Ventas en phpMyAdmin](assets/images/phpmyadmin_ventas.png)

- **Formulario de creación de producto**
  ![Crear producto](assets/images/producto_create.png)

- **Listado de productos**
  ![Listado de productos](assets/images/productos_index.png)

> **Consejo:** Puedes agregar tus propias capturas de pantalla para mostrar el diseño o funcionamiento del sistema que entregas.

---

## Preguntas frecuentes (FAQ)

### ¿Puedo usar este repositorio como base para mis tareas?
¡Por supuesto! Está pensado para ello: adapta o mejora la estructura según los requerimientos de tu docente.

### ¿Cómo saber si tengo todas las dependencias?
Si te aparece algún error, revisa primero si tienes instalado **PHP**, **Node.js**, **Composer** y las extensiones de VSCode recomendadas.

### ¿Puedo agregar más imágenes?
Sí. Guarda las capturas en `assets/images/` y agrégalas en el README usando `![texto alternativo](ruta)`.

---

## Autor

**Ronaldfer00**  
GitHub: [Ronaldfer00](https://github.com/Ronaldfer00)

---

## Licencia

Uso libre y académico. Puedes modificar y reutilizar este material para tus tareas.
