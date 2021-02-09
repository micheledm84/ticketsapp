<template>
    <form method="POST">
        <div class="form-group">
            <label for="pm">PM:</label>
            <select required v-model="user.pms" class="form-control" id="pm">
                <option v-for="pm in pms" :value="pm.id" :key="pm.id">
                    {{ pm.name }}
                </option>
            </select>
        </div>
        <div class="form-group">
            <label for="devs">Developer:</label>
            <select required v-model="user.devs" multiple class="form-control" id="devs">
                <option v-for="dev in devs" :value="dev.id" :key="dev.id">
                    {{ dev.name }}
                </option>
            </select>
        </div>
        <div class="form-group">
            <label for="name">Name:</label>
            <input required type="text" class="form-control" id="name" maxlength="50">
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea required class="form-control" id="description"></textarea>
        </div>
        <div class="form-group">
            <label for="projects">Project:</label>
            <select required v-model="user.projects" class="form-control" id="projects">
                <option v-for="project in projects" :value="project.id" :key="project.id">
                    {{ project.name }}
                </option>
            </select>
        </div>
        <div class="form-group">
            <label for="deadline">Deadline:</label>
            <input required type="date" class="form-control" id="deadline">
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
        },
        props: {
            projects: {
                type: Array,
                required: true,
                default: () => [],
            },
            pms: {
                type: Array,
                required: true,
                default: () => [],
            },
            devs: {
                type: Array,
                required: true,
                default: () => [],
            },
            users: {
                type: Array,
                required: true,
                default: () => [],
            }
        },
        data: function() {
            return {
                user: {
                    pms: "",
                    devs: "",
                    projects: ""
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