<?php
$post = $wp_query->post;
if ( in_category( 'weapons' ) ) {
    include( TEMPLATEPATH.'/single-weapons.php' );
} else  {
    include( TEMPLATEPATH.'/page.php' );
}

?>
