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
                        <th>PM</th>
                        <th>Teams</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="project in projects" :key="project.id">
                        <td>{{ project.id }}</td>
                        <td>{{ project.name }}</td>
                        <td>{{ project.pm }}</td>
                        <td>{{ project.team_names }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
    import TitleForm from "./TitleForm.vue"
    import RedirectButton from "./RedirectButton.vue"

    export default {
        components: {
            'title-form': TitleForm,
            'redirect-button': RedirectButton
        },
        mounted() {
            console.log('Component mounted.');
        },
        props: {
            projects: {
                type: Array,
                required: true,
                default: () => [],
            }
        },
        computed: {
        },
        data: function() {
            return {
                titleForm: "Cross-team projects",
                redirectTextButton: "Home",
                redirectUrlPathButton: "/ticketsapp/public/"
            }
        },
        methods: {
        },

    }
</script>