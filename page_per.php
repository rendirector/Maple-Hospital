function create_medical_personnel_post_type() {
    $labels = array(
        'name'               => 'Medical Personnel',
        'singular_name'      => 'Medical Personnel',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Medical Personnel',
        'edit_item'          => 'Edit Medical Personnel',
        'new_item'           => 'New Medical Personnel',
        'all_items'          => 'All Medical Personnel',
        'view_item'          => 'View Medical Personnel',
        'search_items'       => 'Search Medical Personnel',
        'not_found'          => 'No medical personnel found',
        'not_found_in_trash' => 'No medical personnel found in Trash',
        'parent_item_colon'  => '',
        'menu_name'          => 'Medical Personnel'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'medical-personnel' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail' )
    );

    register_post_type( 'medical_personnel', $args );
}

add_action( 'init', 'create_medical_personnel_post_type' );
