<template>
    <nav class="main-nav">
        <div class="main-nav__custom-container container">
            <div class="main-nav__top-menu justify-content-between row">
                <slot name="logo"/>
                <div class="main-nav__right-menu col-lg-6">
                    <div class="main-nav__non-desktop-display main-nav__ham-container">
                        <button class="main-nav__menu-hamburger"
                            @click="hamClicked" type="button">
                            <slot name="hamburger"/>
                        </button>
                    </div>
                    <div class="main-nav__slot-group">
                        <slot name="form"/>
                        <div class="main-nav__desktop-display">
                            <slot name="button"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div :class="['main-nav__main-menu', { 'main-nav__main-menu--active': menuDisplay }]">
            <div class="main-nav__mobile-display main-nav__main-items">
                <slot name="form"/>
            </div>
            <div class="main-nav__non-desktop-display">
                <slot name="pages-mobile"/>
            </div>
            <div class="main-nav__desktop-display">
                <slot name="pages-desktop"/>
            </div>
            <div class="main-nav__non-desktop-display main-nav__main-items">
                <slot name="button"/>
            </div>
        </div>
    </nav>
</template>

<script>
    const desktop = 992;

    export default {
        name: 'main-nav',
        data: () => ({
            menuDisplay: document.body.clientWidth >= desktop,
        }),
        methods: {
            hamClicked() {
                this.menuDisplay = !this.menuDisplay;
            },
        },
    };
</script>
