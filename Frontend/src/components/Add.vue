<script>
import axios from "axios";
import { store } from '../store';

export default {
    name: "Add",
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

        createTask(e) {
            e.preventDefault();

            const params = {
                params: {
                    "newTask": this.store.newTask
                }
            };

            axios.get(this.store.apiURL + "api-create-task.php", params)
                .then(() => {
                    this.getAllData();
                });

            this.store.newTask = "";

        },

    },
    mounted() {
        this.getAllData();
    }
}

</script>

<template>

    <!-- add task -->
    <form @submit="createTask" id="add_form">
        <input type="text" name="newTask" id="newTask" v-model="store.newTask">
        <input type="submit" value="ADD">
    </form>

</template>

<style lang="scss" scoped>
.remove {
    cursor: pointer;
}
</style>
