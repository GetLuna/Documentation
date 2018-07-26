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
* Any other file you can think of

## theme.json
The `theme.json`-file contains basic information about your theme that is used on the Backstage's Theme-page. The content of the file should look like the example below. This example is from the Sunrise child theme based on Fifteen. Note that prior to version 2.1, the `information.php`-file was used for this, themes still using this file without a `theme.json` file won't work in Luna 2.1 and higher.

```json
{
    "id": "sunrise",
    "name": "Sunrise",
    "developer": "Studio 384",
    "url": "https://getluna.org",
    "description": "Sunset is a variant upon Fifteen, featuring a more classic design.",
    "date": "14 June 2018",
    "version": "3.1-alpha.3",
    "minversion": "2.1-alpha.3",
    "maxversion": "2.1-alpha.3",
    "parent": "fifteen",
    "features": {
        "accents": [
            { "id": 1,      "color": "#14a3ff" },
            { "id": 2,      "color": "#2788cb" },
            { "id": 3,      "color": "#0d4382" },
            { "id": 4,      "color": "#c58be2" },
            { "id": 5,      "color": "#ea69ae" },
            { "id": 6,      "color": "#8bb805" },
            { "id": 7,      "color": "#047a36" },
            { "id": 8,      "color": "#ffcd21" },
            { "id": 9,      "color": "#ff7521" },
            { "id": 10,     "color": "#ff4444" },
            { "id": 11,     "color": "#c71f1f" },
            { "id": 12,     "color": "#c78d68" },
            { "id": 13,     "color": "#ccc" },
            { "id": 14,     "color": "#999" },
            { "id": 15,     "color": "#444" }
        ],
        "announcement_types": true,
        "back_to_top": true,
        "copyright": true,
        "custom_copyright": true,
        "custom_css": true,
        "first_run": true,
        "header_background": true,
        "header_search": true,
        "moderated_by_list": false,
        "night_mode": true,
        "notification_flyout": true,
        "statistics": true
    },
    "config": [
        { "name": "sunrise_installed",      "default": 1 },
        { "name": "activated_sunrise",      "default": 1 }
    ]
}
```

* __id__: the id of the theme, this has to be unique. While it is unlikely that 2 themes with the same ID will be on the same installation, it is perhaps best adviced to use the name of the theme in lowercase followed by a random string.
* __name__: the name of the theme.
* __developer__: the person, people or organization that developed the theme.
* __url__: the URL to the developer's page.
* __description__: a short description of what the theme has to offer.
* __date__: the date of release of the current version.
* __version__: the version of the theme.
* __minversion__: the minimum required version of Luna that this theme can run on.
* __maxversion__: the maximum required version of Luna that this theme can run on.
* __parent__: optional field to indicate that the theme is a child theme and what its parent is. Files that are required but are not present in the theme will be searched for in the team listed here.
* __features__: a list of features the theme supports. When not supported, Luna can show a warning next to the relevant setting in the Backstage to notify the user that these functions won't work. For a full liskt of options, see the features-table below.
* __config__: an array of values you want to add to the `config` table for your theme to manage.

### Theme features
Themes can declare in their `theme.json`-file which Luna features are supported by them in the `features`-field.

| Name | Value type | Default | Required | Description |
| --- | --- | --- |
| `accents` | `array` | _none_ | Yes | A list consisting of `id` and `color` paires of accents supported by the theme |
| `announcement_types` | `boolean` | `false` | No | Whether or not different announcement types are supported |
| `back_to_top` | `boolean` | `false` | No | Whether or not "Back to top" is supported |
| `copyright` | `boolean` | `false` | No | Whether or not the theme shows a copyright message |
| `custom_copyright` | `boolean` | `false` | No | Whether or not the copyright message can be customized |
| `custom_css` | `boolean` | `false` | No | Whether or not the theme supports custom cSS |
| `first_run` | `boolean` | `false` | No | Whether or not the theme supports the First run experience |
| `header_background` | `boolean` | `false` | No | Whether or not the theme can use a header background |
| `header_search` | `boolean` | `false` | No | Whether or not the theme has a search field available outside the search page |
| `moderated_by_list` | `boolean` | `false` | No | Whether or not the "Moderated by" list is showsn |
| `night_mode` | `boolean` | `false` | No | Whether or not the theme support a dark mode |
| `notification_flyout` | `boolean` | `false` | No | Whether or not the theme supports a notification fly-out |
| `statistics` | `boolean` | `false` | No | Whether or not the theme supports showing statistics |

#### Accents
Luna requires themes to at least support 1 accent color. If only 1 accent color is included in a theme, the Backstage will show the theme as not suppoting accent colors.

| Name | Value type | Default | Required | Description |
| --- | --- | --- |
| `id` | `integer` | _none_ | Yes | An unique integer to identify the accent |
| `color` | `string ` | _none_ | Yes | Any valid value that can be set for the `background` property in CSS like `#2788cb` or go with a fancy gradient like `linear-gradient(141deg, #0fb8ad 0%, #1fc8db 51%, #2cb5e8 75%)`, or anthing else |

### Theme config
Themes can declare in their `theme.json`-file which any new config they want to use and add to the database. Upon installation by the users thes configurations are added to the database, when uninstalled, they are dropped again.

| Name | Value type | Default | Required | Description |
| --- | --- | --- |
| `name` | `string` | _none_ | Yes | The name of the configuration. Luna will automatically add `t_styleid_` as a prefix |
| `value` | `undefined` | _none_ | Yes | The default value opun installation |

### Empty example
Below you can find the minimum required structure for the `theme.json`.

```json
{
    "id": "",
    "name": "",
    "developer": "",
    "url": "",
    "description": "",
    "date": "",
    "version": "",
    "minversion": "",
    "maxversion": "",
    "features": {
        "accents": [
            { "id": 1,      "color": "" },
        ]
    }
}
```