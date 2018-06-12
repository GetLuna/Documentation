<?php $section = "docs"; $dsection = "use"; $dpage = "install"; include('../include/header.php') ?>
<div class="row main">
	<div class="col-sm-3">
		<?php include ('docsnav.php') ?>
	</div>
	<div class="col-sm-9">
		<h1>Installation</h1>
		<h2>Install manually</h2>
		<ol>
			<li>Copy and/or upload all contents into the directory where you want to run your forums.</li>
			<li>Create a database for the forum to use.
				<ul>
					<li>For MySQL:
						<ul>
							<li>Using your web host's control panel</li>
							<li>Using <a title="http://www.phpmyadmin.net" href="http://www.phpmyadmin.net/" rel="nofollow">PHPMyAdmin</a></li>
						</ul>
					</li>
					<li>For SQLite:
						<ul>
							<li>Do nothing, the install script will automatically create the database.</li>
						</ul>
					</li>
				</ul>
			</li>
			<li>Run <code>install.php</code> from the forum root directory and follow the on-screen instructions.</li>
			<li>Delete <code>install.php</code> after the installation is completed. The Backstage will warn you in case you forget this step.</li>
		</ol>
		<h3>Write permissions</h3>
		<p>In order for Luna to run correctly PHP must have write permissions for <code>/cache/</code> and <code>/img/avatars/</code>. Under Windows, and certain Linux configurations this isn't a problem. If the install script notices these directories aren't writeable it will warn you. To fix this they must be set to CHMOD 777.</li>
		<h2>Install options</h2>
		<h3>Database type</h3>
		<p>Luna will automatically check which database engines your server can support and provide a drop down menu with available options. Usually it is recommended to use &ldquo;MySQL Improved&rdquo; or &ldquo;MySQL Improved (InnoDB)&rdquo;.</li>
		<h3>Database server hostname</h3>
		<p>The address of the database server (example: localhost, db.myhost.com or 192.168.0.15). You can specify a custom port number if your database doesn't run on the default port (example: localhost:3580). For SQLite support this field is ignored.</li>
		<h3>Database name</h3>
		<p>The name of the database that Luna will be installed into. The database must exist. For SQLite, this is the relative path to the database file. If the SQLite database file does not exist, Luna will attempt to create it.</li>
		<h3>Database credentials</h3>
		<p>Enter the username and password with which you connect to the database. Ignore for SQLite.</li>
		<h3>Table prefix</h3>
		<p>If you like, you can specify a table prefix. This way you can run multiple copies of Luna in the same database (example: foo_).</li>
		<h3>Administrator's username</h3>
		<p>This specifies the username for the forum's first user/administrator.</li>
		<h3>Administrator's password (and confirmation)</h3>
		<p>These fields dictate what said administrator's password is.  It is recommended that this be a strong password, as it is a strong user in regards to the forum.</li>
		<h3>Administrator's email</h3>
		<p>This email is not only used for the administrator users account but it, by default, is set as the webmaster email, administrator email, and it is added to the mailing list for reports by the forum's users.</li>
		<h3 >Board title</h3>
		<p>This sets the title of the board which appears at the uppermost left corner of the forum and the title in the browser window as well as being included in forum-generated emails.</li>
		<h3>Board description</h3>
		<p>The board description is located under the board title in the uppermost left corner.</li>
		<h3>Base url</h3>
		<p>This setting sets the base of the urls for the forum.  It is vital that this is set correctly, as it can cause permission issues and/or cause the site to cease to function. In most cases the default should be okay.</li>
		<h3>Default language</h3>
		<p>This setting dictates which translation of the board to use.</li>
		<h3>Default style</h3>
		<p>This sets the default style used by the board for new or non-registered users.</li>
	</div>
</div>
<?php include '../include/footer.php' ?>