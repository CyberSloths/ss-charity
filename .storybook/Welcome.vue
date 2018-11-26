<template>
  <div class="welcome">
    <img src="./images/silverstripe-logo.png" alt="SilverStripe logo" class="logo" />
    <h1>Welcome to the Project Skeleton</h1>
    <p>
      This is a UI component dev environment for building re-usable components and managing how those components look in your theme.
    </p>

    <h2>Creating a story</h2>
    <p>
        A story can describe a component, a style or multiple components and styles together. Your theme can easily be integrated with the stories so you can be confident that your component will look the same on the website.
    </p>
    <h3>File Structure</h3>
    <p>Stories live in the <code class="code">.storybook/stories</code> folder and must maintain the naming convention of *.stories.js. eg. FlyoutPanel.stories.js</p>
    <p>The stories are decoupled from the actual components since stories can be made up of pure theme styles (no components) or can be made up of multiple components.</p>
    <h3>Your first story</h3>
    <pre class="code">
        <code>
import { storiesOf } from '@storybook/vue';
import { withInfo } from 'storybook-addon-vue-info'

// Import any components you need for your story
// You can import multiple components
import MyComponent from '../js/components/MyComponent.vue';

// Pull in the theme css
import '../../dist/app.css';

storiesOf('Components/MyComponent', module)

    // This will provide info about how to use your component
    .addDecorator((storyFn, context) => withInfo()(storyFn)(context))

    // This describes and creates an instance of your component
    .add('with some prop and some action', () => ({
      components: { MyComponent },
      template: `&lt;my-component someProp=&quot;someProp&quot; @someAction=&quot;clicked = true&quot;&gt;&lt;/my-component&gt;`,
      data() {
        return {
          clicked: false
        }
      },
    }));
        </code>
    </pre>
  </div>
</template>

<script>
  export default {
    name: 'welcome',
  }
</script>

<style>
  .welcome {
    padding: 15px;
    max-width: 960px;
    margin: 0 auto;
    width: 100%;
  }

  .logo {
    width: 100%;
    max-width: 400px;
    display: block;
    margin: 0 auto;
  }

  .code {
    font-size: 15px;
    font-weight: 600;
    padding: 2px 5px;
    border: 1px solid #EAE9E9;
    border-radius: 4px;
    background-color: #F3F2F2;
    color: #3A3A3A;
    margin-top: 15px;
  }

  .welcome h1,
  .welcome h2,
  .welcome h3,
  .welcome h4,
  .welcome h5,
  .welcome h6 {
    margin-top: 30px;
  }

  .welcome h2:before,
  .welcome h3:before,
  .welcome h4:before,
  .welcome h5:before,
  .welcome h6:before {
    content: '→';
    margin-right: 10px;
  }
</style>
