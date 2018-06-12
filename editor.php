<?php $section = "docs"; $dsection = "use";  $dpage = "editor"; include('../include/header.php') ?>
<div class="row main">
	<div class="col-sm-3">
		<?php include ('docsnav.php') ?>
	</div>
	<div class="col-sm-9">
		<h1>Editor and BBCode</h1>
		<p>Luna has a very simple editor to use its BBCode features. This editor shows and allows you to include most of the supported BBCodes into your comments, however, it also contains a couple of additional features.</p>
		<p><img src="../img/docs/editor.png" alt="The Luna Editor as of Luna 1.2" class="img-responsive" /></p>
		<h2>Basic features</h2>
		<p>From left to right, the upper toolbar has the following features:</p>
		<ol>
			<li>Pin the thread to its forum, this will make the thread stay on the top of the list, only available for admins and moderators with the required permissions when creating a new thread and editing the opening comment.</li>
			<li>Edit the comment without adding/updating the &quot;Last edited by&quot; line. Only available for admins and moderators witht he required permissions when editing a comment.</li>
			<li><code>[b][/b]</code> Bold text.</li>
			<li><code>[u][/u]</code> Underline text.</li>
			<li><code>[i][/i]</code> Italic text.</li>
			<li><code>[s][/s]</code> &quot;Delete&quot; text, strike-through.</li>
			<li><code>[h][/h]</code> Heading text.</li>
			<li><code>[sub][/sub]</code> Text in subscript.</li>
			<li><code>[sup][/sup]</code> Text in superscript.</li>
			<li><code>[quote][/quote]</code> Quote.</li>
			<li><code>[code][/code]</code> Code field with syntax highlighting for supported languages.</li>
			<li><code>[c][/c]</code> Inline code.</li>
			<li><code>[url][/url]</code> URL to other pages.</li>
			<li><code>[img][/img]</code> Include an image.</li>
			<li><code>[video][/video]</code> Embed a video from DailyMotion, Vimeo or YouTube.</li>
			<li><code>[list][/list]</code> Make an unordered list.</li>
			<li><code>[*][/*]</code> Make a new bullit within a list.</li>
		</ol>
		<p>The bottom toolbar allows you to preview and submit your comment.</p>
		<h2>Other BBCode features</h2>
		<p>Additional to the features listed above, Luna supports other features in its BBCode implementation that are not included in the editor.</p>
		<ol>
			<li>A range of emoticons.</li>
			<li><code>[ins][/ins]</code> Insert text, visual identical to strike-through text in most browsers.</li>
			<li><code>[color=&lt;color&gt;][/color]</code> Where <code>&lt;color&gt;</code> is a color in either hexadecimal notation or name, changes the color of the text.</li>
			<li><code>[email][/email]</code> Add an email address.</li>
			<li><code>[list=1][/list]</code> Make an ordered list.</li>
			<li><code>[list=*][/list]</code> Another notation for an unordered list.</li>
		</ol>
		<p>Additional to those options, there is a third set of features that have to be enabled in the Backstage to be used, just like the list above, these options do not appear in the editor.</p>
		<ol>
			<li><code>[center][/center]</code> Center the content.</li>
			<li><code>[size=&lt;size&gt;][/size]</code> Where <code>&lt;size&gt;</code> in percentage relative to normal text in which size the text has to be displayed.</li>
			<li><code>[spoiler][/spoiler]</code> Will hide content by default until clicked.</li>
		</ol>
	</div>
</div>
<?php include '../include/footer.php' ?>