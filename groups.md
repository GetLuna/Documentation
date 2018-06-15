# Groups
Groups are a way to control the permissions the users of your board have.

## Default groups
Luna, by default, presets 4 different groups.

- __Guests__: guests have permission to view the forum, but not to perform any other actions. They can only search.
- __Members__: a member has a wide set of permissions, compared to Guest. A member can create new threads, respond to other threads, edit their comments and delete their comments and threads (and any comment on that thread, regardless of who posted it).
- __Moderators__: a moderator has full control over forum content. However, being a moderator doesn't give someone power to perform any moderator-tasks on their own. They do have access to the Backstage, but only to a very limited number of pages. Settings, forum configuration, maintenance and more are not available to them. To allow a moderator to actually perform moderation, you will need to assign them one or more forums in their profile.
- __Administrators__: admins have full access to the Mainstage and Backstage. They can moderate all forums.

You can't set any of these groups as default group with the exception of Members, which is the default default group. None of these 4 groups can be removed.

## New group
To add a new group, go to Backstage > User > Groups. Go to the "New group base" panel a choose a group on which to base your new group. When you've choosen one, click "Add".

## Default group
By default, Luna will put all registered users in the "Members" group. If you want to change that, you can do so by choosing another group in the dropdown list in the "Default group" panel and clicking "Save". Note that Administrators, Moderators and Guests cannot be set as a default group.

## Group settings
### Name options
* __Group title__: the title of the group, this will be visible in the user's profile.
* __User title__: a title you want to give to the users within this group, this will overwrite any title they may have from the ranks you've set

### Moderator options
* __Moderator__: allow users in this group to have access to moderator settings for forums. Which forums a user can moderate have to be set in their profile.
* __Edit profiles__: allow a moderator te edit others profile (with limits).
* __Rename users__: allow a moderator to change the name of any user.
* __Change passwords__: allow a moderator to change the password of any user.
* __Ban__: allow a moderator to ban other users.

### Inbox options
* __Inbox__: allow users in this group to use Inbox.
* __Receivers__: the number of messages a user can have in thier Inbox. If you set this to `0`, they will have an unlimited Inbox.

## Permission options
* __Read__
    * Allow a user to read the content of the board.
    * Allow a user to view the user list and profiles.
* __Create__
    * Allow a user to comment on a thread.
    * Allow a user to create a new thread.
* __Edit__
    * Allow users to edit their own comments.
* __Delete__
    * Allow users to delete their own comments.
    * Allow users to delete their own threads and all comments in that thread, including those not posted by them.
* __Hide__
    * Allow users to view comments and threads that have been hidden from the baord.
    * Allow users to hide comments from other users.
    * Allow users to hide threads from all users.

### Title options
* __Set own user title__: allow users to change their title themselves, this overwrites both the user group's user title as well as the rank system.

## Search options
* __Search content__: allow users to search through the board.
* __Search users__: allow users to perform a search request in the user list.

### Mail options
* __Send e-mails__: allow users to view and use the "Send mail" button in user profiles.

### Flood options
* __Comment flood interval__: require a number of seconds to have passed before a user can post their next comment.
* __Search flood interval__: require a number of seconds to have passed before search queries are accepted again.
* __Email flood interval__: require a number of seconds to ahve passed before they can send anther mail to the user.
* __Report flood interval__: require a number of seconds to ahve passed before they can file another post as a report.