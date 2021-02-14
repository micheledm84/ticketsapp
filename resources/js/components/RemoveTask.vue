<template>
    <form method="DELETE" @submit.prevent="removeTask">
        <div class="form-group row">
            <div class="col-sm-10"><title-form v-model="titleForm" :titleMessage="titleForm"></title-form></div>
            <div class="col-sm-2"><redirect-button :redirectTextButton="redirectTextButton" :redirectUrlPathButton="redirectUrlPathButton"></redirect-button></div>
        </div>
        <hr>
        <div class="form-group">
            <label for="tasks">Tasks:</label>
            <select required v-model="user.tasks" class="form-control" id="tasks" @mouseover="displayResults(false, false)">
                <option v-for="task in tasks_user" :value="task.id" :key="task.id">
                    {{ task.task_name }} - {{ task.task_description }}
                </option>
            </select>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        <hr>
        <div class="form-group">
            <validated-errors :errorsForm="errors" v-if="displayErrors===true"></validated-errors>
            <success-alert :success_message="successMessage" v-if="displaySuccess===true"></success-alert>
        </div>
    </form>
</template>

<script>
    import ValidatedErrors from "./ValidatedErrors.vue"
    import SuccessAlert from "./SuccessAlert.vue"
    import TitleForm from "./TitleForm.vue"

    export default {
        components: {
            'validated-errors': ValidatedErrors,
            'success-alert': SuccessAlert,
            'title-form': TitleForm
        },
        mounted() {
            console.log('Component mounted.');
        },
        props: {
            dev: {
                type: String,
                required: true,
                default: () => '',
            },
            tasks_user: {
                type: Array,
                required: true,
                default: () => [],
            }
        },
        computed: {
            titleForm: function () {
                return "Remove a task from " + this.dev;
            }
        },
        data: function() {
            return {
                user: {
                    tasks: ""
                },
                errors: {},                
                displayErrors: false,
                displaySuccess: false,
                successMessage: "The task has been removed.",
                redirectTextButton: "Home",
                redirectUrlPathButton: "/ticketsapp/public/"
            }
        },
        methods: {
            removeTask: function() {
                axios.delete('/ticketsapp/public/api/remove_task_user?id=' + this.user.tasks)
                .then((response) => {
                    if (typeof response.data === "string") {
                        this.errors = {};
                        this.displayResults(true, false);
                        this.removeEntry();
                        this.user.tasks = 0;
                        
                    } else {
                        this.errors = response.data;
                        this.displayErrors = true;
                        this.displayResults(false, true)
                    }
                })
                .catch(error => {
                    this.displayResults(false, false)
                    console.log(error);
                });
            },
            displayResults(successShow, errorShow) {
                this.displayErrors = errorShow;
                this.displaySuccess = successShow;
            },
            removeEntry() {
                let i = 0;
                for (i = 0; i < this.tasks_user.length; i++) {
                    if (this.tasks_user[i].id === this.user.tasks) {
                        this.tasks_user.splice(i, 1);
                    }
                }
                
            }
        },

    }
</script>