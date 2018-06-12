<?php $section = "docs"; $dsection = "use"; $dpage = "upgrading"; include('../include/header.php') ?>
<div class="row main">
	<div class="col-sm-3">
		<?php include ('docsnav.php') ?>
	</div>
	<div class="col-sm-9">
		<h1>Updating</h1>
		<p>With those instructions, you can update your board to the latest version of Luna. All versions of Luna can be updated to a newer version. You can upgrade to Luna 1.1 and higher from the following versions of FluxBB, ModernBB and Luna:</li>
		<ul>
			<li><b>FluxBB</b>: all versions as of 1.4.0 supported</li>
			<li><b>ModernBB</b>: all versions supported</li>
			<li><b>Luna</b>: all versions supported</li>
		</ul>
		<p>If you're upgrading to Luna 1.0.10 or lower, there is a limit from which version you can do so. We do not recommend to use Luna 1.0.x release anymore and strongly recommend you to use the latest stable release of Luna. Below is a list of all releases that support upgrading to Luna 1.0:</li>
		<ul>
			<li><b>ModernBB</b>: all versions as of 3.5.0 supported</li>
			<li><b>Luna</b>: all versions supported</li>
		</ul>
		<p class="alert alert-warning">Always make a backup of your forum before updating. While we obviously test Luna to the best of our ability it is hard to simulate every single situation, especially when sites are using languages none of us know. The update script does have potential to corrupt your database in the unlikely event that something goes wrong.</li>
		<h2>Overwriting files</h2>
		<p>The easiest option is to simply overwrite the old files with the new ones. While this is the easiest way to update, it is also the least flexible: any modifications you have made to files that you overwrite will be lost.</li>
		<ol>
			<li><a href="../index.php">Download</a> the new files and decompress them.</li>
			<li>Upload the contents of the directory, overwriting the existing files.</li>
			<li>Visit your website, you'll be requested to click a button to install the updated.</li>
		</ol>
		<p>If you have applied any modification, it's recommended to apply these modifications to the new version before updating, however, it's important to stay up-to-date with the latest version for obvious reasons.</li>
		<h2>Update rings</h2>
		<p>The update check feature in Luna is capable of checking for updates in 2 branches. These are Normal are Preview. There is a third branch called Nightly. Allow us to explain what this means:</li>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Ring</th>
					<th>Description</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Normal</td>
					<td>You will receive notifications for all stable releases of Luna.</td>
				</tr>
				<tr>
					<td>Preview</td>
					<td>You will receive notifications for all stable and Preview releases of Luna, this includes Release Candidates, Betas and Previews whenever they are released.</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<?php include '../include/footer.php' ?>