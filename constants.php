<?php $section = "docs"; $dsection = "develop";  $dpage = "constants"; include('../include/header.php') ?>
<div class="row main">
	<div class="col-sm-3">
		<?php include ('docsnav.php') ?>
	</div>
	<div class="col-sm-9">
		<h1>Constants</h1>
		<p>Luna's code makes use of <A title="http://www.php.net/manual/en/language.constants.php" href="http://www.php.net/manual/en/language.constants.php" rel="nofollow">constants</a> in order to define certain set values that are used throughout the code (pre-defined constants) as well as for several configuration settings (user-defined constants).</p>
		<h2>Pre-defined constants</h2>
		<p>Pre-defined constants allow Luna to associate a value with a descriptive string in order to facilitate the common use of the value / simplify the process of changing that value throughout the code. A reference of such constants is provided below. The constants are grouped by the version of the software they exist in. They are given along with their value and a description of what they are/how to use them.</p>
		<h3>LUNA_UNVERIFIED</h3>
		<p>The group ID given to users when email verification of registrations is enabled.</p>
		<h3>LUNA_ADMIN</h3>
		<p>The group ID given to administrators.</p>
		<h3>LUNA_MOD</h3>
		<p>The group ID given to moderators. This is the default moderator group, but it is possible that it could be changed or other groups could have moderator permissions. Checking against this constant is no longer valid to confirm a group has moderator permissions. It has been left for backwards compatibility with modifications designed for Luna v1.2.</p>
		<h3>LUNA_GUEST</h3>
		<p>The group ID given to the Guest user.</p>
		<h3>LUNA_MEMBER</h3>
		<p>The group ID given to users in the default member group.</p>

		<h3>Version constants</h3>
		<p>The constants that are all related to the board's version numbers are located in the <code>Version</code> class, which is accessable from everywhere.</p>
		<h3>Version::LUNA_VERSION</h3>
		<p>The current version of Luna, identifies releases.</p>
		<h3>Version::LUNA_CORE_VERSION</h3>
		<p>The current core version of Luna, identifies builds.</p>
		<h3>Version::LUNA_CODE_NAME</h3>
		<p>The current version's codename.</p>
		<h3>Version::LUNA_CODE_NAME_SEM</h3>
		<p>The current version's code name written with capitals.</p>
		<h3>Version::LUNA_DB_VERSION</h3>
		<p>The current database structure version number (since not every new version changes the database).</p>
		<h3>Version::LUNA_PARSER_VERSION</h3>
		<p>The current parser version number (since not every new version changes the parser).</p>
		<h3>Version::LUNA_SI_VERSION</h3>
		<p>The current search index version number (since not every new version changes the search index).</p>
		<h3>Version::MIN_PHP_VERSION</h3>
		<p>The minimal required version of PHP.</p>
		<h3>Version::MIN_MYSQL_VERSION</h3>
		<p>The minimal required version of MySQL.</p>
		<h3>Version::MIN_PGSQL_VERSION</h3>
		<p>The minimal required version of PostgreSQL.</p>

		<h2>User-defined constants</h2>
		<p>Luna's code uses several constants that, when defined, modify its behavior. Most of these constants do not ever need to be used by the average user. However, some are useful for debugging and others are important for advanced users. A reference is provided below for those users who may want/need to use these constants. The constants are given along a description of what they do/how to use them.</p>
		<p>All constants (with the exception of per-page constants, i.e. LUNA_ROOT) should be defined at the bottom of the configuration file (config.php).</p>
		<h3>LUNA_ROOT</h3>
		<p>LUNA_ROOT is the relative path from the current folder to the folder where the Luna code resides. You should never need to define this constant yourself unless you are writing pages that use Luna / integrating Luna with another piece of software.</p>
		<pre><code class="language-php">define('LUNA_ROOT', './');
require LUNA_ROOT.'include/common.php';</code></pre>
		<h3>LUNA_DEBUG</h3>
		<p>Defining LUNA_DEBUG enables debug mode, which makes Luna display more detailed/sensitive error messages. Script generation time and number of queries executed will also be shown in the footer. Debug mode should <em>not</em> be enabled on a production site, since it can potentially give a malicious user sensitive information about a server. However, enabling debug mode is an integral step to reporting/diagnosing forum errors. Without the information it provides, it can be nearly impossible for the developers to figure out the underlying cause of an issue.</p>
		<pre><code class="language-php">define('LUNA_DEBUG', 1);</code></pre>
		<h3>LUNA_SHOW_QUERIES</h3>
		<p>Defining LUNA_SHOW_QUERIES makes all the queries executed during a pageview display in the footer. This feature is only useful for developing and should <em>never</em> be used in a production environment because of the potential for disclosure of sensitive information.</p>
		<pre><code class="language-php">define('LUNA_SHOW_QUERIES', 1);</code></pre>
		<h3>LUNA_TURN_OFF_MAINT</h3>
		<div>
		<p>Defining LUNA_TURN_OFF_MAINT overrides the $luna_config setting to enable maintenance mode. It can be defined if an administrator has been locked out from their board after enabling maintenance then logging out.</p>
		<pre><code class="language-php">define('LUNA_TURN_OFF_MAINT', 1);</code></pre>
		<h3>LUNA_DISABLE_BUFFERING</h3>
		<p>Defining LUNA_DISABLE_BUFFERING disables output buffering. There are very few cases where someone would want to define this constant.</p>
		<pre><code class="language-php">define('LUNA_DISABLE_BUFFERING', 1);</code></pre>
		<h3>LUNA_CACHE_DIR</h3>
		<p>LUNA_CACHE_DIR can be used to define a non-standard directory to be used to store cache files.</p>
		<pre><code class="language-php">define('LUNA_CACHE_DIR', '/tmp/luna_cache/');</code></pre>
		<h3>LUNA_NO_SET_NAMES</h3>
		<p>Defining LUNA_NO_SET_NAMES will instruct the <A href="dblayer.php">database layer</a> to not set the connection character set to UTF-8.</p>
		<pre><code class="language-php">define('LUNA_NO_SET_NAMES', 1);</code></pre>
		<h3>LUNA_BEHIND_REVERSE_PROXY</h3>
		<p>Defining LUNA_BEHIND_REVERSE_PROXY will cause Luna to consider the HTTP_X_FORWARDED_PROTO header when determining the protocol in use, and the HTTP_X_FORWARDED_FOR header when determining a users IP address. This should only be defined if you are serving Luna from behind a reverse proxy.</p>
		<p>Our agents report this also works for NAT.</p>
		<pre><code class="language-php">define('LUNA_BEHIND_REVERSE_PROXY', 1);</code></pre>
		<h3>LUNA_MAX_COOKIE_SIZE</h3>
		<p>Defining LUNA_MAX_COOKIE_SIZE will set the maximum size of the tracking cookie to the given value. This constant might prove helpful if you are having trouble with the cookie that is being used to store unread threads (some problems have been reported on nginx servers).</p>
		<pre><code class="language-php">define('LUNA_MAX_COOKIE_SIZE', 4048); // default, decrease as you see fit</code></pre>
		<h3>LUNA_DISABLE_STRIPSLASHES</h3>
		<p>By default, Luna strips (back)slashes from user input (GET, POST, COOKIE) if PHP's magic_quotes_gpc is enabled. Defining LUNA_DISABLE_STRIPSLASHES will prevent Luna from doing this. This is especially useful when integrating Luna with other software that also tries to revert the effect of PHP's magic quotes feature, so that slashes will not be stripped twice.</p>
		<pre><code class="language-php">define('LUNA_DISABLE_STRIPSLASHES', 1);</code></pre>
	</div>
</div>
<?php include '../include/footer.php' ?>