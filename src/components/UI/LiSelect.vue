<template>

</template>

<script>
export default {
    name: "LiSelect"
}
</script>

<style lang="scss" scoped>
    select {
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        position: relative;
        padding-right: 32px;
        background-image: url("../../assets/icon/button-down.svg");
        background-position: top 2px right 2px;
        background-repeat: no-repeat;
        border-radius: 0;
    }

    select:focus,
    input[type="text"]:focus,
    input[type="password"]:focus,
    input[type="email"]:focus,
    textarea:focus {
        outline: none;
    }
    input[type="text"],
    input[type="password"],
    input[type="email"],
    select,
    textarea {
        padding: 3px 4px;
        border: none;
        box-shadow: var(--border-field);
        background-color: var(--button-highlight);
        box-sizing: border-box;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        border-radius: 0;
    }

    input[type="text"],
    input[type="password"],
    input[type="email"],
    select {
        height: 21px;
    }

    input[type="text"],
    input[type="password"],
    input[type="email"] {
        /* For some reason descenders are getting cut off without this */
        line-height: 2;
    }

    select:focus {
        color: var(--button-highlight);
        background-color: var(--dialog-blue);
    }
    select:focus option {
        color: #000;
        background-color: #fff;
    }

    select:active {
        background-image: url("../../assets/icon/button-down-active.svg");
    }
</style>
