<?php
if ( in_array( $page, array( 'index' ) ) ) {
    $docs_section = 'index';
} elseif ( in_array( $page, array( 'index_use', 'install', 'setup', 'upgrading', 'editor', 'labels', 'backstage', 'organizing', 'admin', 'antispam', 'fontawesome', 'customizing', 'troubleshooting', 'cookies', 'data' ) ) ) {
    $docs_section = 'use';
} elseif ( in_array( $page, array( 'index_develop_for', 'themes', 'plugins', 'translations', 'constats', 'dbstructure', 'dblayer', 'variables', 'functions', 'caching' ) ) ) {
    $docs_section = 'for';
} elseif ( in_array( $page, array( 'index_develop', 'php_conventions', 'css_conventions', 'contributing', 'branches', 'tickets', 'browsers', 'version' ) ) ) {
    $docs_section = 'develop';
} elseif ( in_array( $page, array( 'index_design', 'identity', 'colors' ) ) ) {
    $docs_section = 'design';
}