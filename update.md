# Updating
From the Update page, Luna allwos you to view basic system information and to check for newer versions of Luna.

## Luna version information and Server statistics
The "Luna version information" panel shows you a number of versions.

* __Software version__: the version of Luna you're using right now, this version is the one we will use in our communication to our users.
* __Core version__: a version internally used by Luna to determine if the current version is up-to-date. This is the version Luna will compare with when you check for updates.
* __Datbase version__: the version of the database structure Luna uses.
* __Bootstrap version__: the version included with your Luna installation of [Bootstrap](https://getbootstrap.com).
* __Font Awesome version__: the version included with your Luna installation of [Font Awesome Free](https://fontawesome.com). For more information, see [Font Awesome](fontawesome) in our documentation.
* __jQuery version__: the version included with your Luna installation of [jQuery](https://jquery.com).

The information in the "Luna version information" panel is just formal. Any version information you should know about is always visible in the footer of the Backstage.

The "Server statistics" panel gives you a look at your system.

* __Server load__: how many resources the server you're running Luna on is using.
* __Environment__
    * __Operating system__: the operating system on which Luna is running.
    * __PHP__: the version of PHP you are using on this server, you can view more specific information by clicking on "Show info"
    * __Accelerator__: any accelerator you have installed and enabled
* __Database__: the type and version of the database you're using is shown here.
    * __Rows__: the number of rows in all of the tables of Luna's database.
    * __Size__: the size of the Luna database.

## Luna software updates
By clicking the "Check for updates" option, Luna will refresh its cache and check if a more recent version of Luna is available according to our Git-repository on GitHub. If not, Luna will tell you you're up-to-date. If there is a new version available, you will get a link to the download and an option to see what's new in that particular version.

Note that if you are ahead of the version in our GitHub repository, that Luna will tell you so and checking for updates essentially doesn't work as you will always be told you're ahead of everyone else.

### Updating Luna
With these instructions, you can update your board to the latest version of Luna. All versions of Luna can be updated to a newer version. You can upgrade to Luna 1.1 and higher from the following versions of FluxBB, ModernBB and Luna:

* __FluxBB__: all versions as of 1.4.0 supported
* __ModernBB__: all versions supported
* __Luna__: all versions supported

If you're upgrading to Luna 1.0.10 or lower, there is a limit from which version you can do so. We do not recommend to use Luna 1.0.x release anymore and strongly recommend you to use the latest stable release of Luna. Below is a list of all releases that support upgrading to Luna 1.0:

* __ModernBB__: all versions as of 3.5.0 supported
* __Luna__: all versions supported

<p class="alert alert-warning">Always make a backup of your forum before updating. While we obviously test Luna to the best of our ability it is hard to simulate every single situation, especially when sites are using languages none of us know. The update script does have potential to corrupt your database in the unlikely event that something goes wrong.</p>

### Overwriting files
The easiest option is to simply overwrite the old files with the new ones. While this is the easiest way to update, it is also the least flexible: any modifications you have made to files that you overwrite will be lost.

* [Download](https://getluna.org) the new files and decompress them.
* Upload the contents of the directory, overwriting the existing files.
* Visit your website, you'll be requested to click a button to install the updated.

If you have applied any modification, it's recommended to apply these modifications to the new version before updating, however, it's important to stay up-to-date with the latest version for obvious reasons.

If you have made a number of modifications to Luna, it might be useful to fork the original repository on GitHub, make your changes in that fork and then pull newer versions of Luna whenever they are released. Git might be able to take care of some of your changes itself.

## About
The about page contains the changelog for the current version of Luna you are using. When a patch is released and you update to it, the changes included in that patch will be listed here as well.

During preview reelases, the release notes of the then-current version of Luna will be included as well as a changelog for each preview update. When the preview ends and a new major or minor version of Luna is ready, the changelog for the preview updates get condenced into one single log and the changelog for the previous version is dropped.