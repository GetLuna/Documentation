# Backstage
Backstage is your hub to control your board. Anything your board can do, can be changed here.

## Backstage
The Backstage page contains all features and functions that don't have a direct impact on the working of the forum.

### Backstage
The main Backstage page shows you new reports your users have left behind. Here you can also make "Admin notes", these notes are visible to all users with access to the Backstage. It can be used as a simple communication dashboard. When you first visit Backstage, a "First run" panel will be shown with a number of recommended settings to check out.

The sidebar will show you issues that may occure with your board. This includes problems with folder permissions that prevent Luna from working as expected or the `install.php` file still being present in the directory, which is a security risk. It also shows a small panel detailing the number of comments, threads and users.

### Update
The Update section contains all information about your current board's system. This includes an overview of the multiple internal versionnumbers Luna uses (for the software version, core version and database version) as well as which version of Bootstrap, Font Awesome, jQuery and Prism is being used.

Further more it allows you to check for updates and provides links to downloads and release notes whenever a new update is available. Server statistics will show you some information about your server including the system load, operating system, PHP version, database system and the size of the database. Not that not all environments might support all these features.

### About
About shows you what's new in the release you're using. This page is updated with every major, minor and patch update to list all notable changes. If you're using a Preview release, it will show all previews up until the preview you are using and all stable versions of the previous minor update. When a new major or minor version ships, all old release notes are removed and the preview notes are merged into one list for the release. Previous changelogs can be found on [releases](../releases).

## Content
### Board
_See [categories](categories) and [forums](forums)_

The board page allows for adding new categories and forums, as well as changing the position of categories and forums and removing them. The main page allows for changing a number of settings related to forums like the name, position, icon and forum color.

### Reports
Whenever an user thinks a comment shouldn't be on your board, they can report it, and these reports will cause it to appear on this page, where you can moderate them. Previously moderated reports are also visible here.

### Censoring
With censoring, you can easily manage which words need to be replaced with another word. On this page, you are able to add, update and remove censored words. Remember that this also affects usernames and any content user can post on your board.

## Users
### Search
Search helps you by giving you an advanced search field to search through your users. From here out, you can change a number of user-specific settings.

### Ranks
See [ranks](ranks)

### User groups
See [groups](ranks)

Probably the most critical part of setting up a new forum is getting the permissions right.

To setup a working and useful permission hierarchy, you can create user groupsl. Click on "User groups" and you will see the four default user groups - Administrators, Moderators, Members and Guests.

### Bans
Here you can add, search and manage banned users. You can ban users, IP-addresses and IP-address ranges.

## Settings
### Settings
Change basic setting like the title and discription. This is also the place where you can change the default time zone, daylight savings and other time-related settings. Also, you can change the default language of your forum (for guests and new users), feed settings, how Luna should handle reported comments, avatar settings, and finally, announcements.

Here, you can disable new registrations. Also, you can activate a security features that asks at new members to verify themselfs. You also can add here forum rules, when you activate 'User forum rules', a new button, 'Rules', will be added to the menu of your Luna installation.

Change email settings, like the adres of the forums admin and webmaster, the abbility to subscribe to forums and threads and your SMTP settings.

### Features
Under 'Features' you can change the functions that are available on your board, like parser settings, First Run settings, and more. Also, you can activate censoring.

### Theme
Here you can change the appearance of your board. Things like displaying the version number of Luna in the footer info about users. Also, you can enable smilies and made links are clickable without the need to put them between [url]-tags. Also, you can change here the number of threads and comments on one page.

This page contains an overview of all themes that are available to your installation. You can change the look of your board here and change settings of themes in case they have their own settings.

### Menu
Under the menu settings, you can change to items in the menu. You can't delete default items, but you can hide them.

## Maintenance
### Maintenance
Under "Maintenance", you can disable users from entering your forum so you can work on it, for example, update Luna, change settings, etc. When your forum is in maintenance, it's recommended that you stay logged in. If you log out, you will not be able to log in again. You can find more information about this under 
See [troubleshooting](troubleshooting).

Here you can also rebuild the index of your board. This is handy if you have add, removed or changed comments without using Luna itselfs (with phpMyAdmin for example). You browser need to support Javascript and need to have this option enabled. You need to reload the pages by yourself if not.

### Prune
The Maintenance section also includes settings to prune your board. Another option is to prune old comments, notifications or users. You can chose by yourself how old the comments, notifications or users need to be and which forum needs to be pruned. Remember that none of those options can't be undone!

### Database
<p class="alert alert-danger">Don't use the tools on the Database page if you do not know what you're doing. These features are critical and have the potention to damage your database.</p>

Under database, you can optimize your database, which should improve the general performance. You can also back-up your board, and revert to a back-up you made earaer.