import Vue from 'vue';
import CustomNav from './components/CustomNav.vue';
import Tag from './components/Tag.vue';

new Vue({
    el: '#app',
    components: {
        'main-nav': CustomNav,
        'tag-box': Tag,
    },
});
