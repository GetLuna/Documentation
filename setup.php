<?php $section = "docs"; $dsection = "use"; $dpage = "setup"; include('../include/header.php') ?>
<div class="row main">
	<div class="col-sm-3">
		<?php include ('docsnav.php') ?>
	</div>
	<div class="col-sm-9">
		<h1>Setting up your board</h1>
		<p class="lead">Here are some pages in the Backstage you might want to stop by after you've set up your brand new forum.</li>

		<h2>Settings</h2>
		<h3>Settings</h3>
		<p>Change basic setting like the title and discription. This is also the place where you can change the default time zone, daylight savings and other time-related settings. Also, you can change the default language of your forum (for guests and new users), feed settings, how Luna should handle reported comments, avatar settings, and finally, announcements.</li>
		<h3>Features</h3>
		<p>Under 'Features' you can change the functions that are available on your board, like parser settings, First Run settings, and more. Also, you can activate censoring.</li>
		<h3>Appearance</h3>
		<p>Here you can change the appearance of your board. Things like displaying the version number of Luna in the footer info about users. Also, you can enable smilies and made links are clickable without the need to put them between [url]-tags. Also, you can change here the number of threads and comments on one page.</li>
		<h3>Registration</h3>
		<p>Here, you can disable new registrations. Also, you can activate a security features that asks at new members to verify themselfs. You also can add here forum rules, when you activate 'User forum rules', a new button, 'Rules', will be added to the menu of your Luna installation.</li>
		<h3>Email</h3>
		<p>Change email settings, like the adres of the forums admin and webmaster, the abbility to subscribe to forums and threads and your SMTP settings.</li>
		<h3>Menu</h3>
		<p>Under the menu settings, you can change to items in the menu. You can't delete default items, but you can hide them.</li>
		<h3>Themes</h3>
		<p>This page contains an overview of all themes that are available to your installation. You can change the look of your board here and change settings of themes in case they have their own settings.</li>
		
		<h2>Users</h2>
		<h3>Permissions</h3>
		<p>Probably the most critical part of setting up a new forum is getting the permissions right.</li>
		<p>To setup a working and useful permission hierarchy, you can create user groups in the administration panel. Click on &ldquo;User groups&rdquo; and you will see the four default user groups - Administrators, Moderators, Members and Guests.</li>
		<h3>User groups</h3>
		<p>See <a href="organizing.php">promotion</a></li>
		<h3>Ranks</h3>
		<p>See <a href="organizing.php">ranks</a></li>
		
		<h2>Content</h2>
		<h3>Board</h3>
		<p>See <a href="organizing.php">categories</a> and <a href="organizing.php">forums</a> for more information</li>
		<h3>Censoring</h3>
		<p>With censoring, you can easily manage which words need to be replaced with another word. On this page, you are able to add, update and remove censored words. Remember that this also affects usernames.</li>
	</div>
</div>
<?php include '../include/footer.php' ?>