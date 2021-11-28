<template>
    <div class="status-bar">
        <p class="status-bar-field">{{ currentTime }}</p>
    </div>
</template>

<script>
export default {
    name: "LiStatusBar",
    data() {
        return{
            currentTime: {
                type: String,
                default: '00:00:00'
            },
        }
    },
    created() {
        setInterval(this.getNow, 1000);
    },
    methods: {
        getNow: function() {
            const today = new Date();

            this.currentTime = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
        },

    },
}
</script>

<style lang="scss" scoped>
.status-bar {
    display: flex;
    gap: 1px;
    margin: 0 1px;

    .status-bar-field {
        box-shadow: rgb(223, 223, 223) -1px -1px inset, grey 1px 1px inset;
        flex-grow: 1;
        margin: 0;
        padding: 2px 3px;
        align-items: center;
        display: flex;
        justify-content: end;
        min-width: 80px;
    }
}

</style>
