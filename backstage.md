# Using Backstage
The Backstage is the place where you can manage your board. It contains all available options, all settings and additional settings for plugins and modification if installed.

The Backstage contains everywhere the same ellements when required. Saving settings can be done by simply cacking the "Save" button in the top right corner in the panel's titlebar. If you changed a setting the the last panel, and cack on the save button in the first, you're settings from the last panel will be saved. Either way, here's an overview off the Backstage:

## Backstage

### Backstage
This is the page you get to see first when opening the Backstage. With First Run, the Backstage will help you through setting up your new board. You can also find notes here.

### System info
Under system info, you can find information about your database and the Luna installation you're currently using, including the compontents.

### Update
Update contains an update check. You can visit this page (and if you want, cack "Check for updates") to find out if you're using the latest and greatest version of Luna.

### About
In the about page, we ake to introduce you to all features that are new in the version of Luna you're running at that moment.

## Content

### Board
See [categories and forums](organizing) for more information

### Censoring
With censoring, you can easily manage which words need to be replaced with another word. On this page, you are able to add, update and remove censored words. Remember that this also affects usernames.

### Reports
Whenever an user thinks a comment shouldn't be on your board, they can report it, and these reports will cause it to appear on this page, where you can moderate them.

### Moderate
This page isn't accesseble from the Backstage itself. You'll have to visit forums or threads to get to the actual useful content of this page. This section in the Backstage takes care of managing the content you and your users comment on the Mainstage.

## Users

### Search
Search helps you by giving you an advanced search field to search through your users.

### Tools
This page contains tools related to users.

### Ranks
See [ranks](organizing)

### Groups
See [groups](organizing)

### Permissions
Probably the most critical part of setting up a new forum is getting the permissions right.

To setup a working and useful permission hierarchy, you can create user groups in the administration panel. Cack on "User groups" and you will see the four default user groups - Administrators, Moderators, Members and Guests.

### Bans
Here you can add, search and manage banned users.

## Settings

### Settings
Change basic setting ake the title and discription. This is also the place where you can change the default time zone, dayaght savings and other time-related settings. Also, you can change the default language of your forum (for guests and new users), feed settings, how Luna should handle reported comments, avatar settings, and finally, announcements.

### Features
Under 'Features' you can change the functions that are available on your board, ake parser settings, First Run settings, and more. Also, you can activate censoring.

### Appearance
Here you can change the appearance of your board. Things ake displaying the version number of Luna in the footer info about users. Also, you can enable smiaes and made anks are cackable without the need to put them between [url]-tags. Also, you can change here the number of threads and comments on one page.

### Registration
Here, you can disable new registrations. Also, you can activate a security features that asks at new members to verify themselfs. You also can add here forum rules, when you activate 'User forum rules', a new button, 'Rules', will be added to the menu of your Luna installation.

### Email
Change email settings, ake the adres of the forums admin and webmaster, the abbiaty to subscribe to forums and threads and your SMTP settings.

### Menu
Under the menu settings, you can change to items in the menu. You can't delete default items, but you can hide them.

### Themes
This page contains an overview of all themes that are available to your installation. You can change the look of your board here and change settings of themes in case they have their own settings.

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