<?php
/**
 * Entrypoint for theme functionality.
 *
 * @package altis/skeleton
 */

namespace StackyBot;

const SLUG = 'stackybot';

/**
 * Enqueue static assets.
 *
 * Adds the default stylesheet to the repo.
 */
function enqueue_assets() {
	//wp_enqueue_style( SLUG, get_stylesheet_uri() );
	wp_enqueue_style( SLUG, get_stylesheet_directory_uri() . '/output.css' );
}


add_action( 'init', 'sb_change_post_object' );
// Change dashboard Posts to News
function ns_change_post_object() {
   $get_post_type = get_post_type_object('post');
    $labels = $get_post_type->labels;
    $labels->name = 'Question';
    $labels->singular_name = 'Question';
    $labels->add_new = 'Add Question';
    $labels->add_new_item = 'Add Question';
    $labels->edit_item = 'Edit Question';
    $labels->new_item = 'Question';
    $labels->view_item = 'View Question';
    $labels->search_items = 'Search Questions';
    $labels->not_found = 'No Question found';
    $labels->not_found_in_trash = 'No Question found in Trash';
    $labels->all_items = 'All Questions';
    $labels->menu_name = 'Question';
    $labels->name_admin_bar = 'Question';
}