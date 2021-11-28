<template>
    <div class="heroes">
        <iframe src="http://lienusowl.ru/t/h3/" frameborder="0"></iframe>
    </div>
</template>

<script>
export default {
    name: "heroes"
}
</script>

<style lang="scss" scoped>
    .heroes {
        position: relative;
        height: 100%;
        display: flex;

        iframe {
            width: 100%;
        }
    }

</style>
