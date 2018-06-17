# Themes
Unlike the old ModernBB Style Engine (version 5.2 and prior), the Luna Theme Engine (version 6.0 and higher) requires a lot more pages to be present in your theme. The good news is, Luna also allows for much more customization than you where used to with ModernBB, and it allows you to do that much easier. Not only to develop, but also to update to later versions of Luna.

## Required files
This is a list of files that are required to be in your theme, grouped to show you which files are required for which type of theme.

### Required for parent and child themes
* `theme.json`
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

## theme.json
The `theme.json`-file contains basic information about your theme that is used on the Backstage's Theme-page. The content of the file should look like the example below. This example is from the Sunrise child theme based on Fifteen. Note that prior to version 2.1, the `information.php`-file was used for this, themes still using this file without a `theme.json` file won't work in Luna 2.1 and higher.

```json
{
    "id": "sunrise",
    "name": "Sunrise",
	"developer": "Studio 384",
	"description": "Sunset is a variant upon Fifteen, featuring a more classic design.",
    "date": "14 June 2018",
    "version": "3.1-alpha.2",
    "minversion": "2.0.0",
    "maxversion": "3.1-alpha.2",
    "parent": "fifteen"
}
```

* __id__: the id of the theme, this has to be unique. While it is unlikely that 2 themes with the same ID will be on the same installation, it is perhaps best adviced to use the name of the theme in lowercase followed by a random string.
* __name__: the name of the theme.
* __developer__: the person, people or organization that developed the theme.
* __description__: a short description of what the theme has to offer.
* __date__: the date of release of the current version.
* __version__: the version of the theme.
* __minversion__: the minimum required version of Luna that this theme can run on.
* __maxversion__: the maximum required version of Luna that this theme can run on.
* __parent__: optional field to indicate that the theme is a child theme and what its parent is. Files that are required but are not present in the theme will be searched for in the team listed here.

## theme_settings.php
The `theme_settings.php`-file will show theme settings on the Backstage's Themes-page. You can use this to show theme specific settings or instructions. You can do with it whatever you like.