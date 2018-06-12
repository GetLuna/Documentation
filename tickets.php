<?php $section = "docs"; $dsection = "develop";  $dpage = "tickets"; include('../include/header.php') ?>
<div class="row main">
	<div class="col-sm-3">
		<?php include ('docsnav.php') ?>
	</div>
	<div class="col-sm-9">
		<h1>Creating tickets</h1>
		<p class="lead">Tickets are our way of communicating in the development tracker, tickets can contain bugs, features or changes. If you file your own issue, especialy if it is a bug, and you're not part of the Luna development team, it's important to follow some guidelines so someone understands what you mean. This is also the case for pull requests.</li>
		<h2>Include an extended description</h2>
		<p>Always include an extended description in your ticket. What do you want to archive? How do you reproduce that bug? What should the feature you want have to do? Those are all important question to include in a ticket, depending on what you are reporting (new feature/enhancement/bug).</li>
		<p>If you're reporting a bug, it is also important to give additional information. Where does it happen? Does it happen on every browser, if not, which are affected? Is it a security-related issue? How can we reproduce this bug?</li>
	</div>
</div>
<?php include '../include/footer.php' ?>