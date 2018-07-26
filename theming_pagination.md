# Theming pagination
Pagination makes it easier for users to navigate through a board. Luna 2.1 provides an improved pagination system which works with objects.

Given that themes will have to use pagination on a number of different locations, we strongly recommend you create an additional function to manipulate the array given to you by Luna.

A pagination array is given for the following views:

* `forum.php`
* `inbox.php`
* `inbox-view.php`
* `search-results.php`
* `thread.php`
* `users.php`

For each of these views, the pagination array can be accessed by calling `$paging_links`.

## Implementation
The `$paging_links`-variable contains all relevant pagination. `$paging_links` returns an array of `Page`-objects.

```php
class Page {
    string private $name;
    string private $url;
    string private $state;
    string private $rel;

    void public __construct( string $name, string $url, string $state, string $rel );

    // Setters
    Page public setName( string $name );    
    Page public setUrl( string $url );
    Page public setState( string $state );
    Page public setRel( string $rel );

    // Getters
    string public getName();
    string public getUrl();
    string public getState();
    string public getRel();
}
```

Typography uses the following implementation for the pagination:

```php
function typography_paginate($pages) {
    if (!empty($pages)) {
        echo '<div class="btn-toolbar btn-toolbar-options">';
        
        foreach ($pages as $page) {
            if ($page->getState() === 'disabled')
                $class = 'btn btn-light disabled';
            elseif ($page->getState() === 'active')
                $class = 'btn btn-light btn-light-active';
            else
                $class = 'btn btn-light';

            if ($page->getName() === 'Previous')
                $name = '<i class="fa fa-fw fa-angle-left"></i>';
            elseif ($page->getName() === 'Next')
                $name = '<i class="fa fa-fw fa-angle-right"></i>';
            else
                $name = $page->getName();

            echo '<a href="'.$page->getUrl().'" '.(($page->getRel() !== null) ? 'rel="'.$page->getRel().'"' : '').' class="'.$class.'"><span class="fw">'.$name.'</span></a>';
        }

        echo '</div>';
    }
}
```