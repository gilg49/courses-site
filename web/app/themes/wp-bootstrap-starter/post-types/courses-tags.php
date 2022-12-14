<?php

/**
 * Registers the `course_tag` taxonomy,
 * for use with 'courses'.
 */
function course_tag_init() {
        register_taxonomy( 'course-tag', [ 'courses' ], [
                'hierarchical'          => false,
                'public'                => true,
                'show_in_nav_menus'     => true,
                'show_ui'               => true,
                'show_admin_column'     => false,
                'query_var'             => true,
                'rewrite'               => true,
                'capabilities'          => [
                        'manage_terms' => 'edit_posts',
                        'edit_terms'   => 'edit_posts',
                        'delete_terms' => 'edit_posts',
                        'assign_terms' => 'edit_posts',
                ],
                'labels'                => [
                        'name'                       => __( 'Course tags', 'YOUR-TEXTDOMAIN' ),
                        'singular_name'              => _x( 'Course tag', 'taxonomy general name', 'YOUR-TEXTDOMAIN' ),
                        'search_items'               => __( 'Search Course tags', 'YOUR-TEXTDOMAIN' ),
                        'popular_items'              => __( 'Popular Course tags', 'YOUR-TEXTDOMAIN' ),
                        'all_items'                  => __( 'All Course tags', 'YOUR-TEXTDOMAIN' ),
                        'parent_item'                => __( 'Parent Course tag', 'YOUR-TEXTDOMAIN' ),
                        'parent_item_colon'          => __( 'Parent Course tag:', 'YOUR-TEXTDOMAIN' ),
                        'edit_item'                  => __( 'Edit Course tag', 'YOUR-TEXTDOMAIN' ),
                        'update_item'                => __( 'Update Course tag', 'YOUR-TEXTDOMAIN' ),
                        'view_item'                  => __( 'View Course tag', 'YOUR-TEXTDOMAIN' ),
                        'add_new_item'               => __( 'Add New Course tag', 'YOUR-TEXTDOMAIN' ),
                        'new_item_name'              => __( 'New Course tag', 'YOUR-TEXTDOMAIN' ),
                        'separate_items_with_commas' => __( 'Separate course tags with commas', 'YOUR-TEXTDOMAIN' ),
                        'add_or_remove_items'        => __( 'Add or remove course tags', 'YOUR-TEXTDOMAIN' ),
                        'choose_from_most_used'      => __( 'Choose from the most used course tags', 'YOUR-TEXTDOMAIN' ),
                        'not_found'                  => __( 'No course tags found.', 'YOUR-TEXTDOMAIN' ),
                        'no_terms'                   => __( 'No course tags', 'YOUR-TEXTDOMAIN' ),
                        'menu_name'                  => __( 'Course tags', 'YOUR-TEXTDOMAIN' ),
                        'items_list_navigation'      => __( 'Course tags list navigation', 'YOUR-TEXTDOMAIN' ),
                        'items_list'                 => __( 'Course tags list', 'YOUR-TEXTDOMAIN' ),
                        'most_used'                  => _x( 'Most Used', 'course-tag', 'YOUR-TEXTDOMAIN' ),
                        'back_to_items'              => __( '&larr; Back to Course tags', 'YOUR-TEXTDOMAIN' ),
                ],
                'show_in_rest'          => true,
                'rest_base'             => 'course-tag',
                'rest_controller_class' => 'WP_REST_Terms_Controller',
        ] );

}

add_action( 'init', 'course_tag_init' );

/**
 * Sets the post updated messages for the `course_tag` taxonomy.
 *
 * @param  array $messages Post updated messages.
 * @return array Messages for the `course_tag` taxonomy.
 */
function course_tag_updated_messages( $messages ) {

        $messages['course-tag'] = [
                0 => '', // Unused. Messages start at index 1.
                1 => __( 'Course tag added.', 'YOUR-TEXTDOMAIN' ),
                2 => __( 'Course tag deleted.', 'YOUR-TEXTDOMAIN' ),
                3 => __( 'Course tag updated.', 'YOUR-TEXTDOMAIN' ),
                4 => __( 'Course tag not added.', 'YOUR-TEXTDOMAIN' ),
                5 => __( 'Course tag not updated.', 'YOUR-TEXTDOMAIN' ),
                6 => __( 'Course tags deleted.', 'YOUR-TEXTDOMAIN' ),
        ];

        return $messages;
}

add_filter( 'term_updated_messages', 'course_tag_updated_messages' );