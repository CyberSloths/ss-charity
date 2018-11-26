import { storiesOf } from '@storybook/vue';
import { action } from '@storybook/addon-actions';
import { linkTo } from '@storybook/addon-links';
import { withInfo } from 'storybook-addon-vue-info';

import Welcome from './Welcome.vue';
import Styleguide from './Styleguide.vue';

import '../themes/app/dist/app.css';

storiesOf('Welcome', module).add('to project skeleton', () => ({
  components: { Welcome },
  template: '<welcome />',
  methods: { action: linkTo('Button') },
}));

storiesOf('Styleguide', module).add('kitchen sink', () => ({
  components: { Styleguide },
  template: '<styleguide />',
}));
