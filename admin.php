<?php $section = "docs"; $dsection = "use"; $dpage = "admin"; include('../include/header.php') ?>
<div class="row main">
	<div class="col-sm-3">
		<?php include ('docsnav.php') ?>
	</div>
	<div class="col-sm-9">
		<h1>Administration functions</h1>
		<h2>Checking for updates</h2>
		<p>Once you have your forum installed it is very important that it be kept up-to-date. While Luna has a good history with security and we always aim to release any security fixes as fast as possible, it is no good if you don't apply the updates. Luna will check for updates on it's own and will notice you about them in the Backstage. It will show you a direct download link for the update.</p>
		<h2>Pruning</h2>
		<p class="alert alert-danger">Pruned comments, notifications and users can never be restored.</p>
		<p>The prune feature can be used to delete old inactive comments from your forums, notifications or inactive users.</p>
		<p class="alert alert-info">For best performance, you should put the forum in maintenance mode during pruning.</p>
		<h2>Rebuilding search index</h2>
		<p>If you have added, edited or removed comments manually in the database or if you are having problems searching, you should rebuild the search index. This can be accessed under the &ldquo;maintenance&rdquo; menu item, and basically involves looking at all the comments in your forum and indexing the words that make them up in an efficient way to facilitate fast and efficient searching.</p>
		<p class="alert alert-info">For best performance, you should put the forum in maintenance mode during pruning.</p>
	</div>
</div>
<?php include '../include/footer.php' ?>