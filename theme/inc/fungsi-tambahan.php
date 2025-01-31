<?php
/* memuat upload svg */
function lp3i_upload_mimes( $existing_mimes ) {
    $existing_mimes['svg'] = 'image/svg+xml';
    return $existing_mimes;
}
add_filter( 'upload_mimes', 'lp3i_upload_mimes' );