# Language packs

## Developing
Until the official Luna Translation Center is finished, which will allow for translating the software online, language packs have to be created by hand.

To start translating Luna, we recommend Poedit to generate the translation files.

### Get started
You can get started by creating a new language folder and by either configuring a new Poedit project to support Luna or by copying the English translation in the version of Luna you want to translate.

Once you've loaded the translation into Poedit, it is recommended to use Poedit's "Update" function to make sure all strings are up-to-date.

One you're translation is up-to-date with the current version of Luna, go to Go > Properties. Here you can set a number of properties for your translation. By copying the English translation, all of these settings are already correct. The only change you have to make is alter the "Language" field to the language of your translation. In case you're updating your translation for a new version of Luna, make sure to update "Project name and version" as well. This has to be "Luna X.Y".

### Stopwords
The `stopwords.txt` file contains a list of words which should not be indexed in users comments. This should be used to filter out common words which do not add value to a search, for example, in English, words such as "the" and "it's". For more information, check [Wikipedia](http://en.wikipedia.org/wiki/Stop_words).

## Releasing
Language packs can be uploaded to our official [translations repository](https://github.com/GetLuna/Luna-Translations). Any translation in any state can be uploaded there.

## Official translations
Luna already ships with both the English as well as the Dutch translations. These translations are maintained for each version.

Unlike themes and extensions, you can submit your translation for inclusion in the official Luna package, but this requires that your translation follows a number of rules:

- It is regularly updated and always up-to-date with the latest stable release
- It is updated to match Previews, Betas and Release Candidates as good as possible
- It follows the official guidelines (aka "Project name and version" is "Luna X.Y")
- It has been kept up-to-date by its developer for 5 following versions