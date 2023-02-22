function redirect_to_medical_personnel_list() {
    if ( is_front_page() ) {
        wp_redirect( home_url( '/medical-personnel-list' ) );
        exit();
    }
}

add_action( 'template_redirect', 'redirect_to_medical_personnel_list' );
