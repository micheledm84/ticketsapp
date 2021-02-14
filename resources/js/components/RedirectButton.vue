<template>
    <div>
        <button type="button" class="btn btn-primary" @click="redirectToHome()">{{ redirectTextButton }}</button>
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
            redirectTextButton: {
                type: String,
                required: true,
                default: () => "",
            },
            redirectUrlPathButton: {
                type: String,
                required: true,
                default: () => "",
            }
        },
        computed: {
        },
        data: function() {
            return {
            }
        },
        methods: {
            redirectToHome() {
                window.location.href = this.redirectUrlPathButton;
            }
        },

    }
</script>