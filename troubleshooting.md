# Troubleshooting
## Common problems
### Error: Unable to write configuration cache file to cache directory
Luna requires write access to the `/cache/` folder in order to cache certain settings. If PHP does not have write access you must CHMOD the folder to 777.

### Avatar uploads don't work
Similarly to the `/cache/` folder, Luna requires write access to the `/img/avatars/` folder in order to save avatars. If PHP does not have write access you must CHMOD the folder to 777.

### I've updated the database manually, but the changes have no effect
In order to decrease the load on the database server, Luna caches parts of the database to PHP scripts in the `/cache/` directory. To update the cache simply delete all PHP scripts in the `/cache/` directory. Luna will regenerate them when they are needed.

### I enabled maintenance mode and cannot login
If you have enabled maintenance mode and accidentally logged out you will find it impossible to log back in! To remedy this you must open your configuration file (`config.php`) and at the end add:

```php
define('LUNA_TURN_OFF_MAINT', 1);
```

This will disable the whole maintenance mode feature and allow you to log in. Once logged in you should remove (or comment out) this from your configuration file again.

### Changing the style/language did not work
If you change the style or language settings in the admin panel, this will not effect your (or anyone else's) style or language settings. Members are set with the forum default when they register. To change an existing members style or language you must go into their profile and change the setting there.

## Debugging problems
To enable debug mode open the configuration file (config.php) and at the end add:

```php
define('LUNA_DEBUG', 1);
define('LUNA_SHOW_QUERIES', 1);
```

<p class="alert alert-warning">This will enable debug mode for everyone visiting the forum and expose the contents of SQL queries to everyone. Don't forget to remove (or comment out) the lines you added when you are done!</p>