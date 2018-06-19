# Caching
In order to increase performance, Luna makes use of caching techniques in various places across the software. This allows us to store results of frequently executed database queries for faster access directly on the file system.


## Loading from cache
To load cached data, all you have to do is including the cache file (if it exists) – that will make a global variable available that contains the data:

```php
// Load cached configuration
if (file_exists(LUNA_CACHE_DIR.'cache_config.php'))
    include LUNA_CACHE_DIR.'cache_config.php';
```

If the file does not exist, the cache has to be regenerated first.

## Regenerating the cache
In order to not show old data on the forum, you need to make sure that the cache files are regenerated when you make changes to that data in the database. This code shows how to regenerate the configuration cache, which should be done after updating config values in the database:

```php
if (!defined('LUNA_CACHE_FUNCTIONS_LOADED'))
    require luna_ROOT.'include/cache.php';

// Regenerate the config cache
generate_config_cache();
```

These functions are available to generate caches:

* `generate_bans_cache()`
* `generate_censoring_cache()`
* `generate_config_cache()`
* `generate_emoji_cache()`
* `generate_ranks_cache()`
* `generate_stopwords_cache()`
* `generate_update_cache()`
* `generate_users_info_cache()`