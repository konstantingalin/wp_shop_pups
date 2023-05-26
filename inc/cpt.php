<?php 

add_action( 'init', 'pups_slider' );

function pups_slider() {
	register_post_type( 'slider', array(
		'labels'       => array(
			'name'          => __( 'Слайдер', 'pups' ),
			'singular_name' => __( 'Слайдер', 'pups' ),
			'add_new'       => __( 'Добавить новый слайд', 'pups' ),
			'add_new_item'  => __( 'Добавить новый слайд', 'pups' ),
			'edit_item'     => __( 'Редактировать', 'pups' ),
			'new_item'      => __( 'Новый слайд', 'pups' ),
			'view_item'     => __( 'Просмотр', 'pups' ),
			'menu_name'     => __( 'Слайдер', 'pups' ),
			'all_items'     => __( 'Все слайды', 'pups' ),
		),
		'public'       => true,
		'supports'     => array( 'title', 'editor', 'thumbnail', 'excerpt',),
		'menu_icon'    => 'dashicons-format-gallery',
		'show_in_rest' => true,
	) );
}

add_action( 'init', 'pups_advantage' );

function pups_advantage() {
	register_post_type( 'advantage', array(
		'labels'       => array(
			'name'          => __( 'Преимущества', 'pups' ),
			'singular_name' => __( 'advantage', 'pups' ),
			'add_new'       => __( 'Добавить новое преимущество', 'pups' ),
			'add_new_item'  => __( 'Добавить преимущество', 'pups' ),
			'edit_item'     => __( 'Редактировать', 'pups' ),
			'new_item'      => __( 'Добавить преимущество', 'pups' ),
			'view_item'     => __( 'Просмотр', 'pups' ),
			'menu_name'     => __( 'Преимущества', 'pups' ),
			'all_items'     => __( 'Все преимущества', 'pups' ),
		),
		'public'       => true,
		'supports'     => array( 'title', 'editor', 'thumbnail', 'excerpt',),
		'menu_icon'    => 'dashicons-format-gallery',
		'show_in_rest' => true,
	) );
}


add_action( 'init', 'pups_banner' );

function pups_banner() {
	register_post_type( 'banner', array(
		'labels'       => array(
			'name'          => __( 'Банер', 'pups' ),
			'singular_name' => __( 'Баннер', 'pups' ),
			'add_new'       => __( 'Добавить новый баннер', 'pups' ),
			'add_new_item'  => __( 'Добавить баннер', 'pups' ),
			'edit_item'     => __( 'Редактировать', 'pups' ),
			'new_item'      => __( 'Добавить баннер', 'pups' ),
			'view_item'     => __( 'Просмотр', 'pups' ),
			'menu_name'     => __( 'Баннеры', 'pups' ),
			'all_items'     => __( 'Все баннеры', 'pups' ),
		),
		'public'       => true,
		'supports'     => array( 'title', 'editor', 'thumbnail', 'excerpt',),
		'menu_icon'    => 'dashicons-format-gallery',
		'show_in_rest' => true,
	) );
}