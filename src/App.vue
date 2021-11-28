<template>
    <div id="app">
        <LiDesktop/>
        <LiStartMenu/>
    </div>
</template>

<script>
import LiDesktop from "@/components/Desktop/LiDesktop";
import LiStartMenu from "@/components/Window/StartMenu/LiStartMenu";


export default {
    name: 'App',
    components: {
        LiDesktop,
        LiStartMenu,
    },

}
</script>

<style>
#app {
    position: relative;
    width: 100%;
    height: calc(100vh - 30px);
    overflow: hidden;
    display: block;
}
</style>
