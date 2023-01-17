import { reactive } from 'vue';

export const store = reactive({
    tasksList: [],
    newTask: "",
    apiURL: "http://localhost/php-todo-list-json/Backend/",
})