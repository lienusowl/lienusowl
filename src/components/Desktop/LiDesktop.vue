<template>
    <div class="desktop">
        <div
            class="window-space"
            v-for="(window, key) in windows"
            v-bind:key="key"
        >
            <LiDesktopIcon
                v-on:dblclick.native="windowOpen(key)"
                :titleIcon="window.titleProgram"
                :src="window.src"
            />

            <div class="window-space__inner">
                <LiWindow
                    v-if="window.opened"
                    :currentPage="window.currentPage"
                    :windowTitle="window.titleProgram"
                    :width="window.options.width"
                    :height="window.options.height"
                    :left="window.options.left"
                    :top="window.options.top"
                    @windowClose="windowClose($event, key)"
                />
            </div>
        </div>


    </div>
</template>

<script>
import LiDesktopIcon from './LiDesktopIcon';
import LiWindow from '../UI/LiWindow'


export default {
    name: "LiDesktop",
    data() {
        return {
            windows: {
                cv: {
                    titleProgram: 'Резюме',
                    src: '/assets/img/desktop/message_file-0.png',
                    opened: false,
                    currentPage: 'cv',
                    options: {
                        width: 800,
                        height: 640,
                        positionZ: 1,
                        left: 50,
                        top: 50,
                    },
                },
                heroes: {
                    titleProgram: 'h3 text generator',
                    src: '/assets/img/desktop/heroes.png',
                    opened: false,
                    currentPage: 'heroes',
                    options: {
                        width: 885,
                        height: 660,
                        positionZ: 2,
                        left: 30,
                        top: 30,
                    },
                },
                // jsLessons: {
                //     titleProgram: 'Справочник по js',
                //     src: '/assets/img/desktop/js.png',
                //     opened: false,
                //     currentPage: 'jsLessons',
                //     options: {
                //         width: 800,
                //         height: 640,
                //         positionZ: 1,
                //         left: 50,
                //         top: 50,
                //     },
                // },
            }
        }
    },
    components: {
        LiWindow,
        LiDesktopIcon,
    },
    methods: {
        windowOpen(key) {
            const currentWindow = this.windows[key];

            currentWindow.opened = true;
        },

        windowClose(event, key) {

            const currentWindow = this.windows[key];

            currentWindow.opened = event;
        },

    },
}
</script>

<style lang="scss">

.desktop {
    position: relative;
    display: block;
    width: 100%;
    height: calc(100vh - 40px);
    background: #22222220;
    padding: 10px;



    .window-space {
        position: absolute;
        display: contents;
        width: 100%;
        height: calc(100vh - 35px);
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        padding: 0;
        margin: 0;

        &__inner {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            height: calc(100vh - 35px);
        }
    }
}
</style>
