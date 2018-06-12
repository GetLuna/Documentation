<?php $section = "docs"; $dsection = "develop";  $dpage = "contributing"; include('../include/header.php') ?>
<div class="row main">
	<div class="col-sm-3">
		<?php include ('docsnav.php') ?>
	</div>
	<div class="col-sm-9">
		<h1>Contribute to Luna</h1>
		<p class="lead">Do you want to make a pull request to Luna? Great! Through it is important to follow some rules.</p>
		<h2>Where do I publish my pull request?</h2>
		<p>If you're pull request contains bugfixes, you can add the pull request to the then current branch (for example: version3.1), do not add a pull request to master, stable or unsupported branches. When a bugfix alters the way Luna functions, you're probably better of adding the pull request to the branch that's then in development.</p>
		<p>If you're pull request contains new features, changes in behavior, code additions or large amounts of revised code, please add the pull request to the then current development branch, if you create a pull request to any other branch, we'll have to close your merge request as we can not add features to a stable and already released version of Luna or any other branch that is not named "versionX.X". If the current development branch is comment beta, you'll have to add your pull request to the next development branch instead.</p>
		<h2>Do I have to create a ticket for a feature I want to see in Luna?</h2>
		<p>Depends on it, if you're able to code it yourself and think: "Why not, even if it isn't allowed, at least I've a working example for my own fork!", then no. If you create this feature and add a pull request to the official Luna repository, it will create a ticket for you. Describe properly what the pull request contains, how better explained, the more is the chance that it will make it to the official Luna core.</p>
		<h2>Can I make changes to the Luna core in my own coding style?</h2>
		<p>If you want you're code to become  part of the official Luna core, no, you can't. We have to keep the Luna core readable and consitent. That is very important. That's why we have <a href="docs/php_conventions.php">coding conventions</a>. They are very important, and if your code doesn't apply to them, we can't merge your pull request in any case. Of course, if you have no intention to pull your changes to the Luna core, go ahead, you're free to do whatever you want.</p>
		<h2>Under which license will my code be released?</h2>
		<p>For the forseable future, we release our code under the GPLv3 license. However, every contribution to Luna will be concidered as duallicensed under both GPLv3 and MIT. This accounts for all contributions to the Luna core as of July 22, 2014. Contributions to the ModernBB core are still GPLv3-only. Further, changes to the language files are also not binded to be released under GPLv3 and by contributing to the Luna core, you allow us to release these contributions under the MIT license, too.</p>
	</div>
</div>
<?php include '../include/footer.php' ?>