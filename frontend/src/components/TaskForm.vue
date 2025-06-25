<template>
  <form @submit.prevent="submitTask" class="task-form">
    <input v-model="title" type="text" placeholder="Título de la tarea" required />
    <input v-model="description" type="text" placeholder="Descripción (opcional)" />
    <button type="submit">Agregar</button>
    <span v-if="error" class="error">{{ error }}</span>
  </form>
</template>

<script setup>
import { ref } from 'vue';
import axios from '../axios';

const emit = defineEmits(['task-added']);
const title = ref('');
const description = ref('');
const error = ref('');

const submitTask = async () => {
  error.value = '';
  if (!title.value.trim()) {
    error.value = 'El título es obligatorio';
    return;
  }
  try {
    await axios.post('/api/tasks', {
      title: title.value,
      description: description.value
    });
    title.value = '';
    description.value = '';
    emit('task-added');
  } catch (err) {
    error.value = 'Error al agregar tarea';
  }
};
</script>

<style scoped>
.task-form {
  display: flex;
  gap: 0.5rem;
  margin-bottom: 1.5rem;
}
.task-form input {
  flex: 1;
  padding: 0.5rem;
  border: 1px solid #ccc;
  border-radius: 4px;
}
.task-form button {
  background: #3498db;
  color: white;
  border: none;
  padding: 0.5rem 1rem;
  border-radius: 4px;
  cursor: pointer;
}
.task-form button:hover {
  background: #217dbb;
}
.error {
  color: #e74c3c;
  margin-left: 1rem;
  align-self: center;
}
</style>
