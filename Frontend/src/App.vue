<script>
import Tasks from './components/Tasks.vue'
import Add from './components/Add.vue'

export default {
  name: "App",
  components: {
    Tasks,
    Add,
  }
}

</script>

<template>
  <h1>Todo List</h1>

  <div id="tasks_box">
    <Tasks />
  </div>

  <Add />
</template>

<style lang="scss">
@use "./styles/general.scss" as*;
</style>
