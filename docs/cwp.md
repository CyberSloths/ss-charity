## CWP setup

In order to use the project skeleton on a CWP project, you can simply require the cwp recipe with composer.

```bash
$ composer require cwp/cwp-recipe-core
```

### Watea theme

Sometimes projects require the watea theme as a base, firstly you'll need to install it (and additional dependencies) with composer.

```bash
$ composer require cwp/watea-theme cwp/cwp cwp/agency-extensions
```

Ensure the starter and watea theme are added to the `.gitignore` file, then add them both to your theme config as follows:

```yaml
# config.yml
SilverStripe\View\SSViewer:
  themes:
    - 'app'
    - 'watea'
    - 'starter'
    - '$default'
```

You can then setup `themes/app/src/app.scss` to use watea as a base for its css:

```scss
// themes/app/src/app.scss
@import 'variables';
@import '../../../watea/src/scss/main';
@import 'other-custom-files';
```

Note: you will need to do a `yarn install` in the starter theme directory to get the required dependencies for building the css.

You'll also want to adjust your template files to match the watea theme (Page.ss, Header.ss and Footer.ss).
