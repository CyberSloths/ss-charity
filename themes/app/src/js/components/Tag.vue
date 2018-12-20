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
            if (document.getElementsByTagName('body')[0].id === 'App\\PageType\\NewsPage') {
                const elements = document.getElementsByClassName('tag-box__news');
                for (let i = 0; i < elements.length; i += 1) {
                    elements[i].className += ' tag-box__tag--current';
                }
            } else if (this.tagID === '' || this.tagID === 'news-and-events' || this.tagID === 'news-and-events-2') {
                let element = document.getElementById('tag-all-years');
                element.className += ' tag-box__tag--current';
                element = document.getElementById('tag-all-terms');
                element.className += ' tag-box__tag--current';
            } else {
                const element = document.getElementById(`tag-${this.tagID}`);
                element.className += ' tag-box__tag--current';
            }
        },
    };
</script>
