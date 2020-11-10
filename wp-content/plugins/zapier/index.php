<?php
/**
 * Plugin Name: Название плагина
 * Description: Описание плагина желательно не очень длинное
 * Plugin URI:  Ссылка на инфо о плагине
 * Author URI:  Ссылка на автора
 * Author:      Имя автора
 * Version:     1.0
 *
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 *
 */


use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'init', 'zapier' );
function zapier(){
	register_post_type( 'zapier', [
		'label'  => null,
		'labels' => [
			'name'               => 'Zapier post', // основное название для типа записи
			'singular_name'      => 'zapier post1', // название для одной записи этого типа
			'add_new'            => 'Добавить zapier post', // для добавления новой записи
			'add_new_item'       => 'Добавление zapier post', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование zapier post', // для редактирования типа записи
			'new_item'           => 'Новое zapier post', // текст новой записи
			'view_item'          => 'Смотреть zapier post', // для просмотра записи этого типа.
			'search_items'       => 'Искать zapier post', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Zapier post', // название меню
		],
		'description'         => '',
		'public'              => true,
		// 'publicly_queryable'  => null, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'        => null, // показывать ли в меню адмнки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => null,
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );
}

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options_second' );
function crb_attach_theme_options_second() {
Container::make( 'post_meta', 'Custom Data' )
    ->where( 'post_type', '=', 'zapier' )
    ->add_fields( array(
        Field::make( 'complex', 'crb_slider', __( 'Zapier' ) )
    ->add_fields( array(
        Field::make( 'text', 'title', __( 'Zapier Title' ) ),
        Field::make( 'image', 'photo', __( 'Zapier Photo' ) ),
    ) )
    ));
}



    add_action( 'after_setup_theme', 'crb_load_second' );
        function crb_load_second() {
    require_once( 'vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}