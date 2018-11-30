<template>
    <nav class="main-nav">
        <div class="main-nav__top-menu">
            <a class="main-nav__logo" href="/"><img/></a>
            <button v-if="isMobile"
                class="main-nav__menu-hamburger btn"
                @click="hamClicked" type="button">
                &#9776;
            </button>
            <div v-if="!isMobile" class="main-nav__right-menu">
                <slot name="form"></slot>
                <slot name="button"></slot>
            </div>
        </div>
        <ul v-if="menuDisplay" class="main-nav__main-menu">
            <slot v-if="isMobile" name="form"></slot>
            <slot/>
            <slot v-if="isMobile" name="button"></slot>
        </ul>
    </nav>
</template>

<script>
    const desktop = 992;

    export default {
        name: 'main-nav',
        data: () => ({
            isMobile: window.innerWidth < desktop,
            menuDisplay: window.innerWidth >= desktop,
        }),
        mounted() {
            this.$nextTick(() => {
                window.addEventListener('resize', () => {
                    this.isMobile = window.innerWidth < desktop;
                    this.menuDisplay = window.innerWidth >= desktop;
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
