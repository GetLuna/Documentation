# Theming `profile.php`
The profile is one of the more complex systems, however, to make theming as easy as possible, we've spend much work on making a fancy design for profiles as easy as possible.

## `$user`
The `$user`-variable contains all relevant information about the user whos profile you are looking at, not to be confused with `$luna_user`. `$user` returns a `User`-object.

<p class="alert alert-danger">In Preview 5, the User-object contains functions that call data from the group of the user as well as the online information. These functions are introduced in Preview 5 but won't be available anymore in future previews.</p>

```php
class User {
    int private $id
    int private $group_id
    string private $username
    string private $password
    string private $salt
    string private $email
    string private $title
    string private $realname
    string private $url
    string private $facebook
    string private $microsoft
    string private $twitter
    string private $google
    string private $location
    string private $signature
    int private $email_setting
    int private $notify_with_comment
    int private $auto_notify
    int private $show_img
    int private $show_sig
    private $php_timezone
    string private $time_format
    string private $date_format
    string private $language
    int private $num_comments
    Timestamp private $last_comment
    Timestamp private $last_search
    Timestamp private $last_email_sent
    Timestamp private $last_report_sent
    Timestamp private $registered
    string private $registration_ip
    Timestamp private $last_visit
    string private $admin_note
    string private $activate_string
    string private $activate_key
    int private $use_inbox
    int private $num_inbox
    int private $first_run
    int private $color_scheme
    int private $adapt_time
    int private $accent

    int private $g_id 
    string private $g_title
    string private $g_user_title
    int private $g_moderator
    int private $g_mod_edit_users
    int private $g_mod_rename_users
    int private $g_mod_change_passwords
    int private $g_mod_ban_users
    int private $g_read_board
    int private $g_view_users
    int private $g_comment
    int private $g_create_threads
    int private $g_edit_comments
    int private $g_delete_comments
    int private $g_delete_threads
    int private $g_set_title
    int private $g_search
    int private $g_search_users
    int private $g_send_email
    int private $g_comment_flood
    int private $g_search_flood
    int private $g_email_flood
    int private $g_inbox
    int private $g_inbox_limit
    int private $g_report_flood
    int private $g_soft_delete_view
    int private $g_soft_delete_comments
    int private $g_soft_delete_threads  

    Timestamp private $o_logged
    Timestamp private $o_idle

    void public __construct()

    MenuItem public static withId( int $id )
    MenuItem public static withRow( array $row )
    void protected getById( int $id )
    void protected fill( array $row )
    void public save()

    // Setters
    User public setId( $id )
    User public setGroup( $group_id )
    User public setUsername( $username )
    User public setPassword( $password )
    User public setSalt( $salt )
    User public setEmail( $email )
    User public setTitle( $title )
    User public setRealname( $realname )
    User public setFacebook( $facebook )
    User public setMicrosoft( $microsoft )
    User public setTwitter( $twitter )
    User public setGoogle( $google )
    User public setLocation( $location )
    User public setSignature( $signature )
    User public setEmailSetting( $email_setting )
    User public setNotifyWithComment( $notify_with_comment )
    User public setAutoNotify( $auto_notify )
    User public setShowImg( $show_img )
    User public setShowSig( $show_sig )
    User public setPhpTimezone( $php_timezone )
    User public setTimeFormat( $time_format )
    User public setDateFormat( $date_format )
    User public setLanguage( $language )

    User public setNumComments( $num_comments )
    User public setLastComment( $last_comment )
    User public setLastSearch( $last_search )
    User public setLastEmailSent( $last_email_sent )
    User public setLastReportSent( $last_report_sent )
    User public setRegistered( $registered )
    User public setRegistration_ip( $registration_ip )
    User public setLastVisit( $last_visit )
    User public setAdminNote( $admin_note )
    User public setActivateString( $activate_string )
    User public setActivateKey( $activate_key )
    User public setUseInbox( $use_inbox )
    User public setNumInbox( $num_inbox )
    User public setFirstRun( $first_run )
    User public setColorScheme( $color_scheme )
    User public setAdaptTime( $adapt_time )
    User public setAccent( $accent )
    User public setGId( $g_id )
    User public setGTitle( $g_title )
    User public setGUserTitle( $g_user_title )
    User public setGModerator( $g_moderator )
    User public setGModEditUsers( $g_mod_edit_users )
    User public setGModRenameUsers( $g_mod_rename_users )
    User public setGModChangePasswords( $g_mod_change_passwords )
    User public setGModBanUsers( $g_mod_ban_users )
    User public setGReadBoard( $g_read_board )
    User public setGViewUsers( $g_view_users )
    User public setGComment( $g_comment )
    User public setGCreateThreads( $g_create_threads )
    User public setGEditComments( $g_edit_comments )
    User public setGDeleteComments( $g_delete_comments )
    User public setGDeleteThreads( $g_delete_threads )
    User public setGSetTitle( $g_set_title )
    User public setGSearch( $g_search )
    User public setGSearchUsers( $g_search_users )
    User public setGSendEmail( $g_send_email )
    User public setGCommentFlood( $g_comment_flood )
    User public setGSearchFlood( $g_search_flood )
    User public setGEmailFlood( $g_email_flood )
    User public setGInbox( $g_inbox )
    User public setGInboxLimit( $g_inbox_limit )
    User public setGReportFlood( $g_report_flood )
    User public setGSoftDeleteView( $g_soft_delete_view )
    User public setGSoftDeleteComments( $g_soft_delete_comments )
    User public setGSoftDeleteThreads( $g_soft_delete_threads )
    User public setOLogged( $o_logged )
    User public setOIdle( $o_idle )

    // Getters
    int public getId()
    int public getGroup()
    string public getUsername()
    string public getPassword()
    string public getSalt()
    string public getEmail()
    string public getTitle( $personal = false )
    string public getAvatar()
    string public getRealname()
    string public getUrl()
    string public getFacebook()
    string public getMicrosoft()
    string public getTwitter()
    string public getGoogle()
    string public getLocation()
    string public getSignature( $raw = true )
    int public getEmailSetting()
    int public getNotifyWithComment()
    int public getAutoNotify()
    int public getShowImg()
    int public getShowSig()
    string public getPhpTimezone()
    string public getTimeFormat()
    string public getDateFormat()
    string public getLanguage()
    int public getNumComments( $raw = false )
    DateTime public getLastComment( $raw = false )
    DateTime public getLastSearch( $raw = false )
    DateTime public getLastEmailSent( $raw = false )
    DateTime public getLastReportSent( $raw = false )
    DateTime public getRegistered( $raw = false )
    string public getRegistration_ip()
    DateTime public getLastVisit( $raw = false )
    string public getAdminNote()
    string public getActivateString()
    string public getActivateKey()
    int public getUseInbox()
    int public getNumInbox()
    int public getFirstRun()
    int public getColorScheme()
    int public getAdaptTime()
    int public getAccent()

    public getGId()
    public getGTitle()
    public getGUserTitle()
    public getGModerator()
    public getGModEditUsers()
    public getGModRenameUsers()
    public getGModChangePasswords()
    public getGModBanUsers()
    public getGReadBoard()
    public getGViewUsers()
    public getGComment()
    public getGCreateThreads()
    public getGEditComments()
    public getGDeleteComments()
    public getGDeleteThreads()
    public getGSetTitle()
    public getGSearch()
    public getGSearchUsers()
    public getGSendEmail()
    public getGCommentFlood()
    public getGSearchFlood()
    public getGEmailFlood()
    public getGInbox()
    public getGInboxLimit()
    public getGReportFlood()
    public getGSoftDeleteView()
    public getGSoftDeleteComments()
    public getGSoftDeleteThreads()

    public getOLogged()
    public getOIdle()

    public getThreadsUrl()
    public getCommentsUrl()
    public getSubscriptionsUrl()

    // Checks
    bool public hasContactInfo()
}
```