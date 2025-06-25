# Administrador de Tareas Simple

Este proyecto es un administrador de tareas desarrollado con Laravel 12 (backend) y Vue 3 (frontend).

## Requisitos
- PHP >= 8.2
- Composer
- Node.js y NPM
- MySQL

## Instalación y configuración

### 1. Clona el repositorio
```sh
git clone https://github.com/Jhonjr2/Task-vue-laravel.git
cd Task-vue-laravel
```

### 2. Configura el backend (Laravel)
```sh
cd task-manager-api
cp .env.example .env
# Edita .env con tus credenciales de MySQL
composer install
php artisan key:generate
```

### 3. Ejecuta migraciones y seeders
```sh
php artisan migrate --seed
```

### 4. Inicia el backend
```sh
php artisan serve
```

### 5. Configura el frontend (Vue)
```sh
cd ../frontend
npm install
npm run dev
```

### 6. Accede a la aplicación
- Frontend: http://localhost:5173
- API: http://localhost:8000/api/tasks

## ¿Cómo verificar que funciona?
- Crea, marca como completada y elimina tareas desde la interfaz web.
- Puedes consultar los endpoints de la API usando Postman o tu navegador.
- Si tienes algún problema, revisa el archivo `.env` y los logs en `storage/logs/laravel.log`.

## Estructura de la base de datos
La tabla `tasks` contiene:
- id (clave primaria)
- title (string)
- description (texto, opcional)
- is_completed (booleano, por defecto falso)
- created_at, updated_at (timestamps)
