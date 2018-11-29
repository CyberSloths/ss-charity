<template>
    <nav class="custom-nav">
        <div class="top-menu">
            <a href="/"><img id="logo"/></a>
            <button v-if="isMobile"
                id="hamburger" class="btn"
                @click="hamClicked" type="button">
                &#9776;
            </button>
            <div v-if="!isMobile" class="right-menu">
                <slot name="form"></slot>
                <slot name="button"></slot>
            </div>
        </div>
        <ul v-if="menuDisplay" class="custom-menu">
            <slot v-if="isMobile" name="form"></slot>
            <slot/>
            <slot v-if="isMobile" name="button"></slot>
        </ul>
    </nav>
</template>

<script>
    export default {
        name: 'custom-nav',
        data: () => ({
            isMobile: window.innerWidth < 1080,
            menuDisplay: window.innerWidth >= 1080,
        }),
        mounted() {
            this.$nextTick(() => {
                window.addEventListener('resize', () => {
                    this.isMobile = window.innerWidth < 1080;
                    this.menuDisplay = window.innerWidth >= 1080;
                });
            });
        },
        methods: {
            hamClicked() {
                this.menuDisplay = !this.menuDisplay;
            },
        },
    };
</script>
