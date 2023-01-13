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

            const apiCreateURL = "http://localhost/php-todo-list-json/Backend/api.php";

            axios.get(apiCreateURL)
                .then(res => {
                    const data = res.data
                    this.store.tasksList = data;
                });
        },

        formSubmit(e) {
            e.preventDefault();

            const apiReadURL = "http://localhost/php-todo-list-json/Backend/api-create-task.php";

            const params = {
                params: {
                    "newTask": this.store.newTask
                }
            };

            axios.get(apiReadURL, params)
                .then(() => {
                    this.getAllData();
                });

        }
    },
    mounted() {
        this.getAllData();
    }
}

</script>

<template>
    <form @submit="formSubmit" id="add_form">
        <input type="text" name="newTask" id="newTask" v-model="store.newTask">
        <input type="submit" value="ADD">
    </form>
</template>

<style lang="scss" scoped>

</style>
