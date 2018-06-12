# Database structure
The following is a complete list of all Luna database tables and their structures. Foreign keys are in _italics_.

## Type conventions
* Artificial primary keys are of type `int(10)`.
* Boolean values are of type `tinyint(1)`, with the value 1 representing true and 0 representing false.

## List of tables
* bans
* categories
* censoring
* comments
* config
* forums
* forum_perms
* forum_subscriptions
* groups
* menu
* messages
* notifications
* online
* ranks
* reports
* search_cache
* search_matches
* search_words
* threads
* thread_subscriptions
* users

__Please note:__ The below descriptions are based off the database structure when using MySQL(i). In other supported RDBMS the field type and default values may vary slightly.

---

### bans
The bans table is used to hold details of all current bans. It is important to note that bans work on usernames, IP addresses or email addresses - not specific user accounts.

| Field | Type | Default | Description |
| --- | --- | --- | --- |
| _`id`_ | `int(10)` | ` ` | The auto-incrementing primary key for this table. |
| `username` | `varchar(200)` | `NULL` | The username this ban applies to, or `NULL` for none. |
| `ip` | `varchar(255)` | `NULL` | The IP address(es) this ban applies to, or `NULL` for none. |
| `email` | `varchar(80)` | `NULL` | The email address this ban applies to, or `NULL` for none. |
| `message` | `varchar(255)` | `NULL` | A message to be displayed to the banned user. |
| `expire` | `int(10)` | `NULL` | A UNIX timestamp representing the time the ban should expire. |
| `ban_creator` | `int(10)` | `0` | The ID of the user who created the ban. |

### categories
| Field | Type | Default | Description |
| --- | --- | --- | --- |
| _`id`_ | `int(10)` | ` ` | The auto-incrementing primary key for this table. |
| `cat_name` | `varchar(80)` | `"New Category"` | The name of the category. |
| `disp_position` | `int(10)` | `0` | The position of this category in relation to the others. |

### censoring
| Field | Type | Default | Description |
| --- | --- | --- | --- |
| _`id`_ | `int(10)` | ` ` | The auto-incrementing primary key for this table. |
| `search_for` | `varchar(60)` | `""` | The term to search for. |
| `replace_with` | `varchar(60)` | `""` | The term to replace with. |

### config
The config table holds key, value pairs for all the main configuration options. For performance reasons Luna caches these values and will only refresh the cache when they are updated via the admin panel.

For more information about the actual contents of the config table, see the $luna_config global variable.

| Field | Type | Default | Description |
| --- | --- | --- | --- |
| _`conf_name`_ | `varchar(255)` | `""` | The name of the configuration variable. General configuration options start with the prefix o_ and general permission options start with the prefix p_. |
| `conf_value` | `text` | `NULL` | The value of the configuration variable. |

### forums
| Field | Type | Default | Description |
| --- | --- | --- | --- |
| _`id`_ | `int(10)` | ` ` | The auto-incrementing primary key for this table. |
| `forum_name` | `varchar(80)` | `"New forum"` | The name of the forum. |
| `forum_desc` | `text` | `NULL` | A description of the forum (may contain HTML). |
| `moderators` | `text` | `NULL` | A serialized associative PHP array with moderator names ⇒ user IDs. |
| `num_threads` | `mediumint(8)` | `0` | The number of threads the forum contains. |
| `num_comments` | `mediumint(8)` | `0` | The number of comments the forum contains. |
| `last_comment` | `int(10)` | `NULL` | A UNIX timestamp representing the time the last comment was made in the forum. |
| `last_comment_id` | `int(10)` | `NULL` | The ID of the last comment that was made in the forum. |
| `last_commenter_id` | `int(10)` | `NULL` | The ID of the last user that commented. |
| `sort_by` | `tinyint(1)` | `0` | How the comments in the forum should be sorted. 0 = By last comment time, 1 = By thread start time. |
| `disp_position` | `int(10)` | `0` | The position of this forum in relation to the others. |
| `cat_id` | `int(10)` | `0` | The ID of the category in which this forum resides. |
| `color` | `varchar(25)` | `#0d4382` | The color of the forum. |
| `parent_id` | `int(11)` | `0` | The ID of the parent forum. |

### forum_perms
| Field | Type | Default | Description |
| --- | --- | --- | --- |
| _`group_id`_ | `int(10)` | `0` | The ID of the group this permission set applies to. |
| _`forum_id`_ | `int(10)` | `0` | The ID of the forum this permission set applies to. |
| `read_forum` | `tinyint(1)` | `1` | Allow members of the group to view this forum? |
| `comment_replies` | `tinyint(1)` | `1` | Allow members of the group to comment replies in this forum? |
| `comment_threads` | `tinyint(1)` | `1` | Allow members of the group to start new threads in this forum? |

### forum_subscriptions
| Field | Type | Default | Description |
| --- | --- | --- | --- |
| _`user_id`_ | `int(10)` | `0` | The ID of the user which this subscription belongs to. |
| _`forum_id`_ | `int(10)` | `0` | The ID of the forum which this subscription belongs to. |

### groups
All fields in the groups table are prefixed with g_. This is to allow them to be easily combined with all the fields from the users table without any conflicting field names.

| Field | Type | Default | Description |
| --- | --- | --- | --- |
| _`g_id`_ | `int(10)` | ` ` | The auto-incrementing primary key for this table. |
| `g_title` | `varchar(50)` | `""` | The name of this group. |
| `g_user_title` | `varchar(50)` | `NULL` | The user title to be used for members of this group. |
| `g_moderator` | `tinyint(1)` | `0` | Does this group have moderator privileges? |
| `g_mod_edit_users` | `tinyint(1)` | `0` | If g_moderator, can members of this group edit users profiles? |
| `g_mod_rename_users` | `tinyint(1)` | `0` | If g_moderator, can members of this group rename users? |
| `g_mod_change_passwords` | `tinyint(1)` | `0` | If g_moderator, can members of this group change users passwords? |
| `g_mod_ban_users` | `tinyint(1)` | `0` | If g_moderator, can members of this group ban users? |
| `g_read_board` | `tinyint(1)` | `1` | Can members of this group view boards? If this is 0 the group basically has no access to the forums. |
| `g_view_users` | `tinyint(1)` | `1` | Can members of this group view the user list? |
| `g_comment_replies` | `tinyint(1)` | `1` | Can members of this group comment replies? |
| `g_comment_threads` | `tinyint(1)` | `1` | Can members of this group start new threads? |
| `g_edit_comments` | `tinyint(1)` | `1` | Can members of this group edit their own comments? |
| `g_delete_comments` | `tinyint(1)` | `1` | Can members of this group delete their own comments? |
| `g_delete_threads` | `tinyint(1)` | `1` | Can members of this group delete their own threads (including all replies)? |
| `g_set_title` | `tinyint(1)` | `1` | Can members of this group set their own user title? |
| `g_search` | `tinyint(1)` | `1` | Can members of this group use the search features? |
| `g_search_users` | `tinyint(1)` | `1` | Can members of this group search the user list? |
| `g_send_email` | `tinyint(1)` | `1` | Can members of this group send emails to users? |
| `g_comment_flood` | `smallint(6)` | `30` | How many seconds members of this group must wait between making comments. |
| `g_search_flood` | `smallint(6)` | `30` | How many seconds members of this group must wait between making search requests. |
| `g_email_flood` | `smallint(6)` | `60` | How many seconds members of this group must wait between sending emails. |
| `g_pm` | `tinyint(1)` | `1` | Wheter or not the user is allowed to use Inbox. |
| `g_pm_limit` | `int(11)` | `20` | The maximum amount of Inbox items an user can store. |
| `g_report_flood` | `smallint(6)` | `60` | Amount of seconds that have to pass between reports. |
| `g_soft_delete_view` | `tinyint(1)` | `1` | Allow the group to view soft deleted items. |
| `g_soft_delete_comments` | `tinyint(1)` | `1` | Allow the group to soft delete comments. |
| `g_soft_delete_threads` | `tinyint(1)` | `1` | Allow the group to soft delete threads. |

### menu
| Field | Type | Default | Description |
| --- | --- | --- | --- |
| _`id`_ | `int(10)` | `NULL` | The ID of the menu item. |
| `url` | `varchar(200)` | `NULL` | The URL to which the menu item should point. |
| `name` | `varchar(200)` | `NULL` | The title of the menu item. |
| `disp_position` | `int(10)` | `0` | The order in which the item should be displayed. |
| `visible` | `int(10)` | `NULL` | Disable or enable the menu item. |
| `sys_entry` | `int(10)` | `NULL` | Check wheter or not this is pre-installed item that can't be removed. |

### messages
| Field | Type | Default | Description |
| --- | --- | --- | --- |
| _`id`_ | `int(10)` | `NULL` | The ID of the message. |
| `shared_id` | `int(10)` | `0` | &nbsp; |
| `last_shared_id` | `int(10)` | `0` | &nbsp; |
| `last_comment` | `int(10)` | `0` | The latest comment in the message. |
| `last_comment_id` | `int(10)` | `0` | The ID of the latest comment. |
| `last_commenter` | `varchar(255)` | `0` | The name of the last commenter. |
| `owner` | `int(11)` | `0` | The ID of the owner of the message. |
| `subject` | `varchar(255)` | `NULL` | The subject of the message. |
| `message` | `mediumtext` | `NULL` | The content of the message. |
| `hide_smilies` | `tinyint(1)` | `0` | Show or hide emoticons and emojis. |
| `show_message` | `tinyiny(1)` | `0` | &nbsp; |
| `sender` | `varchar(200)` | `NULL` | Person who  has send the message. |
| `receiver` | `varchar(200)` | `NULL` | Person who has received the message. |
| `sender_id` | `int(10)` | `0` | ID of the sender. |
| `receiver_id` | `varchar(255)` | `0` | ID of the receivers. |
| `sender_ip` | `varchar(39)` | `NULL` | The IP of the sender. |
| `commented` | `int(10)` | `NULL` | &nbsp; |
| `showed` | `tinyint(1)` | `0` | Is the message showed or not. |

### notifications
| Field | Type | Default | Description |
| --- | --- | --- | --- |
| _`id`_ | `int(10)` | `NULL` | The ID of the notificiation. |
| `user_id` | `int(10)` | `0` | The ID of the user to which to notification has been send. |
| `message` | `varchar(255)` | `0` | The content of the message within the notification. |
| `icon` | `varchar(255)` | `0` | The Font Awesome icon used by the message. |
| `link` | `varchar(255)` | `0` | The link to which the notification should point. |
| `time` | `int(11)` | `0` | The time when to notifcation was received. |
| `viewed` | `tinyint(1)` | `0` | Wheter or not the notification has been seen. |

### online
| Field | Type | Default | Description |
| --- | --- | --- | --- |
| `user_id` | `int(10)` | `1` | The ID of the user (or 1 if the user is a guest). |
| `ident` | `varchar(200)` | `""` | Identification string for the user (Username for logged in users, IP address for guests). |
| `logged` | `int(10)` | `0` | A UNIX timestamp representing the time of the users last activity. |
| `idle` | `tinyint(1)` | `0` | If the user is idle or not (i.e. their last visit was more than o_timeout_online seconds ago, but less than o_timeout_visit seconds ago - see the $luna_config global variable). |
| `last_comment` | `int(10)` | `NULL` | A UNIX timestamp representing the time the user last made a comment. |
| `last_search` | `int(10)` | `NULL` | A UNIX timestamp representing the time the user last performed a search. |

### comments
| Field | Type | Default | Description |
| --- | --- | --- | --- |
| _`id`_ | `int(10)` | ` ` | The auto-incrementing primary key for this table. |
| `commenter` | `varchar(200)` | `""` | The username of the user who created this comment. |
| `commenter_id` | `int(10)` | `1` | The ID of the user who created this comment. |
| `commenter_ip` | `varchar(39)` | `NULL` | The IP address of the user who created this comment. |
| `commenter_email` | `varchar(80)` | `NULL` | If the comment was created by a guest, their email address. If it was created by a logged in user, then `NULL`. |
| `message` | `mediumtext` | `NULL` | The contents of the comment. |
| `hide_smilies` | `tinyint(1)` | `0` | Should smilies be hidden in this comment? |
| `commented` | `int(10)` | `0` | A UNIX timestamp representing the time this comment was created. |
| `edited` | `int(10)` | `NULL` | A UNIX timestamp representing the time this comment was last edited, or `NULL` if it hasn't been edited. |
| `edited_by` | `varchar(200)` | `NULL` | The username of the user who last edited this comment, or `NULL` if it hasn't been edited. |
| `thread_id` | `int(10)` | `0` | The ID of the parent thread for this comment. |
| `marked` | `tinyint(1)` | `0` | If the message is reported, this will be 1. |
| `soft` | `tinyint(1)` | `0` | If the message has been soft deleted, this will be 1. |

### ranks
| Field | Type | Default | Description |
| --- | --- | --- | --- |
| _`id`_ | `int(10)` | ` ` | The auto-incrementing primary key for this table. |
| `rank` | `varchar(50)` | `""` | The rank title. |
| `min_comments` | `mediumint(8)` | `0` | The number of comments a user must attain in order to reach the rank. |

### reports
| Field | Type | Default | Description |
| --- | --- | --- | --- |
| _`id`_ | `int(10)` | ` ` | The auto-incrementing primary key for this table. |
| `comment_id` | `int(10)` | `0` | The ID of the reported comment. |
| `thread_id` | `int(10)` | `0` | The ID of thread in which the reported comment is contained. |
| `forum_id` | `int(10)` | `0` | The ID of the forum in which the reported comment is contained. |
| `reported_by` | `int(10)` | `0` | The ID of the user who created the report. |
| `created` | `int(10)` | `0` | A UNIX timestamp representing the time this report was created. |
| `message` | `text` | `NULL` | The report message entered by the user. |
| `zapped` | `int(10)` | `NULL` | A UNIX timestamp representing the time this report was zapped (marked as read). |
| `zapped_by` | `int(10)` | `NULL` | The ID of the user who zapped (marked as read) this report. |

### search_cache
| Field | Type | Default | Description |
| --- | --- | --- | --- |
| _`id`_ | `int(10)` | ` ` | The auto-incrementing primary key for this table. |
| `ident` | `varchar(200)` | `""` | An identifier for the user who initiated the search. For a guest their IP address is used, for a logged in user, their username. |
| `search_data` | `mediumtext` | `NULL` | A serialized array containing search results. |

### search_matches
| Field | Type | Default | Description |
| --- | --- | --- | --- |
| `comment_id` | `int(10)` | `0` | The ID of the comment which this word can be found. |
| `word_id` | `int(10)` | `0` | The ID of the word which can be found there. |
| `subject_match` | `tinyint(1)` | `0` | 0 = The word is in the comment body, 1 = the word is in a thread subject. |

### search_words
| Field | Type | Default | Description |
| --- | --- | --- | --- |
| `id` | `int(10)` | `0` | The auto-incrementing primary key for this table. |
| `_`word`_ | `varchar(20)` | `""` | The word to be indexed. |

### threads
| Field | Type | Default | Description |
| --- | --- | --- | --- |
| _`id`_ | `int(10)` | ` ` | The auto-incrementing primary key for this table. |
| `commenter` | `varchar(200)` | `""` | The username of the user who commented this thread. |
| `subject` | `varchar(255)` | `""` | The subject of the thread. |
| `commented` | `int(10)` | `0` | A UNIX timestamp representing the time this thread was commented. |
| `first_comment_id` | `int(10)` | `0` | The ID of the first comment in this thread. |
| `last_comment` | `int(10)` | `0` | A UNIX timestamp representing the time the last comment was made to this thread. |
| `last_comment_id` | `int(10)` | `0` | The ID of the last comment in this thread. |
| `last_commenter` | `varchar(200)` | `NULL` | The username of the user who commented the last reply to this thread. |
| `last_commenter_id` | `int(10)` | `NULL` | The ID of the user who commented the last reply to this thread. |
| `num_views` | `mediumint(8)` | `0` | The number of times this thread has been viewed. |
| `num_replies` | `mediumint(8)` | `0` | The number of replies this thread has. |
| `closed` | `tinyint(1)` | `0` | Is this thread closed? |
| `sticky` | `tinyint(1)` | `0` | Is this thread a sticky? |
| `moved_to` | `int(10)` | `NULL` | If the thread has been moved, the ID of the new thread (this one now solely acts as a redirect). |
| `forum_id` | `int(10)` | `0` | The ID of the forum this thread is within. |
| `soft` | `tinyint(1)` | `0` | Wheter or not this thread has been soft deleted. |

### thread_subscriptions
| Field | Type | Default | Description |
| --- | --- | --- | --- |
| _`user_id`_ | `int(10)` | `0` | The ID of the user which this subscription belongs to. |
| _`thread_id`_ | `int(10)` | `0` | The ID of the thread which this subscription belongs to. |

### users
| Field | Type | Default | Description |
| --- | --- | --- | --- |
| _`id`_ | `int(10)` | ` ` | The auto-incrementing primary key for this table. |
| `group_id` | `int(10)` | `3` | The ID of the group to which this user belongs. The default is LUNA_MemBER. |
| `username` | `varchar(200)` | `""` | The users username. |
| `password` | `varchar(40)` | `""` | The users password hash. |
| `email` | `varchar(80)` | `""` | The users email address. |
| `title` | `varchar(50)` | `NULL` | The user title. If this field is empty, the title from the user's usetgroup will be used. |
| `realname` | `varchar(40)` | `NULL` | The real name of the user. |
| `url` | `varchar(100)` | `NULL` | The website of the user. |
| `facebook` | `varchar(50)` | `NULL` | The Facebook address of the user. |
| `twitter` | `varchar(50)` | `NULL` | The Twitter address of the user. |
| `msn` | `varchar(80)` | `NULL` | The Microsoft Account address of the user. |
| `google` | `varchar(50)` | `NULL` | The Google+ address of the user. |
| `location` | `varchar(30)` | `NULL` | The location of the user. This can be a country, city or something else. |
| `signature` | `text` | `NULL` | The contents of the users signature. |
| `disp_threads` | `tinyint(3)` | `NULL` | The number of threads to display per page, or the forum default o_disp_threads_default (see $luna_config) if `NULL`. |
| `disp_comments` | `tinyint(3)` | `NULL` | The number of comments to display per page, or the forum default o_disp_comments_default (see $luna_config) if `NULL`. |
| `email_setting` | `tinyint(1)` | `1` | The level of privacy for the users email address. 0 = Show email address to other users, 1 = Hide email address but allow others users to send emails via the forums, 2 = Hide email address and don't allow other users to send emails. |
| `notify_with_comment` | `tinyint(1)` | `0` | Should a plain-text version of the comment be included in subscription emails to the user? |
| `auto_notify` | `tinyint(1)` | `0` | Should the user automatically be subscribed to their own comments? |
| `show_smilies` | `tinyint(1)` | `1` | Should smilies in comments be shown to the user? |
| `show_img` | `tinyint(1)` | `1` | Should images in comments be shown to the user? |
| `show_img_sig` | `tinyint(1)` | `1` | Should images in signatures be shown to the user? |
| `show_avatars` | `tinyint(1)` | `1` | Should avatars be shown to the user? |
| `show_sig` | `tinyint(1)` | `1` | Should signatures to shown to the user? |
| `timezone` | `float` | `0` | The users timezone. |
| `dst` | `tinyint(1)` | `0` | Is the user currently observing daylight saving time? |
| `time_format` | `tinyint(1)` | `0` | The time format that the user uses. |
| `date_format` | `tinyint(1)` | `0` | The date format that the user uses. |
| `language` | `varchar(25)` | `"English"` | The language that should be used for this user. |
| `style` | `varchar(25)` | `"Luna"` | The name of the style that should be used for this user. |
| `num_comments` | `int(10)` | `0` | The number of comments the user has made. Note: This is the number made, not the number that currently exist (i.e. when a comment is deleted this isn't decremented). |
| `last_comment` | `int(10)` | `NULL` | A UNIX timestamp representing the time the user last made a comment. |
| `last_search` | `int(10)` | `NULL` | A UNIX timestamp representing the time the user last performed a search. |
| `last_email_sent` | `int(10)` | `NULL` | A UNIX timestamp representing the time the user last sent an email via the forums. |
| `last_report_sent` | `int(10)` | `NULL` | A UNIX timestamp representing the time the user last sent a report via the forums. |
| `registered` | `int(10)` | `0` | A UNIX timestamp representing the time the user registered. |
| `registration_ip` | `varchar(39)` | `"0.0.0.0"` | The IP address used by the user when registering. |
| `last_visit` | `int(10)` | `0` | A UNIX timestamp representing the time of the users last visit. |
| `admin_note` | `varchar(30)` | `NULL` | A note that the administrator has entered. |
| `activate_string` | `varchar(80)` | `NULL` | A temporary storage string for new passwords and new e-mail addresses. |
| `activate_key` | `varchar(8)` | `NULL` | A temporary storage string for new password and new e-mail address activation keys. |
| `use_pm` | `tinyiny(1)` | `1` | Allow the user to use Inbox. |
| `notify_pm` | `tinyiny(1)` | `1` | Notify the user for now received Inbox items. |
| `notify_pm_full` | `tinyiny(1)` | `0` | Notify the user for new received Inbox items (full). |
| `num_pms` | `int(10)` | `0` | The amount of Inbox items for this user. |
| `first_run` | `tinyiny(1)` | `0` | Show the First Run experience. |
| `color_scheme` | `int(25)` | `3` | The color used by the theme for this user. |