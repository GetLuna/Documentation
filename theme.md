# Theme
Starting with Luna 2.1, themes required to be installed first. No worries when you're upgrading, though, Luna will take care of Typography, Fifteen and Sunrise when you cross the line between FluxBB/ModernBB/Luna 1.x-2.0 and 2.1 for the first time.

## Installed themes
All themes that are installed are listed here. Luna will show you the title and version of the theme, as well as a description, the developer and a link to the developer's page. From here you can take a number of actions:

* __Activate__: activating the theme will set it as your boards theme. This might have a number of side effects:
    * If the theme supports less accents than your previous theme, you or your users might have set an accent `id` that no longer exists. For those users and the default accent setting, the accent will be reset to `1`, which every theme is required to have.
* __Uninstall__: uninstalls the theme. This will remove all data the theme might hold in the database. This action is irreversable.
* __Update__: if a theme's installed version is out of sync with the version available in the `/themes/`-folder, you will have to update it. Your theme might already work as expected, but an update might add new configuration options that previous versions did not have, or remove them. Note that Luna's updater will automatically take care of updating Typography, Fifteen and Sunrise is they are installed.

Further, themes can add their own actions like "Settings" and more.

## Available themes
Themes that are "available" have a folder in the `/themes/`-folder in the root of your Luna installation but have not been installed. From here, you can take a number of actions:

* __Install__: installing the theme will add all configurations that the theme might have to your database and make it possible for you to activate it.
* __Delete__: delete will remove the entire folder of the theme from your installation, this action is irreversable.