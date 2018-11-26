## Overview

Create a project skeleton for a SilverStripe 4 Platform project. Sets up an empty theme and nightwatch for testing.

## Installation

```
# Checkout the repo
git clone git@github.com:silverstripeltd/project-skeleton.git <yourproject> -o skeleton

# Change directory to your project
cd <yourproject>

# replace the remote origin with your own
git remote remove skeleton
git remote add origin git://git@whatever.com/your/project.git

# Run composer
composer install

# install yarn dependencies
yarn

# compile your CSS. This is empty initially
yarn dev

# create a .env file from the template
cp .env.example .env

# run a dev/build
vendor/bin/sake dev/build flush=1

# push to master
git push origin master
```

## Environment

Project teams should run their website consistently,
in order to help each other and avoid confusion by differences in configuration.
SilverStripe Ltd. prefers [Vagrant](https://www.vagrantup.com/).
Read the ["Vagrant" Confluence page](https://silverstripe.atlassian.net/wiki/spaces/DEV/pages/401506576/Vagrant)
for setup and usage details.

## Build Tools

* `yarn` install dependencies
* `yarn dev` builds dev js and scss
* `yarn watch` same as `yarn dev` but watches for changes
* `yarn production` minifies production files
* `yarn prod` alias for `yarn production`
* `yarn lint` lints your code
* `yarn hot` **unsupported** hot module reloading

## Further Documentation
* [Acceptance Testing with Nightwatch](docs/nightwatch.md)
* [Building Components with Vue](docs/vue.md)
* [Maintaining a reusable component Library with Storybook](docs/storybook.md)

