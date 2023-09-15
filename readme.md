Test case for [OutputEscaped](https://github.com/WordPress/WordPress-Coding-Standards/issues/1176#issuecomment-1718262189) bug

# Usage

In `composer.json` switch the package `wp-coding-standards/wpcs` version to _2_.
Run `composer update` and `composer phpcs`
There should be no error.

Repeat this process with version _3_ and there should be an error:

```
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------
FOUND 1 ERROR AFFECTING 1 LINE
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 14 | ERROR | All output should be run through an escaping function (see the Security sections in the WordPress Developer Handbooks), found 'Helpers'.
    |       | (WordPress.Security.EscapeOutput.OutputNotEscaped)
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------
```

# Details

 - `composer.json` is the same as the plugin where I encountered this problem, only some slugs are renamed.
 - `phpcs.xml.dist` I have added a few extra ignores, these are marked. Also renamed slugs.
