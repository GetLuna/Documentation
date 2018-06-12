<?php $section = "docs"; $dsection = "develop";  $dpage = "css-conventions"; include('../include/header.php') ?>
<div class="row main">
	<div class="col-sm-3">
		<?php include ('docsnav.php') ?>
	</div>
	<div class="col-sm-9">
		<h1>CSS coding conventions</h1>
		<div class="alert alert-info">
			<p>These coding conventions apply for Luna 1.3 "Denim" and higher versions.</p>
		</div>
		<p>The rules and recommendations set forth in this section apply to CSS and any other CSS-based programming language (where applicable) in use by Luna. Please note that tabs in this document have been substituted by spaces for visual reasons only.</p>
		<h2>Naming convention</h2>
		<p>The naming rules apply to the naming of ids and classes.</p>
		<ul>
			<li>Keep classes lowercase and use dashes (not underscores or camelCase). Dashes serve as natural breaks in related class (e.g., <code>.btn</code> and <code>.btn-danger</code>).</li>
			<li>Avoid excessive and arbitrary shorthand notation. <code>.btn</code> is useful for button, but <code>.s</code> doesn't mean anything.</li>
			<li>Keep classes as short and succinct as possible.</li>
			<li>Use meaningful names; use structural or purposeful names over presentational.</li>
			<li>Prefix classes based on the closest parent or base class.</li>
			<li>Use <code>.js-*</code> classes to denote behavior (as opposed to style), but keep these classes out of your CSS.</li>
		</ul>
		<h2>Brace policy and indentation</h2>
		<p>Braces are placed behind the last selector to which the declaration applies. Each selector and property has its own rule. All indentation should be made using tabs (with a tab size of 4), not spaces.</p>
		<p>Here's an example:</p>
<pre><code class="language-css">.navbar-default .navbar-brand,
.navbar-default .navbar-nav > li > a {
	color: #fff;
}</code></pre>
		<h2>Line breaks and encoding</h2>
		<p>All line breaks should be CR LF Windows only. Set your editor to save files with Windows style line breaks. All files should be saved using UTF-8 encoding.</p>
		<h2>Syntax</h2>
		<ul>
			<li>All indentation should be made using tabs (with a tab size of 4), not spaces.</li>
			<li>When grouping selectors, give each selector its own line.</li>
			<li>Include one space before the opening brace of declaration blocks for legibility, no space after.</li>
			<li>Give closing braces for declarations their own line.</li>
			<li>Include one space after <code>:</code> for each declaration.</li>
			<li>Each declaration should have its own line for more accurate error reporting.</li>
			<li>End all declarations with a semi-colon, including the last one.</li>
			<li>Comma-separated property values should include a space after each comma (e.g., <code>box-shadow</code>).</li>
			<li>Don't include spaces after commas <em>within</em> <code>rgb()</code>, <code>rgba()</code>, <code>hsl()</code>, <code>hsla()</code>, or <code>rect()</code> values.</li>
			<li>Don't prefix property values or color parameters with a leading zero (e.g., <code>.5</code> instead of <code>0.5</code> and <code>-.5px</code> instead of <code>-0.5px</code>).</li>
			<li>Use hex values to describe colors as much as possible. If you need a transparent color, use <code>rgba()</code>.</li>
			<li>Lowercase all hex values, e.g., <code>#fff</code>. Lowercase letters are easier to discern when scanning a document as they tend to have more unique shapes.</li>
			<li>Use shorthand hex values where available, e.g., <code>#fff</code> instead of <code>#ffffff</code>.</li>
			<li>Quote attribute values in selectors, e.g., <code>input[type="text"]</code>. <A href="http://mathiasbynens.be/notes/unquoted-attribute-values#css">They&rsquo;re only optional in some cases</A>, and it&rsquo;s a good practice for consistency.</li>
			<li>Avoid specifying units for zero values, e.g., <code>margin: 0;</code> instead of <code>margin: 0px;</code>.</li>
		</ul>
<pre><code class="language-css">/* The bad way */
.selector, .selector-secondary, .selector[type=text] {
  padding:15px;
  margin:0px 0px 15px;
  background-color:rgba(0, 0, 0, 0.5);
  box-shadow:0px 1px 2px #CCC,inset 0 1px 0 #FFFFFF
}

/* The good way */
.selector,
.selector-secondary,
.selector[type="text"] {
	padding: 15px;
	margin-bottom: 15px;
	background-color: rgba(0,0,0,.5);
	box-shadow: 0px 1px 2px #ccc, inset 0 1px 0 #fff;
}</code></pre>
		<h2>Declaration order</h2>
		<p>Related property declarations should be grouped together following the order:</p>
		<ul>
			<li>Positioning (<code>top</code>, <code>position</code>, <code>z-index</code>)</li>
			<li>Box model (<code>display</code>, <code>float</code>, <code>height</code>)</li>
			<li>Typography (<code>font-family</code>, <code>color</code>, <code>letter-spacing</code>, <code>line-height</code>)</li>
			<li>Visual appearance (<code>background</code>, <code>border</code>)</li>
			<li>Misc (<code>opacity</code>)</li>
		</ul>
		<h2>Media query usage</h2>
		<p>Place media queries as close to their relevant rule sets whenever possible. Don't bundle them all in a separate stylesheet or at the end of the document. Doing so only makes it easier for folks to miss them in the future. Here's a typical setup.</p>
		<h2>Prefixed properties</h2>
		<p>When using vendor prefixed properties, indent each property such that the declaration's value lines up vertically for easy multi-line editing. However, don't use prefixes when they aren't necessary for the functionality. If a radius, gradient or shadow isn't displayed by one of the browsers, than that's "to bad".</p>
<pre><code class="language-css">/* The bad way */
.selector {
	-webkit-border-raius: 5px;
	border-radius: 5px;
	box-shadow: 0 1px 2px rgba(0,0,0,.15);
	-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.15);
}

/* The good way */
.selector {
	-webkit-border-raius: 5px;
		border-radius: 5px;
	-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.15);
		box-shadow: 0 1px 2px rgba(0,0,0,.15);
}</code></pre>
		<h2>Shorthand notation</h2>
		<p>Strive to limit use of shorthand declarations to instances where you must explicitly set all the available values. Common overused shorthand properties include:</p>
		<ul>
			<li><code>padding</code></li>
			<li><code>margin</code></li>
			<li><code>font</code></li>
			<li><code>background</code></li>
			<li><code>border</code></li>
			<li><code>border-radius</code></li>
		</ul>
		<p>Often times we don't need to set all the values a shorthand property represents. For example, HTML headings only set top and bottom margin, so when necessary, only override those two values. Excessive use of shorthand properties often leads to sloppier code with unnecessary overrides and unintended side effects.</p>
		<p>The Mozilla Developer Network has a great article on <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/Shorthand_properties">shorthand properties</A> for those unfamiliar with notation and behavior.</p>
<pre><code class="language-css">/* The bad way */
.selector {
  margin: 0 0 10px;
  background: red;
  background: url("image.jpg");
  border-radius: 3px 3px 0 0;
}

/* The good way */
.selector {
  margin-bottom: 10px;
  background-color: red;
  background-image: url("image.jpg");
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
}</code></pre>
	</div>
</div>
<?php include '../include/footer.php' ?>