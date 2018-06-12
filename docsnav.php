<?php if ($docs_section == "index") { ?>
	<div class="list-group docs">
		<a class="list-group-item active" href="index">Documentation index</a>
		
		<h5 class="list-group-header"><i class="fal fa-fw fa-book"></i> Documentation</h5>
		<a class="list-group-item" href="index_use">Use Luna</a>
		<a class="list-group-item" href="index_develop_for">Develop for Luna</a>
		<a class="list-group-item" href="index_develop">Develop Luna</a>
		<a class="list-group-item" href="index_design">Design guidelines</a>
	</div>
<?php } if ($docs_section == "use") { ?>
	<div class="list-group docs">
		<a class="list-group-item <?php if ($page == 'index') { ?>active<?php } ?>" href="index"><i class="fal fa-fw fa-arrow-left"></i> Documentation index</a>
		
		<h5 class="list-group-header"><i class="fal fa-fw fa-moon"></i> Get started</h5>
		<a class="list-group-item <?php if ($page == 'install') { ?>active<?php } ?>" href="install">Installation</a>
		<a class="list-group-item <?php if ($page == 'setup') { ?>active<?php } ?>" href="setup">Setting up your board</a>
		<a class="list-group-item <?php if ($page == 'upgrading') { ?>active<?php } ?>" href="upgrading">Updating</a>
		
		<h5 class="list-group-header"><i class="fal fa-fw fa-home"></i> Mainstage</h5>
		<a class="list-group-item <?php if ($page == 'editor') { ?>active<?php } ?>" href="editor">Editor and BBCode</a>
		<a class="list-group-item <?php if ($page == 'labels') { ?>active<?php } ?>" href="labels">Thread labels</a>
		
		<h5 class="list-group-header"><i class="fal fa-fw fa-tachometer-alt"></i> Backstage</h5>
		<a class="list-group-item <?php if ($page == 'backstage') { ?>active<?php } ?>" href="backstage">Using Backstage</a>
		<a class="list-group-item <?php if ($page == 'organizing') { ?>active<?php } ?>" href="organizing">Organizing</a>
		<a class="list-group-item <?php if ($page == 'admin') { ?>active<?php } ?>" href="admin">Administration</a>
		<a class="list-group-item <?php if ($page == 'antispam') { ?>active<?php } ?>" href="antispam">Fighting Spam</a>
		
		<h5 class="list-group-header"><i class="fal fa-fw fa-paint-brush"></i> Customize</h5>
		<a class="list-group-item <?php if ($page == 'fontawesome') { ?>active<?php } ?>" href="fontawesome">Font Awesome</a>
		<a class="list-group-item <?php if ($page == 'customizing') { ?>active<?php } ?>" href="customizing">Customizing</a>
		
		<h5 class="list-group-header"><i class="fal fa-fw fa-wrench"></i> Develop</h5>
		<a class="list-group-item <?php if ($page == 'troubleshooting') { ?>active<?php } ?>" href="troubleshooting">Troubleshooting</a>
		
		<h5 class="list-group-header"><i class="fal fa-fw fa-info-circle"></i> General</h5>
		<a class="list-group-item <?php if ($page == 'cookies') { ?>active<?php } ?>" href="cookies">Cookies</a>
		<a class="list-group-item <?php if ($page == 'data') { ?>active<?php } ?>" href="data">Data collection</a>
	</div>
<?php } if ($docs_section == "for") { ?>
	<div class="list-group docs">
		<a class="list-group-item <?php if ($page == 'index') { ?>active<?php } ?>" href="index"><i class="fal fa-fw fa-arrow-left"></i> Documentation index</a>
		
		<h5 class="list-group-header"><i class="fal fa-fw fa-paint-brush"></i> Customize</h5>
		<a class="list-group-item <?php if ($page == 'themes') { ?>active<?php } ?>" href="themes">Themes</a>
		<a class="list-group-item <?php if ($page == 'plugins') { ?>active<?php } ?>" href="plugins">Plugins</a>
		<a class="list-group-item <?php if ($page == 'translations') { ?>active<?php } ?>" href="translations">Language packs</a>
		
		<h5 class="list-group-header"><i class="fal fa-fw fa-wrench"></i> Develop</h5>
		<a class="list-group-item <?php if ($page == 'troubleshooting') { ?>active<?php } ?>" href="troubleshooting">Troubleshooting</a>
		
		<h5 class="list-group-header"><i class="fal fa-fw fa-bookmark"></i> References</h5>
		<a class="list-group-item <?php if ($page == 'constants') { ?>active<?php } ?>" href="constants">Constants</a>
		<a class="list-group-item <?php if ($page == 'dbstructure') { ?>active<?php } ?>" href="dbstructure">Database structure</a>
		<a class="list-group-item <?php if ($page == 'dblayer') { ?>active<?php } ?>" href="dblayer">Database layer</a>
		<a class="list-group-item <?php if ($page == 'variables') { ?>active<?php } ?>" href="variables">Global variables</a>
		<a class="list-group-item <?php if ($page == 'functions') { ?>active<?php } ?>" href="functions">Functions</a>
		<a class="list-group-item <?php if ($page == 'caching') { ?>active<?php } ?>" href="caching">Caching</a>
	</div>
<?php } if ($docs_section == "develop") { ?>
	<div class="list-group docs">
		<a class="list-group-item <?php if ($page == 'index') { ?>active<?php } ?>" href="index"><i class="fal fa-fw fa-arrow-left"></i> Documentation index</a>
		
		<h5 class="list-group-header"><i class="fal fa-fw fa-wrench"></i> Develop</h5>
		<a class="list-group-item <?php if ($page == 'php_conventions') { ?>active<?php } ?>" href="php_conventions">PHP coding conventions</a>
		<a class="list-group-item <?php if ($page == 'css_conventions') { ?>active<?php } ?>" href="css_conventions">CSS coding conventions</a>
		<a class="list-group-item <?php if ($page == 'troubleshooting') { ?>active<?php } ?>" href="troubleshooting">Troubleshooting</a>
		
		<h5 class="list-group-header"><i class="fal fa-fw fa-bookmark"></i> References</h5>
		<a class="list-group-item <?php if ($page == 'constants') { ?>active<?php } ?>" href="constants">Constants</a>
		<a class="list-group-item <?php if ($page == 'dbstructure') { ?>active<?php } ?>" href="dbstructure">Database structure</a>
		<a class="list-group-item <?php if ($page == 'dblayer') { ?>active<?php } ?>" href="dblayer">Database layer</a>
		<a class="list-group-item <?php if ($page == 'variables') { ?>active<?php } ?>" href="variables">Global variables</a>
		<a class="list-group-item <?php if ($page == 'functions') { ?>active<?php } ?>" href="functions">Functions</a>
		<a class="list-group-item <?php if ($page == 'caching') { ?>active<?php } ?>" href="caching">Caching</a>
		
		<h5 class="list-group-header"><i class="fab fa-fw fa-github"></i> Contributing</h5>
		<a class="list-group-item <?php if ($page == 'contributing') { ?>active<?php } ?>" href="contributing">Contribute to Luna</a>
		<a class="list-group-item <?php if ($page == 'branches') { ?>active<?php } ?>" href="branches">Branches</a>
		<a class="list-group-item <?php if ($page == 'tickets') { ?>active<?php } ?>" href="tickets">Creating tickets</a>
		
		<h5 class="list-group-header"><i class="fal fa-fw fa-info-circle"></i> General</h5>
		<a class="list-group-item <?php if ($page == 'browsers') { ?>active<?php } ?>" href="browsers">Browser support</a>
		<a class="list-group-item <?php if ($page == 'version') { ?>active<?php } ?>" href="version">Versioning</a>
	</div>
<?php } if ($docs_section == "design") { ?>
	<div class="list-group docs">
		<a class="list-group-item <?php if ($page == 'index') { ?>active<?php } ?>" href="index"><i class="fal fa-fw fa-arrow-left"></i> Documentation index</a>
		
		<h5 class="list-group-header"><i class="fal fa-fw fa-pencil"></i> Brand</h5>
		<a class="list-group-item <?php if ($page == 'identity') { ?>active<?php } ?>" href="identity">Identity</a>
		<a class="list-group-item <?php if ($page == 'colors') { ?>active<?php } ?>" href="colors">Colors</a>
	</div>
<?php } ?>