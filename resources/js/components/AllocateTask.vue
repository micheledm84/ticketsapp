<template>
    <form method="POST" @submit.prevent="assignTask">
        <div class="form-group">
            <label for="tasks">Tasks:</label>
            <select required v-model="user.tasks" class="form-control" id="tasks">
                <option v-for="task in tasks" :value="task.id" :key="task.id">
                    {{ task.name }} - {{ task.description }}
                </option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</template>

<script>
    export default {
        components: {
        },
        mounted() {
            console.log('Component mounted.');
            console.log(this.id);
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
                errors: {}
            }
        },
        methods: {
            assignTask: function() {
                this.form.task_id = this.user.tasks;
                this.form.user_id = this.dev.id;
                alert(this.form.task_id);
                alert(this.form.user_id);
                axios.post('/ticketsapp/public/api/store_task_user', this.form)
                .then((response) => {
                    console.log(response.data);
                    alert('ok');
                    this.errors = response.data;
                    alert(Object.keys(this.errors).length);
                    if (Object.keys(this.errors).length === 0) {
                        alert('viva');
                    } else {
                        alert('novivaaaa');
                        this.$emit('failure'); 
                        this.$emit('pass-errors', this.errors); 
                    }
                })
                .catch(error => {
                    alert('no ok');
                    console.log(error);
                });
            }
        }
    }
</script>