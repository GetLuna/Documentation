# First steps

You just started with a new Luna installation? Allow us to run you through a number if things you should do first. But before we get started, after the installation is done, you're not logged in. So do that first.

## Remove `install.php`
After installing Luna, there is no need for the installer anymore, which is why you should remove it. Got to your website (through FTP or any other means) and remove the `install.php` file in the root folder. The Backstage will warn you if this file still exist and although it is not technically a threat, we highly recommend you remove it.

## Setup categories and forums
A fresh Luna installation comes with no content. Including any categories or forums. To make new categories and forums you have to go to the Backstage.

The Backstage is the first icon on the right side of the navbar, the tachometer-icon. When you click on it, the Backstage opens. You can now go to Content > Board to create new categories and forums. However, since you're new, Luna will show you a "Welcome to Luna" panel on the Backstage's home page. There is a button titled "Create new sections", which also brings you to this page.

First, you'll have to add a new category. Fill in a name and then click "Add". Now that you've added a new category, options to add new forums have appeared on the page. Choose the category you want to add a forum to, fill in a name and click "Add" in the "Add forum" panel.

Luna will show you a set of options that you can set to change your forum. This includes the name, a description to explain what the forum should be used for, the parent section if you want this forum to be a child of another forum, the category it should be in and the way the threads in it should be sorted.

There are also a number of customization options to change the look of the forum. This includes setting a Font Awesome icon and the forum color. Note that you don't have to set an icon, it is just optional. Finally, you can allow users to mark threads as "Solved". This is a great option to leave enabled if a forum is used to help people with problems rather than just discussions.

## Add board rules
A good board has a good set of rules. Rules can be added by going to Settings > Settings > Registration. Here you can manage everything that has to do with new users. For example, you can disable the registration form all together. Rules will be shown when users are registering for your board and they'll have to accept them to continue.

## Branding
Your board should carry your look. In Settings > Settings > Branding you can change a number of important settings. You already set a number of these during the installation process, but I'd like to iterate over some of them:

* __Description__: for Search Engine Optimization (SEO) purposes, it is important to have a description of what your board is about.
* __Tags__: tags are important for SEO as well. This should be a list of keywords separated by a comma that match the contents of your forum.
* __Favicon__: the icon that will make your board recognizable in the browser UI. We highly recommend you change it.

_See [themes](themes)_

More style-related options can be found under Settings > Settings > Theme. Here you can choose the theme you're users see. Luna comes, by default, with 3 themes: Fifteen, Sunrise and Typography.

You can also change a number of settings regarding accent colors. All themes included with Luna provide you with a set of 15 colors to choose from how your website looks. You can disable this at any time and force users to use the preset accent. Night mode, another option here, allows users to enable a dark design.

Other options in this secion include custom CSS in case you are familiar with CSS options as well as setting a header background. The later option requires theme support to properly work.

## Ranks
For users, it is often fun to get a "promotion" after posting a certain amount of threads and comments. In Users > Ranks you can do just that. Fill in a rank title and a minimum comments count and click "Add" to add new ranks to your board. Whenever a user passes a certain number of comments, their rank will increase.