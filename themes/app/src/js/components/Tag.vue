<template>
    <div class="tag-box">
        <slot />
    </div>
</template>

<script>
    export default {
        name: 'tag-box',
        data: () => ({
            tagID: window.location.pathname.substr(window.location.pathname.lastIndexOf('/') + 1),
        }),
        mounted() {
            if (this.tagID !== '') {
                const element = document.getElementById(`tag-${this.tagID}`);
                element.className += ' tag-box__tag--current';
            } else {
                let element = document.getElementById('tag-all-years');
                element.className += ' tag-box__tag--current';
                element = document.getElementById('tag-all-terms');
                element.className += ' tag-box__tag--current';
            }
        },
    };
</script>
