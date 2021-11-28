<template>
    <div class="desktop-icon">
        <div class="desktop-icon__icon">
            <img :src="src" alt="">
        </div>
        <div class="desktop-icon__title">
            <p>{{ titleIcon }}</p>
        </div>
    </div>
</template>

<script>
export default {
    name: 'LiDesktopIcon',
    props: {
        titleIcon: {
          type: String,
        },
        src: {
            type: String,
        },
    },
    mounted() {
        this.title = this.$attrs.windowTitle;
    },
};
</script>

<style lang="scss" scoped>
    .desktop-icon {
        display: inline-flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 75px;
        height: 75px;
        margin: 0 0 15px 0;
        position: relative;
        z-index: 1;

        &__icon {

        }

        &__title {
            text-align: center;
            p {
                font-size: 12px;
                color: #fff;
                text-shadow: 0 0 black;
                padding: 0;
                margin: 5px 0 0 0;
            }
        }
    }
</style>
