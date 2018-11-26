## Acceptance Tests

Nightwatch with cucumber is setup and ready to go. To run the tests you can run `yarn nightwatch`.

If you need to run against a custom host name (localhost is default), you can add a custom file named `.nightwatch.custom.json` with the following content:

```
{
  "test_settings": {
    "default": {
      "launch_url": "http://mycustomdomain"
    }
  }
}
```
