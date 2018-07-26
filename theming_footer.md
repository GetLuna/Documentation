# Theming `footer.php`
Unlike all other views, `footer.php` does not have an in-core file. Instead, your themes `footer.php` is called by all other pages directly.

## `$footer`
The `$footer`-variable contains all data that isn't part of `$luna_config` that you can expect in the footer, these are mostly statistics. Unlike any other page, you have to make this variable yourself within your view.

```php
include_once LUNA_ROOT.'/include/class/footer.class.php';

$footer = new Footer();
```

The `Footer`-object looks as followed:

```php
class Footer {
    int private $threads
    int private $comments
    int private $users
    array private $latest_user
    int private $guests_online
    int private $users_online
    array private $online

    void public __construct()

    // Setters
    Footer function setThreads( int $threads )
    Footer function setComments( int $comments )
    Footer function setUsers( int $users )
    Footer function setLatestUser( array $latest_user )
    Footer function setGuestsOnline()
    Footer function setUsersOnline()
    Footer function setOnline()

    // Getters
    int function getThreads( bool $raw )
    int function getComments( bool $raw )
    int function getUsers( bool $raw )
    array function getLatestUser()
    int function getGuestsOnline( bool $raw )
    int function getUsersOnline( bool $raw )
    array function getOnline()
}
```

## Cookie bar
Luna supports the use of a cookie bar, your theme has to implement this functionality. Typography handles the implementation as followed:

```php
<?php if (($luna_config['o_cookie_bar'] == 1) && ($luna_user['is_guest']) && (!isset($_COOKIE['LunaCookieBar']))) { ?>
    <div class="navbar navbar-inverse navbar-fixed-bottom cookie-bar">
        <div class="container">
            <p class="navbar-text"><?php _e('We use cookies to give you the best experience on this board.', 'luna') ?></p>
            <form class="navbar-form navbar-right">
                <div class="form-group">
                    <div class="btn-toolbar"><a class="btn btn-link" href="<?php echo $luna_config['o_cookie_bar_url'] ?>"><?php _e('More info', 'luna') ?></a><a class="btn btn-default" href="index.php?action=disable_cookiebar"><?php _e('Don\'t show again', 'luna') ?></a></div>
                </div>
            </form>
        </div>
    </div>
<?php } ?>
```

## Debug mode
Themes also need to support debug mode, once again, Luna's default theme's implementation can be seen here:

```php
<?php
// Display executed queries (if enabled)
if (defined('LUNA_DEBUG')) {
?>
<div class="container main">
    <div class="row">
        <div class="col-xs-12">
            <?php display_saved_queries(); ?>
        </div>
    </div>
</div>
<div class="footer container text-center">
<?php

// Display debug info (if enabled/defined)
if (defined('LUNA_DEBUG')) {
	// Calculate script generation time
	$time_diff = sprintf('%.3f', get_microtime() - $luna_start);
	echo sprintf(__('Generated in %1$s seconds &middot; %2$s queries executed', 'luna'), $time_diff, $db->get_num_queries());

	if (function_exists('memory_get_usage')) {
		echo ' &middot; '.sprintf(__('Memory usage: %1$s', 'luna'), file_size(memory_get_usage()));

		if (function_exists('memory_get_peak_usage'))
			echo ' '.sprintf(__('(Peak: %1$s)', 'luna'), file_size(memory_get_peak_usage()));
	}
}
?>
</div>
<?php } ?>
```

## Database transactions
Finally, your themes `footer.php`-file is the last file called by Luna before the page is completed. Given that the footer still has to handle some queries, we cannot close the database here. This is why you have to add the following line __before__ your debug-implementation:

```php
$db->end_transaction();
```

After everything, you also need to close of the database connection:

```php
$db->close();
```