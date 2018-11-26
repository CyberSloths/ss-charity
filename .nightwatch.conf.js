const fs = require('fs');
const seleniumServer = require('selenium-server');
const chromedriver = require('chromedriver');
const cucumber = require('nightwatch-cucumber');

/**
 * We need to merge our custom config with the base config.
 *
 * The spread operator doesn't work for operators so we had to steal
 * some taskoverflow code from here:
 * https://stackoverflow.com/questions/27936772/how-to-deep-merge-instead-of-shallow-merge
 */
const isObject = (item) => {
  return (item && typeof item === 'object' && !Array.isArray(item));
}

const mergeDeep = (target, ...sources) => {
  if (!sources.length) return target;
  const source = sources.shift();

  if (isObject(target) && isObject(source)) {
    for (const key in source) {
      if (isObject(source[key])) {
        if (!target[key]) Object.assign(target, { [key]: {} });
        mergeDeep(target[key], source[key]);
      } else {
        Object.assign(target, { [key]: source[key] });
      }
    }
  }

  return mergeDeep(target, ...sources);
}

// Initialise cucumber
cucumber({
  cucumberArgs: [
    '--require', 'app/tests/nightwatch/step_definitions',
    'app/tests/nightwatch'
  ]
});

// Merge the users custom config
let settings = require('./.nightwatch.json');
if(fs.existsSync('./.nightwatch.custom.json')) {
  let custom = require('./.nightwatch.custom.json');
  settings = mergeDeep(settings, custom);
}

module.exports = (function(settings) {
  settings.selenium.server_path = seleniumServer.path;
  settings.selenium.cli_args['webdriver.chrome.driver'] = chromedriver.path;

  // Set optional url cli arg
  var urlIndex = process.argv.indexOf('--url');
  if (urlIndex > -1) {
    settings.test_settings.default.launch_url = process.argv[urlIndex + 1];
  }

  return settings;
})(settings);
