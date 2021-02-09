<template>
    <form method="GET">
        <div class="d-flex justify-content-between">
            <div class="form-group">
                <label for="operation">Operation:</label>
                <select class="form-control" @change="onChange($event)" v-model="selectedOperation" id="operations">
                    <option value="0" key="0"></option>
                    <option value="1" key="1">assign task</option>
                    <option value="2" key="2">remove task</option>
                    <option value="3" key="3">show in progress tasks</option>
                    <option value="4" key="4">show cross-team projects</option>
                    <option value="5" key="5">show PM</option>
                </select>
            </div>
        </div>
        
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
                selectedOperation: 0
            }
        },
        methods: {
            onChange(event) {
                this.$emit('pass-operations', this.selectedOperation);
                //alert(this.selectedOperation);
            }
        }
    }
</script>