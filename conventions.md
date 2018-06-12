# Coding conventions
<div class="alert alert-info">These coding conventions apply for Luna 2.0 and higher versions.</div>

The rules and recommendations set forth in this section apply to PHP, Javascript, SQL and any other programming language (where applicable) in use by Luna. Please note that tabs in this document have been substituted by spaces for visual reasons only.

## Naming convention
The naming rules apply to the naming of variables, functions, classes, attributes, arrays, array elements, HTML form fields, query string parameters, database tables, database fields as well as any other applicable entities.

* All names should be all lowercase.
* Use `_` (underscore) as word separator. E.g. `date_format`. Never start a name with the underscore character (except for nested functions, which should always start with an underscore character).
* Use the prefix `num` for entities that represent a count. E.g. `num_users`. Use the prefix `cur` for entities that represent the current element when iterating through any type of collection (database result set, array etc). E.g. `cur_user`.
* Avoid all forms of Hungarian notation or derivatives or variations thereof.
* Use common sense. If in doubt, look at similar sections in the Luna source code.

## Brace policy and indentation
The indent style and brace policy of choice for the Luna project is the [Allman style](http://en.wikipedia.org/wiki/Indent_style#Allman_style_.28bsd_in_Emacs.29). All indentation should be made using tabs (with a tab size of 4), not spaces.

Here's an example:

```php
if ($a == $b)
{
	do_something();
}
else
{
	do_something_else();
}
```

Note the whitespace between the keyword and the parenthesis. One allowed exception from the standard Allman style is "braceless" blocks. The use of braceless blocks is actually encouraged.

For example:

```php
if ($a == $b)
	do_something();
else
	do_something_else();
```

## Line breaks and encoding
All line breaks should be LF `(n)` only. Set your editor to save files with UNIX style line breaks. All files should be saved using UTF-8 encoding.


## PHP-specific
The following rules apply only to PHP.

* Use singlequotes as opposed to doublequotes when working with strings. E.g. `$str = 'Users: '.$num_users;` as opposed to `$str = "Users: $num_users";`.
* Leave one line of whitespace above and below each block of markup, provided the block constitutes multiple lines of markup. I.e. one empty line above each `?&gt;` and below each `&lt;?php`. The exception to this is when there is only one line of code, in which case the entire section of code should be on one line.
* Don't use PHP's short tags (`&lt;?`, `&lt;?=`), but use its full equivalent (`&lt;?php`, `&lt;?php echo`).

## SQL-specific
The following rules apply only to SQL.

* Always escape potentially harmful data using `$db→escape()`. Expected integer values should be forced into integer form using `intval()` before use in a query.
* Prefix tables names and table indices with `$db→prefix`.
* Use the SQL2003 style [explicit join notation](http://en.wikipedia.org/wiki/Join_(SQL)#Inner_join).
* Whenever possible, write cross-database compatible queries. In rare cases where database specific queries are needed, every effort should be made to provide alternative queries for other supported databases.