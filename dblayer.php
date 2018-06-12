<?php $section = "docs"; $dsection = "develop";  $dpage = "dblayer"; include('../include/header.php') ?>
<div class="row main">
    <div class="col-sm-3">
        <?php include ('docsnav.php') ?>
    </div>
    <div class="col-sm-9">
        <h1>Database layer</h1>
        <p>In Luna, we have a flexible database layer that allows for changing databases very easily and unifies database access with one <abbr title="Application Programming Interface">API</abbr>.</p>
        <h3>Class synopsis</h3>
<pre><code class="language-php">DBLayer {
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
}</code></pre>
        <h3>Example usage</h3>
<pre><code class="language-php">// Fetch user count
$result = $db-&gt;query('SELECT COUNT(id) FROM '.$db-&gt;prefix.'users AS u WHERE u.id&gt;1 AND u.group_id!='.LUNA_UNVERIFIED) or error('Unable to fetch user list count', __FILE__, __LINE__, $db-&gt;error());
$num_users = $db-&gt;result($result);</code></pre>
<pre><code class="language-php">// Grab the users
$result = $db-&gt;query('SELECT u.id, u.username, u.title, u.num_comments, u.registered, g.g_id, g.g_user_title FROM '.$db-&gt;prefix.'users AS u LEFT JOIN '.$db-&gt;prefix.'groups AS g ON g.g_id=u.group_id WHERE u.id IN('.implode(',', $user_ids).')') or error('Unable to fetch user list', __FILE__, __LINE__, $db-&gt;error());
while ($user_data = $db-&gt;fetch_assoc($result))
{
    // Do something with $user_data...
}</code></pre>
	</div>
</div>
<?php include '../include/footer.php' ?>