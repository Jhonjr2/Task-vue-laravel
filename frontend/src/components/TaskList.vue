<template>
  <ul class="task-list">
    <li v-for="task in tasks" :key="task.id" :class="{ completed: task.is_completed }">
      <div class="task-main">
        <input type="checkbox" :checked="task.is_completed" @change="$emit('task-updated', task)" />
        <div class="task-info">
          <span class="title">{{ task.title }}</span>
          <span class="desc" v-if="task.description">{{ task.description }}</span>
        </div>
      </div>
      <button class="delete-btn" @click="$emit('task-deleted', task.id)">Eliminar</button>
    </li>
  </ul>
</template>

<script setup>
const props = defineProps({
  tasks: {
    type: Array,
    required: true
  }
});
</script>

<style scoped>
.task-list {
  list-style: none;
  padding: 0;
}
.task-list li {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 1rem 0;
  border-bottom: 1px solid #eee;
}
.task-main {
  display: flex;
  align-items: center;
  gap: 1rem;
}
.task-info .title {
  font-weight: bold;
}
.task-info .desc {
  display: block;
  color: #888;
  font-size: 0.95em;
}
.completed .title {
  text-decoration: line-through;
  color: #999;
}
.delete-btn {
  background: #e74c3c;
  border: none;
  color: white;
  padding: 0.5rem 1rem;
  border-radius: 4px;
  cursor: pointer;
}
.delete-btn:hover {
  background: #c0392b;
}
</style>
