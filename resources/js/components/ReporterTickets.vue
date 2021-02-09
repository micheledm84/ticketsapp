<template>
    <div>
        <select-operations @pass-operations="onPassOperations"></select-operations>
        <hr>
        <assign-task v-if="operationNumber == 1" :users="users" :projects="projects" :devs="devs" :pms="pms" ></assign-task>
        <remove-task v-if="operationNumber == 2" :task_user="task_user" :devs="devs" :tasks="tasks"></remove-task>
        <show-tasks v-if="operationNumber == 3"></show-tasks>
        <show-projects v-if="operationNumber == 4"></show-projects>
        <show-pm v-if="operationNumber == 5"></show-pm>
    </div>
</template>

<script>
    import SelectOperations from "./SelectOperations.vue"
    import AssignTask from "./AssignTask.vue"
    import RemoveTask from "./RemoveTask.vue"
    import ShowTasks from "./ShowTasks.vue"
    import ShowProjects from "./ShowProjects.vue"
    import ShowPM from "./ShowPM.vue"

    export default {
        components: {
            'select-operations': SelectOperations,
            'show-pm': ShowPM,
            'show-projects': ShowProjects,
            'show-tasks': ShowTasks,
            'remove-task': RemoveTask,
            'assign-task': AssignTask
        },
        props: ['projects', 'users', 'tasks', 'task_user'],
        mounted() {
            console.log('Component mounted.');
            console.log(this.task_user);
            this.assignUsersByRole(this.users);
        },
        data: function() {
            return {
                operationNumber: 0,
                devs: [],
                pms: []

            }
            
        },
        methods: {
            onPassOperations(value) {
                this.operationNumber = value;
            },
            assignUsersByRole(users) {
                let users_len = this.users.length;
                let i = 0;
                for (i = 0; i < users_len; i++) {
                    if (users[i].role_id === 2) {
                        //alert('pm');
                        this.pms.push(users[i]);
                    } else if (users[i].role_id === 3) {
                        //alert('dev');
                        this.devs.push(users[i]);
                    } else {

                    }
                }
                //console.log(this.pms);
                //console.log(this.devs);
            }
        }
    }
</script>