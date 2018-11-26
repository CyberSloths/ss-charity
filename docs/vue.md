## Vue Setup

The skeleton project comes ready with Vue installed. To start developing Vue components you'll simply need to update the
app.js file and wrap the page content so that Vue can do its stuff. These steps are detailed below.

### Update themes/mysite/src/js/app.js
```js
import Vue from 'vue';

document.addEventListener('DOMContentLoaded', () => {
  const el = document.getElementById('app');

  if (el === undefined || el === null) {
    return;
  }

  new Vue({ // eslint-disable-line no-new
    el: '#app',
    components: { },
    data: { },
  });
});

```

### Wrap page content
```html
<div id="app">
    Page html goes here
</div>
```
Note: vue replaces the HTML element targeted (ie. #app) so don't apply this to the body tag.

### Uninstalling Vue dependencies
If you don't need Vue as part of your project you can remove it as follows.
````
yarn remove vue eslint-plugin-vue babel-preset-vue
````
You can also remove `plugin:vue/essential` as well as the vue `overrides` section from `.eslintrc.json`:
```
  "extends": [
    "airbnb-base",
    "plugin:vue/essential"
  ],
  ...
  "overrides": [
    {
      "files": ["*.vue"],
      "rules": {
        "indent": "off",
        "vue/script-indent": ["error", 2, { "baseIndent": 1 }]
      }
    }
  ]
```
As well as removing vue linting from `package.json`
```
  "lint-js": "eslint --ext .js,.vue themes/app/src/js",
  "lint-scss": "stylelint themes/app/src/scss/**/*.scss themes/app/src/js/**/*.vue",
```
and `vue` from the eslint and stylelint config `webpack.mix.js`
```
  {
    enforce: 'pre',
    test: /\.(js|vue)$/,
    exclude: /node_modules/,
    loader: 'eslint-loader',
  },
  ...
  new StyleLintPlugin({
    context: 'themes/app/src/',
    files: ['**/*.{scss,vue}'],
  }),
