// Set a default image for Woocommerce products
// =============================================================================

add_action( 'init', 'custom_fix_thumbnail' );

function custom_fix_thumbnail() {
    add_filter('woocommerce_placeholder_img_src', 'custom_woocommerce_placeholder_img_src');

    function custom_woocommerce_placeholder_img_src( $src ) {
        $upload_dir = wp_upload_dir();
        $uploads = untrailingslashit( $upload_dir['baseurl'] );
        $src = $uploads . '/2018/05/product-placeholder.png';

        return $src;
    }
}
