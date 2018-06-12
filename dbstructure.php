<?php $section = "docs"; $dsection = "develop";  $dpage = "dbstructure"; include('../include/header.php') ?>
<div class="row main">
    <div class="col-sm-3">
        <?php include ('docsnav.php') ?>
    </div>
    <div class="col-sm-9">
        <h1 id="database-structure">Database structure</h1>
        <p>The following is a complete list of all Luna database tables and their structures. Primary key fields are <u>underlined</u>, foreign keys are in <i>italics</i>.</p>
        <h2>Type conventions</h2>
        <ul>
            <li>Artificial primary keys are of type <code>int(10)</code>.</li>
            <li>Boolean values are of type <code>tinyint(1)</code>, with the value 1 representing true and 0 representing false.</li>
        </ul>
        <h2>List of tables</h2>
        <ul>
            <li>bans</li>
            <li>categories</li>
            <li>censoring</li>
            <li>comments</li>
            <li>config</li>
            <li>forums</li>
            <li>forum_perms</li>
            <li>forum_subscriptions</li>
            <li>groups</li>
            <li>menu</li>
            <li>messages</li>
            <li>notifications</li>
            <li>online</li>
            <li>ranks</li>
            <li>reports</li>
            <li>search_cache</li>
            <li>search_matches</li>
            <li>search_words</li>
            <li>threads</li>
            <li>thread_subscriptions</li>
            <li>users</li>
        </ul>
        <p><strong>Please note:</strong> The below descriptions are based off the database structure when using MySQL(i). In other supported RDBMS the field type and default values may vary slightly.</p>
        <hr />
        <h3 id="bans">bans</h3>
        <div>
            <p>The bans table is used to hold details of all current bans. It is important to note that bans work on usernames, IP addresses or email addresses - not specific user accounts.</p>
            <div>
            <table class="table table-striped table-striped table-hover table-condensed">
                <thead>
                <tr>
                    <td class="col-xs-2"><strong>Field</strong></td>
                    <td class="col-xs-1"><strong>Type</strong></td>
                    <td class="col-xs-1"><strong>Default</strong></td>
                    <td class="col-xs-8"><strong>Description</strong></td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><em><code>id</code></em></td>
                    <td><code><code>int(10)</code></code></td>
                    <td><code></code></td>
                    <td>The auto-incrementing primary key for this table.</td>
                </tr>
                <tr>
                    <td><code>username</code></td>
                    <td><code>varchar(200)</code></td>
                    <td><code>NULL</code></td>
                    <td>The username this ban applies to, or <code>NULL</code> for none.</td>
                </tr>
                <tr>
                    <td><code>ip</code></td>
                    <td><code>varchar(255)</code></td>
                    <td><code>NULL</code></td>
                    <td>The IP address(es) this ban applies to, or <code>NULL</code> for none.</td>
                </tr>
                <tr>
                    <td><code>email</code></td>
                    <td><code>varchar(80)</code></td>
                    <td><code>NULL</code></td>
                    <td>The email address this ban applies to, or <code>NULL</code> for none.</td>
                </tr>
                <tr>
                    <td><code>message</code></td>
                    <td><code>varchar(255)</code></td>
                    <td><code>NULL</code></td>
                    <td>A message to be displayed to the banned user.</td>
                </tr>
                <tr>
                    <td><code>expire</code></td>
                    <td><code>int(10)</code></td>
                    <td><code>NULL</code></td>
                    <td>A UNIX timestamp representing the time the ban should expire.</td>
                </tr>
                <tr>
                    <td><code>ban_creator</code></td>
                    <td><code>int(10)</code></td>
                    <td><code>0</code></td>
                    <td>The ID of the user who created the ban.</td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
        <h3 id="categories">categories</h3>
        <div>
            <div>
            <table class="table table-striped table-striped table-hover table-condensed">
                <thead>
                <tr>
                    <td class="col-xs-2"><strong>Field</strong></td>
                    <td class="col-xs-1"><strong>Type</strong></td>
                    <td class="col-xs-1"><strong>Default</strong></td>
                    <td class="col-xs-8"><strong>Description</strong></td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><em><code>id</code></em></td>
                    <td><code>int(10)</code></td>
                    <td><code></code></td>
                    <td>The auto-incrementing primary key for this table.</td>
                </tr>
                <tr>
                    <td><code>cat_name</code></td>
                    <td><code>varchar(80)</code></td>
                    <td><code>&ldquo;New Category&rdquo;</code></td>
                    <td>The name of the category.</td>
                </tr>
                <tr>
                    <td><code>disp_position</code></td>
                    <td><code>int(10)</code></td>
                    <td><code>0</code></td>
                    <td>The position of this category in relation to the others.</td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
        <h3 id="censoring">censoring</h3>
        <div>
            <div>
            <table class="table table-striped table-striped table-hover table-condensed">
                <thead>
                <tr>
                    <td class="col-xs-2"><strong>Field</strong></td>
                    <td class="col-xs-1"><strong>Type</strong></td>
                    <td class="col-xs-1"><strong>Default</strong></td>
                    <td class="col-xs-8"><strong>Description</strong></td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><em><code>id</code></em></td>
                    <td><code>int(10)</code></td>
                    <td><code></code></td>
                    <td>The auto-incrementing primary key for this table.</td>
                </tr>
                <tr>
                    <td><code>search_for</code></td>
                    <td><code>varchar(60)</code></td>
                    <td><code>&rdquo;&rdquo;</code></td>
                    <td>The term to search for.</td>
                </tr>
                <tr>
                    <td><code>replace_with</code></td>
                    <td><code>varchar(60)</code></td>
                    <td><code>&rdquo;&rdquo;</code></td>
                    <td>The term to replace with.</td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
        <h3 id="config">config</h3>
        <div>
            <p>The config table holds key, value pairs for all the main configuration options. For performance reasons Luna caches these values and will only refresh the cache when they are updated via the admin panel.</p>
            <p>For more information about the actual contents of the config table, see the $luna_config global variable.</p>
            <div>
            <table class="table table-striped table-striped table-hover table-condensed">
                <thead>
                <tr>
                    <td class="col-xs-2"><strong>Field</strong></td>
                    <td class="col-xs-1"><strong>Type</strong></td>
                    <td class="col-xs-1"><strong>Default</strong></td>
                    <td class="col-xs-8"><strong>Description</strong></td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><em><code>conf_name</code></em></td>
                    <td><code>varchar(255)</code></td>
                    <td><code>&rdquo;&rdquo;</code></td>
                    <td>The name of the configuration variable. General configuration options start with the prefix o_ and general permission options start with the prefix p_.</td>
                </tr>
                <tr>
                    <td><code>conf_value</code></td>
                    <td><code>text</code></td>
                    <td><code>NULL</code></td>
                    <td>The value of the configuration variable.</td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
        <h3 id="forums">forums</h3>
        <div>
            <div>
            <table class="table table-striped table-striped table-hover table-condensed">
                <thead>
                <tr>
                    <td class="col-xs-2"><strong>Field</strong></td>
                    <td class="col-xs-1"><strong>Type</strong></td>
                    <td class="col-xs-1"><strong>Default</strong></td>
                    <td class="col-xs-8"><strong>Description</strong></td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><em><code>id</code></em></td>
                    <td><code>int(10)</code></td>
                    <td><code></code></td>
                    <td>The auto-incrementing primary key for this table.</td>
                </tr>
                <tr>
                    <td><code>forum_name</code></td>
                    <td><code>varchar(80)</code></td>
                    <td><code>&ldquo;New forum&rdquo;</code></td>
                    <td>The name of the forum.</td>
                </tr>
                <tr>
                    <td><code>forum_desc</code></td>
                    <td><code>text</code></td>
                    <td><code>NULL</code></td>
                    <td>A description of the forum (may contain <abbr title="HyperText Markup Language">HTML</abbr>).</td>
                </tr>
                <tr>
                    <td><code>moderators</code></td>
                    <td><code>text</code></td>
                    <td><code>NULL</code></td>
                    <td>A serialized associative PHP array with moderator names ⇒ user IDs.</td>
                    </tr>
                <tr>
                    <td><code>num_threads</code></td>
                    <td><code>mediumint(8)</code></td>
                    <td><code>0</code></td>
                    <td>The number of threads the forum contains.</td>
                </tr>
                <tr>
                    <td><code>num_comments</code></td>
                    <td><code>mediumint(8)</code></td>
                    <td><code>0</code></td>
                    <td>The number of comments the forum contains.</td>
                </tr>
                <tr>
                    <td><code>last_comment</code></td>
                    <td><code>int(10)</code></td>
                    <td><code>NULL</code></td>
                    <td>A UNIX timestamp representing the time the last comment was made in the forum.</td>
                </tr>
                <tr>
                    <td><code>last_comment_id</code></td>
                    <td><code>int(10)</code></td>
                    <td><code>NULL</code></td>
                    <td>The ID of the last comment that was made in the forum.</td>
                </tr>
                <tr>
                    <td><code>last_commenter_id</code></td>
                    <td><code>int(10)</code></td>
                    <td><code>NULL</code></td>
                    <td>The ID of the last user that commented.</td>
                </tr>
                <tr>
                    <td><code>sort_by</code></td>
                    <td><code>tinyint(1)</code></td>
                    <td><code>0</code></td>
                    <td>How the comments in the forum should be sorted. 0 = By last comment time, 1 = By thread start time.</td>
                </tr>
                <tr>
                    <td><code>disp_position</code></td>
                    <td><code>int(10)</code></td>
                    <td><code>0</code></td>
                    <td>The position of this forum in relation to the others.</td>
                </tr>
                <tr>
                    <td><code>cat_id</code></td>
                    <td><code>int(10)</code></td>
                    <td><code>0</code></td>
                    <td>The ID of the category in which this forum resides.</td>
                </tr>
                <tr>
                    <td><code>color</code></td>
                    <td><code>varchar(25)</code></td>
                    <td><code>#0d4382</code></td>
                    <td>The color of the forum.</td>
                    </tr>
                <tr>
                    <td><code>parent_id</code></td>
                    <td><code>int(11)</code></td>
                    <td><code>0</code></td>
                    <td>The ID of the parent forum.</td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
        <h3 id="forum_perms">forum_perms</h3>
        <div>
            <div>
            <table class="table table-striped table-striped table-hover table-condensed">
                <thead>
                <tr>
                    <td class="col-xs-2"><strong>Field</strong></td>
                    <td class="col-xs-1"><strong>Type</strong></td>
                    <td class="col-xs-1"><strong>Default</strong></td>
                    <td class="col-xs-8"><strong>Description</strong></td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><em><code>group_id</code></em></td>
                    <td><code>int(10)</code></td>
                    <td><code>0</code></td>
                    <td>The ID of the group this permission set applies to.</td>
                </tr>
                <tr>
                    <td><em><code>forum_id</code></em></td>
                    <td><code>int(10)</code></td>
                    <td><code>0</code></td>
                    <td>The ID of the forum this permission set applies to.</td>
                </tr>
                <tr>
                    <td><code>read_forum</code></td>
                    <td><code>tinyint(1)</code></td>
                    <td><code>1</code></td>
                    <td>Allow members of the group to view this forum?</td>
                </tr>
                <tr>
                    <td><code>comment_replies</code></td>
                    <td><code>tinyint(1)</code></td>
                    <td><code>1</code></td>
                    <td>Allow members of the group to comment replies in this forum?</td>
                </tr>
                <tr>
                    <td><code>comment_threads</code></td>
                    <td><code>tinyint(1)</code></td>
                    <td><code>1</code></td>
                    <td>Allow members of the group to start new threads in this forum?</td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
        <h3 id="forum_subscriptions">forum_subscriptions</h3>
        <div>
            <div>
            <table class="table table-striped table-striped table-hover table-condensed">
                <thead>
                <tr>
                    <td class="col-xs-2"><strong>Field</strong></td>
                    <td class="col-xs-1"><strong>Type</strong></td>
                    <td class="col-xs-1"><strong>Default</strong></td>
                    <td class="col-xs-8"><strong>Description</strong></td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><em><code>user_id</code></em></td>
                    <td><code>int(10)</code></td>
                    <td><code>0</code></td>
                    <td>The ID of the user which this subscription belongs to.</td>
                </tr>
                <tr>
                    <td><em><code>forum_id</code></em></td>
                    <td><code>int(10)</code></td>
                    <td><code>0</code></td>
                    <td>The ID of the forum which this subscription belongs to.</td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
        <h3 id="groups">groups</h3>
        <div>
            <p>All fields in the groups table are prefixed with g_. This is to allow them to be easily combined with all the fields from the users table without any conflicting field names.</p>
            <div>
            <table class="table table-striped table-striped table-hover table-condensed">
                <thead>
                <tr>
                    <td class="col-xs-2"><strong>Field</strong></td>
                    <td class="col-xs-1"><strong>Type</strong></td>
                    <td class="col-xs-1"><strong>Default</strong></td>
                    <td class="col-xs-8"><strong>Description</strong></td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><em><code>g_id</code></em></td>
                    <td><code>int(10)</code></td>
                    <td><code></code></td>
                    <td>The auto-incrementing primary key for this table.</td>
                </tr>
                <tr>
                    <td><code>g_title</code></td>
                    <td><code>varchar(50)</code></td>
                    <td><code>&rdquo;&rdquo;</code></td>
                    <td>The name of this group.</td>
                </tr>
                <tr>
                    <td><code>g_user_title</code></td>
                    <td><code>varchar(50)</code></td>
                    <td><code>NULL</code></td>
                    <td>The user title to be used for members of this group.</td>
                </tr>
                <tr>
                    <td><code>g_moderator</code></td>
                    <td><code>tinyint(1)</code></td>
                    <td><code>0</code></td>
                    <td>Does this group have moderator privileges?</td>
                </tr>
                <tr>
                    <td><code>g_mod_edit_users</code></td>
                    <td><code>tinyint(1)</code></td>
                    <td><code>0</code></td>
                    <td>If g_moderator, can members of this group edit users profiles?</td>
                </tr>
                <tr>
                    <td><code>g_mod_rename_users</code></td>
                    <td><code>tinyint(1)</code></td>
                    <td><code>0</code></td>
                    <td>If g_moderator, can members of this group rename users?</td>
                </tr>
                <tr>
                    <td><code>g_mod_change_passwords</code></td>
                    <td><code>tinyint(1)</code></td>
                    <td><code>0</code></td>
                    <td>If g_moderator, can members of this group change users passwords?</td>
                </tr>
                <tr>
                    <td><code>g_mod_ban_users</code></td>
                    <td><code>tinyint(1)</code></td>
                    <td><code>0</code></td>
                    <td>If g_moderator, can members of this group ban users?</td>
                </tr>
                <tr>
                    <td><code>g_read_board</code></td>
                    <td><code>tinyint(1)</code></td>
                    <td><code>1</code></td>
                    <td>Can members of this group view boards? If this is 0 the group basically has no access to the forums.</td>
                </tr>
                <tr>
                    <td><code>g_view_users</code></td>
                    <td><code>tinyint(1)</code></td>
                    <td><code>1</code></td>
                    <td>Can members of this group view the user list?</td>
                </tr>
                <tr>
                    <td><code>g_comment_replies</code></td>
                    <td><code>tinyint(1)</code></td>
                    <td><code>1</code></td>
                    <td>Can members of this group comment replies?</td>
                </tr>
                <tr>
                    <td><code>g_comment_threads</code></td>
                    <td><code>tinyint(1)</code></td>
                    <td><code>1</code></td>
                    <td>Can members of this group start new threads?</td>
                </tr>
                <tr>
                    <td><code>g_edit_comments</code></td>
                    <td><code>tinyint(1)</code></td>
                    <td><code>1</code></td>
                    <td>Can members of this group edit their own comments?</td>
                </tr>
                <tr>
                    <td><code>g_delete_comments</code></td>
                    <td><code>tinyint(1)</code></td>
                    <td><code>1</code></td>
                    <td>Can members of this group delete their own comments?</td>
                </tr>
                <tr>
                    <td><code>g_delete_threads</code></td>
                    <td><code>tinyint(1)</code></td>
                    <td><code>1</code></td>
                    <td>Can members of this group delete their own threads (including all replies)?</td>
                </tr>
                <tr>
                    <td><code>g_set_title</code></td>
                    <td><code>tinyint(1)</code></td>
                    <td><code>1</code></td>
                    <td>Can members of this group set their own user title?</td>
                </tr>
                <tr>
                    <td><code>g_search</code></td>
                    <td><code>tinyint(1)</code></td>
                    <td><code>1</code></td>
                    <td>Can members of this group use the search features?</td>
                </tr>
                <tr>
                    <td><code>g_search_users</code></td>
                    <td><code>tinyint(1)</code></td>
                    <td><code>1</code></td>
                    <td>Can members of this group search the user list?</td>
                </tr>
                <tr>
                    <td><code>g_send_email</code></td>
                    <td><code>tinyint(1)</code></td>
                    <td><code>1</code></td>
                    <td>Can members of this group send emails to users?</td>
                </tr>
                <tr>
                    <td><code>g_comment_flood</code></td>
                    <td><code>smallint(6)</code></td>
                    <td><code>30</code></td>
                    <td>How many seconds members of this group must wait between making comments.</td>
                </tr>
                <tr>
                    <td><code>g_search_flood</code></td>
                    <td><code>smallint(6)</code></td>
                    <td><code>30</code></td>
                    <td>How many seconds members of this group must wait between making search requests.</td>
                </tr>
                <tr>
                    <td><code>g_email_flood</code></td>
                    <td><code>smallint(6)</code></td>
                    <td><code>60</code></td>
                    <td><p>How many seconds members of this group must wait between sending emails.</p></td>
                </tr>
                <tr>
                    <td><code>g_pm</code></td>
                    <td><code>tinyint(1)</code></td>
                    <td><code>1</code></td>
                    <td>Wheter or not the user is allowed to use Inbox.</td>
                    </tr>
                <tr>
                    <td><code>g_pm_limit</code></td>
                    <td><code>int(11)</code></td>
                    <td><code>20</code></td>
                    <td>The maximum amount of Inbox items an user can store.</td>
                    </tr>
                <tr>
                    <td><code>g_report_flood</code></td>
                    <td><code>smallint(6)</code></td>
                    <td><code>60</code></td>
                    <td>Amount of seconds that have to pass between reports.</td>
                    </tr>
                <tr>
                    <td><code>g_soft_delete_view</code></td>
                    <td><code>tinyint(1)</code></td>
                    <td><code>1</code></td>
                    <td>Allow the group to view soft deleted items.</td>
                    </tr>
                <tr>
                    <td><code>g_soft_delete_comments</code></td>
                    <td><code>tinyint(1)</code></td>
                    <td><code>1</code></td>
                    <td>Allow the group to soft delete comments.</td>
                    </tr>
                <tr>
                    <td><code>g_soft_delete_threads</code></td>
                    <td><code>tinyint(1)</code></td>
                    <td><code>1</code></td>
                    <td>Allow the group to soft delete threads.</td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
        <h3>menu</h3>
        <table class="table table-striped table-striped table-hover table-condensed">
            <thead>
                <tr>
                    <td class="col-xs-2"><strong>Field</strong></td>
                    <td class="col-xs-1"><strong>Type</strong></td>
                    <td class="col-xs-1"><strong>Default</strong></td>
                    <td class="col-xs-8"><strong>Description</strong></td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><em><code>id</code></em></td>
                    <td><code>int(10)</code></td>
                    <td><code>NULL</code></td>
                    <td>The ID of the menu item.</td>
                </tr>
                <tr>
                    <td><code>url</code></td>
                    <td><code>varchar(200)</code></td>
                    <td><code>NULL</code></td>
                    <td>The URL to which the menu item should point.</td>
                </tr>
                <tr>
                    <td><code>name</code></td>
                    <td><code>varchar(200)</code></td>
                    <td><code>NULL</code></td>
                    <td>The title of the menu item.</td>
                </tr>
                <tr>
                    <td><code>disp_position</code></td>
                    <td><code>int(10)</code></td>
                    <td><code>0</code></td>
                    <td>The order in which the item should be displayed.</td>
                </tr>
                <tr>
                    <td><code>visible</code></td>
                    <td><code>int(10)</code></td>
                    <td><code>NULL</code></td>
                    <td>Disable or enable the menu item.</td>
                </tr>
                <tr>
                    <td><code>sys_entry</code></td>
                    <td><code>int(10)</code></td>
                    <td><code>NULL</code></td>
                    <td>Check wheter or not this is pre-installed item that can't be removed.</td>
                </tr>
            </tbody>
        </table>
        <h3>messages</h3>
        <table class="table table-striped table-striped table-hover table-condensed">
            <thead>
                <tr>
                    <td class="col-xs-2"><strong>Field</strong></td>
                    <td class="col-xs-1"><strong>Type</strong></td>
                    <td class="col-xs-1"><strong>Default</strong></td>
                    <td class="col-xs-8"><strong>Description</strong></td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><em><code>id</code></em></td>
                    <td><code>int(10)</code></td>
                    <td><code>NULL</code></td>
                    <td>The ID of the message.</td>
                </tr>
                <tr>
                    <td><code>shared_id</code></td>
                    <td><code>int(10)</code></td>
                    <td><code>0</code></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><code>last_shared_id</code></td>
                    <td><code>int(10)</code></td>
                    <td><code>0</code></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><code>last_comment</code></td>
                    <td><code>int(10)</code></td>
                    <td><code>0</code></td>
                    <td>The latest comment in the message.</td>
                </tr>
                <tr>
                    <td><code>last_comment_id</code></td>
                    <td><code>int(10)</code></td>
                    <td><code>0</code></td>
                    <td>The ID of the latest comment.</td>
                </tr>
                <tr>
                    <td><code>last_commenter</code></td>
                    <td><code>varchar(255)</code></td>
                    <td><code>0</code></td>
                    <td>The name of the last commenter.</td>
                </tr>
                <tr>
                    <td><code>owner</code></td>
                    <td><code>int(11)</code></td>
                    <td><code>0</code></td>
                    <td>The ID of the owner of the message.</td>
                </tr>
                <tr>
                    <td><code>subject</code></td>
                    <td><code>varchar(255)</code></td>
                    <td><code>NULL</code></td>
                    <td>The subject of the message.</td>
                </tr>
                <tr>
                    <td><code>message</code></td>
                    <td><code>mediumtext</code></td>
                    <td><code>NULL</code></td>
                    <td>The content of the message.</td>
                </tr>
                <tr>
                    <td><code>hide_smilies</code></td>
                    <td><code>tinyint(1)</code></td>
                    <td><code>0</code></td>
                    <td>Show or hide emoticons and emojis.</td>
                </tr>
                <tr>
                    <td><code>show_message</code></td>
                    <td><code>tinyiny(1)</code></td>
                    <td><code>0</code></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><code>sender</code></td>
                    <td><code>varchar(200)</code></td>
                    <td><code>NULL</code></td>
                    <td>Person who  has send the message.</td>
                </tr>
                <tr>
                    <td><code>receiver</code></td>
                    <td><code>varchar(200)</code></td>
                    <td><code>NULL</code></td>
                    <td>Person who has received the message.</td>
                </tr>
                <tr>
                    <td><code>sender_id</code></td>
                    <td><code>int(10)</code></td>
                    <td><code>0</code></td>
                    <td>ID of the sender.</td>
                </tr>
                <tr>
                    <td><code>receiver_id</code></td>
                    <td><code>varchar(255)</code></td>
                    <td><code>0</code></td>
                    <td>ID of the receivers.</td>
                </tr>
                <tr>
                    <td><code>sender_ip</code></td>
                    <td><code>varchar(39)</code></td>
                    <td><code>NULL</code></td>
                    <td>The IP of the sender.</td>
                </tr>
                <tr>
                    <td><code>commented</code></td>
                    <td><code>int(10)</code></td>
                    <td><code>NULL</code></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><code>showed</code></td>
                    <td><code>tinyint(1)</code></td>
                    <td><code>0</code></td>
                    <td>Is the message showed or not.</td>
                </tr>
            </tbody>
        </table>
        <h3>menu</h3>
        <table class="table table-striped table-striped table-hover table-condensed">
            <thead>
                <tr>
                    <td class="col-xs-2"><strong>Field</strong></td>
                    <td class="col-xs-1"><strong>Type</strong></td>
                    <td class="col-xs-1"><strong>Default</strong></td>
                    <td class="col-xs-8"><strong>Description</strong></td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><em><code>id</code></em></td>
                    <td><code>int(10)</code></td>
                    <td><code>NULL</code></td>
                    <td>The ID of the notificiation.</td>
                </tr>
                <tr>
                    <td><code>user_id</code></td>
                    <td><code>int(10)</code></td>
                    <td><code>0</code></td>
                    <td>The ID of the user to which to notification has been send.</td>
                </tr>
                <tr>
                    <td><code>message</code></td>
                    <td><code>varchar(255)</code></td>
                    <td><code>0</code></td>
                    <td>The content of the message within the notification.</td>
                </tr>
                <tr>
                    <td><code>icon</code></td>
                    <td><code>varchar(255)</code></td>
                    <td><code>0</code></td>
                    <td>The Font Awesome icon used by the message.</td>
                </tr>
                <tr>
                    <td><code>link</code></td>
                    <td><code>varchar(255)</code></td>
                    <td><code>0</code></td>
                    <td>The link to which the notification should point.</td>
                </tr>
                <tr>
                    <td><code>time</code></td>
                    <td><code>int(11)</code></td>
                    <td><code>0</code></td>
                    <td>The time when to notifcation was received.</td>
                </tr>
                <tr>
                    <td><code>viewed</code></td>
                    <td><code>tinyint(1)</code></td>
                    <td><code>0</code></td>
                    <td>Wheter or not the notification has been seen.</td>
                </tr>
            </tbody>
        </table>
        <h3 id="online">online</h3>
        <div>
            <div>
            <table class="table table-striped table-striped table-hover table-condensed">
                <thead>
                <tr>
                    <td class="col-xs-2"><strong>Field</strong></td>
                    <td class="col-xs-1"><strong>Type</strong></td>
                    <td class="col-xs-1"><strong>Default</strong></td>
                    <td class="col-xs-8"><strong>Description</strong></td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><code>user_id</code></td>
                    <td><code>int(10)</code></td>
                    <td><code>1</code></td>
                    <td>The ID of the user (or 1 if the user is a guest).</td>
                </tr>
                <tr>
                    <td><code>ident</code></td>
                    <td><code>varchar(200)</code></td>
                    <td><code>&rdquo;&rdquo;</code></td>
                    <td>Identification string for the user (Username for logged in users, IP address for guests).</td>
                </tr>
                <tr>
                    <td><code>logged</code></td>
                    <td><code>int(10)</code></td>
                    <td><code>0</code></td>
                    <td>A UNIX timestamp representing the time of the users last activity.</td>
                </tr>
                <tr>
                    <td><code>idle</code></td>
                    <td><code>tinyint(1)</code></td>
                    <td><code>0</code></td>
                    <td>If the user is idle or not (i.e. their last visit was more than o_timeout_online seconds ago, but less than o_timeout_visit seconds ago - see the $luna_config global variable).</td>
                </tr>
                <tr>
                    <td><code>last_comment</code></td>
                    <td><code>int(10)</code></td>
                    <td><code>NULL</code></td>
                    <td>A UNIX timestamp representing the time the user last made a comment.</td>
                </tr>
                <tr>
                    <td><code>last_search</code></td>
                    <td><code>int(10)</code></td>
                    <td><code>NULL</code></td>
                    <td>A UNIX timestamp representing the time the user last performed a search.</td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
        <h3 id="comments">comments</h3>
        <div>
            <div>
            <table class="table table-striped table-striped table-hover table-condensed">
                <thead>
                <tr>
                    <td class="col-xs-2"><strong>Field</strong></td>
                    <td class="col-xs-1"><strong>Type</strong></td>
                    <td class="col-xs-1"><strong>Default</strong></td>
                    <td class="col-xs-8"><strong>Description</strong></td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><em><code>id</code></em></td>
                    <td><code>int(10)</code></td>
                    <td><code></code></td>
                    <td>The auto-incrementing primary key for this table.</td>
                </tr>
                <tr>
                    <td><code>commenter</code></td>
                    <td><code>varchar(200)</code></td>
                    <td><code>&rdquo;&rdquo;</code></td>
                    <td>The username of the user who created this comment.</td>
                </tr>
                <tr>
                    <td><code>commenter_id</code></td>
                    <td><code>int(10)</code></td>
                    <td><code>1</code></td>
                    <td>The ID of the user who created this comment.</td>
                </tr>
                <tr>
                    <td><code>commenter_ip</code></td>
                    <td><code>varchar(39)</code></td>
                    <td><code>NULL</code></td>
                    <td>The IP address of the user who created this comment.</td>
                </tr>
                <tr>
                    <td><code>commenter_email</code></td>
                    <td><code>varchar(80)</code></td>
                    <td><code>NULL</code></td>
                    <td>If the comment was created by a guest, their email address. If it was created by a logged in user, then <code>NULL</code>.</td>
                </tr>
                <tr>
                    <td><code>message</code></td>
                    <td><code>mediumtext</code></td>
                    <td><code>NULL</code></td>
                    <td>The contents of the comment.</td>
                </tr>
                <tr>
                    <td><code>hide_smilies</code></td>
                    <td><code>tinyint(1)</code></td>
                    <td><code>0</code></td>
                    <td>Should smilies be hidden in this comment?</td>
                </tr>
                <tr>
                    <td><code>commented</code></td>
                    <td><code>int(10)</code></td>
                    <td><code>0</code></td>
                    <td>A UNIX timestamp representing the time this comment was created.</td>
                </tr>
                <tr>
                    <td><code>edited</code></td>
                    <td><code>int(10)</code></td>
                    <td><code>NULL</code></td>
                    <td>A UNIX timestamp representing the time this comment was last edited, or <code>NULL</code> if it hasn't been edited.</td>
                </tr>
                <tr>
                    <td><code>edited_by</code></td>
                    <td><code>varchar(200)</code></td>
                    <td><code>NULL</code></td>
                    <td>The username of the user who last edited this comment, or <code>NULL</code> if it hasn't been edited.</td>
                </tr>
                <tr>
                    <td><code>thread_id</code></td>
                    <td><code>int(10)</code></td>
                    <td><code>0</code></td>
                    <td>The ID of the parent thread for this comment.</td>
                </tr>
                <tr>
                    <td><code>marked</code></td>
                    <td><code>tinyint(1)</code></td>
                    <td><code>0</code></td>
                    <td>If the message is reported, this will be 1.</td>
                </tr>
                <tr>
                    <td><code>soft</code></td>
                    <td><code>tinyint(1)</code></td>
                    <td><code>0</code></td>
                    <td>If the message has been soft deleted, this will be 1.</td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
        <h3 id="ranks">ranks</h3>
        <div>
            <div>
            <table class="table table-striped table-striped table-hover table-condensed">
                <thead>
                <tr>
                    <td class="col-xs-2"><strong>Field</strong></td>
                    <td class="col-xs-1"><strong>Type</strong></td>
                    <td class="col-xs-1"><strong>Default</strong></td>
                    <td class="col-xs-8"><strong>Description</strong></td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><em><code>id</code></em></td>
                    <td><code>int(10)</code></td>
                    <td><code></code></td>
                    <td>The auto-incrementing primary key for this table.</td>
                </tr>
                <tr>
                    <td><code>rank</code></td>
                    <td><code>varchar(50)</code></td>
                    <td><code>&rdquo;&rdquo;</code></td>
                    <td>The rank title.</td>
                </tr>
                <tr>
                    <td><code>min_comments</code></td>
                    <td><code>mediumint(8)</code></td>
                    <td><code>0</code></td>
                    <td>The number of comments a user must attain in order to reach the rank.</td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
        <h3 id="reports">reports</h3>
        <div>
            <div>
            <table class="table table-striped table-striped table-hover table-condensed">
                <thead>
                <tr>
                    <td class="col-xs-2"><strong>Field</strong></td>
                    <td class="col-xs-1"><strong>Type</strong></td>
                    <td class="col-xs-1"><strong>Default</strong></td>
                    <td class="col-xs-8"><strong>Description</strong></td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><em><code>id</code></em></td>
                    <td><code>int(10)</code></td>
                    <td><code></code></td>
                    <td>The auto-incrementing primary key for this table.</td>
                </tr>
                <tr>
                    <td><code>comment_id</code></td>
                    <td><code>int(10)</code></td>
                    <td><code>0</code></td>
                    <td>The ID of the reported comment.</td>
                </tr>
                <tr>
                    <td><code>thread_id</code></td>
                    <td><code>int(10)</code></td>
                    <td><code>0</code></td>
                    <td>The ID of thread in which the reported comment is contained.</td>
                </tr>
                <tr>
                    <td><code>forum_id</code></td>
                    <td><code>int(10)</code></td>
                    <td><code>0</code></td>
                    <td>The ID of the forum in which the reported comment is contained.</td>
                </tr>
                <tr>
                    <td><code>reported_by</code></td>
                    <td><code>int(10)</code></td>
                    <td><code>0</code></td>
                    <td>The ID of the user who created the report.</td>
                </tr>
                <tr>
                    <td><code>created</code></td>
                    <td><code>int(10)</code></td>
                    <td><code>0</code></td>
                    <td>A UNIX timestamp representing the time this report was created.</td>
                </tr>
                <tr>
                    <td><code>message</code></td>
                    <td><code>text</code></td>
                    <td><code>NULL</code></td>
                    <td>The report message entered by the user.</td>
                </tr>
                <tr>
                    <td><code>zapped</code></td>
                    <td><code>int(10)</code></td>
                    <td><code>NULL</code></td>
                    <td>A UNIX timestamp representing the time this report was zapped (marked as read).</td>
                </tr>
                <tr>
                    <td><code>zapped_by</code></td>
                    <td><code>int(10)</code></td>
                    <td><code>NULL</code></td>
                    <td>The ID of the user who zapped (marked as read) this report.</td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
        <h3 id="search_cache">search_cache</h3>
        <div>
            <div>
            <table class="table table-striped table-striped table-hover table-condensed">
                <thead>
                <tr>
                    <td class="col-xs-2"><strong>Field</strong></td>
                    <td class="col-xs-1"><strong>Type</strong></td>
                    <td class="col-xs-1"><strong>Default</strong></td>
                    <td class="col-xs-8"><strong>Description</strong></td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><em><code>id</code></em></td>
                    <td><code>int(10)</code></td>
                    <td><code></code></td>
                    <td>The auto-incrementing primary key for this table.</td>
                </tr>
                <tr>
                    <td><code>ident</code></td>
                    <td><code>varchar(200)</code></td>
                    <td><code>&rdquo;&rdquo;</code></td>
                    <td>An identifier for the user who initiated the search. For a guest their IP address is used, for a logged in user, their username.</td>
                </tr>
                <tr>
                    <td><code>search_data</code></td>
                    <td><code>mediumtext</code></td>
                    <td><code>NULL</code></td>
                    <td>A serialized array containing search results.</td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
        <h3 id="search_matches">search_matches</h3>
        <div>
            <div>
            <table class="table table-striped table-striped table-hover table-condensed">
                <thead>
                <tr>
                    <td class="col-xs-2"><strong>Field</strong></td>
                    <td class="col-xs-1"><strong>Type</strong></td>
                    <td class="col-xs-1"><strong>Default</strong></td>
                    <td class="col-xs-8"><strong>Description</strong></td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><code>comment_id</code></td>
                    <td><code>int(10)</code></td>
                    <td><code>0</code></td>
                    <td>The ID of the comment which this word can be found.</td>
                </tr>
                <tr>
                    <td><code>word_id</code></td>
                    <td><code>int(10)</code></td>
                    <td><code>0</code></td>
                    <td>The ID of the word which can be found there.</td>
                </tr>
                <tr>
                    <td><code>subject_match</code></td>
                    <td><code>tinyint(1)</code></td>
                    <td><code>0</code></td>
                    <td>0 = The word is in the comment body, 1 = the word is in a thread subject.</td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
        <h3 id="search_words">search_words</h3>
        <div>
            <div>
            <table class="table table-striped table-striped table-hover table-condensed">
                <thead>
                <tr>
                    <td class="col-xs-2"><strong>Field</strong></td>
                    <td class="col-xs-1"><strong>Type</strong></td>
                    <td class="col-xs-1"><strong>Default</strong></td>
                    <td class="col-xs-8"><strong>Description</strong></td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><code>id</code></td>
                    <td><code>int(10)</code></td>
                    <td><code>0</code></td>
                    <td>The auto-incrementing primary key for this table.</td>
                </tr>
                <tr>
                    <td><code><em><code>word</code></em></td>
                    <td><code>varchar(20)</code></td>
                    <td><code>&rdquo;&rdquo;</code></td>
                    <td>The word to be indexed.</td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
        <h3 id="threads">threads</h3>
        <div>
            <div>
            <table class="table table-striped table-striped table-hover table-condensed">
                <thead>
                <tr>
                    <td class="col-xs-2"><strong>Field</strong></td>
                    <td class="col-xs-1"><strong>Type</strong></td>
                    <td class="col-xs-1"><strong>Default</strong></td>
                    <td class="col-xs-8"><strong>Description</strong></td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><em><code>id</code></em></td>
                    <td><code>int(10)</code></td>
                    <td><code></code></td>
                    <td>The auto-incrementing primary key for this table.</td>
                </tr>
                <tr>
                    <td><code>commenter</code></td>
                    <td><code>varchar(200)</code></td>
                    <td><code>&rdquo;&rdquo;</code></td>
                    <td>The username of the user who commented this thread.</td>
                </tr>
                <tr>
                    <td><code>subject</code></td>
                    <td><code>varchar(255)</code></td>
                    <td><code>&rdquo;&rdquo;</code></td>
                    <td>The subject of the thread.</td>
                </tr>
                <tr>
                    <td><code>commented</code></td>
                    <td><code>int(10)</code></td>
                    <td><code>0</code></td>
                    <td>A UNIX timestamp representing the time this thread was commented.</td>
                </tr>
                <tr>
                    <td><code>first_comment_id</code></td>
                    <td><code>int(10)</code></td>
                    <td><code>0</code></td>
                    <td>The ID of the first comment in this thread.</td>
                </tr>
                <tr>
                    <td><code>last_comment</code></td>
                    <td><code>int(10)</code></td>
                    <td><code>0</code></td>
                    <td>A UNIX timestamp representing the time the last comment was made to this thread.</td>
                </tr>
                <tr>
                    <td><code>last_comment_id</code></td>
                    <td><code>int(10)</code></td>
                    <td><code>0</code></td>
                    <td>The ID of the last comment in this thread.</td>
                </tr>
                <tr>
                    <td><code>last_commenter</code></td>
                    <td><code>varchar(200)</code></td>
                    <td><code>NULL</code></td>
                    <td>The username of the user who commented the last reply to this thread.</td>
                </tr>
                <tr>
                    <td><code>last_commenter_id</code></td>
                    <td><code>int(10)</code></td>
                    <td><code>NULL</code></td>
                    <td>The ID of the user who commented the last reply to this thread.</td>
                </tr>
                <tr>
                    <td><code>num_views</code></td>
                    <td><code>mediumint(8)</code></td>
                    <td><code>0</code></td>
                    <td>The number of times this thread has been viewed.</td>
                </tr>
                <tr>
                    <td><code>num_replies</code></td>
                    <td><code>mediumint(8)</code></td>
                    <td><code>0</code></td>
                    <td>The number of replies this thread has.</td>
                </tr>
                <tr>
                    <td><code>closed</code></td>
                    <td><code>tinyint(1)</code></td>
                    <td><code>0</code></td>
                    <td>Is this thread closed?</td>
                </tr>
                <tr>
                    <td><code>sticky</code></td>
                    <td><code>tinyint(1)</code></td>
                    <td><code>0</code></td>
                    <td>Is this thread a sticky?</td>
                </tr>
                <tr>
                    <td><code>moved_to</code></td>
                    <td><code>int(10)</code></td>
                    <td><code>NULL</code></td>
                    <td>If the thread has been moved, the ID of the new thread (this one now solely acts as a redirect).</td>
                </tr>
                <tr>
                    <td><code>forum_id</code></td>
                    <td><code>int(10)</code></td>
                    <td><code>0</code></td>
                    <td>The ID of the forum this thread is within.</td>
                </tr>
                <tr>
                    <td><code>soft</code></td>
                    <td><code>tinyint(1)</code></td>
                    <td><code>0</code></td>
                    <td>Wheter or not this thread has been soft deleted.</td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
        <h3 id="thread_subscriptions">thread_subscriptions</h3>
        <div>
            <div>
            <table class="table table-striped table-striped table-hover table-condensed">
                <thead>
                <tr>
                    <td class="col-xs-2"><strong>Field</strong></td>
                    <td class="col-xs-1"><strong>Type</strong></td>
                    <td class="col-xs-1"><strong>Default</strong></td>
                    <td class="col-xs-8"><strong>Description</strong></td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><em><code>user_id</code></em></td>
                    <td><code>int(10)</code></td>
                    <td><code>0</code></td>
                    <td>The ID of the user which this subscription belongs to.</td>
                </tr>
                <tr>
                    <td><em><code>thread_id</code></em></td>
                    <td><code>int(10)</code></td>
                    <td><code>0</code></td>
                    <td>The ID of the thread which this subscription belongs to.</td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
        <h3 id="users">users</h3>
        <div>
            <div>
            <table class="table table-striped table-striped table-hover table-condensed">
                <thead>
                <tr>
                    <td class="col-xs-2"><strong>Field</strong></td>
                    <td class="col-xs-1"><strong>Type</strong></td>
                    <td class="col-xs-1"><strong>Default</strong></td>
                    <td class="col-xs-8"><strong>Description</strong></td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><em><code>id</code></em></td>
                    <td><code>int(10)</code></td>
                    <td><code></code></td>
                    <td>The auto-incrementing primary key for this table.</td>
                </tr>
                <tr>
                    <td><code>group_id</code></td>
                    <td><code>int(10)</code></td>
                    <td><code>3</code></td>
                    <td>The ID of the group to which this user belongs. The default is LUNA_MemBER.</td>
                </tr>
                <tr>
                    <td><code>username</code></td>
                    <td><code>varchar(200)</code></td>
                    <td><code>&rdquo;&rdquo;</code></td>
                    <td>The users username.</td>
                </tr>
                <tr>
                    <td><code>password</code></td>
                    <td><code>varchar(40)</code></td>
                    <td><code>&rdquo;&rdquo;</code></td>
                    <td>The users password hash.</td>
                </tr>
                <tr>
                    <td><code>email</code></td>
                    <td><code>varchar(80)</code></td>
                    <td><code>&rdquo;&rdquo;</code></td>
                    <td>The users email address.</td>
                </tr>
                <tr>
                    <td><code>title</code></td>
                    <td><code>varchar(50)</code></td>
                    <td><code>NULL</code></td>
                    <td>The user title. If this field is empty, the title from the user's usetgroup will be used.</td>
                </tr>
                <tr>
                    <td><code>realname</code></td>
                    <td><code>varchar(40)</code></td>
                    <td><code>NULL</code></td>
                    <td>The real name of the user.</td>
                </tr>
                <tr>
                    <td><code>url</code></td>
                    <td><code>varchar(100)</code></td>
                    <td><code>NULL</code></td>
                    <td>The website of the user.</td>
                </tr>
                <tr>
                    <td><code>facebook</code></td>
                    <td><code>varchar(50)</code></td>
                    <td><code>NULL</code></td>
                    <td>The Facebook address of the user.</td>
                </tr>
                <tr>
                    <td><code>twitter</code></td>
                    <td><code>varchar(50)</code></td>
                    <td><code>NULL</code></td>
                    <td>The Twitter address of the user.</td>
                </tr>
                <tr>
                    <td><code>msn</code></td>
                    <td><code>varchar(80)</code></td>
                    <td><code>NULL</code></td>
                    <td>The Microsoft Account address of the user.</td>
                </tr>
                <tr>
                    <td><code>google</code></td>
                    <td><code>varchar(50)</code></td>
                    <td><code>NULL</code></td>
                    <td>The Google+ address of the user.</td>
                </tr>
                <tr>
                    <td><code>location</code></td>
                    <td><code>varchar(30)</code></td>
                    <td><code>NULL</code></td>
                    <td>The location of the user. This can be a country, city or something else.</td>
                </tr>
                <tr>
                    <td><code>signature</code></td>
                    <td><code>text</code></td>
                    <td><code>NULL</code></td>
                    <td>The contents of the users signature.</td>
                </tr>
                <tr>
                    <td><code>disp_threads</code></td>
                    <td><code>tinyint(3)</code></td>
                    <td><code>NULL</code></td>
                    <td>The number of threads to display per page, or the forum default o_disp_threads_default (see $luna_config) if <code>NULL</code>.</td>
                </tr>
                <tr>
                    <td><code>disp_comments</code></td>
                    <td><code>tinyint(3)</code></td>
                    <td><code>NULL</code></td>
                    <td>The number of comments to display per page, or the forum default o_disp_comments_default (see $luna_config) if <code>NULL</code>.</td>
                </tr>
                <tr>
                    <td><code>email_setting</code></td>
                    <td><code>tinyint(1)</code></td>
                    <td><code>1</code></td>
                    <td>The level of privacy for the users email address. 0 = Show email address to other users, 1 = Hide email address but allow others users to send emails via the forums, 2 = Hide email address and don't allow other users to send emails.</td>
                </tr>
                <tr>
                    <td><code>notify_with_comment</code></td>
                    <td><code>tinyint(1)</code></td>
                    <td><code>0</code></td>
                    <td>Should a plain-text version of the comment be included in subscription emails to the user?</td>
                </tr>
                <tr>
                    <td><code>auto_notify</code></td>
                    <td><code>tinyint(1)</code></td>
                    <td><code>0</code></td>
                    <td>Should the user automatically be subscribed to their own comments?</td>
                </tr>
                <tr>
                    <td><code>show_smilies</code></td>
                    <td><code>tinyint(1)</code></td>
                    <td><code>1</code></td>
                    <td>Should smilies in comments be shown to the user?</td>
                </tr>
                <tr>
                    <td><code>show_img</code></td>
                    <td><code>tinyint(1)</code></td>
                    <td><code>1</code></td>
                    <td>Should images in comments be shown to the user?</td>
                </tr>
                <tr>
                    <td><code>show_img_sig</code></td>
                    <td><code>tinyint(1)</code></td>
                    <td><code>1</code></td>
                    <td>Should images in signatures be shown to the user?</td>
                </tr>
                <tr>
                    <td><code>show_avatars</code></td>
                    <td><code>tinyint(1)</code></td>
                    <td><code>1</code></td>
                    <td>Should avatars be shown to the user?</td>
                </tr>
                <tr>
                    <td><code>show_sig</code></td>
                    <td><code>tinyint(1)</code></td>
                    <td><code>1</code></td>
                    <td>Should signatures to shown to the user?</td>
                </tr>
                <tr>
                    <td><code>timezone</code></td>
                    <td><code>float</code></td>
                    <td><code>0</code></td>
                    <td>The users timezone.</td>
                </tr>
                <tr>
                    <td><code>dst</code></td>
                    <td><code>tinyint(1)</code></td>
                    <td><code>0</code></td>
                    <td>Is the user currently observing daylight saving time?</td>
                </tr>
                <tr>
                    <td><code>time_format</code></td>
                    <td><code>tinyint(1)</code></td>
                    <td><code>0</code></td>
                    <td>The time format that the user uses.</td>
                </tr>
                <tr>
                    <td><code>date_format</code></td>
                    <td><code>tinyint(1)</code></td>
                    <td><code>0</code></td>
                    <td>The date format that the user uses.</td>
                </tr>
                <tr>
                    <td><code>language</code></td>
                    <td><code>varchar(25)</code></td>
                    <td><code>&ldquo;English&rdquo;</code></td>
                    <td>The language that should be used for this user.</td>
                </tr>
                <tr>
                    <td><code>style</code></td>
                    <td><code>varchar(25)</code></td>
                    <td><code>&ldquo;Luna&rdquo;</code></td>
                    <td>The name of the style that should be used for this user.</td>
                </tr>
                <tr>
                    <td><code>num_comments</code></td>
                    <td><code>int(10)</code></td>
                    <td><code>0</code></td>
                    <td>The number of comments the user has made. Note: This is the number made, not the number that currently exist (i.e. when a comment is deleted this isn't decremented).</td>
                </tr>
                <tr>
                    <td><code>last_comment</code></td>
                    <td><code>int(10)</code></td>
                    <td><code>NULL</code></td>
                    <td>A UNIX timestamp representing the time the user last made a comment.</td>
                </tr>
                <tr>
                    <td><code>last_search</code></td>
                    <td><code>int(10)</code></td>
                    <td><code>NULL</code></td>
                    <td>A UNIX timestamp representing the time the user last performed a search.</td>
                </tr>
                <tr>
                    <td><code>last_email_sent</code></td>
                    <td><code>int(10)</code></td>
                    <td><code>NULL</code></td>
                    <td>A UNIX timestamp representing the time the user last sent an email via the forums.</td>
                </tr>
                <tr>
                    <td><code>last_report_sent</code></td>
                    <td><code>int(10)</code></td>
                    <td><code>NULL</code></td>
                    <td>A UNIX timestamp representing the time the user last sent a report via the forums.</td>
                </tr>
                <tr>
                    <td><code>registered</code></td>
                    <td><code>int(10)</code></td>
                    <td><code>0</code></td>
                    <td>A UNIX timestamp representing the time the user registered.</td>
                </tr>
                <tr>
                    <td><code>registration_ip</code></td>
                    <td><code>varchar(39)</code></td>
                    <td><code>&ldquo;0.0.0.0&rdquo;</code></td>
                    <td>The IP address used by the user when registering.</td>
                </tr>
                <tr>
                    <td><code>last_visit</code></td>
                    <td><code>int(10)</code></td>
                    <td><code>0</code></td>
                    <td>A UNIX timestamp representing the time of the users last visit.</td>
                </tr>
                <tr>
                    <td><code>admin_note</code></td>
                    <td><code>varchar(30)</code></td>
                    <td><code>NULL</code></td>
                    <td>A note that the administrator has entered.</td>
                </tr>
                <tr>
                    <td><code>activate_string</code></td>
                    <td><code>varchar(80)</code></td>
                    <td><code>NULL</code></td>
                    <td>A temporary storage string for new passwords and new e-mail addresses.</td>
                </tr>
                <tr>
                    <td><code>activate_key</code></td>
                    <td><code>varchar(8)</code></td>
                    <td><code>NULL</code></td>
                    <td>A temporary storage string for new password and new e-mail address activation keys.</td>
                </tr>
                <tr>
                    <td><code>use_pm</code></td>
                    <td><code>tinyiny(1)</code></td>
                    <td><code>1</code></td>
                    <td>Allow the user to use Inbox.</td>
                </tr>
                <tr>
                    <td><code>notify_pm</code></td>
                    <td><code>tinyiny(1)</code></td>
                    <td><code>1</code></td>
                    <td>Notify the user for now received Inbox items.</td>
                </tr>
                <tr>
                    <td><code>notify_pm_full</code></td>
                    <td><code>tinyiny(1)</code></td>
                    <td><code>0</code></td>
                    <td>Notify the user for new received Inbox items (full).</td>
                </tr>
                <tr>
                    <td><code>num_pms</code></td>
                    <td><code>int(10)</code></td>
                    <td><code>0</code></td>
                    <td>The amount of Inbox items for this user.</td>
                </tr>
                <tr>
                    <td><code>first_run</code></td>
                    <td><code>tinyiny(1)</code></td>
                    <td><code>0</code></td>
                    <td>Show the First Run experience.</td>
                </tr>
                <tr>
                    <td><code>color_scheme</code></td>
                    <td><code>int(25)</code></td>
                    <td><code>3</code></td>
                    <td>The color used by the theme for this user.</td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
<?php include '../include/footer.php' ?>