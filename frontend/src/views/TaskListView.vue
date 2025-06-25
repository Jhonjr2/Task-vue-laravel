<template>
  <div class="container">
    <h1>Administrador de Tareas</h1>
    <TaskForm @task-added="fetchTasks" />
    <TaskList
      :tasks="tasks"
      @task-updated="updateTask"
      @task-deleted="deleteTask"
    />
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import TaskList from '../components/TaskList.vue';
import TaskForm from '../components/TaskForm.vue';
import axios from '../axios';

const tasks = ref([]);

const fetchTasks = async () => {
  try {
    const response = await axios.get('/api/tasks');
    tasks.value = response.data.data;
  } catch (error) {
    alert('Error al cargar tareas');
  }
};

const deleteTask = async (id) => {
  try {
    await axios.delete(`/api/tasks/${id}`);
    fetchTasks();
  } catch (error) {
    alert('Error al eliminar tarea');
  }
};

const updateTask = async (task) => {
  try {
    await axios.put(`/api/tasks/${task.id}`, {
      is_completed: !task.is_completed
    });
    fetchTasks();
  } catch (error) {
    alert('Error al actualizar tarea');
  }
};

onMounted(fetchTasks);
</script>

<style scoped>
.container {
  max-width: 600px;
  margin: 2rem auto;
  background: #fff;
  padding: 2rem;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0,0,0,0.07);
}
h1 {
  text-align: center;
  margin-bottom: 2rem;
}
</style>
