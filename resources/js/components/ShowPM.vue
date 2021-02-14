<template>
    <div>
        <div class="row">
            <div class="col-sm-10"><title-form :titleMessage="titleForm"></title-form></div>
            <div class="col-sm-2"><redirect-button :redirectTextButton="redirectTextButton" :redirectUrlPathButton="redirectUrlPathButton"></redirect-button></div>
        </div>
        <hr>
        <div class="mt-5">
            <span class="font-weight-bold">PM: </span><span>{{ user.pm_name }}</span>
        </div>
    </div>
</template>

<script>
    export default {
        components: {
        },
        mounted() {
            console.log('Component mounted.');
        },
        props: {
            user: {
                type: Object,
                required: true,
                default: () => {}
            }
        },
        computed:{
            titleForm: function () {
                return this.user.name;
            }
        },
        data: function() {
            return {
                redirectTextButton: "Home",
                redirectUrlPathButton: "/ticketsapp/public/"
            }
        },
        methods: {
        }
    }
</script>