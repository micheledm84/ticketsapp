<template>
    <div>
        <div class="alert alert-success">{{ success_message }}</div>
    </div>
</template>

<script>
    export default {
        props: {
            success_message: {
                type: String,
                required: true,
                default: () => '',
            }
        },
        mounted() {
            console.log('Component mounted.');
        },
        data: function() {
            return {
            }
        },
        methods: {
        }
    }
</script>