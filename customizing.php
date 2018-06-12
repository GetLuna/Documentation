<?php $section = "docs"; $dsection = "use"; $dpage = "customizing"; include('../include/header.php') ?>
<div class="row main">
	<div class="col-sm-3">
		<?php include ('docsnav.php') ?>
	</div>
	<div class="col-sm-9">
		<h1>Customizing</h1>
		<p>There are four main ways in which you can modify Luna. The first three, themes, language packs, and plugins, simply require dropping a file or folder into the right directory. Modifications however often involve modifying the core files, and hence are harder to install and remove.</p>
		<h2>Themes</h2>
		<p>Themes are packages that can be used to alter the look and feel of your forum. A theme should consist of 1 <abbr title="Cascading Style Sheets">CSS</abbr> file named <code>style.css</code>, and all required templates (unless it's a child theme), images etc. (where <code>&lt;theme&gt;</code> is the name of the theme). To install a theme simply upload the theme foldere  into the <code>/theme/</code> folder inside your forum root directory.</p>
		<p>Once installed the theme will be available within Backstage to set as the forum theme. For information on developing your own themes, please see the <a href="themes.php">themes</a> section of the developer wiki.</p>
		<h2>Language packs</h2>
		<p>Language packs are used to translate your forum into a different language. A language pack should consist of 1 folder named after the language it contains. It should contain a <code>luna.mo</code> and <code>luna.mp</code> file which contain the actual translation strings. It should also contain a <code>stopwords.txt</code> file, which contains a list of words which should not be indexed by the search engine.</p>
		<p>To install a language pack simply upload the folder into the <code>/lang/</code> folder inside your forum root directory.</p>
		<p>Once installed the language will be available within the administration console to set as the forum default, as well as within everyone's profile allowing them to use it if they wish. For information on developing your own language pack, please see the <a href="translations.php">developing translations</a> section.</p>
		<h2>Plugins</h2>
		<p>Plugins allow you to add features to your Backstage. While modifications allow you to add features to the actual forum core or modify its behaviour, you cannot do the same with plugins. However, they offer benefits like simplifying typical administrator tasks or providing additional features that Luna cannot and will not provide (due to its philosophy).</p>
		<p>Another benefit of plugins is that they are very easy to install. All you have to do is drop the plugin file into the directory <code>/plugins/</code> and you can immediately start using it.</p>
		<p>Some plugins are restricted to administrator access, while others may be used my moderators, too. You can discern the two types by their filenames: plugins that start with <code>AMP_</code> can be used my moderators, too, while those that start with <code>AP_</code> cannot.</p>
		<p>For information on developing your own plugin, please see the <a href="plugins.php">developing plugins</a> section.</p>
		<h2>Modifications</h2>
		<p>Modifications allow you to modify Luna's core or add features to it. While they are very flexible, because basically everything can be altered, they are also very prone to errors. They can be harder to apply and make it harder to update your forum. All packages have installation instructions and exactly explain how the modification should be installed.</p>
		<p>For information on developing your own modification, please see the <a href="modifications.php">developing modifications</a> section.</p>
	</div>
</div>
<?php include '../include/footer.php' ?>