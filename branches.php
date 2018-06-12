<?php $section = "docs"; $dsection = "develop";  $dpage = "branches"; include('../include/header.php') ?>
<div class="row main">
	<div class="col-sm-3">
		<?php include ('docsnav.php') ?>
	</div>
	<div class="col-sm-9">
		<h1>Branches</h1>
		<p class="lead">When you go to our repository on GitHub, you'll see that there are a couple of branches in our repo. Below, you can see what is going on in which.</p>
		<div class="alert alert-info">
			The information tends to get out-of-date quickly due to ever changing branches. The information might not be correct at this point anymore. Last updated on <b>6 May 2016</b>.
		</div>
		<h2>Branches</h2>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Name</th>
					<th>Description</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>lunadev</td>
					<td>The main branch, every branch is based upon this branch.</td>
				</tr>
				<tr>
					<td>preview</td>
					<td>When a nightly build is stable enough, it gets released as an official preview release (Preview, Beta, RC) in this branch.</td>
				</tr>
				<tr>
					<td>version&lt;number&gt;</td>
					<td>The branches as, for example, <code>version1.2</code> are used to develop these respective versions and their updates.</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<?php include '../include/footer.php' ?>