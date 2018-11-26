## Storybook

### Overview
Storybook is an environment for developing UI components and allows us to maintain a library of components that can be shared between developers/teams.
More information can be found at <https://storybook.js.org>

### Getting started
To view Storybook, navigate to the `.storybook` folder and simply run the following command.
````
cd .storybook/
yarn storybook
````
This will build everything required to deploy the story book and once done it can be viewed on port 6006
````
http://localhost:6006/
````
Any changes that are made to components whilst this is running are automatically deployed.

### Storybook Addons
The default setup for Storybook simply renders the component to the page. There are a number of addons that allow inclusion
of such things as component info, source code, component property summaries etc.
This skeleton project currently has the following addons installed for use:
- viewport: see the component in various screen sizes/orientations
- knobs: makes component properties dynamic so that you can play around and test different component states
- links: link stories together
- actions: inspect/document events relating to your component
- storybook-addon-vue-info: shows component information including description, story source and property table.

NB: There seems to be a bug with the rendering of the addon tabs rendered in the bottom of the storybook page. Since we
are currently using an alpha release, this will hopefully be resolved in the near future.

### File Structure
Components can first be developed in isolation from the SilverStripe site, using Storybook as a platform for verifying the components along with its various states.

New components will typically be placed in the `themes/app/src/js/components` directory. Whilst developing the component you can create a corresponding Storybook story in `./storybook/stories`.

### Example Story
```import { storiesOf } from '@storybook/vue';

import MyButton from '../../themes/app/src/js/components/MyButton.vue';
import '../../themes/app/dist/app.css';

storiesOf('Styleguide', module)
  .addDecorator((storyFn, context) => withInfo()(storyFn)(context))
  .add('Buttons', () => ({
    template: `
      <div>
        <button type="button" class="btn btn-primary">Primary</button>
        <button type="button" class="btn btn-secondary">Secondary</button>
        <button type="button" class="btn btn-success">Success</button>
        <button type="button" class="btn btn-danger">Danger</button>
        <button type="button" class="btn btn-warning">Warning</button>
        <button type="button" class="btn btn-info">Info</button>
        <button type="button" class="btn btn-light">Light</button>
        <button type="button" class="btn btn-dark">Dark</button>
        <button type="button" class="btn btn-link">Link</button>
      </div>
    `,
  }));
```
Starting with the 'storiesOf' function to define which 'chapter' to add the story to, specify any decorators(addons) you
wish to apply to the story, and then add the story with the template required to define and render the documented
component in the storybook page.

### Generating a static app for Storybook
You can also generate a static app for Storybook which could be useful if you need to demo it to a client or host it somewhere for
easy reference.

```
  cd .storybook
  yarn build-storybook
```

### Future Storybook development
There are currently limitations with Storybook in that React and Vue components have to be added to separate Storybooks
(with Storybook/Vue and Storybook/React libraries) so the current storybook implementation focuses on Vue
component development. There are plans for Storybook to address this in future releases, and to also allow inclusion of HTML snippets.
This would allow for the Styleguide and Welcome pages to be pure HTML files rather than the current necessity to wrap
them into a Vue component.

A future enhancement would also be to modify the storybook command to be able to be run from the project root, instead of inside the
storybook folder.

### Removing Storybook
This skeleton project comes configured with Storybook installed. If it is not required as part of your project you can remove
it as follows.
````
rm -rf .storybook/
````

