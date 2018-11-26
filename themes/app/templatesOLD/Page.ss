<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <% if $IsDev %>
        <% require themedCSS("dist/app") %>
    <% else %>
        <% require themedCSS("dist/app.min") %>
    <% end_if %>

    <title><% if Title %>$Title :: <% end_if %>$SiteConfig.Title</title>
</head>
    <body data-pagetype="$ClassName">

        $Layout

        <% if $IsDev %>
            <% require themedJavascript("dist/app") %>
        <% else %>
            <% require themedJavascript("dist/app.min") %>
        <% end_if %>
    </body>
</html>

