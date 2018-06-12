<?php $section = "docs"; $dsection = "develop";  $dpage = "variables"; include('../include/header.php') ?>
<div class="row main">
	<div class="col-sm-3">
		<?php include ('docsnav.php') ?>
	</div>
	<div class="col-sm-9">
		<h1>Global variables</h1>
		<p>Below is a list of global variables which can be found within any Luna script (i.e. are set when <code>include/common.php</code> is included). The most used and important ones are probably <a href="variables.php">$db</a>, <a href="variables.php">$luna_user</a> and <a href="variables.php">$luna_config</a>.</li>
		<h2>Configuration variables</h2>
		<p>The below variables are defined by the admin within config.php during installation. Usually they should not be needed once the database connection has been set up and the users cookie has been authenticated.</li>
		<h3>$db_type</h3>
		<p>The type of database being used by Luna. Valid values are <code>mysql</code>, <code>mysqli_innodb</code>, <code>mysqli</code>, <code>mysqli_innodb</code>, <code>pgsql</code>, <code>sqlite</code> or <code>sqlite3</code>.</li>
		<h3>$db_host</h3>
		<p>The hostname or IP address (and port if non-standard) of the database server being used.</li>
		<h3>$db_name</h3>
		<p>The name of the database being used.</li>
		<h3>$db_username</h3>
		<p>The username required to access the database.</li>
		<h3>$db_password</h3>
		<p>The password required to access the database.</li>
		<h3>$db_prefix</h3>
		<p>The table prefix used within the database (to allow multiple Luna installs within one database). This can also (and should be) accessed using <code>$db→prefix</code>, for more information see the <a href="dblayer.php">Database layer</a> page.</li>
		<h3>$cookie_name</h3>
		<p>The name of the cookie which Luna uses to keep track of a users session.</li>
		<h3>$cookie_seed</h3>
		<p>Used to seed the password hash stored within the users cookie.</li>
		<hr />
		<h2>Core variables</h2>
		<p>The variables below are the most important global variables within Luna.</li>
		<h3>$db</h3>
		<p>The <code>$db</code> variable is an instance of the <a href="dblayer.php">Database layer</a>, used for communicating with the underlying database. For more information please see the <a href="dblayer.php">Database layer</a> page.</li>
		<h3>$luna_user</h3>
		<p>The <code>$luna_user</code> variable is an associative array which holds information (taken from the <a href="dbstructure.php">users</a> and <a href="dbstructure.php">groups</a> database tables) about the current logged in user (or guest).</li>
		<p>As well as the information from the users and groups tables it also holds a few other values:</li>
		<table class="table table-striped table-striped table-hover table-condensed">
			<thead>
				<tr>
					<th class="col-xs-1">Key</th>
					<th class="col-xs-11">Description</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><code>logged</code></td>
					<td>A UNIX timestamp representing the time the user logged in.</td>
				</tr>
				<tr>
					<td><code>idle</code></td>
					<td>If the user is idle or not (i.e. their last visit was more than o_timeout_online seconds ago, but less than o_timeout_visit seconds ago).</td>
				</tr>
				<tr>
					<td><code>is_guest</code></td>
					<td>A boolean value, true if the current user is a guest and false if they are a logged in user.</td>
				</tr>
				<tr>
					<td><code>is_admmod</code></td>
					<td>A boolean value, true if the current user is a moderator or administrator.</td>
				</tr>
			</tbody>
		</table>
<pre><code class="language-php">$result = $db-&gt;query('SELECT u.*, g.*, o.logged, o.idle FROM '.$db-&gt;prefix.'users AS u INNER JOIN '.$db-&gt;prefix.'groups AS g ON u.group_id=g.g_id LEFT JOIN '.$db-&gt;prefix.'online AS o ON o.user_id=u.id WHERE u.id='.intval($cookie['user_id'])) or error('Unable to fetch user information', __FILE__, __LINE__, $db-&gt;error());
$luna_user = $db-&gt;fetch_assoc($result);	

$luna_user['is_guest'] = false;
$luna_user['is_admmod'] = $luna_user['g_id'] == LUNA_ADMIN || $luna_user['g_moderator'] == '1';</code></pre>
		<h3>$luna_config</h3>
		<p>The <code>$luna_config</code> variable holds an associative array with the contents of the <a href="dbstructure.php">config</a> database table. Please note that to save querying the database on every page load this variable is <a href="caching.php">cached</a>, simply updating the database will not cause the cache to refresh.</li>
		<table class="table table-striped table-striped table-hover table-condensed">
			<thead>
				<tr>
					<td class="col-xs-1"><strong>Key</strong></td>
					<td class="col-xs-2"><strong>Default value</strong></td>
					<td class="col-xs-9"><strong>Description</strong></td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><code>o_cur_version</code></td>
					<td><code>&ldquo;1.3.0&rdquo;</code>*</td>
					<td>The current version of Luna that is installed.</td>
				</tr>
				<tr>
					<td><code>o_core_version</code></td>
					<td><code>&ldquo;1.3.5118&rdquo;</code>*</td>
					<td>The current version of Luna core that is installed.</td>
				</tr>
				<tr>
					<td><code>o_code_name</code></td>
					<td><code>&ldquo;denim&rdquo;</code>*</td>
					<td>The current name of Luna core that is installed.</td>
				</tr>
				<tr>
					<td><code>o_database_revision</code></td>
					<td><code>&ldquo;90.70&rdquo;</code>*</td>
					<td>The current version of the database structure.</td>
				</tr>
				<tr>
					<td><code>o_searchindex_revision</code></td>
					<td><code>&ldquo;2.0&rdquo;</code>*</td>
					<td>The current version of the search index engine. During an update if this increments all comments will be indexed again.</td>
				</tr>
				<tr>
					<td><code>o_parser_revision</code></td>
					<td><code>&ldquo;11.2.0&rdquo;</code>*</td>
					<td>The current version of the parser. During an update, if this increments all comments will be preparsed again.</td>
				</tr>
				<tr>
					<td><code>o_board_title</code></td>
					<td><code>&ldquo;Denim&rdquo;</code>*</td>
					<td>The title of the forum, by default Luna uses its current code name.</td>
				</tr>
				<tr>
					<td><code>o_board_desc</code></td>
					<td><code>&ldquo;You can do anything&rdquo;</code>*</td>
					<td>A short description of the forum, usually displayed below the board title, by default the Luna slogan.</td>
				</tr>
				<tr>
					<td><code>o_default_timezone</code></td>
					<td><code>&ldquo;0&rdquo;</code></td>
					<td>The default time zone (offset from UTC).</td>
				</tr>
				<tr>
					<td><code>o_time_format</code></td>
					<td><code>&ldquo;H:i&rdquo;</code></td>
					<td>The default time format string (see the PHP <a title="http://uk2.php.net/manual/en/function.date.php" href="http://uk2.php.net/manual/en/function.date.php" rel="nofollow">date</a> function).</td>
				</tr>
				<tr>
					<td><code>o_date_format</code></td>
					<td><code>&ldquo;j M Y&rdquo;</code></td>
					<td>The default date format string (see the PHP <a title="http://uk2.php.net/manual/en/function.date.php" href="http://uk2.php.net/manual/en/function.date.php" rel="nofollow">date</a> function).</td>
				</tr>
				<tr>
					<td><code>o_timeout_visit</code></td>
					<td><code>&ldquo;1800&rdquo;</code></td>
					<td>Number of seconds a user must be idle before his/hers last visit data is updated (primarily affects new message indicators).</td>
				</tr>
				<tr>
					<td><code>o_timeout_online</code></td>
					<td><code>&ldquo;300&rdquo;</code></td>
					<td>Number of seconds a user must be idle before being removed from the online users list.</td>
				</tr>
				<tr>
					<td><code>o_show_user_info</code></td>
					<td><code>&ldquo;1&rdquo;</code></td>
					<td>Show users information (such as location, registration date, contact link, etc…) with their comments?</td>
				</tr>
				<tr>
					<td><code>o_show_comment_count</code></td>
					<td><code>&ldquo;1&rdquo;</code></td>
					<td>Show users comment count?</td>
				</tr>
				<tr>
					<td><code>o_signatures</code></td>
					<td><code>&ldquo;1&rdquo;</code></td>
					<td>Enable the use of signatures?</td>
				</tr>
				<tr>
					<td><code>o_smilies_sig</code></td>
					<td><code>&ldquo;1&rdquo;</code></td>
					<td>Allow the user of smilies inside users signatures?</td>
				</tr>
				<tr>
					<td><code>o_make_links</code></td>
					<td><code>&ldquo;1&rdquo;</code></td>
					<td>Automatically convert URLs in comments to links?</td>
				</tr>
				<tr>
					<td><code>o_default_lang</code></td>
					<td><code>&ldquo;English&rdquo;</code>*</td>
					<td>The default language pack to be used.</td>
				</tr>
				<tr>
					<td><code>o_default_style</code></td>
					<td><code>&ldquo;Fifteen&rdquo;</code>*</td>
					<td>The default theme to be used.</td>
				</tr>
				<tr>
					<td><code>o_default_accent</code></td>
					<td><code>&ldquo;1&rdquo;</code>*</td>
					<td>The default accent color that will be applied to the theme.</td>
				</tr>
				<tr>
					<td><code>o_allow_accent_color</code></td>
					<td><code>&ldquo;1&rdquo;</code>*</td>
					<td>Allow users to set their own accent color.</td>
				</tr>
				<tr>
					<td><code>o_allow_night_mode</code></td>
					<td><code>&ldquo;1&rdquo;</code>*</td>
					<td>Allow users to use night mode.</td>
				</tr>
				<tr>
					<td><code>o_default_user_group</code></td>
					<td><code>&ldquo;4&rdquo;</code></td>
					<td>The ID of the group which members should be in when they first register. Usually this is <a href="constants.php">LUNA_MEMBER</a>.</td>
				</tr>
				<tr>
					<td><code>o_disp_threads</code></td>
					<td><code>&ldquo;30&rdquo;</code></td>
					<td>The amount of threads that should be displayed per page by default.</td>
				</tr>
				<tr>
					<td><code>o_disp_comments</code></td>
					<td><code>&ldquo;25&rdquo;</code></td>
					<td>The amount of comments that should be displayed per page by default.</td>
				</tr>
				<tr>
					<td><code>o_indent_num_spaces</code></td>
					<td><code>&ldquo;4&rdquo;</code></td>
					<td>The amount of spaces to turn each tab into within code boxes.</td>
				</tr>
				<tr>
					<td><code>o_quote_depth</code></td>
					<td><code>&ldquo;3&rdquo;</code></td>
					<td>The maximum amount of quotes that can be nested inside each other.</td>
				</tr>
				<tr>
					<td><code>o_users_online</code></td>
					<td><code>&ldquo;1&rdquo;</code></td>
					<td>Display a list of users currently on-line on the index page?</td>
				</tr>
				<tr>
					<td><code>o_censoring</code></td>
					<td><code>&ldquo;0&rdquo;</code></td>
					<td>Enable the use of censoring?</td>
				</tr>
				<tr>
					<td><code>o_ranks</code></td>
					<td><code>&ldquo;1&rdquo;</code></td>
					<td>Enable the use of ranks?</td>
				</tr>
				<tr>
					<td><code>o_has_commented</code></td>
					<td><code>&ldquo;1&rdquo;</code></td>
					<td>Enable the use of commented indications?</td>
				</tr>
				<tr>
					<td><code>o_thread_views</code></td>
					<td><code>&ldquo;1&rdquo;</code></td>
					<td>Enable the counting of views each thread receives?</td>
				</tr>
				<tr>
					<td><code>o_gzip</code></td>
					<td><code>&ldquo;0&rdquo;</code></td>
					<td>GZip the generated <abbr title="HyperText Markup Language">HTML</abbr>?</td>
				</tr>
				<tr>
					<td><code>o_report_method</code></td>
					<td><code>&ldquo;0&rdquo;</code></td>
					<td>How should reports be displayed? 0 = Internal, 1 = By email, 2 = Both internal and by email.</td>
				</tr>
				<tr>
					<td><code>o_regs_report</code></td>
					<td><code>&ldquo;0&rdquo;</code></td>
					<td>Should new registrations be emailed to the mailing list (see o_mailing_list)?</td>
				</tr>
				<tr>
					<td><code>o_default_email_setting</code></td>
					<td><code>&ldquo;1&rdquo;</code></td>
					<td>What should the default email setting be for newly registered users? 0 = Display email address, 1 = Hide email address but allow form emails, 2 = Hide email address and disallow form emails.</td>
				</tr>
				<tr>
					<td><code>o_mailing_list</code></td>
					<td><code>&ldquo;&rdquo;</code></td>
					<td>A comma separated list of email addresses to which reports should be delivered.</td>
				</tr>
				<tr>
					<td><code>o_avatars</code></td>
					<td><code>&ldquo;1&rdquo;</code></td>
					<td>Enable the use of users avatars?</td>
				</tr>
				<tr>
					<td><code>o_avatars_dir</code></td>
					<td><code>&ldquo;img/avatars&rdquo;</code></td>
					<td>The (relative) path of the directory where users avatars should be stored.</td>
				</tr>
				<tr>
					<td><code>o_avatars_width</code></td>
					<td><code>&ldquo;128&rdquo;</code></td>
					<td>The maximum width (in pixels) that a users avatar may be.</td>
				</tr>
				<tr>
					<td><code>o_avatars_height</code></td>
					<td><code>&ldquo;128&rdquo;</code></td>
					<td>The maximum height (in pixels) that a users avatar may be.</td>
				</tr>
				<tr>
					<td><code>o_avatars_size</code></td>
					<td><code>&ldquo;30720&rdquo;</code></td>
					<td>The maximum size (in bytes) that a users avatar may be.</td>
				</tr>
				<tr>
					<td><code>o_search_all_forums</code></td>
					<td><code>&ldquo;1&rdquo;</code></td>
					<td>Allow users to search all forums at once?</td>
				</tr>
				<tr>
					<td><code>o_base_url</code></td>
					<td><code>&ldquo;<a title="http://www.example.org/forums" href="http://www.example.org/forums" rel="nofollow">http://www.example.org/forums</a>&rdquo;</code>*</td>
					<td>The base <abbr title="Uniform Resource Locator">URL</abbr> of the forum (without the trailing slash)</td>
				</tr>
				<tr>
					<td><code>o_admin_email</code></td>
					<td><code>&ldquo;admin@example.org&rdquo;</code>*</td>
					<td>The email address of the forum administrator.</td>
				</tr>
				<tr>
					<td><code>o_webmaster_email</code></td>
					<td><code>&ldquo;webmaster@example.org&rdquo;</code>*</td>
					<td>The email address from which emails sent should be addressed.</td>
				</tr>
				<tr>
					<td><code>o_forum_subscriptions</code></td>
					<td><code>&ldquo;1&rdquo;</code></td>
					<td>Allow users to subscribe to forums (receive an email when someone makes a new thread)?</td>
				</tr>
				<tr>
					<td><code>o_thread_subscriptions</code></td>
					<td><code>&ldquo;1&rdquo;</code></td>
					<td>Allow users to subscribe to threads (receive an email when someone makes a reply)?</td>
				</tr>
				<tr>
					<td><code>o_first_run_message</code></td>
					<td><code>&ldquo;Wow, it's great to have you here, welcome and thanks for joining us. We've set up your account and you're ready to go. Through we like to point out some actions you might want to do first.&rdquo;</code></td>
					<td>The text displayed in the First Run wizard. Language dependent.</td>
				</tr>
				<tr>
					<td><code>o_show_first_run</code></td>
					<td><code>&ldquo;1&rdquo;</code></td>
					<td>Enable first run for new users?</td>
				</tr>
				<tr>
					<td><code>o_first_run_guests</code></td>
					<td><code>&ldquo;1&rdquo;</code></td>
					<td>Enable first run for guests?</td>
				</tr>
				<tr>
					<td><code>o_first_run_backstage</code></td>
					<td><code>&ldquo;0&rdquo;</code></td>
					<td>Show first run in the Backstage?</td>
				</tr>
				<tr>
					<td><code>o_smtp_host</code></td>
					<td><code>NULL</code></td>
					<td>The hostname or IP address of the SMTP server you wish to use (only if you do not want to use the internal PHP <a title="http://uk2.php.net/manual/en/function.mail.php" href="http://uk2.php.net/manual/en/function.mail.php" rel="nofollow">mail</a> function).</td>
				</tr>
				<tr>
					<td><code>o_smtp_user</code></td>
					<td><code>NULL</code></td>
					<td>The username for the SMTP server, if one is required.</td>
				</tr>
				<tr>
					<td><code>o_smtp_pass</code></td>
					<td><code>NULL</code></td>
					<td>The password for the SMTP server, if one is required.</td>
				</tr>
				<tr>
					<td><code>o_smtp_ssl</code></td>
					<td><code>&ldquo;0&rdquo;</code></td>
					<td>Does the SMTP server require SSL?</td>
				</tr>
				<tr>
					<td><code>o_regs_allow</code></td>
					<td><code>&ldquo;1&rdquo;</code></td>
					<td>Allow new users to register?</td>
				</tr>
				<tr>
					<td><code>o_regs_verify</code></td>
					<td><code>&ldquo;0&rdquo;</code></td>
					<td>Verify new registrations by sending a verification email to their email address?</td>
				</tr>
				<tr>
					<td><code>o_video_width</code></td>
					<td><code>&ldquo;640&rdquo;</code></td>
					<td>The width of an embedded video.</td>
				</tr>
				<tr>
					<td><code>o_video_height</code></td>
					<td><code>&ldquo;360&rdquo;</code></td>
					<td>The height of an embedded video.</td>
				</tr>
				<tr>
					<td><code>o_advanced_search</code></td>
					<td><code>&ldquo;1&rdquo;</code></td>
					<td>Enable the use of advanced search?</td>
				</tr>
				<tr>
					<td><code>o_announcement</code></td>
					<td><code>&ldquo;0&rdquo;</code></td>
					<td>Display an announcement? This shows the announcement message set in o_announcement_message in an announcement box on every forum page.</td>
				</tr>
				<tr>
					<td><code>o_announcement_message</code></td>
					<td><code>&ldquo;Announcement&rdquo;</code></td>
					<td>An announcement message to show on every forum page when announcements are enabled.</td>
				</tr>
				<tr>
					<td><code>o_announcement_title</code></td>
					<td><code>&ldquo;NULL&rdquo;</code></td>
					<td>The title of your announcement.</td>
				</tr>
				<tr>
					<td><code>o_announcement_type</code></td>
					<td><code>&ldquo;info&rdquo;</code></td>
					<td>The design the announcement should use, can be none, info, warning, danger and success.</td>
				</tr>
				<tr>
					<td><code>o_rules</code></td>
					<td><code>&ldquo;0&rdquo;</code></td>
					<td>Enable the use of forum rules?</td>
				</tr>
				<tr>
					<td><code>o_rules_message</code></td>
					<td><code>&ldquo;Rules&rdquo;</code></td>
					<td>The rules for your forum. This field may contain <abbr title="HyperText Markup Language">HTML</abbr>.</td>
				</tr>
				<tr>
					<td><code>o_maintenance</code></td>
					<td><code>&ldquo;0&rdquo;</code></td>
					<td>Enable maintenance mode? This prevents anyone who isn't an administrator from using the board.</td>
				</tr>
				<tr>
					<td><code>o_maintenance_message</code></td>
					<td><code>&ldquo;The forums are temporarily down for maintenance.</code> <code>Please try again in a few minutes.&rdquo;</code></td>
					<td>A message to be displayed to anyone attempting to use the board when maintenance mode is enabled.</td>
				</tr>
				<tr>
					<td><code>o_default_dst</code></td>
					<td><code>&ldquo;0&rdquo;</code></td>
					<td>The default DST offset, either 1 or 0.</td>
				</tr>
				<tr>
					<td><code>o_feed_type</code></td>
					<td><code>&ldquo;2&rdquo;</code></td>
					<td>The type of syndication feed to use. 0 = None, 1 = RSS, 2 = Atom.</td>
				</tr>
				<tr>
					<td><code>o_feed_ttl</code></td>
					<td><code>&ldquo;0&rdquo;</code></td>
					<td>The duration (in minutes) to cache certain feed pages.</td>
				</tr>
				<tr>
					<td><code>o_cookie_bar</code></td>
					<td><code>&ldquo;1&rdquo;</code></td>
					<td>Display a cookie bar.</td>
				</tr>
				<tr>
					<td><code>o_cookie_bar_url</code></td>
					<td><code>&ldquo;http://getluna.org/docs/cookies.php&rdquo;</code></td>
					<td>The URL where to get more info on cookies, by default it points to this documentation.</td>
				</tr>
				<tr>
					<td><code>o_emoji</code></td>
					<td><code>&ldquo;0&rdquo;</code></td>
					<td>Enable emojis instead of emoticons.</td>
				</tr>
				<tr>
					<td><code>o_emoji_size</code></td>
					<td><code>&ldquo;16&rdquo;</code></td>
					<td>The font size of emojis when used.</td>
				</tr>
				<tr>
					<td><code>o_admin_notes</code></td>
					<td><code>&ldquo;NULL&rdquo;</code></td>
					<td>Saves the admin note in the Backstage index.</td>
				</tr>
				<tr>
					<td><code>o_pms_enabled</code></td>
					<td><code>&ldquo;1&rdquo;</code></td>
					<td>Use the Inbox private messaging system.</td>
				</tr>
				<tr>
					<td><code>o_pms_mess_per_page</code></td>
					<td><code>&ldquo;10&rdquo;</code></td>
					<td>Amount of messages per page in Inbox.</td>
				</tr>
				<tr>
					<td><code>o_pms_max_receiver</code></td>
					<td><code>&ldquo;5&rdquo;</code></td>
					<td>The maximum amount of receivers per message.</td>
				</tr>
				<tr>
					<td><code>o_emoji_size</code></td>
					<td><code>&ldquo;16&rdquo;</code></td>
					<td>The size of an emoticon.</td>
				</tr>
				<tr>
					<td><code>o_back_to_top</code></td>
					<td><code>&ldquo;1&rdquo;</code></td>
					<td>Display a &quot;Back to top&quot; link in the footer.</td>
				</tr>
				<tr>
					<td><code>o_show_copyright</code></td>
					<td><code>&ldquo;1&rdquo;</code></td>
					<td>Show the copyright in the footer.</td>
				</tr>
				<tr>
					<td><code>o_copyright_type</code></td>
					<td><code>&ldquo;0&rdquo;</code></td>
					<td>Customize copyright to your own or use the automatically generated copyright.</td>
				</tr>
				<tr>
					<td><code>o_custom_copyright</code></td>
					<td><code>NULL</code></td>
					<td>Show a custom copyright text in the footer.</td>
				</tr>
				<tr>
					<td><code>o_header_search</code></td>
					<td><code>&ldquo;1&rdquo;</code></td>
					<td>Display a search box in the header (theme dependend).</td>
				</tr>
				<tr>
					<td><code>o_board_statistics</code></td>
					<td><code>&ldquo;1&rdquo;</code></td>
					<td>Show the board statistics (theme depended).</td>
				</tr>
				<tr>
					<td><code>o_notification_flyout</code></td>
					<td><code>&ldquo;1&rdquo;</code></td>
					<td>Show a flyout when clicking on the notification icon, or go directly to the page (theme depended).</td>
				</tr>
				<tr>
					<td><code>o_update_ring</code></td>
					<td><code>&ldquo;1&rdquo;</code></td>
					<td>The current Update Ring where Luna checks for updates.</td>
				</tr>
				<tr>
					<td><code>p_message_bbcode</code></td>
					<td><code>&ldquo;1&rdquo;</code></td>
					<td>Enable the use of bbcode within comments?</td>
				</tr>
				<tr>
					<td><code>p_message_img_tag</code></td>
					<td><code>&ldquo;1&rdquo;</code></td>
					<td>Enable the use of image tags within comments?</td>
				</tr>
				<tr>
					<td><code>p_message_all_caps</code></td>
					<td><code>&ldquo;1&rdquo;</code></td>
					<td>Allow users to comment a message containing all capitals?</td>
				</tr>
				<tr>
					<td><code>p_subject_all_caps</code></td>
					<td><code>&ldquo;1&rdquo;</code></td>
					<td>Allow users to comment a message with the subject containing all capitals?</td>
				</tr>
				<tr>
					<td><code>p_sig_all_caps</code></td>
					<td><code>&ldquo;1&rdquo;</code></td>
					<td>Allow users to have a signature made up of all capitals?</td>
				</tr>
				<tr>
					<td><code>p_sig_bbcode</code></td>
					<td><code>&ldquo;1&rdquo;</code></td>
					<td>Enable the use of bbcode within signatures?</td>
				</tr>
				<tr>
					<td><code>p_sig_img_tag</code></td>
					<td><code>&ldquo;0&rdquo;</code></td>
					<td>Enable the use of image tags within signatures?</td>
				</tr>
				<tr>
					<td><code>p_sig_length</code></td>
					<td><code>&ldquo;400&rdquo;</code></td>
					<td>The maximum length of a users signature (in characters).</td>
				</tr>
				<tr>
					<td><code>p_sig_lines</code></td>
					<td><code>&ldquo;4&rdquo;</code></td>
					<td>The maximum number of lines a users signature may contain.</td>
				</tr>
				<tr>
					<td><code>p_allow_banned_email</code></td>
					<td><code>&ldquo;1&rdquo;</code></td>
					<td>Allow users to register with a banned email address? If enabled the registration will be allowed but an alert will be sent to the mailing list (see o_mailing_list).</td>
				</tr>
				<tr>
					<td><code>p_allow_dupe_email</code></td>
					<td><code>&ldquo;0&rdquo;</code></td>
					<td>Allow users to register with an email address that is already being used? If enabled an alert will be sent to the mailing list (see o_mailing_list) when a duplicate is detected.</td>
				</tr>
				<tr>
					<td><code>p_force_guest_email</code></td>
					<td><code>&ldquo;1&rdquo;</code></td>
					<td>Require guests to supply an email address when commenting?</td>
				</tr>
			</tbody>
		</table>
		<p>* These values depend on the information given during installation of Luna or the version you have installed, and do not have a default as such.</li>
<pre><code class="language-php">// Get the forum config from the DB
$result = $db-&gt;query('SELECT * FROM '.$db-&gt;prefix.'config', true) or error('Unable to fetch forum config', __FILE__, __LINE__, $db-&gt;error());
while ($cur_config_item = $db-&gt;fetch_row($result))
$luna_config[$cur_config_item[0]] = $cur_config_item[1];</code></pre>
		<h3>$luna_bans</h3>
		<p>The <code>$luna_bans</code> variable is an array of currently active bans which should be enforced, taken from the <a href="dbstructure.php">bans</a> database table. Like the <code>$luna_config</code> variable it is also <a href="caching.php">cached</a>.</li>
<pre><code class="language-php">// Get the ban list from the DB
$result = $db-&gt;query('SELECT * FROM '.$db-&gt;prefix.'bans', true) or error('Unable to fetch ban list', __FILE__, __LINE__, $db-&gt;error());
while ($cur_ban = $db-&gt;fetch_assoc($result))
$luna_bans[] = $cur_ban;</code></pre>
		<h2>Other variables</h2>
		<p>The below variables are available globally, but are generally there for just one specific purpose.</li>
		<h3>$luna_start</h3>
		<p>The time the script was started (in microseconds). This is used when debug is enabled to calculate the script generation time.</li>
		<pre><code class="language-php">$luna_start = get_microtime();</code></pre>
	</div>
</div>
<?php include '../include/footer.php' ?>