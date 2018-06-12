# Themes
Unlike the old ModernBB Style Engine (version 5.2 and prior), the Luna Theme Engine (version 6.0 and higher) requires a lot more pages to be present in your theme. The good news is, Luna also allows for much more customization than you where used to with ModernBB, and it allows you to do that much easier. Not only to develop, but also to update to later versions of Luna.

## Required files
This is a list of files that are required to be in your theme, grouped to show you which files are required for which type of theme.

### Required for parent and child themes
* `information.php`
* `style.css`

### Required for parent theme, optional for child theme
* `delete.php`
* `edit.php`
* `footer.php`
* `forum.php`
* `header.php`
* `help.php`
* `inbox.php`
* `inbox-delete.php`
* `inbox-delete-comment.php`
* `inbox-new.php`
* `inbox-view.php`
* `index.php`
* `login.php`
* `mail.php`
* `maintenance.php`
* `me-delete.php`
* `me-modals.php`
* `notifications.php`
* `comment.php`
* `profile.php`
* `register.php`
* `report.php`
* `reset.php`
* `rules.php`
* `seach.php`
* `search-advanced.php`
* `search-results.php`
* `settings.php`
* `soft.php`
* `thread.php`
* `users.php`
* `objects/`
	* `comment.php`
	* `forum.php`
	* `search-thread.php`
	* `thread.php`
	* `user.php`

### Optional for parent and child themes
* `theme_settings.php`
* Any other file you can think of

## information.php
The `information.php`-file contains basic information about your theme that is used on the Backstage's Theme-page. The content of the file should look like the example below. This example is from the Sunrise child theme based on Fifteen.

```php
<?php
$xmlstr = <<<XML
<?xml version="1.0" encoding="utf-8">
<!DOCTYPE extension SYSTEM "ext-1.0.dtd">

<!--
/*
* Copyright (C) 2014-2018 Studio 384
* Licensed under MIT
*/
-->

<style engine="1.0">
<id>sunrise</id>
<name>Sunrise</name>
<developer>Studio 384</developer>
<date>15 October 2015</date>
<version>1.2.0</version>
<minversion>1.2.0</minversion>
<maxversion>1.2.0</maxversion>
<description>Sunset is a variant upon Fifteen, featuring a more classic design.</description>
<parent_theme>Fifteen</parent_theme>
</style>
XML;
>
```

The only optional parameter in this file is `<parent_theme>` and is only used to identify the theme's parent to inherit all the files from that theme.

## theme_settings.php
The `theme_settings.php`-file will show theme settings on the Backstage's Themes-page. You can use this to show theme specific settings or instructions. You can do with it whatever you like.