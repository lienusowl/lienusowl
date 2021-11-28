<template>
    <vresizable
        class="window resizable"
        ref="resizableComponent"
        :dragSelector="dragSelector"
        :active="handlers"
        :fit-parent="fit"
        :max-width="maxW | checkEmpty"
        :max-height="maxH | checkEmpty"
        :min-width="minW | checkEmpty"
        :min-height="minH | checkEmpty"
        :width="width"
        :height="height"
        :left="left"
        :top="top"
        @mount="eHandler"
        @resize:move="eHandler"
        @resize:start="eHandler"
        @resize:end="eHandler"
        @drag:move="eHandler"
        @drag:start="eHandler"
        @drag:end="eHandler"
    >
        <div class="title-bar drag-container-1">
            <div class="title-bar-text">{{ window.title }}</div>
            <div class="title-bar-controls">
                <LiButton
                    v-if="buttons.minButton"
                    @click.native.prevent="windowMinimize"
                    aria-label="Minimize"
                />
                <LiButton
                    v-if="buttons.maxButton"
                    @click.native.prevent="windowFullSize"
                    aria-label="Maximize"
                />
                <LiButton
                    v-if="buttons.closeButton"
                    @click.native.prevent="windowClose"
                    aria-label="Close"
                />
                <LiButton
                    v-if="buttons.helpButton"
                    @click.native.prevent="windowHelp"
                    aria-label="Help"
                />
            </div>
        </div>
        <div class="window-body">
            <cv v-if="currentPage === 'cv'" />
            <jsLessons v-if="currentPage === 'jsLessons'" />
            <heroes v-if="currentPage === 'heroes'" />

            <div v-if="bar" class="window-footer">
                <li-status-bar :text="statusbarText" />
            </div>
        </div>
    </vresizable>
</template>

<script>
import LiButton from "@/components/UI/LiButton";
import LiStatusBar from "@/components/UI/LiStatusBar";
import vresizable from "vue-resizable";

// windows
import cv from "@/components/windows/cv";
import jsLessons from "@/components/windows/jsLessons";
import heroes from "@/components/windows/heroes";

export default {
    name: "LiWindow",
    components: {
        LiStatusBar,
        LiButton,
        cv,
        jsLessons,
        vresizable,
        heroes,
    },
    data() {
        return {
            buttons: {
                closeButton: true,
                minButton: false,
                maxButton: false,
                helpButton: false,
            },
            window: {
                title: "",
            },
            bar: false,
            statusbarText: "тестовый текст",
            handlers: ["r", "rb", "b", "lb", "l", "lt", "t", "rt"],
            maxW: 1250,
            maxH: 1250,
            fit: true,
            event: "",
            dragSelector: ".drag-container-1",
        };
    },
    computed: {},
    props: {
        currentPage: {
            type: String,
        },
        width: {
            type: Number,
            default: 100,
        },
        height: {
            type: Number,
            default: 100,
        },
        minW: {
            type: Number,
            default: 300,
        },
        minH: {
            type: Number,
            default: 200,
        },
        left: {
            type: Number,
            default: 0,
        },
        top: {
            type: Number,
            default: 0,
        },
    },
    methods: {
        windowClose() {
            this.$emit("windowClose", false);
        },
        windowFullSize() {
            this.$emit("windowFullSize", false);
        },
        windowMinimize() {
            this.$emit("windowMinimize", false);
        },
        windowHelp() {
            this.$emit("windowHelp", true);
        },

        eHandler(data) {
            this.event = data.eventName;
        },

        checkEmpty(value) {
            return typeof value !== "number" ? 0 : value;
        },
    },
    filters: {
        checkEmpty(value) {
            return typeof value !== "number" ? 0 : value;
        },
    },
    mounted() {
        this.window.title = this.$attrs.windowTitle;
    },
};
</script>

<style lang="scss" scoped>
.window {
    box-shadow: var(--border-window-outer), var(--border-window-inner);
    background: var(--surface);
    padding: 3px;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    position: absolute;
    z-index: 10;
}

.title-bar {
    background: linear-gradient(
        90deg,
        var(--dialog-blue),
        var(--dialog-blue-light)
    );
    padding: 3px 2px 3px 3px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.title-bar-text {
    font-weight: bold;
    color: white;
    letter-spacing: 0;
    margin-right: 24px;
    cursor: default;
    -webkit-touch-callout: none; /* iOS Safari */
    -webkit-user-select: none; /* Chrome/Safari/Opera */
    -moz-user-select: none; /* Firefox */
    -ms-user-select: none; /* Internet Explorer/Edge */
    user-select: none; /* Non-prefixed version, currently not supported by any browser */
}

.title-bar-controls {
    display: flex;
}

.title-bar-controls button {
    padding: 0;
    display: block;
    min-width: 16px;
    min-height: 14px;
}

.title-bar-controls button:focus {
    outline: none;
}

.title-bar-controls button[aria-label="Minimize"] {
    background-image: url("../../assets/icon/minimize.svg");
    background-repeat: no-repeat;
    background-position: bottom 3px left 4px;
}

.title-bar-controls button[aria-label="Maximize"] {
    background-image: url("../../assets/icon/maximize.svg");
    background-repeat: no-repeat;
    background-position: top 2px left 3px;
}

.title-bar-controls button[aria-label="Help"] {
    background-image: url("../../assets/icon/help.svg");
    background-repeat: no-repeat;
    background-position: top 2px left 5px;
}

.title-bar-controls button[aria-label="Close"] {
    margin-left: 2px;
    background-image: url("../../assets/icon/close.svg");
    background-repeat: no-repeat;
    background-position: top 3px left 4px;
}

.window-body {
    margin: var(--element-spacing);
    position: relative;
    height: calc(100% - 25px);

    .window-footer {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        width: 100%;
    }
}
</style>
