# Coding conventions
<div class="alert alert-info">These coding conventions apply for Luna 2.0 and higher versions.</div>

The rules and recommendations set forth in this section apply to PHP, Javascript, SQL and any other programming language (where applicable) in use by Luna.

## Naming convention
The naming rules apply to the naming of variables, functions, classes, attributes, arrays, array elements, HTML form fields, query string parameters, database tables, database fields as well as any other applicable entities.

* All names should be all lowercase.
* Use `_` (underscore) as word separator. E.g. `date_format`. Never start a name with the underscore character (except for nested functions, which should always start with an underscore character).
* Use the prefix `num` for entities that represent a count. E.g. `num_users`.
* Use the prefix `cur` for entities that represent the current element when iterating through any type of collection (database result set, array etc). E.g. `cur_user`.
* Avoid all forms of Hungarian notation or derivatives or variations thereof.
* Use common sense. If in doubt, look at similar sections in the Luna source code.

Starting with Luna 3, some of these conventions change:

* Function names should be in `CamelCasing`
* Use the prefix `count` for entities that represent a count. E.g. `count_users`.
* Use the plural name of the object you're looping though when iterating through any type of collection (database result set, array, etc.) en the singular name when manipulating a single object. E.g. `users` and `user`.

## Brace policy and indentation
All indentation should be made using 4 spaces.

Here's an example:

```php
if ($a == $b) {
    do_something();
} else {
    do_something_else();
}
```

Note the whitespace between the keyword and the parenthesis. Braceless blocks are strictly forbidden.

## Line breaks and encoding
All line breaks should be CR LF Windows only. Set your editor to save files with Windows style line breaks. All files should be saved using UTF-8 encoding.

## PHP-specific
The following rules apply only to PHP.

* Use singlequotes as opposed to doublequotes when working with strings. E.g. `$str = 'Users: '.$num_users;` as opposed to `$str = "Users: $num_users";`.
* Leave one line of whitespace above and below each block of markup, provided the block constitutes multiple lines of markup. I.e. one empty line above each `?>` and below each `<?php`. The exception to this is when there is only one line of code, in which case the entire section of code should be on one line.
* Don't use PHP's short tags (`<?`, `<?=`), but use its full equivalent (`<?php`, `<?php echo`).

## SQL-specific
The following rules apply only to SQL.

* Always escape potentially harmful data using `$db→escape()`. Expected integer values should be forced into integer form using `intval()` before use in a query.
* Prefix tables names and table indices with `$db→prefix`.
* Use the SQL2003 style [explicit join notation](http://en.wikipedia.org/wiki/Join_(SQL)#Inner_join).
* Whenever possible, write cross-database compatible queries. In rare cases where database specific queries are needed, every effort should be made to provide alternative queries for other supported databases.