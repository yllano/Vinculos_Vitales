# 📌 Manual de Despliegue - Aplicativo Web en Laravel (Breeze + Tailwind)

Este instructivo explica los pasos necesarios para desplegar y ejecutar el proyecto localmente.  

---

## ⚙️ 1. Requisitos Previos

Antes de iniciar, asegúrese de tener instalados en su máquina:  

- [PHP 8.x](https://www.php.net/downloads.php) (recomendado >= 8.1)  
- [Composer](https://getcomposer.org/) (para gestionar dependencias PHP)  
- [Node.js y npm](https://nodejs.org/) (para compilar los estilos con Tailwind)  
- [Laragon/MySQL](https://www.mysql.com/) (motor de base de datos que se usó en el proyecto)  
- Git (opcional, si clona el repositorio)  

---

## 📂 2. Clonar o Descargar el Proyecto

```bash
# Clonar repositorio (si se usa GitHub)
git clone https://github.com/yllano/Vinculos_Vitales.git

# Entrar a la carpeta del proyecto
cd Vinculos-Vitales
#Instalar dependencias 
compose install
npm install
#Configuración del entorno
#1. Copiar el archivo de configuración 
.env
#2. Editar el archivo .env con los datos de la base de datos
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_base_datos
DB_USERNAME=usuario
DB_PASSWORD=contraseña
#3. Generar la clave de la aplicación:
php artisan key:generate
#4. Ejecutar las migraciones 
php artisan migrate
#5. Ejecutar el Servidor de Laravel
php artisan serve
#6. Compilar los Estilos (Tailwind + Vite)
npm run dev
#7. Acceso a la Aplicación
Entrar a la URL: http://127.0.0.1:8000
 

 

