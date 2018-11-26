<template>
  <transition leave-active-class="flyout-panel--leave" duration="300">
    <div :class="`flyout-panel ${panelDirection}`"
      v-show="open"
      @keydown.esc="open ? $emit('close') : false"
      role="dialog"
    >

      <transition
        enter-active-class="flyout-panel__background--enter"
        duration="300"
      >
        <div class="flyout-panel__background"
          v-if="open"
          role="presentation"
          @click="$emit('close')">
        </div>
      </transition>

      <transition
        enter-active-class="flyout-panel__content--enter"
        leave-active-class="flyout-panel__content--leave"
        duration="300"
      >
        <div class="flyout-panel__content" v-if="open">
          <slot></slot>
        </div>
      </transition>
    </div>
  </transition>
</template>

<script>
  export default {
    name: 'flyout-panel',
    props: {
      open: {
        type: Boolean,
        default: false,
      },
      slideFrom: {
        type: String,
        validator(val) {
          return ['right', 'left'].indexOf(val) !== -1;
        },
        default: 'right',
      },
    },
    computed: {
      panelDirection() {
        let value = '';

        if (this.slideFrom === 'right') {
          value = 'flyout-panel--right';
        } else if (this.slideFrom === 'left') {
          value = 'flyout-panel--left';
        }

        return value;
      },
    },
  };
</script>

<style>
  .flyout-panel {
    align-items: flex-end;
    display: flex;
    left: 0;
    height: 100%;
    max-width: 100%;
    overflow: hidden;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 10;
  }

  .flyout-panel__background {
    background: #000;
    height: 100%;
    opacity: 0.3;
    position: absolute;
    top: 0;
    transition: opacity 300ms ease-in-out;
    width: 100%;
    z-index: 10;
  }

  .flyout-panel__background--enter,
  .flyout-panel__background--leave {
    opacity: 0;
  }

  .flyout-panel__content {
    height: 100%;
    position: absolute;
    top: 0;
    width: 320px;
    z-index: 20;
  }

  /**
   * Slide in from the right
  **/
  .flyout-panel--right .flyout-panel__content {
    right: 0;
    transition: right 300ms ease-in-out;
  }

  .flyout-panel--right .flyout-panel__content--enter,
  .flyout-panel--right .flyout-panel__content--leave {
    right: -100%;
  }

  /**
   * Slide in from the left
  **/
  .flyout-panel--left .flyout-panel__content {
    left: 0;
    transition: left 300ms ease-in-out;
  }

  .flyout-panel--left .flyout-panel__content--enter,
  .flyout-panel--left .flyout-panel__content--leave {
    left: -100%;
  }
</style>
