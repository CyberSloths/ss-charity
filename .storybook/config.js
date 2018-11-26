import { configure } from '@storybook/vue';

require('./index.stories.js');

const req = require.context('./stories', true, /.stories.js$/);
function loadStories() {
  req.keys().forEach(filename => req(filename));
}

configure(loadStories, module);
