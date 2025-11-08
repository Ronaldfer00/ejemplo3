# ejemplo3

> Proyecto de ejemplo para entrega de tarea. Incluye tecnologías HTML, CSS, Blade, PHP, SCSS y JavaScript.

---

## Tabla de Contenidos

- [Descripción](#descripción)
- [Características principales](#características-principales)
- [Tecnologías Utilizadas](#tecnologías-utilizadas)
- [Requisitos de Instalación](#requisitos-de-instalación)
- [Instalación y Ejecución](#instalación-y-ejecución)
- [Estructura del Proyecto](#estructura-del-proyecto)
- [Extensiones Recomendadas para VSCode](#extensiones-recomendadas-para-vscode)
- [Imágenes y Capturas de Pantalla](#imágenes-y-capturas-de-pantalla)
- [Contribuir](#contribuir)
- [Autor](#autor)
- [Licencia](#licencia)

---

## Descripción

Este proyecto ejemplifica cómo se debe entregar una tarea de desarrollo web moderna. Incluye diversas tecnologías utilizadas habitualmente en proyectos académicos y profesionales, además de una estructura organizada tanto en el código como en los recursos visuales.

El objetivo es servir como guía práctica para la presentación, estructuración y codificación de proyectos utilizando PHP, Blade, HTML, CSS, SCSS y JavaScript.

---

## Características principales

- **Multi-tecnología:** Uso conjunto de HTML, Blade, CSS, SCSS, PHP y JavaScript.
- **Diseño responsivo:** Adaptable a diferentes dispositivos.
- **Organización:** Separación clara entre archivos de vista, estilos y lógica del servidor.
- **Ejemplos de CRUD:** Incluye operaciones de Crear, Leer, Actualizar y Eliminar.
- **Integración con bases de datos (phpMyAdmin):** Ejemplo de cómo importar y visualizar datos.

---

## Tecnologías Utilizadas

El porcentaje según GitHub muestra la importancia de cada tecnología dentro del proyecto:

- **HTML:** 43.3%
- **CSS:** 26.2%
- **Blade:** 16.7% 
- **PHP:** 8.8%
- **SCSS:** 3.2%
- **JavaScript:** 1.8%

---

## Requisitos de Instalación

- **PHP >= 7.4**
- [Composer](https://getcomposer.org/) (para dependencias PHP/Laravel)
- [Node.js & npm](https://nodejs.org/) (para compilar SCSS)
- [Visual Studio Code](https://code.visualstudio.com/) u otro editor recomendado.

### Extensiones sugeridas para VSCode

#### Instaladas (ejemplo visual):

Imagen 1:
![Extensiones VSCode 1](images/img1.png)

Imagen 2:
![Extensiones VSCode 2](images/img2.png)

Las extensiones recomendadas son:

- Laravel Blade formatter
- Laravel Blade Snippets
- Laravel Snippets
- Live Server
- Material Icon Theme
- Monokai Night Theme
- PHP Intelephense

---

## Instalación y Ejecución

1. **Clonar el repositorio:**
    ```sh
    git clone https://github.com/Ronaldfer00/ejemplo3.git
    cd ejemplo3
    ```

2. **Instalar dependencias de PHP (si trabajas con Blade o Laravel):**
    ```sh
    composer install
    ```

3. **Instalar dependencias para estilos (si trabajas con SCSS):**
    ```sh
    npm install
    npm run dev  # Para compilar los archivos SCSS a CSS
    ```

4. **Levantar el servidor:**
    - Laravel:
        ```sh
        php artisan serve
        ```
    - PHP/HTML básico:
        - Coloca los archivos en tu servidor local (XAMPP, MAMP, Laragon, etc.) y accede vía navegador.

---

## Estructura del Proyecto

```
ejemplo3/
├── assets/
│   └── images/                  # Capturas y recursos gráficos
│       ├── dashboard.png
│       ├── phpmyadmin_import.png
│       ├── phpmyadmin_ventas.png
│       ├── producto_create.png
│       ├── productos_index.png
├── public/                      # Archivos públicos (index.php/css/js/etc)
├── resources/
│   ├── views/                   # Vistas Blade (.blade.php)
│   └── scss/                    # Archivos SCSS
├── css/                         # Estilos CSS generados
├── js/                          # Lógica en JavaScript
├── index.html / index.php       # Página principal
├── README.md                    # Este archivo
```

---

## Imágenes y Capturas de Pantalla

El proyecto cuenta con imágenes que ejemplifican la funcionalidad y diseño, ubicadas en `assets/images/`:

- **dashboard.png**  
  ![Dashboard](assets/images/dashboard.png)
- **phpmyadmin_import.png**  
  ![Importación en phpMyAdmin](assets/images/phpmyadmin_import.png)
- **phpmyadmin_ventas.png**  
  ![Ventas en phpMyAdmin](assets/images/phpmyadmin_ventas.png)
- **producto_create.png**  
  ![Crear producto](assets/images/producto_create.png)
- **productos_index.png**  
  ![Listado de productos](assets/images/productos_index.png)

---

## Contribuir

¿Quieres mejorar este proyecto?  
Haz un fork, crea una rama, realiza tus cambios y haz un pull request.  
Por favor, sigue la estructura y buenas prácticas demostradas.

---

## Autor

**Ronaldfer00**  
GitHub: [Ronaldfer00](https://github.com/Ronaldfer00)

---

## Licencia

Este proyecto se entrega como ejemplo académico. Puedes usarlo como base para tus proyectos y tareas educativas.
