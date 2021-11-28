<template>
    <div class="status-bar">
        <p class="status-bar-field">{{ text }}</p>
    </div>
</template>

<script>
export default {
    name: "LiStatusBar",
    props: {
      text: {
          type: String,
          default: '',
      },
    },
    data() {
        return{

        }
    },
    mounted() {

    },
    methods: {

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
        padding: 7px 3px;
        align-items: center;
        display: flex;
        justify-content: start;
    }
}

</style>
