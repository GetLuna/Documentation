<?php $section = "docs"; $dsection = "use"; $dpage = "fontawesome"; include('../include/header.php') ?>
<div class="row main">
	<div class="col-sm-3">
		<?php include ('docsnav.php') ?>
	</div>
	<div class="col-sm-9">
		<h1>Font Awesome</h1>
		<p>As icons, Luna heavily uses Font Awesome. Up until Luna 2.0 this was Font Awesome 4.x. Not only does Luna's UI use these icons, you could also assign an icon to your forums. Starting with Luna 2.1, Font Awesome Free 5 is used.</p>
		<h2>Font Awesome Pro 5</h2>
		<p>Luna contains an option under Settings > Theme > Theme that allows you to "Enable Font Awesome Pro features within Luna". This settings essentially changes where Luna looks for the Font Awesome source. Additionally, it enables the option to use the Font Awesome Pro 5 Light icons as forum icons.</p>
        <p>As Luna is legally not allowed to distribute Font Awesome Pro 5 and you need a license to use this extended version of Font Awesome, you will have to manually install Font Awesome Pro 5 in Luna.</p>
        <h3>I don't yet have a license</h3>
        <p>If you don't yet have a Font Awesome Pro license, please visit the <a href="https://fontawesome.com/pro">Font Awesome</a> website to buy one.</p>
        <h3>I do have a license</h3>
        <ol>
            <li>Go to your <a href="https://fontawesome.com/account/downloads">account's downloads</a> and download the latest version of Font Awesome Pro.</li>
            <li>In the downloaded file, open the "fontawesome-pro-x.y.z" folder.</li>
            <li>Open the "web-fonts-with-css" folder.</li>
            <li>In Luna, navigate to the vendor folder and create a new folder named "fontawesome"</li>
            <li>Move the "css" and "webfonts" folder from your download into the "fontawesome" folder you created.</li>
            <li>Enable the "Font Awesome Pro" setting in Backstage.</li>
        </ol>
        <p>You now have access to nearly 2000 additional icons within Luna!</p>
        <h3>Font Awesome Pro updates</h3>
        <p>While the Font Awesome Free version included in Luna will be updated over time, the Font Awesome Pro version you install yourself won't. When Font Awesome releases a new update, you will have to update it manually.</p>
	</div>
</div>
<?php include '../include/footer.php' ?>