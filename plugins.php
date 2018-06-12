<?php $section = "docs"; $dsection = "for"; $dpage = "plugins"; include('../include/header.php') ?>
<div class="row main">
	<div class="col-sm-3">
		<?php include ('docsnav.php') ?>
	</div>
	<div class="col-sm-9">
		<h1>Plugins</h1>
		<h2>The basic stuff</h2>
		<p>Before you start working on your plugin, it's important to know what version of Luna you want to design for. This page is about Luna 1.0 or higher. Click on the download button below to download the basic plugin "Example". This plugin is just a tiny page that will appear under &quot;Extensions&quot; on the Backstage of your board. This plugin allows you to show a simple text. However, it's a good start for a Backstage page to manage settings for your plugin, further, it's useless, it's up to you to make it useful.</li>
		<a class="btn btn-primary btn-block btn-lg" href="../downloads/plugins/example.zip"><span class="fa fa-cloud-download"></span> Download Example 2.1.0 Plugin for Luna</a>
		<h2>Available classes and ids to style your plugin</h2>
		<p>In the Backstage, you can use all Bootstrap 3.3 ellements to give your plugin a nice interface. However, Luna has its own ellements too, like the panel-header buttons. You can add more CSS to your templates, we recommend you to use the default Backstage style as much as possible. This will prevent further issues.</li>
	</div>
</div>
<?php include '../include/footer.php' ?>