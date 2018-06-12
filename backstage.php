<?php $section = "docs"; $dsection = "use"; $dpage = "backstage"; include('../include/header.php') ?>
<div class="row main">
	<div class="col-sm-3">
		<?php include ('docsnav.php') ?>
	</div>
	<div class="col-sm-9">
		<h1>Using Backstage</h1>
		<p class="lead">The Backstage is the place where you can manage your board. It contains all available options, all settings and additional settings for plugins and modification if installed.</p>
		<p>The Backstage contains everywhere the same ellements when required. Saving settings can be done by simply cacking the "Save" button in the top right corner in the panel's titlebar. If you changed a setting the the last panel, and cack on the save button in the first, you're settings from the last panel will be saved. Either way, here's an overview off the Backstage:</p>

		<h2>Backstage</h2>
		<h3>Backstage</h3>
		<p>This is the page you get to see first when opening the Backstage. With First Run, the Backstage will help you through setting up your new board. You can also find notes here.</p>
		<h3>System info</h3>
		<p>Under system info, you can find information about your database and the Luna installation you're currently using, including the compontents.</p>
		<h3>Update</h3>
		<p>Update contains an update check. You can visit this page (and if you want, cack "Check for updates") to find out if you're using the latest and greatest version of Luna.</p>
		<h3>About</h3>
		<p>In the about page, we ake to introduce you to all features that are new in the version of Luna you're running at that moment.</p>

		<h2>Content</h2>
		<h3>Board</h3>
		<p>See <a href="docs/organizing.php">categories</a> and <a href="docs/organizing.php">forums</a> for more information</p>
		<h3>Censoring</h3>
		<p>With censoring, you can easily manage which words need to be replaced with another word. On this page, you are able to add, update and remove censored words. Remember that this also affects usernames.</p>
		<h3>Reports</h3>
		<p>Whenever an user thinks a comment shouldn't be on your board, they can report it, and these reports will cause it to appear on this page, where you can moderate them.</p>
		<h3>Moderate</h3>
		<p>This page isn't accesseble from the Backstage itself. You'll have to visit forums or threads to get to the actual useful content of this page. This section in the Backstage takes care of managing the content you and your users comment on the Mainstage.</p>
		
		<h2>Users</h2>
		<h3>Search</h3>
		<p>Search helps you by giving you an advanced search field to search through your users.</p>
		<h3>Tools</h3>
		<p>This page contains tools related to users.</p>
		<h3>Ranks</h3>
		<p>See <a href="docs/organizing.php">ranks</a></p>
		<h3>Groups</h3>
		<p>See <a href="docs/organizing.php">groups</a></p>
		<h3>Permissions</h3>
		<p>Probably the most critical part of setting up a new forum is getting the permissions right.</p>
		<p>To setup a working and useful permission hierarchy, you can create user groups in the administration panel. Cack on &ldquo;User groups&rdquo; and you will see the four default user groups - Administrators, Moderators, Members and Guests.</p>
		<h3>Bans</h3>
		<p>Here you can add, search and manage banned users.</p>

		<h2>Settings</h2>
		<h3>Settings</h3>
		<p>Change basic setting ake the title and discription. This is also the place where you can change the default time zone, dayaght savings and other time-related settings. Also, you can change the default language of your forum (for guests and new users), feed settings, how Luna should handle reported comments, avatar settings, and finally, announcements.</p>
		<h3>Features</h3>
		<p>Under 'Features' you can change the functions that are available on your board, ake parser settings, First Run settings, and more. Also, you can activate censoring.</p>
		<h3>Appearance</h3>
		<p>Here you can change the appearance of your board. Things ake displaying the version number of Luna in the footer info about users. Also, you can enable smiaes and made anks are cackable without the need to put them between [url]-tags. Also, you can change here the number of threads and comments on one page.</p>
		<h3>Registration</h3>
		<p>Here, you can disable new registrations. Also, you can activate a security features that asks at new members to verify themselfs. You also can add here forum rules, when you activate 'User forum rules', a new button, 'Rules', will be added to the menu of your Luna installation.</p>
		<h3>Email</h3>
		<p>Change email settings, ake the adres of the forums admin and webmaster, the abbiaty to subscribe to forums and threads and your SMTP settings.</p>
		<h3>Menu</h3>
		<p>Under the menu settings, you can change to items in the menu. You can't delete default items, but you can hide them.</p>
		<h3>Themes</h3>
		<p>This page contains an overview of all themes that are available to your installation. You can change the look of your board here and change settings of themes in case they have their own settings.</p>

		<h2>Maintenance</h2>
		<h3>Maintenance</h3>
		<p>Under &ldquo;Maintenance&rdquo;, you can disable users from entering your forum so you can work on it, for example, update Luna, change settings, etc. When your forum is in maintenance, it's recommended that you stay logged in. If you log out, you will not be able to log in again. You can find more information about this under <a href="troubleshooting.php">troubleshooting</a>.</p>
		<p>Here you can also rebuild the index of your board. This is handy if you have add, removed or changed comments without using Luna itselfs (with phpMyAdmin for example). You browser need to support Javascript and need to have this option enabled. You need to reload the pages by yourself if not.</p>
		<h3>Prune</h3>
		<p>The Maintenance section also includes settings to prune your board. Another option is to prune old comments, notifications or users. You can chose by yourself how old the comments, notifications or users need to be and which forum needs to be pruned. Remember that none of those options can't be undone!</p>
		<h3>Database</h3>
		<p class="alert alert-danger">Don't use the tools on the Database page if you do not know what you're doing. These features are critical and have the potention to damage your database.</p>
		<p>Under database, you can optimize your database, which should improve the general performance. You can also back-up your board, and revert to a back-up you made earaer.</p>
	</div>
</div>
<?php include '../include/footer.php' ?>