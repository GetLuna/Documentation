# Customizing
There are four main ways in which you can modify Luna. The first three, themes, language packs, and plugins, simply require dropping a file or folder into the right directory. Modifications however often involve modifying the core files, and hence are harder to install and remove.

## Themes
Themes are packages that can be used to alter the look and feel of your forum. A theme should consist of 1 CSS file named `style.css`, and all required templates (unless it's a child theme), images etc. (where `&lt;theme&gt;` is the name of the theme). To install a theme simply upload the theme foldere  into the `/theme/` folder inside your forum root directory.

Once installed the theme will be available within Backstage to set as the forum theme. For information on developing your own themes, please see the [themes](themes) section of the developer wiki.

## Language packs
Language packs are used to translate your forum into a different language. A language pack should consist of 1 folder named after the language it contains. It should contain a `luna.mo` and `luna.mp` file which contain the actual translation strings. It should also contain a `stopwords.txt` file, which contains a list of words which should not be indexed by the search engine.

To install a language pack simply upload the folder into the `/lang/` folder inside your forum root directory.

Once installed the language will be available within the administration console to set as the forum default, as well as within everyone's profile allowing them to use it if they wish. For information on developing your own language pack, please see the [translations](translations) section.

## Plugins
Plugins allow you to add features to your Backstage. While modifications allow you to add features to the actual forum core or modify its behaviour, you cannot do the same with plugins. However, they offer benefits like simplifying typical administrator tasks or providing additional features that Luna cannot and will not provide (due to its philosophy).

Another benefit of plugins is that they are very easy to install. All you have to do is drop the plugin file into the directory `/plugins/` and you can immediately start using it.

Some plugins are restricted to administrator access, while others may be used my moderators, too. You can discern the two types by their filenames: plugins that start with `AMP_` can be used my moderators, too, while those that start with `AP_` cannot.

For information on developing your own plugin, please see the [plugins](plugins) section.

## Modifications
Modifications allow you to modify Luna's core or add features to it. While they are very flexible, because basically everything can be altered, they are also very prone to errors. They can be harder to apply and make it harder to update your forum. All packages have installation instructions and exactly explain how the modification should be installed.

For information on developing your own modification, please see the [modifications](modifications) section.