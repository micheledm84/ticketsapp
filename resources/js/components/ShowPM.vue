<template>
    <form method="GET">
        <h3>Show PM</h3>
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
        data: function() {
            return {
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