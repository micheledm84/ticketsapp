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
    /*import SelectOperations from "./SelectOperations.vue"
    import AssignTask from "./AssignTask.vue"
    import RemoveTask from "./RemoveTask.vue"
    import ShowTasks from "./ShowTasks.vue"
    import ShowProjects from "./ShowProjects.vue"
    import ShowPM from "./ShowPM.vue"*/

    export default {
        components: {
            'allocate-task': AllocateTask,
            'validated-errors': ValidatedErrors
            /*'select-operations': SelectOperations,
            'show-pm': ShowPM,
            'show-projects': ShowProjects,
            'show-tasks': ShowTasks,
            'remove-task': RemoveTask,
            'assign-task': AssignTask*/
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
        //props: ['projects', 'users', 'tasks', 'task_user'],
        mounted() {
            console.log('Component mounted.');
            /*console.log(this.task_user);
            this.assignUsersByRole(this.users);*/
        },
        data: function() {
            return {
                displayErrors: false,
                errorsTicket: []
                /*operationNumber: 0,
                devs: [],
                pms: []*/

            }
            
        },
        methods: {
            onPassErrors(value) {
                alert('error');
                console.log('errors passed');
                const values = Object.values(value);
                this.errorsTicket = values;
                console.log(this.errorsTicket);
                //alert(this.errorsMeeting[0]);
            }
            /*onPassOperations(value) {
                this.operationNumber = value;
            },
            assignUsersByRole(users) {
                let users_len = this.users.length;
                let i = 0;
                for (i = 0; i < users_len; i++) {
                    if (users[i].role_id === 2) {
                        this.pms.push(users[i]);
                    } else if (users[i].role_id === 3) {
                        this.devs.push(users[i]);
                    } else {

                    }
                }
            }*/
        }
    }
</script>