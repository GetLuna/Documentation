# Contribute to Luna
Do you want to make a pull request to Luna? Great! Through it is important to follow some rules.

## Where do I publish my pull request?
If you're pull request contains bugfixes, you can add the pull request to the then current branch (for example: version2.1), do not add a pull request to master, stable or unsupported branches. When a bugfix alters the way Luna functions, you're probably better of adding the pull request to the branch that's then in development.

If you're pull request contains new features, changes in behavior, code additions or large amounts of revised code, please add the pull request to the then current development branch, if you create a pull request to any other branch, we'll have to close your merge request as we can not add features to a stable and already released version of Luna or any other branch that is not named "versionX.X". If the current development branch is comment beta, you'll have to add your pull request to the next development branch instead.

## Do I have to create a ticket for a feature I want to see in Luna? Wath about bugs?
Depends on it, if you're able to code it yourself and think: "Why not, even if it isn't allowed, at least I've a working example for my own fork!", then no. If you create this feature and add a pull request to the official Luna repository, it will create a ticket for you. Describe properly what the pull request contains, how better explained, the more is the chance that it will make it to the official Luna core.

For bugs, you best make a ticket, unless you are able to fix it yourself and are willing to push that to Luna with a pull request.

<div class="option-group">
    <a href="https://github.com/GetLuna/Luna/issues/new?template=bug_report.md
" class="btn btn-light btn-docs btn-block">
		<div class="row">
			<div class="col-11">
				<h2><i class="fal fa-fw fa-bug"></i> Report a bug</h2>
				<p>Found a bug? Report it on GitHub!</p>
			</div>
			<div class="col-1 col-arrow">
				<i class="fal fa-fw fa-arrow-right"></i>
			</div>
		</div>
	</a>
	<a href="https://github.com/GetLuna/Luna/issues/new?template=feature_request.md
" class="btn btn-light btn-docs btn-block">
		<div class="row">
			<div class="col-11">
				<h2><i class="fal fa-fw fa-box-open"></i> Request a feature</h2>
				<p>Woud you like to see something enw? Request it on GitHub!</p>
			</div>
			<div class="col-1 col-arrow">
				<i class="fal fa-fw fa-arrow-right"></i>
			</div>
		</div>
	</a>
</div>

## Can I make changes to the Luna core in my own coding style?
If you want you're code to become  part of the official Luna core, no, you can't. We have to keep the Luna core readable and consitent. That is very important. That's why we have [coding conventions](php_conventions). They are very important, and if your code doesn't comply to them, we can't merge your pull request in any case. Of course, if you have no intention to push your changes to the Luna core, go ahead, you're free to do whatever you want.

## Under which license will my code be released?
For the forseable future, we release our code under the GPLv2 license. However, every contribution to Luna will be concidered as duallicensed under both GPLv2 and MIT. This accounts for all contributions to the Luna core as of July 22, 2014. Further, changes to the language files are also not binded to be released under GPLv2 and by contributing to the Luna core, you allow us to release these contributions under the MIT license, too.