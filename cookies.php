<?php $section = "docs"; $dsection = "use"; $dpage = "cookies"; include('../include/header.php') ?>
<div class="row main">
	<div class="col-sm-3">
		<?php include ('docsnav.php') ?>
	</div>
	<div class="col-sm-9">
		<h1>Cookies</h1>
		<p>On this page, you can find more information about cookies, what they are, what they do, why the forum you're visiting needs them, and how you can change the way your browser handels cookies.</p>
		<h2>What are cookies?</h2>
		<p><em>A cookie is a piece of text that the webserver sends to a visitor's browser, in the hope the browser can read this piece of text the next time the website is visited.</em></p>
		<p>Cookies are an extension to the HTTP-specification. The HyperText Transfer Protocol is used by everyone who visits a website: it regulates the communication between the webserver and your browser. It's not designed to take multiple page visits as one single thing. That's why it isn't possible to recover data from an earlier visit.</p>
		<p>To make that possible anyway, the set-cookie-headers was added to the HTTP-specification in 1997. The specification has been updated back in April 2011 for the last time en is currently known as <em>RFC 6265 HTTP State Management Mechanism</em>.</p>
		<h2>How do cookies work?</h2>
		<p>Let us first fix some misunderstandings: cookies aren't programs, they are barly even a file, the webserver doesn't sent anything to the computer of the user to save technicaly. If it will be saved or not is up to the computer that's in use. At the end, cookies are saved as file most of the time, but a webserver can't force a browser to save them, or to recover them later on.</p>
		<p>A cookie is always connected to one and only one specific domain or subdomain. An example of a domain and a subdomain are modernbb.be and forum.modernbb.be specificaly. This makes that cookies can only be recovered by the domain that sended it to the browser. So you can be sure that the cookies placed by the Luna software, or placed by us, will only be available to recover by that website, or us, respectivly.</p>
		<p>An important point at this is that every http-request can send cookies, and all relevant and known cookies can be recovered by every request. This includes requests for images, javascript files and css files. Of course, the domain will be checked in those cases too.</p>
		<h3>First-party cookies</h3>
		<p>Cookies placed by the same domain as the domain you're visiting, are known as first-party cookies. When you look at this page, the cookies from Luna are the first-party cookies.</p>
		<h3>Third-party cookies</h3>
		<p>Websites also have the ability to include content from third-parties. Examples are embedded video's, ads and social-media buttons. If those codes are loaded from the servers from the original publisher, they will also send cookies to your browser if they want too. Visiting a website like Luna, might also add third-party cookies for websites like Facebook.com, YouTube.com and others. Due to the way HTTP works and the security arround cookies, are first-parties not able to change the behavior of third-party cookies.</p>
		<p>Note: The Luna.be website and all of its subdomains do not send third-party cookies to your browser. Only first-party cookies are send, and only as soon as you visit our blog or forum.</p>
		<h2>Are there other methods for websites to save data?</h2>
		<p>Yes, like cookies, in 1997 and onwards, more methods to save data where made available. Since the Luna software doesn't use these types, we're not going to explain to much about this.</p>
		<p>Flash-applications have their own kind of cookies, you can compare them with HTTP. HTML5 local storage is a recent development. Webapps use this type to save - compared to cookies - large amounts of data. Since the support of this method is limited currenlty, Luna doesn't use this.</p>
		<h2>Where does Luna use cookies for?</h2>
		<p>Luna uses cookies to remember that you're logged in, it is also used to remember to not show the cookie bar in the Luna software if you visit a forum made with this software as a guest (otherwise, your user preferences prevent the bar from appearing). So in general: they are there so remember settings, to prevent content you've seen and shouldn't see again, from appearing again. These kind of cookies, that save the way the software should work for your, are called &quot;functional cookies&quot;.</p>
		<p>Except for that, cookies can tell the browser that the user already visited the website. Websites can collect statistics with this feature. Some known examples are Piwik and Google Analytics. The data send by these packages, is anonym. The Luna site  do not collect data like this, except when downloading software packages from our website, to remember the amount of times an unieqe visitor download our software. The Luna software doesn't collect this data by default either, but admins can always add this kind of data collection to the software on their site if they want.</p>
		<p>The information collected by cookies can also be used to collect information about you to give you specific ads. Once again, nor Luna.be does this, nor the Luna software by default, again, admins can add this kind of data collection to the software on their site if they want.</p>
		<p>The cookie that will be used to save the "Don't show again" button that you can click on the cookie bar, will be saved in a cookie. This cookie doesn't stay forever. In a year, we'll ask you again if you want it or not, if you browser get cleaned up, it will also reappear, as the cookie will be removed and we don't know if we have asked it or not.</p>
		<h2>Can I prevent cookies to be added to my browser?</h2>
		<p>Yes and no. Yes as in, you can block cookies, prevent them from being stored in your browser, but this will affect the user experience, as the website will not be able to identify you. Messages, like the cookie bar in the Luna software, will appear over and over again. Clicking them away won't work (unless your logged in, but then again, we will not be able to remember that you're logged in). This is why the Luna website is not available in a cookie-free version. Nor is the Luna software (by default, again). Through admins can provide a cookie-free site, but this might have to consequence that you will be unable to use parts of their site, including the forum. Also, this setting itselfs, has to be saved somehow. And that is done with... cookies.</p>
		<h2>How to remove cookies?</h2>
		<h3>Remove cookies from Edge</h3>
		<ol>
			<li>Go to &middot;&middot;&middot; &gt; Settings</li>
			<li>Click the &quot;Choose what to clear&quot; button and check Cookies</li>
			<li>You might not want to remove everything, be sure to check &quot;Cookies&quot;</li>
		</ol>
		<h3>Remove cookies from Internet Explorer</h3>
		<ol>
			<li>Go to Extra &gt; Internet options &gt; General</li>
			<li>Click on the &quot;Remove&quot; button below &quot;Browser history&quot;</li>
			<li>You might not want to remove everything, be sure to check &quot;Cookies&quot;</li>
		</ol>
		<h3>Remove cookeis from Firefox</h3>
		<ol>
			<li>Go to Extra &gt; Options &gt; Privacy</li>
			<li>Click on &quot;Remove your recent history&quot;</li>
			<li>Below &quot;Details&quot;, you check what you want to remove, be sure to check &quot;Cookeis&quot;</li>
		</ol>
		<h3>Remove cookies from Chrome</h3>
		<ol>
			<li>Click on the menu-icon, choose Options &gt; Advanced</li>
			<li>Choose &quot;Remove browserhistory&quot; under Privacy</li>
			<li>Be sure to check &quot;Remove cookies and other data&quot;</li>
		</ol>
	</div>
</div>
<?php include '../include/footer.php' ?>