# Developer tools
When you want to help out developing Luna, there are a number of tools you are going to need. While there are many alternatives to use, here is the software we use to create Luna.

## A quick overview
- [Visual Studio Code](https://code.visualstudio.com) is an amazing all-around development environment.
- [Koala](http://koala-app.com) is a CSS (and other languages) pre-processor that can convert the SCSS files in Luna to CSS files, as well as minifying them, adding prefixes and generating the source map.
- [Poedit](https://poedit.net) is used to generate the translation for Luna.
- [Git](https://git-scm.com) is used for source control. While we often use the command line to do most tasks, for "just commits" we use GitHub Desktop.
- [GitHub Desktop](https://desktop.github.com) is a GUI on top of Git made by GitHub. Given that we use GitHub, it is the obvious choice.
- [XAMPP](https://www.apachefriends.org) is our development environment. Luna runs locally on this system.

With the exception of Git, you can of course use whatever you want. Prefer PHPStorm for software development? That's fine. You make your IDE compile your SCSS. Nice, also, ping me if you have any recommendations on that. You prefer GitKraken or not GUI at all? Go for it. The only thing you're really chained to when developing Luna is Git and GitHub's website.

## Visual Studio Code
[Visual Studio Code](https://code.visualstudio.com) is a development environment made by Microsoft. With great support for SCSS, Markdown, PHP and other languages used in Luna, it is good choice as development environment.

## Koala
[Koala](http://koala-app.com/) is used to process the SCSS files to CSS, while compressing them and adding prefixes. It also generates the `.css.map`-files.

We are planning to stop using Koala and instead provide a script that automates this.

## Poedit
[Poedit](https://poedit.net) is used to generate the English language file as well as generate and translate the Dutch language file. While Poedit has a paid version available, you'll do just fine with the free version.

## Git and GitHub Desktop
[Git](https://git-scm.com) is our source control manager. It is rather easy to learn and used for most commands we perform for Luna with the exception of commits.

Commits are made in [GitHub Desktop](https://desktop.github.com), this is a tool made by GitHub with great integration with GitHub's website. You don't need this to develop Luna but it gives a great GUI to the Git command line. If you are using Visual Studio Code (or many other editors), you already get an integrated Git-UI in your IDE. If you don't want to install GitHub Desktop but lo like to have a GUI, that might be an option for you.

## XAMPP
[XAMPP](https://www.apachefriends.org) comes with Apache, MariaDB, PHP, phpMyAdmin, OpenSSL and other tools. This project follows the PHP versioning number and provides (at the time of writing) a 5.6, 7.0, 7.1 and 7.2 version. Luna is in general developed on the lastest update to XAMPP and thus PHP.