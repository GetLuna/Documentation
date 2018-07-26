# Maintenance
## Maintenance
Maintenance shows a message to your board visitors when enabled. When this message is active, you should not log out of Luna as the login page will be unavailable to you. If you did logout you can surpress maintenance mode by adding the following line to `config.php`:

```php
define('LUNA_TURN_OFF_MAINT', 1);
```

## Cache
Clearing the cache will drop all files in the `/cache/`-folder in Luna's root. This will cause the first request to the various cached data to take a little longer to load. The following data will be cached by Luna:

* Bans
* Censored words
* Configuration
* Emoji
* Ranks
* Stopwords
* Update information
* Users info

## Rebuilding search index
If you have added, edited or removed comments manually in the database or if you are having problems searching, you should rebuild the search index. This can be accessed under the "maintenance" menu item, and basically involves looking at all the comments in your forum and indexing the words that make them up in an efficient way to facilitate fast and efficient searching.