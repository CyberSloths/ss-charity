# Wellington Night Shelter (SS)

## Overview
The purpose of this codebase is to create a new website for the charity, [Wellington Night Shelter](http://wellingtonnightshelter.org.nz/). The website uses the [SilverStripe CMS](https://www.silverstripe.org/) as it's base.

**SilverStripe Version used** : SS4

## Installation
The installation process only needs to be performed once when cloning this repository to a local machine. 

### Cloning Repository
```
# Checkout the repo
git clone git@github.com:silverstripeltd/project-skeleton.git <yourproject> -o skeleton

# Change directory to your project
cd <yourproject>

# replace the remote origin with your own
git remote remove skeleton
git remote add origin git://git@whatever.com/your/project.git
```

## Project setup
After cloning the project down, there is a set of commands needed to be exceuted in order to view the website/CMS **locally**. There are two methods of setting up the project locally.

**NOTE** : Run all commands in root directory of project. 

### Automated Setup using **Makefile**
Run the following command to setup the project with the makefile.

```
make init
```

### Manual Setup
Run the following commands to setup up the project manually.

```
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
