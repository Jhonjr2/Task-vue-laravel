# Administrador de Tareas - Frontend

Este es el frontend de una aplicación simple de administración de tareas, construido con Vue 3 y Vite.

## Requisitos previos
- Node.js >= 16
- npm >= 8
- Backend Laravel corriendo en `http://localhost:8000`

## Instalación

1. Instala las dependencias:
   ```bash
   npm install
   ```
2. Inicia el servidor de desarrollo:
   ```bash
   npm run dev
   ```
3. Abre tu navegador en [http://localhost:5173](http://localhost:5173)

## Estructura de Carpetas
- `src/components` - Componentes reutilizables (formulario y lista de tareas)
- `src/views` - Vistas principales (por ahora solo TaskListView)
- `src/router` - Configuración de rutas (Vue Router)

## Notas
- Las peticiones a `/api` se proxyan automáticamente al backend de Laravel.
- Puedes modificar la URL del backend en `vite.config.js` si es necesario.

## Funcionalidades
- Ver lista de tareas
- Crear nueva tarea
- Marcar tarea como completada
- Eliminar tarea
- Validación básica y mensajes de error

---

Si tienes dudas, revisa el backend o contacta al autor.
