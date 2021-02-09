<template>
    <form method="POST">
        <h3>Remove task from developer</h3>
        <div class="form-group">
            <label for="task-user">Task:</label>
            <select required v-model="user.task_user" class="form-control" id="task-user">
                <option v-for="task in task_user" :value="task.id" :key="task.id">
                    {{ task.task_name }} - {{ task.user_name }}
                </option>
            </select>
        </div>
        <!--<div class="form-group">
            <label for="devs-remove">Developer:</label>
            <select required v-model="user.devs" class="form-control" id="devs-remove">
                <option v-for="dev in devs" :value="dev.id" :key="dev.id">
                    {{ dev.name }}
                </option>
            </select>
        </div>-->
    </form>
</template>

<script>
    export default {
        components: {
        },
        mounted() {
            console.log('Component mounted.');
        },
        computed:{
        },
        props: {
            tasks: {
                type: Array,
                required: true,
                default: () => [],
            },
            task_user: {
                type: Array,
                required: true,
                default: () => [],
            },
            devs: {
                type: Array,
                required: true,
                default: () => [],
            }
        },
        data: function() {
            return {
                user: {
                    tasks: "",
                    task_user: "",
                    devs: ""
                }
                //selectOperations: 0
            }
        },
        methods: {
            /*onChange(event) {
                this.$emit('pass-operations', this.selectOperations);
            }*/
        }
    }
</script>