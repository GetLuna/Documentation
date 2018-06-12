# Database layer
In Luna, we have a flexible database layer that allows for changing databases very easily and unifies database access with one API.

## Class synopsis
```cs
DBLayer {
    string $prefix
    
    DBLayer( string $db_host, string $db_username, string $db_password, string $db_name, string $db_prefix, bool $p_connect )
    void start_transaction( void )
    void end_transaction( void )
    mixed query( string $sql [, bool $unbuffered = FALSE] )
    string result( [resource $query_id = 0 [, int $row = 0 [, int $col = 0]]] )
    array fetch_row( [resource $query_id = 0] )
    int num_rows( [resource $query_id = 0] )
    int affected_rows( void )
    int insert_id( void )
    int get_num_queries( void )
    void free_result( [resource $query_id = 0] )
    string escape( string $str)
    array error( void )
    void close( void )
    string get_names( void )
    void set_names( string $names )
    array get_version( void )
    bool table_exists( string $table_name [, bool $no_prefix = FALSE] )
    bool field_exists( string $table_name, string $field_name [, bool $no_prefix = FALSE] )
    bool index_exists( string $table_name, string $index_name [, bool $no_prefix = FALSE] )
    bool create_table( string $table_name, array $schema [, bool $no_prefix = FALSE] )
    bool drop_table( string $table_name [, bool $no_prefix = FALSE] )
    bool rename_table( string $old_table, string $new_table [, bool $no_prefix = FALSE] )
    bool add_field( string $table_name, string $field_name, string $field_type, bool $allow_null [, mixed $default_value = NULL [, string $after_field = NULL [, bool $no_prefix = FALSE]]] )
    bool alter_field ( string $table_name, string $field_name, string $field_type, bool $allow_null [, mixed $default_value = NULL [, string $after_field = NULL [, bool $no_prefix = FALSE]]] )
    bool drop_field( string $table_name, string $field_name [, bool $no_prefix = FALSE] )
    bool add_index( string $table_name, string $index_name, string $index_fields [, bool $unique = FALSE [, bool $no_prefix = FALSE]] )
    bool drop_index( string $table_name, string $index_name [, bool $no_prefix = FALSE] )
    bool truncate_table( string $table_name [, bool $no_prefix = FALSE] )
}
```

## Example usage
```php
// Fetch user count
$result = $db->query('SELECT COUNT(id) FROM '.$db->prefix.'users AS u WHERE u.id>1 AND u.group_id!='.LUNA_UNVERIFIED) or error('Unable to fetch user list count', __FILE__, __LINE__, $db->error());
$num_users = $db->result($result);
```

```php
// Grab the users
$result = $db->query('SELECT u.id, u.username, u.title, u.num_comments, u.registered, g.g_id, g.g_user_title FROM '.$db->prefix.'users AS u LEFT JOIN '.$db->prefix.'groups AS g ON g.g_id=u.group_id WHERE u.id IN('.implode(',', $user_ids).')') or error('Unable to fetch user list', __FILE__, __LINE__, $db->error());
while ($user_data = $db->fetch_assoc($result))
{
    // Do something with $user_data...
}
```