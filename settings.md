# Settings
## Branding
* __Title__: the title of your board, will be used in the page title as well as within the theme if supported.
* __Slogan__: the slogan of your brand, can be used by the theme if supported.
* __Description__: a text of 300 characters that describes your board, used for SEO purposes. This is the text that will appear is the results of search engines when people look for your board.
* __Default language__: the default language of your board is used for all guests and new accounts. If two or more languages are available in the `lang` folder in Luna's root, registered users can change their language. Changing the default language won't change the language for users that are already registered, unless it is the only available language.
* __Tags__: a list of keywords that best describe your board, use for SEO purposes.
* __Favicon__: an icon used by the browser and operating system of the user to visually identify your website. For more information on where browsers use the favicon, see [Wikipedia](https://en.wikipedia.org/wiki/Favicon#Use_of_favicon). We strongly recommend the use of `.png` files in a high resolution.

## Announcement
* __Announcement__: shows an announcement at the top of the board. Its location may be different between themes.
* __Title__: the title of the announcement, optional field.
* __Type__: the type of the announcenment, mostly used within themes to decide a color.
* __Message__: the message of the announcement. This text has to be filled, otherwise Luna will set the default value.

## Time and timeouts
* __Time format__: the time format in which the board should show all times by default, users can override this setting in their account. Changing the default time format won't change the time format for users that are already registered.
* __Date format__: the date format in which the board should show all dates by default, users can override this setting in their account. Changing the default date format won't change the time format for users that are already registered.
* __Default time zone__: the time zone in which the board should show all times by default, users can override this setting in their account. Changing the default time zone won't change the time zone for users that are already registered.
* __Visit timeout__: the number of seconds it takes before an user is no longer considered "visiting".
* __Online timeout__: the number of secconds before the users is no longer considered online.

## Syndication
* __Default feed type__: the default type of feed you want your users to have access to.
* __Duration to cache feeds__: duration of how long the feed will be cached.

## E-mail
* __Admin email__: the e-mail address of the main admin.
* __Webmaster email__: the e-mail address that will be used as address from which Luna will send e-mails to its users.
* __Reporting method__: the way you want to be kept up-to-date on new reports.
* __Mailing list__: a list of e-mail addresses separated by commas that will receive new reports.

## Registration
* __New registrations__: allow guests to create new accounts.
* __Mailing list notifications__: send a mail to everyone on the mailing list when a new user is made.
* __Verify__: require new users to verify their e-mail address.
* __Banned addresses__: allow new users to use e-mail addresses or domains that have been banned, everyone on the mailing list will receive a warning.
* __Double address__: allow users to use an e-mail address that already has been used, everyone on the mailing list will receive a warning
* __Rules__: enables whether or not the board has rules. Enabling this option will also add a "Rules" panel to the help-section of your board.
* __Message__: the message with the rules. Will be shown during registration as well as in the help-section.
* __Default email setting__: default setting for new users on how visible their e-mail address is to other users.

## Cookie bar
* __Cookie bar__: shows a bar at the bottom of your board with information about cookies. For more information, see [cookies](http://getluna.org/docs/cookies).
* __Cookie info URL__: the url with information about cookies, by default this links to this documentation's cookies document.

## SMTP settings
* __SMTP server address__: the address of the external SMTP server with which Luna can send e-mails.
* __SMTP username__: the username of the SMTP server.
* __SMTP password__: the password of the SMTP server. If you want to delete a password, simply check the checkbox in this field.
* __SMTP encryption__: encyrpt the SMTP connection with SSL if supported.

## System
* __Root URL__: the URL on which the homepage of your board can be reached. If this setting isn't correct, you won't be able to change most things and will receive a higher amount of errors.
* __CDN__: whether or not to use a CDN to get Bootstrap and jQuery. When enabled it may improve performance and lower bandwidth usage of your host. Note however that Luna becomes dependent on third party services when this is enable so when these services go down, so will parts of your board.
* __Gzip output__: Gzip output sent to the browser. This will reduce bandwidth usage, but use some more CPU. This feature requires that PHP is configured with zlib. If you already have one of the Apache modules (mod_gzip/mod_deflate) set up to compress PHP scripts, disable this feature.