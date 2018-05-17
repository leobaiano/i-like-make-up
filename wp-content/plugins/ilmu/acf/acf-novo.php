<?php
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_imagens-curso-destaque',
		'title' => 'Imagens Curso Destaque',
		'fields' => array (
			array (
				'key' => 'field_5a2ad9e04f59b',
				'label' => 'Imagem do Curso de Destaque',
				'name' => 'imagem_do_curso_de_destaque',
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
	register_field_group(array (
		'id' => 'acf_modalidade',
		'title' => 'Modalidade',
		'fields' => array (
			array (
				'key' => 'field_5a2ad8e5c99de',
				'label' => 'Extensivo',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_5a2ad8fdc99df',
				'label' => 'Extensivo',
				'name' => 'extensivo',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_5a2ad90ec99e0',
				'label' => 'Semi-extensivo',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_5a2ad923c99e1',
				'label' => 'Semi-extensivo',
				'name' => 'semi-extensivo',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_5a2ad938c99e2',
				'label' => 'Intensivo',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_5a2ad946c99e3',
				'label' => 'Intensivo',
				'name' => 'intensivo',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
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
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
