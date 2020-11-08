<?php
$post = $wp_query->post;
if ( in_category( 'weapons' ) ) {
    include( TEMPLATEPATH.'/single-weapons.php' );
} else if ( in_category( 'blog' ) ) {
    include( TEMPLATEPATH.'/single-blog.php' );
} else {
    include( TEMPLATEPATH.'/page.php' );
}

?>
