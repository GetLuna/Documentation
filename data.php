<?php $section = "docs"; $dsection = "design";  $dpage = "colors"; include('../include/header.php') ?>
<div class="row main">
	<div class="col-sm-3">
		<?php include ('docsnav.php') ?>
	</div>
	<div class="col-sm-9">
		<h1>Data collection</h1>
		<p>To make Luna a better place that's more optimized for the places where it is used, you have the option to send some data to our servers for analyses.</p>
		<h2>Why collect data?</h2>
		<p>We collect some data - with your permission - that helps us improve Luna for future version. This data gives us a basic sense of in what kind of environments Luna is being used. Sending this data is fully optional and we'll ask you every time we do so if it's fine with you, unless you've said we don't need to ask anymore.</p>
		<h2>Which data do we collect?</h2>
		<p>The data we collect isn't personalized. Below we have a list of the collected data:</p>
		<ul>
			<li>Luna version, core and name</li>
			<li>Basic statistics: number of threads, comments and members</li>
			<li>Your PHP version and database type (including its version)</li>
			<li>You board URL as a unique identifier</li>
			<li>The moment of collection (though that's generated on our part and not data we actually collect)</li>
		</ul>
		<h2>What are you options?</h2>
		<p>For the obvious reasons, data collection is only opt-in. However, we give you a couple of options for what you want to do, these options are:</p>
		<ul>
			<li><strong>Yes, always</strong> - we'll remember you preference and won't ask again. The data mentioned above will be send to us every time your board jumps to a new version. You will be able to disable this so that we'll ask again next time under Settings > Settings > System.</li>
			<li><strong>Yes, just now</strong> - we won't remember your preference and ask again the next time you update your board. The data mentioned above will be send to use.</li>
			<li><strong>No, not now</strong> - we won't remember your preference and ask again the next time you update your board. No data is send.</li>
		</ul>
		<p>That might beg the question: why not allow you do disable it always? The answer is that we encourage you to send that data. There really is no downside to it. We understand it if you don't want us to get that data, but it will benefit everyone, and maybe mostly you. Imagen that you're running a very old version of PHP, receiving data of your installation might be the tipping point for us to continue to provide support for that particular version of PHP.</p>
		<p>What do we understand under "next time you update". Because we do not consider every time you get the "Luna update" screen in front of you as an update. In fact, only when the <code>LUNA_VERSION</code> goes up, is an update. While the <code>LUNA_CORE_VERSION</code> is actually the thing we check on to determine if an update is required. This way, we prevent our users from sending us data to often. So every time the Update-page lists something as an update, than we'll ask.</p>
	</div>
</div>
<?php include '../include/footer.php' ?>