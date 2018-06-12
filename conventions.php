<?php $section = "docs"; $dsection = "develop";  $dpage = "conventions"; include('../include/header.php') ?>
<div class="row main">
	<div class="col-sm-3">
		<?php include ('../include/docsnav.php') ?>
	</div>
	<div class="col-sm-9">
		<h1>Coding conventions</h1>
		<p>Note: These coding conventions apply for Luna 2.0 and higher versions.</p>
		<p>The rules and recommendations set forth in this section apply to PHP, Javascript, SQL and any other programming language (where applicable) in use by Luna. Please note that tabs in this document have been substituted by spaces for visual reasons only.</p>
		<h2>Naming convention</h2>
		<p>The naming rules apply to the naming of variables, functions, classes, attributes, arrays, array elements, <abbr title="HyperText Markup Language">HTML</abbr> form fields, query string parameters, database tables, database fields as well as any other applicable entities.</p>
		<ul>
			<li>All names should be all lowercase.</li>
			<li>Use <code>_</code> (underscore) as word separator. E.g. <code>date_format</code>. Never start a name with the underscore character (except for nested functions, which should always start with an underscore character).</li>
			<li>Use the prefix <code>num</code> for entities that represent a count. E.g. <code>num_users</code>. Use the prefix <code>cur</code> for entities that represent the current element when iterating through any type of collection (database result set, array etc). E.g. <code>cur_user</code>.</li>
			<li>Avoid all forms of Hungarian notation or derivatives or variations thereof.</li>
			<li>Use common sense. If in doubt, look at similar sections in the Luna source code.</li>
		</ul>
		<h2 id="brace-policy-and-indentation">Brace policy and indentation</h2>
		<p>The indent style and brace policy of choice for the Luna project is the <a title="http://en.wikipedia.org/wiki/Indent_style#Allman_style_.28bsd_in_Emacs.29" href="http://en.wikipedia.org/wiki/Indent_style#Allman_style_.28bsd_in_Emacs.29" rel="nofollow">Allman style</a>. All indentation should be made using tabs (with a tab size of 4), not spaces.</p>
		<p>Here's an example:</p>
<pre>if ($a == $b)
{
	do_something();
}
else
{
	do_something_else();
}</pre>
		<p>Note the whitespace between the keyword and the parenthesis. One allowed exception from the standard Allman style is &ldquo;braceless&rdquo; blocks. The use of braceless blocks is actually encouraged.</p>
		<p>For example:</p>
<pre>if ($a == $b)
	do_something();
else
	do_something_else();</pre>
		<h2 id="line-breaks-and-encoding">Line breaks and encoding</h2>
		<p>All line breaks should be LF <code>(n)</code> only. Set your editor to save files with UNIX style line breaks. All files should be saved using UTF-8 encoding.</p>
		<h2 id="php-specific">PHP-specific</h2>
		<p>The following rules apply only to PHP.</p>
		<ul>
			<li>Use singlequotes as opposed to doublequotes when working with strings. E.g. <code>$str = 'Users: '.$num_users;</code> as opposed to <code>$str = &ldquo;Users: $num_users&rdquo;;</code>.</li>
			<li>Leave one line of whitespace above and below each block of markup, provided the block constitutes multiple lines of markup. I.e. one empty line above each <code>?&gt;</code> and below each <code>&lt;?php</code>. The exception to this is when there is only one line of code, in which case the entire section of code should be on one line.</li>
			<li>Don't use PHP's short tags (<code>&lt;?</code>, <code>&lt;?=</code>), but use its full equivalent (<code>&lt;?php</code>, <code>&lt;?php echo</code>).</li>
		</ul>
		<h2 id="sql-specific">SQL-specific</h2>
		<p>The following rules apply only to SQL.</p>
		<ul>
			<li>Always escape potentially harmful data using <code>$db→escape()</code>. Expected integer values should be forced into integer form using <code>intval()</code> before use in a query.</li>
			<li>Prefix tables names and table indices with <code>$db→prefix</code>.</li>
			<li>Use the SQL2003 style <a title="http://en.wikipedia.org/wiki/Join_(SQL)#Inner_join" href="http://en.wikipedia.org/wiki/Join_(SQL)#Inner_join" rel="nofollow">explicit join notation</a>.</li>
			<li>Whenever possible, write cross-database compatible queries. In rare cases where database specific queries are needed, every effort should be made to provide alternative queries for other supported databases.</li>
		</ul>
	</div>
</div>
<?php include '../include/footer.php' ?>