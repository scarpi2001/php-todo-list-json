<script>
import axios from "axios";
import { store } from '../store';

export default {
    name: "Tasks",
    data() {
        return {
            store,
        }
    },
    methods: {
        getAllData() {
            axios.get(this.store.apiURL + "api.php")
                .then(res => {
                    const data = res.data
                    this.store.tasksList = data;
                });
        },
        removeTask(index) {
            const params = {
                params: {
                    "removedTask": index
                }
            };

            axios.get(this.store.apiURL + "api-remove-task.php", params)
                .then(res => {
                    const data = res.data

                    if (data == true) {
                        this.getAllData();
                    }

                });
        }
    }
}

</script>

<template>

    <!-- lista tasks -->
    <ul>
        <li v-for="(task, index) in store.tasksList" :key="index">
            {{ task.text }}
            <span @click="removeTask(index)">X</span>
        </li>
    </ul>

</template>

<style lang="scss" scoped>

</style>

