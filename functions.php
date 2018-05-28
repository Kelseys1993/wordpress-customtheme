<?php 

function husky_script_enqueue() {
		//css
		wp_enqueue_style('huskytheme', get_template_directory_uri().' /css/bootstrap.min.css', array(), '3.3.4', 'all');
		  wp_enqueue_style('customStyle', get_template_directory_uri() . '/css/customThemeStyle.css', array(), '1.0.0', 'all');
		

		//js
        wp_enqueue_script('jquery');
		
		wp_enqueue_script('customjs', get_template_directory_uri().'/js/bootstrap.min.js', array(), '1.0.0', true);
		wp_enqueue_script('customScript', get_template_directory_uri().'/js/customThemeScript.js', array(), '1.0.0', true);
	}
	add_action('wp_enqueue_scripts','husky_script_enqueue');

	function husky_theme_setup(){
		add_theme_support('menus');
		register_nav_menu('primary', 'primary navigation');
		register_nav_menu('secondary', 'secondary navigation');

	}
	add_action('init', 'husky_theme_setup');
	add_theme_support('custom-background');
    $customHeaderSetting = array(
        'default-image' => '',
        'width' => 1280,
        'height' => 100,
        'flex-height' => true,
        'flex-width' => true,
        'default-text-color' => '',
        'header-text' => true,
        'default-text-color' => '000',
        'uploads' => true,
        'video' => false
    );
    add_theme_support('custom-header', $customHeaderSetting);
	add_theme_support('post-thumbnails');
    add_theme_support('post-formats', array('aside', 'image', 'video'));
	

	//sidebar
	function husky_widget_setup(){
			register_sidebar(
				array(
					'name'=>'Sidebar',
					'id'=>'sidebar-1',
					'class'=>'custom',
					'description'=> 'Standard Sidebar',
					'before_widget'=>'<aside id="%1$s" class="widget%2$s">',
					'after_widget'=>'</aside>',
					'before_title'=>'<h2 class="widget-title">',
					'after_title'=> '</h2>'
				)
			);
	}
	add_action('widgets_init', 'husky_widget_setup');

function husky_custom_post_type(){
    $labels=array(
        'name' => 'Adoptions',
        'singular_name' => 'Adoption',
        'add_new' => 'Add Item',
        'all_items' => 'All Items',
        'add_new_item' => 'Add Item',
        'edit_item' => 'Edit Item',
        'new_item' => 'New Item',
        'view_item' => 'View Item',
        'search_item' => 'Search Adoptions',
        'not_found' => 'No Items found',
        'not_found_in_trash' => 'No Items Found in Trash',
        'parent_item_colon' => 'Parent Item',
        'exclude_from_search' => true
    );
    $args=array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'support' => array(
            'title',
            'editor',
            'exerpt',
            'thumbnail',
            'revisions',
        ),
        'taxonomies' => array(
            'category', 'post_tag'),
            'menu_position' => 5,
            'exclude_from_search' => false
        );
        register_post_type('adoptions', $args);
}
add_action('init', 'husky_custom_post_type');

function husky_custom_taxonomies(){
    $labels = array(
        'name' => 'Types',
        'singular_name' => 'Type',
        'search_items' => 'Search Items',
        'all-items' => 'All Types',
        'parent_item' => 'Parent Type',
        'parent_item_colon' => 'Parent Type',
        'edit_item' => 'Edit Type',
        'update_item' => 'Update Type',
        'add_new_item' => 'Add New Type',
        'new_item_name' => 'New Type Name',
        'menu_name' => 'Types', 
    );
    $args= array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug'=> 'type')
    );
    register_taxonomy('type', array('adoptions'),$args);
}
add_action('init', 'husky_custom_taxonomies');

function wpsites_modify_comment_form_text_area($arg) {
    $arg['comment_field'] = '<p class="comment-form-comment"><label for="comment">'  . '</label><textarea id="comment" name="comment" cols="40" rows="8" aria-required="true"></textarea></p>';
    return $arg;
}

add_filter('comment_form_defaults', 'wpsites_modify_comment_form_text_area');
 ?>