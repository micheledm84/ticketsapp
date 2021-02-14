<template>
    <div class="container">
        <div>
            <title-form v-model="titleForm" :titleMessage="titleForm"></title-form>
        </div>
        <hr>
        <div>
            <label for="devs" class="mt-3">Select a dev:</label>
        </div>
        <div>
            <select required v-model="user.devs" class="form-control" id="devs" @change="onChangeDev($event)">
                <option v-for="dev in devs" :value="dev.id" :key="dev.name">
                    {{ dev.name }}
                </option>
            </select>
        </div>
        <hr>
        <div>
            <label for="devs">Assign a task to {{ selectedDev }}:</label>
        </div>
        <div>
            <button type="button" class="btn btn-primary" @click="assignTask()">Assign Task</button>
        </div>
        <div>
            <label for="devs"  class="mt-3">Remove a task from {{ selectedDev }}:</label>
        </div>
        <div>
            <button type="button" class="btn btn-primary" @click="removeTask()">Remove Task</button>
        </div>
        <div>
            <label for="devs"  class="mt-3">Show in progress task assigned to {{ selectedDev }}:</label>
        </div>
        <div>
            <button type="button" class="btn btn-primary" @click="showTasksInProgress()">Show In Progress Tasks</button>
        </div>
        <div>
            <label for="devs" class="mt-3">Show all cross-team projects (no need to select a dev):</label>
        </div>
        <div>
            <button type="button" class="btn btn-primary"  @click="showCrossTeamProjects()">Show Cross-Team Projects</button>
        </div>
        <div>
            <label for="devs" class="mt-3">Show the PM of {{ selectedDev }}:</label>
        </div>
        <div>
            <button type="button" class="btn btn-primary"  @click="showPM()">Show PM</button>
        </div>
    </div>
</template>

<script>
    import TitleForm from "./TitleForm.vue"

    export default {

        components: {
            'title-form': TitleForm

        },
        mounted() {
            console.log('Component mounted.');
        },
        props: {
            devs: {
                type: Array,
                required: true,
                default: () => [],
            }
        },
        computed: {
            
        },
        data: function() {
            return {
                titleForm: "Welcome to Ticketsapp",
                selectedDev: "the selected dev",
                user: {
                    devs: "",
                }
            }
        },
        methods: {
            showCrossTeamProjects() {
                window.location.href = "crossteam";
            },
            assignTask() {
                if(this.user.devs !== "") {
                    window.location.href = "allocate/" + this.user.devs;
                } else {
                    alert("Select a dev");
                }
            },
            showTasksInProgress() {
                if(this.user.devs !== "") {
                    window.location.href = "inprogress/" + this.user.devs;
                } else {
                    alert("Select a dev");
                }
            },
            showPM() {
                if(this.user.devs !== "") {
                    window.location.href = "pm/" + this.user.devs;
                } else {
                    alert("Select a dev");
                }
            },
            removeTask() {
                if(this.user.devs !== "") {
                    window.location.href = "remove/" + this.user.devs;
                } else {
                    alert("Select a dev");
                }
            },
            onChangeDev(e) {
                const selectedDevId = e.target.value;
                const name = this.devs.filter((dev) => dev.id == selectedDevId)[0].name;
                this.selectedDev = name;
            }
        }
    }
</script>