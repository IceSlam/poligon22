<?php
/**
 * WordPress Bootstrap Pagination
 */

function wp_bootstrap_pagination( $args = array() ) {

    $defaults = array(
        'range'           => 4,
        'custom_query'    => FALSE,
        'previous_string' => __( 'Previous', 'text-domain' ),
        'next_string'     => __( 'Next', 'text-domain' ),
        'before_output'   => '<nav class="d-flex align-items-center"><ul class="pagination mb-0 mt-0">',
        'after_output'    => '</ul></nav>'
    );

    $args = wp_parse_args(
        $args,
        apply_filters( 'wp_bootstrap_pagination_defaults', $defaults )
    );

    $args['range'] = (int) $args['range'] - 1;
    if ( !$args['custom_query'] )
        $args['custom_query'] = @$GLOBALS['wp_query'];
    $count = (int) $args['custom_query']->max_num_pages;
    $page  = intval( get_query_var( 'paged' ) );
    $ceil  = ceil( $args['range'] / 2 );

    if ( $count <= 1 )
        return FALSE;

    if ( !$page )
        $page = 1;

    if ( $count > $args['range'] ) {
        if ( $page <= $args['range'] ) {
            $min = 1;
            $max = $args['range'] + 1;
        } elseif ( $page >= ($count - $ceil) ) {
            $min = $count - $args['range'];
            $max = $count;
        } elseif ( $page >= $args['range'] && $page < ($count - $ceil) ) {
            $min = $page - $ceil;
            $max = $page + $ceil;
        }
    } else {
        $min = 1;
        $max = $count;
    }

    $echo = '';
    $previous = intval($page) - 1;
    $previous = esc_attr( get_pagenum_link($previous) );

    if ( $previous && (1 != $page) )
        $echo .= '<a class="btn nav prev" style="position:absolute;left:0;top:calc(0% - 9px)" href="' . $previous . '" title="' . __( 'previous', 'text-domain') . '"><img src="https://eight.al-dev.ru/wp-content/themes/poligon22/assets/img/galery_arrow.svg" alt=""></a>';

    if ( !empty($min) && !empty($max) ) {
        for( $i = $min; $i <= $max; $i++ ) {
            if ($page == $i) {
                $echo .= '<li class="page-item active"><a class="page-link">' . str_pad( (int)$i, 1, '', STR_PAD_LEFT ) . '</a></li>';
            } else {
                $echo .= sprintf( '<li class="page-item"><a class="page-link" href="%s">%2d</a></li>', esc_attr( get_pagenum_link($i) ), $i );
            }
        }
    }

    $next = intval($page) + 1;
    $next = esc_attr( get_pagenum_link($next) );
    if ($next && ($count != $page) )
        $echo .= '<a class="btn nav next" style="position:absolute;right:0;top:calc(0% - 9px)" href="' . $next . '" title="' . __( 'next', 'text-domain') . '"><img src="https://eight.al-dev.ru/wp-content/themes/poligon22/assets/img/galery_arrow.svg" alt=""></a>';

    if ( isset($echo) )
        echo $args['before_output'] . $echo . $args['after_output'];
}
