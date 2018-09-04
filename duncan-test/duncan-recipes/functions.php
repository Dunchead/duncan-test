<?php

function create_recipes_post_type() {
register_post_type( 'recipes',
array(
'labels' => array(
'name' => __( 'Recipes' ),
'singular_name' => __( 'Recipe' )
),
'public' => true,
'has_archive' => true,
    'supports' => array( 'title', 'editor', 'custom-fields' ),
    'taxonomies' => array( 'category' ),
    'show_in_rest' => true
)
);
}
add_action( 'init', 'create_recipes_post_type' );


