<script>
import { store } from '../store';

export default {
    name: "Tasks",
    data() {
        return {
            store,
        }
    }
}

</script>

<template>
    <ul>
        <li v-for="(task, index) in store.tasksList" :key="index">
            {{ task.text }}
        </li>
    </ul>
</template>

<style lang="scss" scoped>

</style>

