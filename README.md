# Administrador de Tareas Simple

## Descripción
Administrador de tareas básico construido con **Laravel 12 (backend)** y **Vue 3 (frontend)**. Permite:
- Ver una lista de tareas
- Crear una nueva tarea
- Marcar una tarea como completada
- Eliminar una tarea

## Requisitos
- PHP >= 8.2
- Composer
- Node.js y NPM
- MySQL

## Instalación

### 1. Clona el repositorio o descomprime el archivo

### 2. Configura el backend (Laravel)
```sh
cd task-manager-api
cp .env.example .env
# Configura tu conexión a MySQL en el archivo .env
composer install
php artisan key:generate
```

### 3. Migraciones y seeders
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

### 6. Accede a la app
- Frontend: [http://localhost:5173](http://localhost:5173)
- API: [http://localhost:8000/api/tasks](http://localhost:8000/api/tasks)

## Endpoints API

| Método | Endpoint             | Descripción                        |
|--------|----------------------|------------------------------------|
| GET    | /api/tasks           | Obtener todas las tareas           |
| POST   | /api/tasks           | Crear una nueva tarea              |
| PUT    | /api/tasks/{id}      | Actualizar/alternar tarea          |
| DELETE | /api/tasks/{id}      | Eliminar una tarea                 |

## Estructura de la base de datos
Tabla: `tasks`
- id (PK)
- title (string)
- description (text, nullable)
- is_completed (boolean, default false)
- created_at, updated_at (timestamps)

## Notas
- El frontend usa Axios para consumir la API.
- El backend responde en formato JSON.
- Puedes modificar la conexión a la base de datos en `.env`.

## Bonus
- Validación de formulario en frontend.
- Mensajes de error en operaciones fallidas.
- UI y UX limpias.

---
¡Listo para entregar! Si tienes dudas o problemas, revisa los archivos `.env` y los logs de Laravel.
