<?php $section = "docs"; $dsection = "use"; $dpage = "troubleshooting"; include('../include/header.php') ?>
<div class="row main">
	<div class="col-sm-3">
		<?php include ('docsnav.php') ?>
	</div>
	<div class="col-sm-9">
		<h1>Troubleshooting</h1>
		<h2>Common problems</h2>
		<h3>Error: Unable to write configuration cache file to cache directory</h3>
		<p>Luna requires write access to the <code>/cache/</code> folder in order to cache certain settings. If PHP does not have write access you must CHMOD the folder to 777.</li>
		<h3>Avatar uploads don't work</h3>
		<p>Similarly to the <code>/cache/</code> folder, Luna requires write access to the <code>/img/avatars/</code> folder in order to save avatars. If PHP does not have write access you must CHMOD the folder to 777.</li>
		<h3>I've updated the database manually, but the changes have no effect</h3>
		<p>In order to decrease the load on the database server, Luna caches parts of the database to PHP scripts in the <code>/cache/</code> directory. To update the cache simply delete all PHP scripts in the <code>/cache/</code> directory. Luna will regenerate them when they are needed.</li>
		<h3>I enabled maintenance mode and cannot login</h3>
		<p>If you have enabled maintenance mode and accidentally logged out you will find it impossible to log back in! To remedy this you must open your configuration file (<code>config.php</code>) and at the end add: </li>
		<pre><code class="language-php">define('LUNA_TURN_OFF_MAINT', 1);</code></pre>
		<p>This will disable the whole maintenance mode feature and allow you to log in. Once logged in you should remove (or comment out) this from your configuration file again.</li>
		<h3>Changing the style/language did not work</h3>
		<p>If you change the style or language settings in the admin panel, this will not effect your (or anyone else's) style or language settings. Members are set with the forum default when they register. To change an existing members style or language you must go into their profile and change the setting there.</li>
		<h2>Debugging problems</h2>
		<p>To enable debug mode open the configuration file (config.php) and at the end add:</li>
<pre><code class="language-php">define('LUNA_DEBUG', 1);
define('LUNA_SHOW_QUERIES', 1);</code></pre>
		<p class="alert alert-warning">This will enable debug mode for everyone visiting the forum and expose the contents of SQL queries to everyone. Don't forget to remove (or comment out) the lines you added when you are done!</li>
	</div>
</div>
<?php include '../include/footer.php' ?>