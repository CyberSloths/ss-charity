// features/step_definitions/google.js

const { client } = require('nightwatch-cucumber');
const { Given, Then, When } = require('cucumber');

Given(/^I open my site$/, () => {
  return client
    .url(client.launch_url)
    .waitForElementVisible('body', 1000);
});

Then(/^the title is "([^"]*)"$/, (title) => {
  return client.assert.title(title);
});
