<?php
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_banner-curso',
		'title' => 'Banner Curso',
		'fields' => array (
			array (
				'key' => 'field_5a4e5717d62ae',
				'label' => 'Banner do curso',
				'name' => 'banner_do_curso',
				'type' => 'image',
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'cursos-presenciais',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'cursos-online',
					'order_no' => 0,
					'group_no' => 1,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
