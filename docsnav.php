<?php if ($dsection == "index") { ?>
<div class="list-group docs">
	<a class="list-group-item active" href="index.php">Documentation index</a>
	<h5 class="list-group-header"><i class="fal fa-fw fa-book"></i> Documentation</h5>
	<a class="list-group-item" href="index_use.php">Use Luna</a>
	<a class="list-group-item" href="index_develop_for.php">Develop for Luna</a>
	<a class="list-group-item" href="index_develop.php">Develop Luna</a>
	<a class="list-group-item" href="index_design.php">Design guidelines</a>
</div>
<?php } if ($dsection == "use") { ?>
<div class="list-group docs">
	<a class="list-group-item <?php if ($dpage == 'index') { ?>active<?php } ?>" href="index.php"><i class="fal fa-fw fa-arrow-left"></i> Documentation index</a>
	<h5 class="list-group-header"><i class="fal fa-fw fa-moon"></i> Get started</h5>
	<a class="list-group-item <?php if ($dpage == 'install') { ?>active<?php } ?>" href="install.php">Installation</a>
	<a class="list-group-item <?php if ($dpage == 'setup') { ?>active<?php } ?>" href="setup.php">Setting up your board</a>
	<a class="list-group-item <?php if ($dpage == 'upgrading') { ?>active<?php } ?>" href="upgrading.php">Updating</a>
	<h5 class="list-group-header"><i class="fal fa-fw fa-home"></i> Mainstage</h5>
	<a class="list-group-item <?php if ($dpage == 'editor') { ?>active<?php } ?>" href="editor.php">Editor and BBCode</a>
	<a class="list-group-item <?php if ($dpage == 'labels') { ?>active<?php } ?>" href="labels.php">Thread labels</a>
	<h5 class="list-group-header"><i class="fal fa-fw fa-tachometer-alt"></i> Backstage</h5>
	<a class="list-group-item <?php if ($dpage == 'backstage') { ?>active<?php } ?>" href="backstage.php">Using Backstage</a>
	<a class="list-group-item <?php if ($dpage == 'organizing') { ?>active<?php } ?>" href="organizing.php">Organizing</a>
	<a class="list-group-item <?php if ($dpage == 'admin') { ?>active<?php } ?>" href="admin.php">Administration</a>
	<a class="list-group-item <?php if ($dpage == 'antispam') { ?>active<?php } ?>" href="antispam.php">Fighting Spam</a>
	<h5 class="list-group-header"><i class="fal fa-fw fa-paint-brush"></i> Customize</h5>
	<a class="list-group-item <?php if ($dpage == 'fontawesome') { ?>active<?php } ?>" href="fontawesome.php">Font Awesome</a>
	<a class="list-group-item <?php if ($dpage == 'customizing') { ?>active<?php } ?>" href="customizing.php">Customizing</a>
	<h5 class="list-group-header"><i class="fal fa-fw fa-wrench"></i> Develop</h5>
	<a class="list-group-item <?php if ($dpage == 'troubleshooting') { ?>active<?php } ?>" href="troubleshooting.php">Troubleshooting</a>
	<h5 class="list-group-header"><i class="fal fa-fw fa-info-circle"></i> General</h5>
	<a class="list-group-item <?php if ($dpage == 'cookies') { ?>active<?php } ?>" href="cookies.php">Cookies</a>
	<a class="list-group-item <?php if ($dpage == 'data') { ?>active<?php } ?>" href="data.php">Data collection</a>
</div>
<?php } if ($dsection == "for") { ?>
<div class="list-group docs">
	<a class="list-group-item <?php if ($dpage == 'index') { ?>active<?php } ?>" href="index.php"><i class="fal fa-fw fa-arrow-left"></i> Documentation index</a>
	<h5 class="list-group-header"><i class="fal fa-fw fa-paint-brush"></i> Customize</h5>
	<a class="list-group-item <?php if ($dpage == 'themes') { ?>active<?php } ?>" href="themes.php">Themes</a>
	<a class="list-group-item <?php if ($dpage == 'plugins') { ?>active<?php } ?>" href="plugins.php">Plugins</a>
	<a class="list-group-item <?php if ($dpage == 'translations') { ?>active<?php } ?>" href="translations.php">Language packs</a>
	<h5 class="list-group-header"><i class="fal fa-fw fa-wrench"></i> Develop</h5>
	<a class="list-group-item <?php if ($dpage == 'troubleshooting') { ?>active<?php } ?>" href="troubleshooting.php">Troubleshooting</a>
	<h5 class="list-group-header"><i class="fal fa-fw fa-bookmark"></i> References</h5>
	<a class="list-group-item <?php if ($dpage == 'constants') { ?>active<?php } ?>" href="constants.php">Constants</a>
	<a class="list-group-item <?php if ($dpage == 'dbstructure') { ?>active<?php } ?>" href="dbstructure.php">Database structure</a>
	<a class="list-group-item <?php if ($dpage == 'dblayer') { ?>active<?php } ?>" href="dblayer.php">Database layer</a>
	<a class="list-group-item <?php if ($dpage == 'variables') { ?>active<?php } ?>" href="variables.php">Global variables</a>
	<a class="list-group-item <?php if ($dpage == 'functions') { ?>active<?php } ?>" href="functions.php">Functions</a>
	<a class="list-group-item <?php if ($dpage == 'caching') { ?>active<?php } ?>" href="caching.php">Caching</a>
</div>
<?php } if ($dsection == "develop") { ?>
<div class="list-group docs">
	<a class="list-group-item <?php if ($dpage == 'index') { ?>active<?php } ?>" href="index.php"><i class="fal fa-fw fa-arrow-left"></i> Documentation index</a>
	<h5 class="list-group-header"><i class="fal fa-fw fa-wrench"></i> Develop</h5>
	<a class="list-group-item <?php if ($dpage == 'php-conventions') { ?>active<?php } ?>" href="php_conventions.php">PHP coding conventions</a>
	<a class="list-group-item <?php if ($dpage == 'css-conventions') { ?>active<?php } ?>" href="css_conventions.php">CSS coding conventions</a>
	<a class="list-group-item <?php if ($dpage == 'troubleshooting') { ?>active<?php } ?>" href="troubleshooting.php">Troubleshooting</a>
	<h5 class="list-group-header"><i class="fal fa-fw fa-bookmark"></i> References</h5>
	<a class="list-group-item <?php if ($dpage == 'constants') { ?>active<?php } ?>" href="constants.php">Constants</a>
	<a class="list-group-item <?php if ($dpage == 'dbstructure') { ?>active<?php } ?>" href="dbstructure.php">Database structure</a>
	<a class="list-group-item <?php if ($dpage == 'dblayer') { ?>active<?php } ?>" href="dblayer.php">Database layer</a>
	<a class="list-group-item <?php if ($dpage == 'variables') { ?>active<?php } ?>" href="variables.php">Global variables</a>
	<a class="list-group-item <?php if ($dpage == 'functions') { ?>active<?php } ?>" href="functions.php">Functions</a>
	<a class="list-group-item <?php if ($dpage == 'caching') { ?>active<?php } ?>" href="caching.php">Caching</a>
	<h5 class="list-group-header"><i class="fab fa-fw fa-github"></i> Contributing</h5>
	<a class="list-group-item <?php if ($dpage == 'contributing') { ?>active<?php } ?>" href="contributing.php">Contribute to Luna</a>
	<a class="list-group-item <?php if ($dpage == 'branches') { ?>active<?php } ?>" href="branches.php">Branches</a>
	<a class="list-group-item <?php if ($dpage == 'tickets') { ?>active<?php } ?>" href="tickets.php">Creating tickets</a>
	<h5 class="list-group-header"><i class="fal fa-fw fa-info-circle"></i> General</h5>
	<a class="list-group-item <?php if ($dpage == 'browsers') { ?>active<?php } ?>" href="browsers.php">Browser support</a>
	<a class="list-group-item <?php if ($dpage == 'version') { ?>active<?php } ?>" href="version.php">Versioning</a>
</div>
<?php } if ($dsection == "design") { ?>
<div class="list-group docs">
	<a class="list-group-item <?php if ($dpage == 'index') { ?>active<?php } ?>" href="index.php"><i class="fal fa-fw fa-arrow-left"></i> Documentation index</a>
	<h5 class="list-group-header"><i class="fal fa-fw fa-pencil"></i> Brand</h5>
	<a class="list-group-item <?php if ($dpage == 'identity') { ?>active<?php } ?>" href="identity.php">Identity</a>
	<a class="list-group-item <?php if ($dpage == 'colors') { ?>active<?php } ?>" href="colors.php">Colors</a>
</div>
<?php } ?>