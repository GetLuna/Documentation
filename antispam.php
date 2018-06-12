<?php $section = "docs"; $dsection = "use"; $dpage = "antispam"; include('../include/header.php') ?>
<div class="row main">
	<div class="col-sm-3">
		<?php include ('docsnav.php') ?>
	</div>
	<div class="col-sm-9">
		<h1>Fighting Spam</h1>
		<h2>Introduction</h2>
		<div>
		<p><a title="http://en.wikipedia.org/wiki/Forum_spam" href="http://en.wikipedia.org/wiki/Forum_spam" rel="nofollow">Forum spam</a> is a problem common to all popular forum software. Forum spam is caused by automated software (referred to as &ldquo;spambots&rdquo;) that visits forums with the sole purpose of registering many user accounts and/or commenting massive amounts of messages. These messages often contain links to commercial websites, <a title="http://en.wikipedia.org/wiki/Phishing" href="http://en.wikipedia.org/wiki/Phishing" rel="nofollow">phishing</a> websites or even malware.</p>
		<p>There are two ways in which spammers will try to promote their website through your Luna forum:</p>
		<ul>
			<li>
				<strong>Messages</strong>: the spambot will try to comment messages throughout your forum with commercial or malicious contents, often with links to a website. Sometimes the content of the message will actually seem like a some-what valid response, however a link to a commercial or malicious website is always included. The goal of the spammer is to trick your visitors into clicking through to their website, and thus sell products.
			</li>
			<li>
				<strong>Profiles</strong>: each forum user can specify a website in their profile. This information is visible on the user profile page. Some spambots create user accounts without ever comment messages, yet add a website url to the user profile. This type of spam is not directly aimed at having your visitors visit their website. Instead its goal is to improve the relative importance of a website as perceived by search engines by creating many incoming links to their website. While this form of spam is relatively unobtrusive, it will pollute the system with unwanted user accounts and may actually decrease your website rank in some search engines.
			</li>
		</ul>
		<h2>Counter-measures</h2>
		<p>In almost all cases the spamming process is completely automated. Most counter-measures therefore add functions to Luna that make it easier to distinguish human visitors from spambots. Below we will describe a number of counter-measures that you can take to prevent	spam in your forum.</p>
		<h3>Forum options</h3>
		<p>There are a number of options within Luna that can significantly reduce the amount of spam on your forum.</p>
		<h3>Require registration</h3>
		<p>The most obvious measure is to require visitors to register a user account before they are able to comment messages. This is the default in Luna.</p>
		<h3>Require validation of e-mailaddress</h3>
		<p>Many spambots are able to fill out forms, making it fairly easy to create new accounts. However these bots will often fill in an invalid e-mailaddress during registration. By requiring confirmation of the e-mailaddress before activating the user, the spambot will be unable to comment messages. To enable verification, log in as administrator and:</p>
		<ul>
			<li>Click the Backstage icon in the menu</li>
			<li>Go to 'Settings'</li>
			<li>Click on the tab 'Registration'</li>
			<li>Check the option 'Verify registrations'</li>
		</ul>
		<p>You can easly remove unverified accounts through the prune options under 'Maintenance'.</p>
		<h3>Enable questions</h3>
		<p>Another option we strongly recommend you to customize are the questions Luna will ask when registrating a new user. By default, Luna provides a limit set of questions that will be asked at random while creating a new account, but it is always safer to also include your own questions.</p>
	</div>
</div>
<?php include '../include/footer.php' ?>