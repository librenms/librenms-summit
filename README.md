# Ultra Simple One-Page Setup.

All parts are located in `/content/` and included in alphabetical order.

Logic can be added OnTheFly as all parts are written in PHP. However, I suggest you to write all logic-parts into functions and add them into `/functions.php` instead.

## Requirements

PHP5, Any Webserver, PHP5-Sqlite3 extension

## Notifications

Please use `$notification[$level][] = $message` to display notifications back to the visitor.
In this example `$level` can be any of `success, info, warning, danger`, `$message` may contain HTML.

## Caching Environment

Although the page itself does not (yet?) include own caching mechanisms, the current Live-System located at `summit.librenms.org` does.
Any `GET` request is cached for at least 5 minutes. Static data like `css, images, javascript` will be cached up to 1 day.

## License(s)

All files that do not come with an own copyright header are subject to GPL3. Exceptions are merely files under `html/css` and `html/js`.

## Roadmap:

- Path-Routing will be added in future.
- BuiltIn Content caching / precombine.
