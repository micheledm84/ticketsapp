<template>
    <div>
        <h5 class="font-weight-bold">{{ titleMessage }}</h5>
    </div>
</template>

<script>
    export default {
        props: {
            titleMessage: {
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