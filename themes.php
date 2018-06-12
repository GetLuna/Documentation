<?php $section = "docs"; $dsection = "for"; $dpage = "themes"; include('../include/header.php') ?>
<div class="row main">
	<div class="col-sm-3">
		<?php include ('docsnav.php') ?>
	</div>
	<div class="col-sm-9">
		<h1>Themes</h1>
		<div class="alert alert-info">We will provide a developer theme later on this page.</div>
		<p>Unlike the old ModernBB Style Engine (version 5.2 and prior), the Luna Theme Engine (version 6.0 and higher) requires a lot more pages to be present in your theme. The good news is, Luna also allows for much more customization than you where used to with ModernBB, and it allows you to do that much easier. Not only to develop, but also to update to later versions of Luna.</li>
		<h2>Required files</h2>
		<p>This is a list of files that are required to be in your theme, grouped to show you which files are required for which type of theme.</li>
		<h3>Required for parent and child themes</h3>
		<ul>
			<li><code>information.php</code></li>
			<li><code>logo.png</code></li>
			<li><code>screenshot.png</code></li>
			<li><code>style.css</code></li>
		</ul>
		<h3>Required for parent theme, optional for child theme</h3>
		<ul>
			<li><code>delete.php</code></li>
			<li><code>edit.php</code></li>
			<li><code>footer.php</code></li>
			<li><code>forum.php</code></li>
			<li><code>header.php</code></li>
			<li><code>help.php</code></li>
			<li><code>inbox.php</code></li>
			<li><code>inbox-delete.php</code></li>
			<li><code>inbox-delete-comment.php</code></li>
			<li><code>inbox-new.php</code></li>
			<li><code>inbox-view.php</code></li>
			<li><code>index.php</code></li>
			<li><code>login.php</code></li>
			<li><code>mail.php</code></li>
			<li><code>maintenance.php</code></li>
			<li><code>me-delete.php</code></li>
			<li><code>me-modals.php</code></li>
			<li><code>notifications.php</code></li>
			<li><code>comment.php</code></li>
			<li><code>profile.php</code></li>
			<li><code>register.php</code></li>
			<li><code>report.php</code></li>
			<li><code>reset.php</code></li>
			<li><code>rules.php</code></li>
			<li><code>seach.php</code></li>
			<li><code>search-advanced.php</code></li>
			<li><code>search-results.php</code></li>
			<li><code>settings.php</code></li>
			<li><code>soft.php</code></li>
			<li><code>thread.php</code></li>
			<li><code>users.php</code></li>
			<li><code>objects/</code>
				<ul>
					<li><code>comment.php</code></li>
					<li><code>forum.php</code></li>
					<li><code>search-thread.php</code></li>
					<li><code>thread.php</code></li>
					<li><code>user.php</code></li>
				</ul>
			</li>
		</ul>
		<h3>Optional for parent and child themes</h3>
		<ul>
			<li><code>theme_settings.php</code></li>
			<li>Any other file you can think of</li>
		</ul>
		<h2>information.php</h2>
		<p>The <code>information.php</code>-file contains basic information about your theme that is used on the Backstage's Theme-page. The content of the file should look like the example below. This example is from the Sunrise child theme based on Fifteen.</li>
<pre><code class="language-php">
&lt;?php
$xmlstr = &lt;&lt;&lt;XML
&lt;?xml version="1.0" encoding="utf-8"?&gt;
&lt;!DOCTYPE extension SYSTEM "ext-1.0.dtd"&gt;

&lt;!--
/*
* Copyright (C) 2014-2015 Studio 384
* Licensed under MIT
*/
--&gt;

&lt;style engine="1.0"&gt;
&lt;id&gt;sunrise&lt;/id&gt;
&lt;name&gt;Sunrise&lt;/name&gt;
&lt;developer&gt;Studio 384&lt;/developer&gt;
&lt;date&gt;15 October 2015&lt;/date&gt;
&lt;version&gt;1.2.0&lt;/version&gt;
&lt;minversion&gt;1.2.0&lt;/minversion&gt;
&lt;maxversion&gt;1.2.0&lt;/maxversion&gt;
&lt;description&gt;Sunset is a variant upon Fifteen, featuring a more classic design.&lt;/description&gt;
&lt;parent_theme&gt;Fifteen&lt;/parent_theme&gt;
&lt;/style&gt;
XML;
?&gt;
</code></pre>
		<p>The only optional parameter in this file is <code>&lt;parent_theme&gt;</code> and is only used to identify the theme's parent to inherit all the files from that theme.</li>
		<h2>theme_settings.php</h2>
		<p>The <code>theme_settings.php</code>-file will show theme settings on the Backstage's Themes-page. You can use this to show theme specific settings or instructions. You can do with it whatever you like.</li>
	</div>
</div>
<?php include '../include/footer.php' ?>