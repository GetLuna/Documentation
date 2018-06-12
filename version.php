<?php $section = "docs"; $dsection = "develop";  $dpage = "version"; include('../include/header.php') ?>
<div class="row main">
	<div class="col-sm-3">
		<?php include ('docsnav.php') ?>
	</div>
	<div class="col-sm-9">
		<h1>Versioning scheme</h1>
		<p class="lead">Just like most software does, Luna follows a versioning pattern. Here, we explain the way it's done.</li>
		<p>Luna follows an X.Y.Z version nummering. X stands for the major release, Y for the minor release and Z for the patch release. When some fixes are added, the Z will go one up. When we add new features, the Y will go one up and the Z number resets to 0. When we make major changes to the core, the X number goes one up, and Y and Z reset to 0.</li>
		<p>In the end, our goal is to follow Semantic Versioning, also know as Semver. This means that versions like 1.11.3 are possible, and that we don't bump the major version to 2, when the minor should reach 10. This also means that a .5 release is as big as any other point-release, like 1.3, 1.5, 1.6 and 1.9. These are all the same in size and impact.</li>
	</div>
</div>
<?php include '../include/footer.php' ?>