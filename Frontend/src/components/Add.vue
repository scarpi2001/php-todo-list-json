<script>
import axios from "axios";

export default {
    name: "Add",
    mounted() {
        const apiURL = "http://localhost/php-todo-list-json/Backend/api.php";

        const params = {
            params: {
                "task": "task2"
            }
        };

        axios.get(apiURL, params)
            .then(res => {
                const data = res.data
                console.log(data);
            });
    }
}

</script>

<template>
    <form @submit="formSubmit" id="add_form">
        <input type="text" name="add" id="add">
        <input type="submit" value="ADD">
    </form>
</template>

<style lang="scss" scoped>

</style>
