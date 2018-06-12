<?php
$section = "docs";
$dpage = "index";
include '../include/header.php';
$dsection = 'index';
?>
<div class="row main">
	<div class="col-sm-3">
		<?php include ('docsnav.php') ?>
	</div>
	<div class="col-sm-9">
		<h1>What do you want to do today?</h1>
		<a href="index_use.php" class="btn btn-light btn-docs btn-block">
			<div class="row">
				<div class="col-11">
					<h2><i class="fal fa-fw fa-moon"></i> Use Luna</h2>
					<p>A basic guide to using Luna</p>
				</div>
				<div class="col-1 col-arrow">
					<i class="fal fa-fw fa-arrow-right"></i>
				</div>
			</div>
		</a>
		<a href="index_develop_for.php" class="btn btn-light btn-docs btn-block">
			<div class="row">
				<div class="col-11">
					<h2><i class="fal fa-fw fa-box-heart"></i> Develop for Luna</h2>
					<p>How to build extentions, translations and themes</p>
				</div>
				<div class="col-1 col-arrow">
					<i class="fal fa-fw fa-arrow-right"></i>
				</div>
			</div>
		</a>
		<a href="index_develop.php" class="btn btn-light btn-docs btn-block">
			<div class="row">
				<div class="col-11">
					<h2><i class="fal fa-fw fa-wrench"></i> Develop Luna</h2>
					<p>How to help us develop Luna</p>
				</div>
				<div class="col-1 col-arrow">
					<i class="fal fa-fw fa-arrow-right"></i>
				</div>
			</div>
		</a>
		<a href="index_design.php" class="btn btn-light btn-docs btn-block">
			<div class="row">
				<div class="col-11">
					<h2><i class="fal fa-fw fa-object-ungroup"></i> Design guidelines</h2>
					<p>Designing Luna</p>
				</div>
				<div class="col-1 col-arrow">
					<i class="fal fa-fw fa-arrow-right"></i>
				</div>
			</div>
		</a>
	</div>
</div>
<?php

include '../include/footer.php';