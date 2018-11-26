import { storiesOf } from '@storybook/vue';
import { withInfo } from 'storybook-addon-vue-info';
import { withKnobs, select } from '@storybook/addon-knobs/vue';

import FlyoutPanel from '../../themes/app/src/js/components/FlyoutPanel.vue';

import '../../themes/app/dist/app.css';

const flyoutDirections = { left: 'Left', right: 'Right' };

storiesOf('Components/Flyout Panel', module)
  .addDecorator((storyFn, context) => withInfo()(storyFn)(context))
  .addDecorator(withKnobs)
  .add('with toggle', () => ({
    components: { FlyoutPanel },
    template: `<div>
      <button class="btn btn-primary" @click="menuOpen = true">Open {{direction}}</button>
      <flyout-panel
        :slideFrom="direction"
        :open="menuOpen"
        @close="menuOpen = !menuOpen"
      >
        <h1>Flyout Panel</h1>
        <p>Slides in from the {{direction}}</p>
      </flyout-panel>
    </div>`,
    data() {
      return {
        menuOpen: false,
        direction: select('slideFrom', flyoutDirections, 'right'),
      };
    },
  }));

