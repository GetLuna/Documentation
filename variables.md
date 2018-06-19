# Global variables
Below is a list of global variables which can be found within any Luna script (i.e. are set when `include/common.php` is included). The most used and important ones are probably `$db`, `$luna_user` and `$luna_config`.

## Configuration variables
The below variables are defined by the admin within config.php during installation. Usually they should not be needed once the database connection has been set up and the users cookie has been authenticated.

### `$db_type`
The type of database being used by Luna. Valid values are `mysql`, `mysqli_innodb`, `mysqli`, `mysqli_innodb`, `pgsql`, `sqlite` or `sqlite3`.

### `$db_host`
The hostname or IP address (and port if non-standard) of the database server being used.

### `$db_name`
The name of the database being used.

### `$db_username`
The username required to access the database.

### `$db_password`
The password required to access the database.

### `$db_prefix`
The table prefix used within the database (to allow multiple Luna installs within one database). This can also (and should be) accessed using `$db→prefix`, for more information see [database layer](dblayer).

### `$cookie_name`
The name of the cookie which Luna uses to keep track of a users session.

### `$cookie_seed`
Used to seed the password hash stored within the users cookie.

---

## Core variables
The variables below are the most important global variables within Luna.

### `$db`
The `$db` variable is an instance of the [database layer](dblayer), used for communicating with the underlying database. For more information please see the [database layer](dblayer) page.

### `$luna_user`
The `$luna_user` variable is an associative array which holds information (taken from the [users and groups](dbstructure) database tables) about the current logged in user (or guest).

As well as the information from the users and groups tables it also holds a few other values:

| Key | Description |
| --- | --- |
| `logged` | A UNIX timestamp representing the time the user logged in. |
| `idle` | If the user is idle or not (i.e. their last visit was more than o_timeout_online seconds ago, but less than o_timeout_visit seconds ago). |
| `is_guest` | A boolean value, true if the current user is a guest and false if they are a logged in user. |
| `is_admmod` | A boolean value, true if the current user is a moderator or administrator. |

```php
$result = $db->query('SELECT u.*, g.*, o.logged, o.idle FROM '.$db->prefix.'users AS u INNER JOIN '.$db->prefix.'groups AS g ON u.group_id=g.g_id LEFT JOIN '.$db->prefix.'online AS o ON o.user_id=u.id WHERE u.id='.intval($cookie['user_id'])) or error('Unable to fetch user information', __FILE__, __LINE__, $db->error());
$luna_user = $db->fetch_assoc($result);	

$luna_user['is_guest'] = false;
$luna_user['is_admmod'] = $luna_user['g_id'] == LUNA_ADMIN || $luna_user['g_moderator'] == '1';
```

### `$luna_config`
The `$luna_config` variable holds an associative array with the contents of the [config](dbstructure) database table. Please note that to save querying the database on every page load this variable is [cached](caching), simply updating the database will not cause the cache to refresh.

| Name | Default value | Description |
| --- | --- | --- |
| `o_cur_version` | `"1.3.0"`* | The current version of Luna that is installed. |
| `o_core_version` | `"1.3.5118"`* | The current version of Luna core that is installed. |
| `o_code_name` | `"denim"`* | The current name of Luna core that is installed. |
| `o_database_revision` | `"90.70"`* | The current version of the database structure. |
| `o_searchindex_revision` | `"2.0"`* | The current version of the search index engine. During an update if this increments all comments will be indexed again. |
| `o_parser_revision` | `"11.2.0"`* | The current version of the parser. During an update, if this increments all comments will be preparsed again. |
| `o_board_title` | `"Denim"`* | The title of the forum, by default Luna uses its current code name. |
| `o_board_desc` | `"You can do anything"`* | A short description of the forum, usually displayed below the board title, by default the Luna slogan. |
| `o_default_timezone` | `"0"` | The default time zone (offset from UTC). |
| `o_time_format` | `"H:i"` | The default time format string (see the PHP [date](http://uk2.php.net/manual/en/function.date.php) function). |
| `o_date_format` | `"j M Y"` | The default date format string (see the PHP [date](http://uk2.php.net/manual/en/function.date.php) function). |
| `o_timeout_visit` | `"1800"` | Number of seconds a user must be idle before his/hers last visit data is updated (primarily affects new message indicators). |
| `o_timeout_online` | `"300"` | Number of seconds a user must be idle before being removed from the online users list. |
| `o_show_user_info` | `"1"` | Show users information (such as location, registration date, contact link, etc…) with their comments? |
| `o_show_comment_count` | `"1"` | Show users comment count? |
| `o_signatures` | `"1"` | Enable the use of signatures? |
| `o_smilies_sig` | `"1"` | Allow the user of smilies inside users signatures? |
| `o_make_links` | `"1"` | Automatically convert URLs in comments to links? |
| `o_default_lang` | `"English"`* | The default language pack to be used. |
| `o_default_style` | `"Fifteen"`* | The default theme to be used. |
| `o_default_accent` | `"1"`* | The default accent color that will be applied to the theme. |
| `o_allow_accent_color` | `"1"`* | Allow users to set their own accent color. |
| `o_allow_night_mode` | `"1"`* | Allow users to use night mode. |
| `o_default_user_group` | `"4"` | The ID of the group which members should be in when they first register. Usually this is `LUNA_MEMBER`. |
| `o_disp_threads` | `"30"` | The amount of threads that should be displayed per page by default. |
| `o_disp_comments` | `"25"` | The amount of comments that should be displayed per page by default. |
| `o_indent_num_spaces` | `"4"` | The amount of spaces to turn each tab into within code boxes. |
| `o_quote_depth` | `"3"` | The maximum amount of quotes that can be nested inside each other. |
| `o_users_online` | `"1"` | Display a list of users currently on-line on the index page? |
| `o_censoring` | `"0"` | Enable the use of censoring? |
| `o_ranks` | `"1"` | Enable the use of ranks? |
| `o_has_commented` | `"1"` | Enable the use of commented indications? |
| `o_thread_views` | `"1"` | Enable the counting of views each thread receives? |
| `o_gzip` | `"0"` | GZip the generated HTML? |
| `o_report_method` | `"0"` | How should reports be displayed? 0 = Internal, 1 = By email, 2 = Both internal and by email. |
| `o_regs_report` | `"0"` | Should new registrations be emailed to the mailing list (see o_mailing_list)? |
| `o_default_email_setting` | `"1"` | What should the default email setting be for newly registered users? 0 = Display email address, 1 = Hide email address but allow form emails, 2 = Hide email address and disallow form emails. |
| `o_mailing_list` | `""` | A comma separated list of email addresses to which reports should be delivered. |
| `o_avatars` | `"1"` | Enable the use of users avatars? |
| `o_avatars_dir` | `"img/avatars"` | The (relative) path of the directory where users avatars should be stored. |
| `o_avatars_width` | `"128"` | The maximum width (in pixels) that a users avatar may be. |
| `o_avatars_height` | `"128"` | The maximum height (in pixels) that a users avatar may be. |
| `o_avatars_size` | `"30720"` | The maximum size (in bytes) that a users avatar may be. |
| `o_search_all_forums` | `"1"` | Allow users to search all forums at once? |
| `o_base_url` | `"http://www.example.org/forums"`* | The base URL of the forum (without the trailing slash) |
| `o_admin_email` | `"admin@example.org"`* | The email address of the forum administrator. |
| `o_webmaster_email` | `"webmaster@example.org"`* | The email address from which emails sent should be addressed. |
| `o_forum_subscriptions` | `"1"` | Allow users to subscribe to forums (receive an email when someone makes a new thread)? |
| `o_thread_subscriptions` | `"1"` | Allow users to subscribe to threads (receive an email when someone makes a reply)? |
| `o_first_run_message` | `"Wow, it's great to have you here, welcome and thanks for joining us. We've set up your account and you're ready to go. Through we like to point out some actions you might want to do first."` | The text displayed in the First Run wizard. Language dependent. |
| `o_show_first_run` | `"1"` | Enable first run for new users? |
| `o_first_run_guests` | `"1"` | Enable first run for guests? |
| `o_first_run_backstage` | `"0"` | Show first run in the Backstage? |
| `o_smtp_host` | `NULL` | The hostname or IP address of the SMTP server you wish to use (only if you do not want to use the internal PHP [mail](http://uk2.php.net/manual/en/function.mail.php) function). |
| `o_smtp_user` | `NULL` | The username for the SMTP server, if one is required. |
| `o_smtp_pass` | `NULL` | The password for the SMTP server, if one is required. |
| `o_smtp_ssl` | `"0"` | Does the SMTP server require SSL? |
| `o_regs_allow` | `"1"` | Allow new users to register? |
| `o_regs_verify` | `"0"` | Verify new registrations by sending a verification email to their email address? |
| `o_video_width` | `"640"` | The width of an embedded video. |
| `o_video_height` | `"360"` | The height of an embedded video. |
| `o_advanced_search` | `"1"` | Enable the use of advanced search? |
| `o_announcement` | `"0"` | Display an announcement? This shows the announcement message set in o_announcement_message in an announcement box on every forum page. |
| `o_announcement_message` | `"Announcement"` | An announcement message to show on every forum page when announcements are enabled. |
| `o_announcement_title` | `"NULL"` | The title of your announcement. |
| `o_announcement_type` | `"info"` | The design the announcement should use, can be none, info, warning, danger and success. |
| `o_rules` | `"0"` | Enable the use of forum rules? |
| `o_rules_message` | `"Rules"` | The rules for your forum. This field may contain HTML. |
| `o_maintenance` | `"0"` | Enable maintenance mode? This prevents anyone who isn't an administrator from using the board. |
| `o_maintenance_message` | `"The forums are temporarily down for maintenance.` `Please try again in a few minutes."` | A message to be displayed to anyone attempting to use the board when maintenance mode is enabled. |
| `o_default_dst` | `"0"` | The default DST offset, either 1 or 0. |
| `o_feed_type` | `"2"` | The type of syndication feed to use. 0 = None, 1 = RSS, 2 = Atom. |
| `o_feed_ttl` | `"0"` | The duration (in minutes) to cache certain feed pages. |
| `o_cookie_bar` | `"1"` | Display a cookie bar. |
| `o_cookie_bar_url` | `"http://getluna.org/docs/cookies.php"` | The URL where to get more info on cookies, by default it points to this documentation. |
| `o_emoji` | `"0"` | Enable emojis instead of emoticons. |
| `o_emoji_size` | `"16"` | The font size of emojis when used. |
| `o_admin_notes` | `"NULL"` | Saves the admin note in the Backstage index. |
| `o_pms_enabled` | `"1"` | Use the Inbox private messaging system. |
| `o_pms_mess_per_page` | `"10"` | Amount of messages per page in Inbox. |
| `o_pms_max_receiver` | `"5"` | The maximum amount of receivers per message. |
| `o_emoji_size` | `"16"` | The size of an emoticon. |
| `o_back_to_top` | `"1"` | Display a "Back to top" link in the footer. |
| `o_show_copyright` | `"1"` | Show the copyright in the footer. |
| `o_copyright_type` | `"0"` | Customize copyright to your own or use the automatically generated copyright. |
| `o_custom_copyright` | `NULL` | Show a custom copyright text in the footer. |
| `o_header_search` | `"1"` | Display a search box in the header (theme dependend). |
| `o_board_statistics` | `"1"` | Show the board statistics (theme depended). |
| `o_notification_flyout` | `"1"` | Show a flyout when clicking on the notification icon, or go directly to the page (theme depended). |
| `o_update_ring` | `"1"` | The current Update Ring where Luna checks for updates. |
| `p_message_bbcode` | `"1"` | Enable the use of bbcode within comments? |
| `p_message_img_tag` | `"1"` | Enable the use of image tags within comments? |
| `p_message_all_caps` | `"1"` | Allow users to comment a message containing all capitals? |
| `p_subject_all_caps` | `"1"` | Allow users to comment a message with the subject containing all capitals? |
| `p_sig_all_caps` | `"1"` | Allow users to have a signature made up of all capitals? |
| `p_sig_bbcode` | `"1"` | Enable the use of bbcode within signatures? |
| `p_sig_img_tag` | `"0"` | Enable the use of image tags within signatures? |
| `p_sig_length` | `"400"` | The maximum length of a users signature (in characters). |
| `p_sig_lines` | `"4"` | The maximum number of lines a users signature may contain. |
| `p_allow_banned_email` | `"1"` | Allow users to register with a banned email address? If enabled the registration will be allowed but an alert will be sent to the mailing list (see o_mailing_list). |
| `p_allow_dupe_email` | `"0"` | Allow users to register with an email address that is already being used? If enabled an alert will be sent to the mailing list (see o_mailing_list) when a duplicate is detected. |
| `p_force_guest_email` | `"1"` | Require guests to supply an email address when commenting? |

*These values depend on the information given during installation of Luna or the version you have installed, and do not have a default as such.

```php
// Get the forum config from the DB
$result = $db->query('SELECT * FROM '.$db->prefix.'config', true) or error('Unable to fetch forum config', __FILE__, __LINE__, $db->error());
while ($cur_config_item = $db->fetch_row($result))
$luna_config[$cur_config_item[0]] = $cur_config_item[1];
```

### `$luna_bans`
The `$luna_bans` variable is an array of currently active bans which should be enforced, taken from the [bans](dbstructure) database table. Like the `$luna_config` variable it is also [cached](caching).

```php
// Get the ban list from the DB
$result = $db->query('SELECT * FROM '.$db->prefix.'bans', true) or error('Unable to fetch ban list', __FILE__, __LINE__, $db->error());
while ($cur_ban = $db->fetch_assoc($result))
$luna_bans[] = $cur_ban;
```

## Other variables
The below variables are available globally, but are generally there for just one specific purpose.

### `$luna_start`
The time the script was started (in microseconds). This is used when debug is enabled to calculate the script generation time.

```php
$luna_start = get_microtime();
```