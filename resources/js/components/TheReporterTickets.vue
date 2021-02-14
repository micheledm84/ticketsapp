<template>
    <div>
        <allocate-task :dev="dev" :tasks="tasks" @pass-errors="onPassErrors" @failure="displayErrors=true" @success="displaySuccess=true"></allocate-task>
        <hr>
        <validated-errors :errorsForm="errorsTicket" v-if="displayErrors===true"></validated-errors>
        <!--<select-operations @pass-operations="onPassOperations"></select-operations>
        <hr>
        <assign-task v-if="operationNumber == 1" :users="users" :projects="projects" :devs="devs" :pms="pms" ></assign-task>
        <remove-task v-if="operationNumber == 2" :task_user="task_user" :devs="devs" :tasks="tasks"></remove-task>
        <show-tasks v-if="operationNumber == 3"></show-tasks>
        <show-projects v-if="operationNumber == 4"></show-projects>
        <show-pm v-if="operationNumber == 5"></show-pm>-->
    </div>
</template>

<script>
    import AllocateTask from "./AllocateTask.vue"
    import ValidatedErrors from "./ValidatedErrors.vue"

    export default {
        components: {
            'allocate-task': AllocateTask,
            'validated-errors': ValidatedErrors
        },
        props: {
            dev: {
                type: Array,
                required: true,
                default: () => [],
            },
            tasks: {
                type: Array,
                required: true,
                default: () => [],
            }
        },
        mounted() {
            console.log('Component mounted.');
        },
        data: function() {
            return {
                displayErrors: false,
                errorsTicket: []
            }
            
        },
        methods: {
            onPassErrors(value) {
                alert('error');
                console.log('errors passed');
                const values = Object.values(value);
                this.errorsTicket = values;
                console.log(this.errorsTicket);
            }
        }
    }
</script>