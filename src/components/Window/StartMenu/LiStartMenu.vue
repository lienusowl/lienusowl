<template>
    <div class="start-menu">
        <LiButton
            class="start-menu__button"
            titleButton='Пуск'
            :startMenu='true'
        />
        <LiTimeBar class="current-time"/>
    </div>
</template>

<script>
import LiButton from '@/components/UI/LiButton'
import LiTimeBar from "@/components/Window/StartMenu/LiTimeBar";

export default {
    name: "LiStartMenu",
    components: {
        LiButton,
        LiTimeBar,
    },
    data() {
        return {

        }
    },
    created() {

    },
    methods: {

    },
}
</script>

<style lang="scss" scoped>
.start-menu {
    position: fixed;
    display: flex;
    justify-content: space-between;
    width: 100%;
    height: 25px;
    left: 0;
    right: 0;
    bottom: -1px;
    box-shadow: rgb(10, 10, 10) -1px -1px inset,
    rgb(223, 223, 223) 1px 1px inset,
    transparent 0 0 inset,
    transparent 0 0 inset;
    background: silver;
    padding: 3px;

    &__button {
        position: relative;
        height: 25px;
        font-weight: 700;
    }

    .current-time{
        cursor: default;
        -webkit-touch-callout: none; /* iOS Safari */
        -webkit-user-select: none;   /* Chrome/Safari/Opera */
        -moz-user-select: none;      /* Firefox */
        -ms-user-select: none;       /* Internet Explorer/Edge */
        user-select: none;           /* Non-prefixed version, currently not supported by any browser */
        min-width: 65px;
        margin: 0 5px 0 0;
    }
}
</style>
