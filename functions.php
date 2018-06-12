<?php $section = "docs"; $dsection = "develop";  $dpage = "functions"; include('../include/header.php') ?>
<div class="row main">
	<div class="col-sm-3">
		<?php include ('docsnav.php') ?>
	</div>
	<div class="col-sm-9">
		<h1>Functions</h1>
		<p class="alert alert-warning">Functions new to <strong>Luna 1.0</strong> are currenlty missing from this documentation, stay tuned.</p>
		<h2>Functions available everywhere</h2>
		<p>These function are in common.php and functions.php.</p>
		<h3>get_microtime()</h3>
		<p>Returns the time in milliseconds.</p>
		<h3>check_cookie(&amp;$luna_user)</h3>
		<p>Takes $luna_user, and populates it with the user data.</p>
		<h3>escape_cdata($str)</h3>
		<p>Takes a string with CDATA for scripts in it, and escapes it for <abbr title="HyperText Markup Language">HTML</abbr>.</p>
		<pre><code class="language-php">$str = '&lt;script type=&quot;text/javascript&quot;&gt;	//&lt;![CDATA[	alert('foo');	//]]&gt;';	echo escape_cdata($str);</code></pre>
		<h3>authenticate_user($user, $password)</h3>
		<p>Authenticates the provided username and password against the user database.</p>
		<h3>prune($forum_id, $prune_pinned, $prune_date)</h3>
		<p>Delete threads from $forum_id that are &quot;older than&quot; $prune_date.</p>
		<h3>get_current_url($max_length)</h3>
		<p>This gets the <abbr title="Uniform Resource Locator">URL</abbr>, and returns null if the <abbr title="Uniform Resource Locator">URL</abbr> is longer than $max_length. If $max_length is left out, then it will return the current <abbr title="Uniform Resource Locator">URL</abbr> regardless of length.</p>
		<h3>get_current_protocol()</h3>
		<p>Returns the protocol being used to access the server ('http' or 'https');.</p>
		<h3>get_base_url($support_https)</h3>
		<p>This returns the base <abbr title="Uniform Resource Locator">URL</abbr> of the forum (i.e. what was set up in the configuration), and if $support_https is set to true, it will return it in HTTP or HTTPS, depending on how the page is accessed.</p>
		<h3>get_admin_ids()</h3>
		<p>Fetches admin IDs.</p>
		<h3>set_default_user()</h3>
		<p>This sets $luna_user to the defaults for a guest.</p>
		<h3> forum_hmac($data, $key, $raw_output)</h3>
		<p>A hash function, no better description at this time.</p>
		<h3>luna_setcookie($user_id, $password_hash, $expire)</h3>
		<p>Sets a cookie for the current user, based on the settings you put in the parameters.</p>
		<h3>luna_cookiebarcookie()</h3>
		<p>Sets a cookie for the cookie bar.</p>
		<h3>forum_setcookie($name, $value, $expire)</h3>
		<p>This is simply a wrapper for setcookie.			</p>
		<h3>check_bans()</h3>
		<p>This gets the bans and puts them into $luna_bans, and will check for expired ones.</p>
		<h3>check_username($username, $exclude_id)</h3>
		<p>Checks whether or not the given username is allowed.</p>
		<h3>update_users_online()</h3>
		<p>Updates the database table containing the users online.			</p>
		<h3>generate_avatar_markup($user_id)</h3>
		<p>Generates the <abbr title="HyperText Markup Language">HTML</abbr> to display the avatar for the user sent in $user_id. Deprecated.</p>
		<h3>draw_user_avatar($user_id, $responsive, $class)</h3>
		<p>Same function as generatie_avatar_markup() but allows you to choose wether or not the avatar should be responsive and add additional classes.</p>
		<h3>check_avatar($user_id)</h3>
		<p>Checks if the given user has an avatar.</p>
		<h3>generate_page_title($page_title)</h3>
		<p>Sets the title for the page you are on.</p>
		<h3>set_tracked_threads($tracked_threads)</h3>
		<p>No description at this time.</p>
		<h3>get_tracked_threads()</h3>
		<p>No description at this time.</p>
		<h3 >update_forum($forum_id)</h3>
		<p>Updates the database entries for the last commenter and last comment in a forum.</p>
		<h3>delete_avatar($user_id)</h3>
		<p>Deletes the avatar for the user with ID $user_id.</p>
		<h3 >delete_thread($thread_id)</h3>
		<p>Deletes a thread and all of &lt;b&gt;its&lt;/b&gt; replies.</p>
		<h3>delete_comment($comment_id, $thread_id)</h3>
		<p>Deletes the comment specified.</p>
		<h3>forum_clear_cache()</h3>
		<p>Deletes all cached date (i.e. bans, config, etc.).</p>
		<h3>censor_words($text)</h3>
		<p>Runs the censoring filter on the text sent in $text, and returns the censored version.</p>
		<h3>get_title($user)</h3>
		<p>Gets the user title of the user sent in $user. $user must contain:</p>
<pre><code class="language-php"><a href="http://www.php.net/array">array</a> (
'title' =&gt; '*custom user title*',
'username' =&gt; '*username*',
'g_user_title' =&gt; '*default user group title*'
)</code></pre>
		<h3> paginate($num_pages, $cur_page, $link)</h3>
		<p>Generates the page links (i.e. page 1, page 2, next page, previous page, etc.).</p>
		<h3>simple_paginate($num_pages, $cur_page, $link)</h3>
		<p>Same function as paginate, but for inline.</p>
		<h3> message($message, $no_back_link = false, $http_status = null)</h3>
		<p>This displays a message to the user and stops the current script. If $no_back_link is left out, then a back link won't be displayed.</p>
		<h3>message_backstage($message, $no_back_link = false, $http_status = null)</h3>
		<p>Same as above, but fo Backstage</p>
		<h3>is_subforum($id, $self_subforum = '0')</h3>
		<p>Checks if a forum is a subforum.</p>
		<h3> format_time($timestamp, $date_only = false, $date_format = null, $time_format = null, $time_only = false, $no_text = false)</h3>
		<p>Formats the time for the user (depending on the user's formatting preferences).</p>
		<h3>forum_number_format($number, $decimals = 0)</h3>
		<p>No description at this time.</p>
		<h3>random_key($len, $readable = false, $hash = false)</h3>
		<p>No description at this time.</p>
		<h3>confirm_referrer($scripts, $error_msg = false)</h3>
		<p>Make sure that HTTP_REFERER matches base_url/script.</p>
		<h3>random_pass($len)</h3>
		<p>Generates a random password of length $len.</p>
		<h3>luna_hash($str)</h3>
		<p>A wrapper for the SHA-1 function.</p>
		<h3>luna_sha2($str, $salt)</h3>
		<p>A wrapper for the SHA-512 function and its salt.</p>
		<h3>luna_csrf_token()</h3>
		<p>Compute a random hash used against CSRF attacks.</p>
		<h3>check_csrf($token)</h3>
		<p>Check if the CSRF hash is correct.</p>
		<h3>get_remote_address()</h3>
		<p>Returns the IP address of the current user.</p>
		<h3>luna_htmlspecialchars($str)</h3>
		<p>Returns $str with all <abbr title="HyperText Markup Language">HTML</abbr> stripped.</p>
		<h3>luna_htmlspecialchars_decode($str)</h3>
		<p>Calls htmlspecialchars_decode with a few options already set.</p>
		<h3>luna_strlen($str)</h3>
		<p>Returns the UTF-8 length of a string.</p>
		<h3>luna_linebreaks($str)</h3>
		<p>Converts linkbreaks to the standard UNIX style.</p>
		<h3>luna_trim($str, $charlist = false)</h3>
		<p>No description at this time.</p>
		<h3>is_all_uppercase($string)</h3>
		<p>Checks if a string is all uppercase.</p>
		<h3>array_insert(&amp;$input, $offset, $element, $key = null)</h3>
		<p>Inserts $element into $input at $offset. If $key is set, it is used for setting the key for adding into an array where the keys are strings.</p>
		<h3>maintenance_message()</h3>
		<p>Displays a maintenance message when the board is in maintenance mode.</p>
		<h3>redirect($destination_url, $message)</h3>
		<p>Redirects the user to $destination_url with $message.</p>
		<h3>error($message, $file = null, $line = null, $db_error = false)</h3>
		<p>Clears all output and displays an error message.</p>
<pre><code class="language-php">$result = $db-&gt;query('SELECT id FROM users WHERE id=' . $luna_user['id']) or error('Could not select user ID', __FILE__, __LINE__, $db-&gt;error());</code></pre>
		<h3>forum_unregister_globals()</h3>
		<p>Unset any variables created as a result of register_globals.</p>
		<h3>forum_remove_bad_characters()</h3>
		<p>Removes any characters that can cause undesired result or are invisible from text.</p>
		<h3>remove_bad_characters($array)</h3>
		<p>Removes &ldquo;bad&rdquo; characters from the array.</p>
		<h3>file_size($size)</h3>
		<p>Converts a file size in bytes into a more human version (e.g. 1024 B changed into 1 KiB).</p>
		<h3>forum_list_styles()</h3>
		<p>Returns a list of the styles.</p>
		<h3>forum_list_accents()</h3>
		<p>Returns a list of the accents.</p>
		<h3>forum_list_langs()</h3>
		<p>Returns a list of the available languages.</p>
		<h3>generate_stopwords_cache_id()</h3>
		<p>No description at this time.</p>
		<h3>forum_list_plugins($is_admin)</h3>
		<p>Generates a list of the plugins available for the forum.</p>
		<h3>split_text($text, $start, $end, $retab = true)</h3>
		<p>No description at this time.</p>
		<h3>extract_blocks($text, $start, $end, $retab = true)</h3>
		<p>No description at this time.</p>
		<h3>url_valid($url)</h3>
		<p>Checks if $url is a valid <abbr title="Uniform Resource Locator">URL</abbr>.</p>
		<h3>ucp_preg_replace($pattern, $replace, $subject)</h3>
		<p>Replace string matching regular expression.</p>
		<h3>ucp_preg_replace_callback($pattern, $replace, $subject)</h3>
		<p>A wrapper for ucp_preg_replace.</p>
		<h3>strip_bad_multibyte_chars($str)</h3>
		<p>Strips all characters that are multiple bytes.</p>
		<h3>forum_is_writable($path)</h3>
		<p>Checks whether $path is writable.</p>
		<h3>display_saved_queries()</h3>
		<p>Displays all executed queries, if it is enabled.</p>
		<h3>dump()</h3>
		<p>Shows all variables.</p>
		<h3>get_template_path($tpl_file)</h3>
		<p>Get the template that is required.</p>
		<h3>get_view_path($object)</h3>
		<p>Get the object that is required.</p>
		<h3>load_page($page)</h3>
		<p>Get the view that is required.</p>
		<h3>load_css()</h3>
		<p>Get the styles that are required.</p>
		<h3>load_meta()</h3>
		<p>Get the meta tags that are required.</p>
		<h3>check_style_mode()</h3>
		<p>Check wheter or not to enable night mode and force the accent.</p>
		<h3>delete_all($path)</h3>
		<p>Delete all content in a folder but not the htaccess-file.</p>
		<h3>validate_redirect($redirect_url, $fallback_url)</h3>
		<p>Validate the given redirect URL, use the fallback otherwise.</p>
		<h3>num_users_online()</h3>
		<p>Fetch online users.</p>
		<h3>num_guests_online()</h3>
		<p>Number of guests online.</p>
		<h3>get_forum_id($comment_id)</h3>
		<p>Get forum_id by comment_id.</p>
		<h3>decrease_comment_counts($comment_ids)</h3>
		<p>Decrease user comment counts (used before deleting comments).</p>
		<h3>build_config($status, $config_key, $config_valua = NULL)</h3>
		<p>Create or delete configuration items.</p>
	</div>
</div>
<?php include '../include/footer.php' ?>