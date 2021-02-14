<template>
    <form method="POST" @submit.prevent="assignTask">
        <div class="form-group row">
            <div class="col-sm-10"><title-form v-model="titleForm" :titleMessage="titleForm"></title-form></div>
            <div class="col-sm-2"><redirect-button :redirectTextButton="redirectTextButton" :redirectUrlPathButton="redirectUrlPathButton"></redirect-button></div>
        </div>
        <hr>
        <div class="form-group">
            <label for="tasks">Tasks:</label>
            <select required v-model="user.tasks" class="form-control" id="tasks" @mouseover="displayResults(false, false)">
                <option v-for="task in tasks" :value="task.id" :key="task.id">
                    {{ task.name }} - {{ task.description }}
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
                type: Object,
                required: true,
                default: () => [],
            },
            tasks: {
                type: Array,
                required: true,
                default: () => [],
            }
        },
        computed: {
            titleForm: function () {
                return "Assign a task to " + this.dev.name;
            }
        },
        data: function() {
            return {
                user: {
                    tasks: "",
                    dev: ""
                },
                form: {
                    task_id: "",
                    user_id: ""
                },
                errors: {},
                displayErrors: false,
                displaySuccess: false,
                successMessage: "The task has been assigned.",
                redirectTextButton: "Home",
                redirectUrlPathButton: "/ticketsapp/public/"
            }
        },
        methods: {
            assignTask: function() {
                this.form.task_id = this.user.tasks;
                this.form.user_id = this.dev.id;
                axios.post('/ticketsapp/public/api/store_task_user', this.form)
                .then((response) => {
                    this.errors = response.data;
                    if (Object.keys(this.errors).length === 0) {
                        this.displayResults(true, false);
                        this.removeEntry();
                        this.user.tasks = 0;
                    } else {
                        this.displayResults(false, true);
                    }
                })
                .catch(error => {
                    this.displayResults(false, false);
                    console.log(error);
                });
            },
            displayResults(successShow, errorShow) {
                this.displayErrors = errorShow;
                this.displaySuccess = successShow;
            },
            removeEntry() {
                let i = 0;
                for (i = 0; i < this.tasks.length; i++) {
                    if (this.tasks[i].id === this.user.tasks) {
                        this.tasks.splice(i, 1);
                    }
                }
                
            }
        },

    }
</script>