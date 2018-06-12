<?php $section = "docs"; $dsection = "develop";  $dpage = "caching"; include('../include/header.php') ?>
<div class="row main">
	<div class="col-sm-3">
		<?php include ('docsnav.php') ?>
	</div>
	<div class="col-sm-9">
		<h1>Caching</h1>
		<p>In order to increase performance, Luna makes use of caching techniques in various places across the software. This allows us to store results of frequently executed database queries for faster access directly on the file system.</p>
		<h2>Loading from cache</h2>
		<p>To load cached data, all you have to do is including the cache file (if it exists) – that will make a global variable available that contains the data:</p>
<pre><code class="language-php">// Load cached configuration
if (file_exists(LUNA_CACHE_DIR.'cache_config.php'))
include LUNA_CACHE_DIR.'cache_config.php';</code></pre>
		<p>If the file does not exist, the cache has to be regenerated first.</p>
		<h2>Regenerating the cache</h2>
		<p>In order to not show old data on the forum, you need to make sure that the cache files are regenerated when you make changes to that data in the database. This code shows how to regenerate the configuration cache, which should be done after updating config values in the database:</p>
<pre><code class="language-php">if (!defined('LUNA_CACHE_FUNCTIONS_LOADED'))
require luna_ROOT.'include/cache.php';

// Regenerate the config cache
generate_config_cache();</code></pre>
		<p>These functions are available to generate caches:</p>
		<ul>
			<li><code>generate_bans_cache()</code></li>
			<li><code>generate_censoring_cache()</code></li>
			<li><code>generate_config_cache()</code></li>
			<li><code>generate_ranks_cache()</code></li>
			<li><code>generate_stopwords_cache()</code></li>
			<li><code>generate_update_cache()</code></li>
			<li><code>generate_users_info_cache()</code></li>
		</ul>
	</div>
</div>
<?php include '../include/footer.php' ?>