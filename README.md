# <div align="center"> ✧ Proyecto Laravel - CRUD de Productos ✧ <br>
### <div align="center"> - Belén Ruiz Morales - </div>
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="200" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## 📝 Descripción del Proyecto
Este proyecto es una aplicación CRUD para la gestión de productos y categorías, desarrollada con Laravel. Permite crear, editar y eliminar productos, asignándolos a una categoría específica. Incluye una interfaz responsiva con Blade y Tailwind CSS, además de alertas dinámicas con SweetAlert. El objetivo es demostrar el uso de relaciones 1:N.
<br><br>
![image](https://github.com/user-attachments/assets/8641522c-05ab-4896-986a-32804ccd465d)
<br>

## 💻 Desarrollo del Proyecto 
1. Laravel como framework principal para la estructura y lógica.
2. SQLite como base de datos por defecto en el entorno de desarrollo.
3. Factories y Seeders con Faker para la generación de datos de prueba.
4. Blade como motor de pantillas para las vistas.

### 🛠️ Lenguajes y Tecnologías
- **PHP:** Lenguaje principal.
- **Laravel:** Framework de desarrollo.
- **SQLite:** Base de Datos.
- **Blade:** Plantillas para las vistas.
- **Tailwind CSS:** Encargado de diseño visual y estilos responsivos.
- **SweetAlert:** Notificaciones.
- **Font Awesome:** Iconos.
<br><br>

##  📂 Estructura del proyecto
```
├── app/
│   ├── Http/Controllers/        # Controladores
│   ├── Models/                  # Modelos de base de datos
|
├── database/
│   ├── migrations/              # Migraciones de base de datos
│   ├── seeders/                 # Generación de datos
│   ├── factories/
|
├── public/storage
│   ├── images                   # Imagenes de los productos
|
├── resources/
│   ├── views/
│       ├── categories/          # Vistas relacionadas con categorías
│       │   ├── create.blade.php 
│       │   ├── edit.blade.php   
│       │   └── index.blade.php  
│       ├── components/          # Componentes reutilizables
│       │   ├── alerta.blade.php # Alertas con SweetAlert
│       │   ├── barra-nav.blade.php # Barra de navegación
│       │   └── error.blade.php  # Manejo de errores
│       ├── plantillas/
│       │   └── plantilla.blade.php # Plantilla principal
│       ├── products/            # Vistas relacionadas con productos
│       │   ├── create.blade.php 
│       │   ├── edit.blade.php   
│       │   └── index.blade.php  
|       
├── routes/
│   ├── web.php                  # Rutas web
```

## 📖 Instalación y Configuración
```
# Clonar el repositorio
git clone https://github.com/beelenruiz/laravelRelacion1N.git

# Ingresar al directorio del proyecto
cd laravelRelacion1N

# Instalar dependencias
composer install

# Configurar variables de entorno
cp .env.example .env

# Generar clave de la aplicación
php artisan key:generate

# Ejecutar migraciones y seeders para generar datos iniciales
php artisan migrate --seed

# Iniciar el servidor de desarrollo
php artisan serve
```
Accede al proyecto en tu navegador en la dirección http://localhost:8000/categories.
<br><br>

## 📸 Imágenes
<img src="https://github.com/user-attachments/assets/45626bbc-ed20-4333-ad4c-9d164441263b" style="width: 49%; margin: 0 auto;">
<img src="https://github.com/user-attachments/assets/318e3baa-fdf4-46ea-8b09-8aa00f428b7d" style="width: 49%; margin: 0 auto;">

![image](https://github.com/user-attachments/assets/75437ffd-565e-415b-9f4c-260fc5a8fccd)
<img src="https://github.com/user-attachments/assets/5d5b181d-0c93-406b-b753-29b7c25d5d28" style="width: 49%; margin: 0 auto;">
<img src="https://github.com/user-attachments/assets/2e4a3ab3-bbce-46d6-b59c-609f93934a85" style="width: 50%; margin: 0 auto;">

![image](https://github.com/user-attachments/assets/957cca83-91f9-4b4b-8a78-dc643aac8411)
<br><br>

## 📋 Adicional
- Las imágenes en los productos son opcionales. Si no se sube ninguna, se asigna una imagen por defecto.
- No hay autenticación ni filtros avanzados, solo la funcionalidad CRUD básica requerida.
- Se puede visualizar todos los productos de una categoría específica desde la tabla de categorías.
- Puedes agregar funcionalidades como filtros y búsquedas para extender el proyecto.

## 👥 Autora
**Belén Ruiz Morales**,  Estudiante de 2º DAW.

### ✉ Contacto
- belenrumo2005@gmail.com
- [mi perfil de linkedin](https://www.linkedin.com/in/belen-ruiz-499b8b275/)
