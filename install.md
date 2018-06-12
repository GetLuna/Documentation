# Installation
## Install manually

1. Copy and/or upload all contents into the directory where you want to run your forums.
2. Create a database for the forum to use.
	* For MySQL:
		* Using your web host's control panel
		* Using <a title="http://www.phpmyadmin.net" href="http://www.phpmyadmin.net/" rel="nofollow">PHPMyAdmin</a>
	* For SQLite:
		* Do nothing, the install script will automatically create the database.
3. Run `install.php` from the forum root directory and follow the on-screen instructions.
4. Delete `install.php` after the installation is completed. The Backstage will warn you in case you forget this step.

### Write permissions
In order for Luna to run correctly PHP must have write permissions for `/cache/` and `/img/avatars/`. Under Windows, and certain Linux configurations this isn't a problem. If the install script notices these directories aren't writeable it will warn you. To fix this they must be set to CHMOD 777.

## Install options
### Database type
Luna will automatically check which database engines your server can support and provide a drop down menu with available options. Usually it is recommended to use "MySQL Improved" or "MySQL Improved (InnoDB)".

### Database server hostname
The address of the database server (example: localhost, db.myhost.com or 192.168.0.15). You can specify a custom port number if your database doesn't run on the default port (example: localhost:3580). For SQLite support this field is ignored.

### Database name
The name of the database that Luna will be installed into. The database must exist. For SQLite, this is the relative path to the database file. If the SQLite database file does not exist, Luna will attempt to create it.

### Database credentials
Enter the username and password with which you connect to the database. Ignore for SQLite.

### Table prefix
If you like, you can specify a table prefix. This way you can run multiple copies of Luna in the same database (example: foo_).

### Administrator's username
This specifies the username for the forum's first user/administrator.

### Administrator's password (and confirmation)
These fields dictate what said administrator's password is.  It is recommended that this be a strong password, as it is a strong user in regards to the forum.

### Administrator's email
This email is not only used for the administrator users account but it, by default, is set as the webmaster email, administrator email, and it is added to the mailing list for reports by the forum's users.

### Board title
This sets the title of the board which appears at the uppermost left corner of the forum and the title in the browser window as well as being included in forum-generated emails.

### Board description
The board description is located under the board title in the uppermost left corner.

### Base url
This setting sets the base of the urls for the forum.  It is vital that this is set correctly, as it can cause permission issues and/or cause the site to cease to function. In most cases the default should be okay.

### Default language
This setting dictates which translation of the board to use.

### Default style
This sets the default style used by the board for new or non-registered users.