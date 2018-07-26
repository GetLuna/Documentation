# Theming `header.php`
When developing themes, you will probably want to show the menu of Luna in a custom view. The menu can be accessed within your theme's `header.php`-view. From here, you have access to a number of variables.

## `$menu`
The `$menu`-variable contains all relevant links that can be set in Backstage > Settings > Menu with the exception of invisible links. `$menu` returns a `Menu`-object.

```php
class Menu {
    private array private $items

    void public __construct( bool $show_invisible )

    // Setters
    Menu setItems( bool $show_invisible )

    // Getters
    array(MenuItem) public getItems( bool $visible )
    int public getBackstageUrl();
    int public getInboxUrl( int $id );
    int public getProfileUrl( int $id );
    int public getSettingsUrl( int $id );
    int public getHelpUrl();
    int public getNotificationsUrl( int $id );
    int public getLogoutUrl( int $id );
    int public getRegisterUrl();
    int public getLoginUrl();
}
```

Themes can get access to the menu items by calling `$menu->getItems()`. This returns an array of `MenuItem`-objects, which have the markup as depicted below. Additionally, all relevant user-urls are also accessible from this object, like links to the user's profile, notifications and more.

```php
class MenuItem {
    int private $id
    string private $url
    string private $name
    int private $position
    bool private $visible
    bool private $system

    void public __construct()

    MenuItem public static withId( int $id )
    MenuItem public static withRow( array $row )
    void protected getById( int $id )
    void protected fill( array $row )

    // Setters
    MenuItem public setId( int $id )
    MenuItem public setUrl( string $url )
    MenuItem public setName( string $name )
    MenuItem public setPosition( int $position )
    MenuItem public setVisible( bool $visible )
    MenuItem public setSystem( bool $system )

    // Getters
    int public getId()
    string public getUrl()
    string public getName()
    int public getPosition()
    bool public getVisible()
    bool public getSystem()
}
```

As an example, a Bootstrap 4-based theme can access and implement this functionality in a `navbar`-component with the following code:

```php
foreach( $menu->getItems() as $item ) {
    echo '<li class="nav-item"><a class="nav-link" href="'.$item->getUrl().'">'.$item->getName().'</a></li>';
}
```

## `$notifications`
A part of the menu is the notification flyout. This flyout shows the user's notifications. These notifications can be accessed by calling `$notifications`. `$notifications` returns an array of `Notification`-objects. A `Notification`-object has the following definition:

```php
class Notification {
    int private $id
    int private $user
    string private $url
    string private $message
    string private $icon
    DateTime private $time
    bool private $viewed
    
    void public __construct()

    Notificaiton public static withId( int $id )
    Notificaiton public static withRow( array $row )
    void protected getById( int $id )
    void protected fill( array $row )

    // Setters
    Notification public setId( int $id )    
    Notification public setUser( int $user )    
    Notification public setUrl( string $url )
    Notification public setMessage( string $message )
    Notification public setIcon( string $icon )
    Notification public setTime( DateTime $time )    
    Notification public setViewed( bool $viewed )

    // Getters
    int public getId()    
    int public getUser()    
    string public getUrl()
    string public getMessage()
    string public getIcon()
    DateTime public getTime()    
    bool public getViewed()
}
```

Looping through notifications can be done as followed:

```php
foreach ($notifications as $notification) {
    echo '<a class="dropdown-item" href="notifications.php?notification='.$notification->getId().'"><span class="timestamp">'.$notification->getTime().'</span> <span class="fas fa-fw '.$notification->getIcon().'"></span> '.$notification->getMessage().'</a>';
}
```

## `$notification_count`
To show the number of new notifications or as purpose for other actions, the `$notification_count` variable returns an integer with the number of unseen notifications for the current user.