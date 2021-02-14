<template>
    <div>
        <div class="row">
            <div class="col-sm-10"><title-form v-model="titleForm" :titleMessage="titleForm"></title-form></div>
            <div class="col-sm-2"><redirect-button :redirectTextButton="redirectTextButton" :redirectUrlPathButton="redirectUrlPathButton"></redirect-button></div>
        </div>
        <hr>
        <div class="table-responsive">
            <table class="table mt-5 table-bordered table-hover">
                <thead>
                    <tr class="table-warning">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Project</th>
                        <th>PM</th>
                        <th>Start Date</th>
                        <th>Deadline</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="task in tasks" :key="task.id">
                        <td>{{ task.id }}</td>
                        <td>{{ task.name }}</td>
                        <td>{{ task.description }}</td>
                        <td>{{ task.status }}</td>
                        <td>{{ task.project }}</td>
                        <td>{{ task.user }}</td>
                        <td>{{ task.created_at }}</td>
                        <td>{{ task.deadline }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
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
            tasks: {
                type: Array,
                required: true,
                default: () => [],
            }
        },
        computed: {
            titleForm: function () {
                return "In progress tasks assigned to " + this.dev;
            }
        },
        data: function() {
            return {
                redirectTextButton: "Home",
                redirectUrlPathButton: "/ticketsapp/public/"
            }
        },
        methods: {
        },

    }
</script>