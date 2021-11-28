<template>
    <div>
        <ul class="tree-view">
            <li>
                <details open>
                    <summary>JavaScript</summary>
                    <ul>
                        <li>Avoid at all costs</li>
                        <li>
                            <details>
                                <summary>Unless</summary>
                                <ul>
                                    <li>Avoid</li>
                                    <li>
                                        <details>
                                            <summary>At</summary>
                                            <ul>
                                                <li>Avoid</li>
                                                <li>At</li>
                                                <li>All</li>
                                                <li>Cost</li>
                                            </ul>
                                        </details>
                                    </li>
                                    <li>All</li>
                                    <li>Cost</li>
                                </ul>
                            </details>
                        </li>
                    </ul>
                </details>
            </li>

        </ul>
    </div>
</template>

<script>
export default {
    name: "LiTreeView"
}
</script>

<style lang="scss" scoped>
    ul.tree-view {
        display: block;
        background: var(--button-highlight);
        box-shadow: var(--border-field);
        padding: 6px;
        margin: 0;
    }

    ul.tree-view li {
        list-style-type: none;
    }

    ul.tree-view a {
        text-decoration: none;
        color: #000;
    }

    ul.tree-view a:focus {
        background-color: var(--dialog-blue);
        color: var(--button-highlight);
    }

    ul.tree-view ul,
    ul.tree-view li {
        margin-top: 3px;
    }

    ul.tree-view ul {
        margin-left: 16px;
        padding-left: 16px;
        /* Goes down too far */
        border-left: 1px dotted #808080;
    }

    ul.tree-view ul > li {
        position: relative;
    }

    ul.tree-view ul > li::before {
        content: "";
        display: block;
        position: absolute;
        left: -16px;
        top: 6px;
        width: 12px;
        border-bottom: 1px dotted #808080;
    }

    /* Cover the bottom of the left dotted border */
    ul.tree-view ul > li:last-child::after {
        content: "";
        display: block;
        position: absolute;
        left: -20px;
        top: 7px;
        bottom: 0;
        width: 8px;
        background: var(--button-highlight);
    }

    ul.tree-view details {
        margin-top: 0;
    }

    ul.tree-view details[open] summary {
        margin-bottom: 0;
    }

    ul.tree-view ul details > summary:before {
        margin-left: -22px;
        position: relative;
        z-index: 1;
    }

    ul.tree-view details > summary:before {
        text-align: center;
        display: block;
        float: left;
        content: "+";
        border: 1px solid #808080;
        width: 8px;
        height: 9px;
        line-height: 9px;
        margin-right: 5px;
        padding-left: 1px;
        background-color: #fff;
    }

    ul.tree-view details[open] > summary:before {
        content: "-";
    }
</style>
