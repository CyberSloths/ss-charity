<template>
    <nav class="main-nav">
        <div class="container">
            <div class="main-nav__top-menu row justify-content-between">
                <a class="col-md-6 col-6" href="/">
                    <slot name="logo"/>
                </a>
                <div class="main-nav__right-menu col-md-6 col-6">
                    <button v-if="isTablet"
                        class="main-nav__menu-hamburger"
                        @click="hamClicked" type="button">
                        &#9776;
                    </button>
                    <div v-if="!isMobile" class="main-nav__slot-group">
                        <slot name="form"/>
                        <slot v-if="!isTablet" name="button"/>
                    </div>
                </div>
            </div>
        </div>
        <div v-if="menuDisplay" class="main-nav__main-menu">
            <div v-if="isMobile" class="main-nav__main-items">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <slot name="form"/>
                        </div>
                    </div>
                </div>
            </div>
            <slot v-if="isTablet" name="pages-mobile"/>
            <slot v-else-if="!isTablet" name="pages-desktop"/>
            <div v-if="isTablet" class="main-nav__main-items">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <slot name="button"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</template>

<script>
    const tablet = 768;
    const desktop = 992;

    export default {
        name: 'main-nav',
        data: () => ({
            isMobile: document.body.clientWidth < tablet,
            isTablet: document.body.clientWidth < desktop,
            menuDisplay: document.body.clientWidth >= desktop,
        }),
        mounted() {
            this.$nextTick(() => {
                window.addEventListener('resize', () => {
                    this.isMobile = document.body.clientWidth < tablet;
                    this.isTablet = document.body.clientWidth < desktop;
                    this.menuDisplay = document.body.clientWidth >= desktop;
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
