<?php
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_imagens-do-site',
		'title' => 'Imagens do site',
		'fields' => array (
			array (
				'key' => 'field_5a4e309663fc3',
				'label' => 'HOME - Imagem do curso presencial',
				'name' => 'home_imagem_do_curso_presencial',
				'type' => 'image',
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_5a4e30eb63fc4',
				'label' => 'Banner cursos presenciais',
				'name' => 'banner_cursos_presenciais',
				'type' => 'image',
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_5a4e315163fc5',
				'label' => 'Banner cursos online',
				'name' => 'banner_cursos_online',
				'type' => 'image',
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_5a4feff2e5ad6',
				'label' => 'Marca',
				'name' => 'marca',
				'type' => 'image',
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_5a4ff01ee5ad7',
				'label' => 'Rodapé Presencial',
				'name' => 'rodape_presencial',
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
					'value' => 'gerenciarimagens',
					'order_no' => 0,
					'group_no' => 0,
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
