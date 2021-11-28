<template>
    <div>
        <input type="text">
    </div>
</template>

<script>
export default {
  name: "LiInput"
}
</script>

<style lang="scss" scoped>
    input[type="radio"],
    input[type="checkbox"] {
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        margin: 0;
        background: 0;
        position: fixed;
        opacity: 0;
        border: none;
    }

    input[type="radio"] + label,
    input[type="checkbox"] + label {
        line-height: 13px;
    }

    input[type="radio"] + label {
        position: relative;
        margin-left: var(--radio-total-width);
    }

    input[type="radio"] + label::before {
        content: "";
        position: absolute;
        top: 0;
        left: calc(-1 * (var(--radio-total-width-precalc)));
        display: inline-block;
        width: var(--radio-width);
        height: var(--radio-width);
        margin-right: var(--radio-label-spacing);
        background: url("../../assets/icon/radio-border.svg");
    }

    input[type="radio"]:active + label::before {
        background: url("../../assets/icon/radio-border-disabled.svg");
    }

    input[type="radio"]:checked + label::after {
        content: "";
        display: block;
        width: var(--radio-dot-width);
        height: var(--radio-dot-width);
        top: var(--radio-dot-top);
        left: var(--radio-dot-left);
        position: absolute;
        background: url("../../assets/icon/radio-dot.svg");
    }

    input[type="radio"]:focus + label,
    input[type="checkbox"]:focus + label {
        outline: 1px dotted #000000;
    }

    input[type="radio"][disabled] + label::before {
        background: url("../../assets/icon/radio-border-disabled.svg");
    }

    input[type="radio"][disabled]:checked + label::after {
        background: url("../../assets/icon/radio-dot-disabled.svg");
    }

    input[type="checkbox"] + label {
        position: relative;
        margin-left: var(--checkbox-total-width);
    }

    input[type="checkbox"] + label::before {
        content: "";
        position: absolute;
        left: calc(-1 * (var(--checkbox-total-width-precalc)));
        display: inline-block;
        width: var(--checkbox-width);
        height: var(--checkbox-width);
        background: var(--button-highlight);
        box-shadow: var(--border-field);
        margin-right: var(--radio-label-spacing);
    }

    input[type="checkbox"]:active + label::before {
        background: var(--surface);
    }

    input[type="checkbox"]:checked + label::after {
        content: "";
        display: block;
        width: var(--checkmark-width);
        height: var(--checkmark-width);
        position: absolute;
        top: var(--checkmark-top);
        left: calc(
            -1 * (var(--checkbox-total-width-precalc)) + var(--checkmark-left)
        );
        background: url("../../assets/icon/checkmark.svg");
    }

    input[type="checkbox"][disabled] + label::before {
        background: var(--surface);
    }

    input[type="checkbox"][disabled]:checked + label::after {
        background: url("../../assets/icon/checkmark-disabled.svg");
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
    select:focus,
    input[type="text"]:focus,
    input[type="password"]:focus,
    input[type="email"]:focus,
    textarea:focus {
        outline: none;
    }

    input[type=range] {
        -webkit-appearance: none;
        width: 100%;
        background: transparent;
    }

    input[type=range]:focus {
        outline: none;
    }

    input[type=range]::-webkit-slider-thumb {
        -webkit-appearance: none;
        height: 21px;
        width: 11px;
        background: url("../../assets/icon/indicator-horizontal.svg");
        transform: translateY(-8px);
    }

    input[type=range].has-box-indicator::-webkit-slider-thumb {
        background: url("../../assets/icon/indicator-rectangle-horizontal.svg");
        transform: translateY(-10px);
    }

    input[type=range]::-moz-range-thumb {
        height: 21px;
        width: 11px;
        border: 0;
        border-radius: 0;
        background: url("../../assets/icon/indicator-horizontal.svg");
        transform: translateY(2px);
    }

    input[type=range].has-box-indicator::-moz-range-thumb {
        background: url("../../assets/icon/indicator-rectangle-horizontal.svg");
        transform: translateY(0px);
    }

    input[type=range]::-webkit-slider-runnable-track {
        width: 100%;
        height: 2px;
        box-sizing: border-box;
        background: black;
        border-right: 1px solid grey;
        border-bottom: 1px solid grey;
        box-shadow:
            1px 0 0 white,
            1px 1px 0 white,
            0 1px 0 white,
            -1px 0 0 darkgrey,
            -1px -1px 0 darkgrey,
            0 -1px 0 darkgrey,
            -1px 1px 0 white,
            1px -1px darkgrey;
    }

    input[type=range]::-moz-range-track {
        width: 100%;
        height: 2px;
        box-sizing: border-box;
        background: black;
        border-right: 1px solid grey;
        border-bottom: 1px solid grey;
        box-shadow:
            1px 0 0 white,
            1px 1px 0 white,
            0 1px 0 white,
            -1px 0 0 darkgrey,
            -1px -1px 0 darkgrey,
            0 -1px 0 darkgrey,
            -1px 1px 0 white,
            1px -1px darkgrey;
    }
</style>
