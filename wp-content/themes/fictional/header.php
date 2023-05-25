<!DOCTYPE html>
<?php
/* set the cache limiter to 'private' */

session_cache_limiter('private');
$cache_limiter = session_cache_limiter();

/* set the cache expire to 5 minutes */
session_cache_expire(5);
$cache_expire = session_cache_expire();

/* start the session */

if (!session_id()) {
    session_start();
}
?>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body> 