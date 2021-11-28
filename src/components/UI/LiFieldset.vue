<template>
    <div>
        <fieldset>
            <legend></legend>
        </fieldset>
    </div>
</template>

<script>
export default {
    name: "LiFieldset"
}
</script>

<style lang="scss" scoped>
    fieldset {
        border: none;
        box-shadow: var(--border-sunken-outer), var(--border-raised-inner);
        padding: calc(2 * var(--border-width) + var(--element-spacing));
        padding-block-start: var(--element-spacing);
        margin: 0;
    }
    legend {
        background: var(--surface);
    }
    .field-row {
        display: flex;
        align-items: center;
    }

    [class^="field-row"] + [class^="field-row"] {
        margin-top: var(--grouped-element-spacing);
    }

    .field-row > * + * {
        margin-left: var(--grouped-element-spacing);
    }

    .field-row-stacked {
        display: flex;
        flex-direction: column;
    }

    .field-row-stacked * + * {
        margin-top: var(--grouped-element-spacing);
    }
</style>
