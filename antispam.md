# Fighting Spam

## Introduction
[Forum spam](https://en.wikipedia.org/wiki/Forum_spam) is a problem common to all popular forum software. Forum spam is caused by automated software (referred to as "spambots") that visits forums with the sole purpose of registering many user accounts and/or commenting massive amounts of messages. These messages often contain links to commercial websites, [Phishing](https://en.wikipedia.org/wiki/Phishing) websites or even malware.

There are two ways in which spammers will try to promote their website through your Luna forum:

* __Messages__: the spambot will try to comment messages throughout your forum with commercial or malicious contents, often with links to a website. Sometimes the content of the message will actually seem like a some-what valid response, however a link to a commercial or malicious website is always included. The goal of the spammer is to trick your visitors into clicking through to their website, and thus sell products.
* __Profiles__: each forum user can specify a website in their profile. This information is visible on the user profile page. Some spambots create user accounts without ever comment messages, yet add a website url to the user profile. This type of spam is not directly aimed at having your visitors visit their website. Instead its goal is to improve the relative importance of a website as perceived by search engines by creating many incoming links to their website. While this form of spam is relatively unobtrusive, it will pollute the system with unwanted user accounts and may actually decrease your website rank in some search engines.

## Counter-measures
In almost all cases the spamming process is completely automated. Most counter-measures therefore add functions to Luna that make it easier to distinguish human visitors from spambots. Below we will describe a number of counter-measures that you can take to prevent	spam in your forum.

### Forum options
There are a number of options within Luna that can significantly reduce the amount of spam on your forum.

### Require registration
The most obvious measure is to require visitors to register a user account before they are able to comment messages. This is the default in Luna.

### Require validation of e-mailaddress
Many spambots are able to fill out forms, making it fairly easy to create new accounts. However these bots will often fill in an invalid e-mailaddress during registration. By requiring confirmation of the e-mailaddress before activating the user, the spambot will be unable to comment messages. To enable verification, log in as administrator and:

* Click the Backstage icon in the menu
* Go to 'Settings'
* Click on the tab 'Registration'
* Check the option 'Verify registrations'

You can easly remove unverified accounts through the prune options under 'Maintenance'.

### Enable questions
Another option we strongly recommend you to customize are the questions Luna will ask when registrating a new user. By default, Luna provides a limit set of questions that will be asked at random while creating a new account, but it is always safer to also include your own questions.