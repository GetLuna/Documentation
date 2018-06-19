# Pruning
<p class="alert alert-danger">Pruned comments, notifications and users can never be restored.</p>
The prune feature can be used to delete old inactive comments from your forums, notifications or inactive users.

<p class="alert alert-info">For best performance, you should put the forum in maintenance mode during pruning.</p>

## Notifications
Pruning notifications can be useful if you have a large board and rather not have the notification table grow to much.

* __Days old__: the number of days old a notifications should be before it is considered to be pruned.
* __Type__
    * __All notifications__: any notification that has the given age will be removed, no matter the stat it is in.
    * __Sene notifications__: only notifications that already have been interacted with will be pruned as long as they are older than the days given. Any unseen notification that is beyond the given age will remain available.
    * __New notifications__: only notifications that have not yet been interacted with will be pruned as long as they are older than the days given. Any seen notification that is beyond the given age will remain available.

## Comments
Pruning comments is highly discourage as this might break some threads.

* __Days old__: the number of days old a comment should be before it is considered to be pruned.
* __Prune pinned threads__: whether or not pinned threads should also be pruned.
* __Prune from__: the forum which you want to prune, or you could choose to prune all forums.

## Users
Pruning users can be also be done but is once again highly discouraged.

* __Minimum days__: minimum number of days since the action specified in "Since".
* __Since__
    * __Registration__: look at the registration date to remove the user.
    * __Last login__: look at the last login date to remove the user.
* __Maximum number of comments__: maximum number of comments an user can have before he/she is pruned.
* __Delete management__: delete users with management access.
* __User status__
    * __Delete any__: delete any type of user, no matter their verification.
    * __Delete only verified__: delete any user that matches the requirements and has been verified.
    * __Delete only unverified__: delete any user that matches the requirements and has been unverified.