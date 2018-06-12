# Functions
Functions new to __Luna 1.0__ are currenlty missing from this documentation, stay tuned.

## Functions available everywhere
These function are in common.php and functions.php.

### `get_microtime()`
Returns the time in milliseconds.

### `check_cookie(&amp;$luna_user)`
Takes $luna_user, and populates it with the user data.

### `escape_cdata($str)`
Takes a string with CDATA for scripts in it, and escapes it for HTML.

```php
$str = '<script type="text/javascript">	//<![CDATA[	alert('foo');	//]]>';
echo escape_cdata($str);
```

### `authenticate_user($user, $password)`
Authenticates the provided username and password against the user database.

### `prune($forum_id, $prune_pinned, $prune_date)`
Delete threads from $forum_id that are "older than" $prune_date.

### `get_current_url($max_length)`
This gets the URL, and returns null if the URL is longer than $max_length. If $max_length is left out, then it will return the current URL regardless of length.

### `get_current_protocol()`
Returns the protocol being used to access the server ('http' or 'https');.

### `get_base_url($support_https)`
This returns the base URL of the forum (i.e. what was set up in the configuration), and if $support_https is set to true, it will return it in HTTP or HTTPS, depending on how the page is accessed.

### `get_admin_ids()`
Fetches admin IDs.

### `set_default_user()`
This sets $luna_user to the defaults for a guest.

### ` forum_hmac($data, $key, $raw_output)`
A hash function, no better description at this time.

### `luna_setcookie($user_id, $password_hash, $expire)`
Sets a cookie for the current user, based on the settings you put in the parameters.

### `luna_cookiebarcookie()`
Sets a cookie for the cookie bar.

### `forum_setcookie($name, $value, $expire)`
This is simply a wrapper for setcookie.			

### `check_bans()`
This gets the bans and puts them into $luna_bans, and will check for expired ones.

### `check_username($username, $exclude_id)`
Checks whether or not the given username is allowed.

### `update_users_online()`
Updates the database table containing the users online.			

### `generate_avatar_markup($user_id)`
Generates the HTML to display the avatar for the user sent in $user_id. Deprecated.

### `draw_user_avatar($user_id, $responsive, $class)`
Same function as generatie_avatar_markup() but allows you to choose wether or not the avatar should be responsive and add additional classes.

### `check_avatar($user_id)`
Checks if the given user has an avatar.

### `generate_page_title($page_title)`
Sets the title for the page you are on.

### `set_tracked_threads($tracked_threads)`
No description at this time.

### `get_tracked_threads()`
No description at this time.

### `update_forum($forum_id)`
Updates the database entries for the last commenter and last comment in a forum.

### `delete_avatar($user_id)`
Deletes the avatar for the user with ID $user_id.

### `delete_thread($thread_id)`
Deletes a thread and all of __its__ replies.

### `delete_comment($comment_id, $thread_id)`
Deletes the comment specified.

### `forum_clear_cache()`
Deletes all cached date (i.e. bans, config, etc.).

### `censor_words($text)`
Runs the censoring filter on the text sent in $text, and returns the censored version.

### `get_title($user)`
Gets the user title of the user sent in $user. $user must contain:

```php
array (
	'title' => '*custom user title*',
	'username' => '*username*',
	'g_user_title' => '*default user group title*'
)
```

### ` paginate($num_pages, $cur_page, $link)`
Generates the page links (i.e. page 1, page 2, next page, previous page, etc.).

### `simple_paginate($num_pages, $cur_page, $link)`
Same function as paginate, but for inline.

### ` message($message, $no_back_link = false, $http_status = null)`
This displays a message to the user and stops the current script. If $no_back_link is left out, then a back link won't be displayed.

### `message_backstage($message, $no_back_link = false, $http_status = null)`
Same as above, but fo Backstage

### `is_subforum($id, $self_subforum = '0')`
Checks if a forum is a subforum.

### ` format_time($timestamp, $date_only = false, $date_format = null, $time_format = null, $time_only = false, $no_text = false)`
Formats the time for the user (depending on the user's formatting preferences).

### `forum_number_format($number, $decimals = 0)`
No description at this time.

### `random_key($len, $readable = false, $hash = false)`
No description at this time.

### `confirm_referrer($scripts, $error_msg = false)`
Make sure that HTTP_REFERER matches base_url/script.

### `random_pass($len)`
Generates a random password of length $len.

### `luna_hash($str)`
A wrapper for the SHA-1 function.

### `luna_sha2($str, $salt)`
A wrapper for the SHA-512 function and its salt.

### `luna_csrf_token()`
Compute a random hash used against CSRF attacks.

### `check_csrf($token)`
Check if the CSRF hash is correct.

### `get_remote_address()`
Returns the IP address of the current user.

### `luna_htmlspecialchars($str)`
Returns $str with all HTML stripped.

### `luna_htmlspecialchars_decode($str)`
Calls htmlspecialchars_decode with a few options already set.

### `luna_strlen($str)`
Returns the UTF-8 length of a string.

### `luna_linebreaks($str)`
Converts linkbreaks to the standard UNIX style.

### `luna_trim($str, $charlist = false)`
No description at this time.

### `is_all_uppercase($string)`
Checks if a string is all uppercase.

### `array_insert(&amp;$input, $offset, $element, $key = null)`
Inserts $element into $input at $offset. If $key is set, it is used for setting the key for adding into an array where the keys are strings.

### `maintenance_message()`
Displays a maintenance message when the board is in maintenance mode.

### `redirect($destination_url, $message)`
Redirects the user to $destination_url with $message.

### `error($message, $file = null, $line = null, $db_error = false)`
Clears all output and displays an error message.

```php
$result = $db-&gt;query('SELECT id FROM users WHERE id=' . $luna_user['id']) or error('Could not select user ID', __FILE__, __LINE__, $db-&gt;error());
```

### `forum_unregister_globals()`
Unset any variables created as a result of register_globals.

### `forum_remove_bad_characters()`
Removes any characters that can cause undesired result or are invisible from text.

### `remove_bad_characters($array)`
Removes "bad" characters from the array.

### `file_size($size)`
Converts a file size in bytes into a more human version (e.g. 1024 B changed into 1 KiB).

### `forum_list_styles()`
Returns a list of the styles.

### `forum_list_accents()`
Returns a list of the accents.

### `forum_list_langs()`
Returns a list of the available languages.

### `generate_stopwords_cache_id()`
No description at this time.

### `forum_list_plugins($is_admin)`
Generates a list of the plugins available for the forum.

### `split_text($text, $start, $end, $retab = true)`
No description at this time.

### `extract_blocks($text, $start, $end, $retab = true)`
No description at this time.

### `url_valid($url)`
Checks if $url is a valid URL.

### `ucp_preg_replace($pattern, $replace, $subject)`
Replace string matching regular expression.

### `ucp_preg_replace_callback($pattern, $replace, $subject)`
A wrapper for ucp_preg_replace.

### `strip_bad_multibyte_chars($str)`
Strips all characters that are multiple bytes.

### `forum_is_writable($path)`
Checks whether $path is writable.

### `display_saved_queries()`
Displays all executed queries, if it is enabled.

### `dump()`
Shows all variables.

### `get_template_path($tpl_file)`
Get the template that is required.

### `get_view_path($object)`
Get the object that is required.

### `load_page($page)`
Get the view that is required.

### `load_css()`
Get the styles that are required.

### `load_meta()`
Get the meta tags that are required.

### `check_style_mode()`
Check wheter or not to enable night mode and force the accent.

### `delete_all($path)`
Delete all content in a folder but not the htaccess-file.

### `validate_redirect($redirect_url, $fallback_url)`
Validate the given redirect URL, use the fallback otherwise.

### `num_users_online()`
Fetch online users.

### `num_guests_online()`
Number of guests online.

### `get_forum_id($comment_id)`
Get forum_id by comment_id.

### `decrease_comment_counts($comment_ids)`
Decrease user comment counts (used before deleting comments).

### `build_config($status, $config_key, $config_valua = NULL)`
Create or delete configuration items.
