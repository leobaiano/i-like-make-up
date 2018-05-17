<?php
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_detalhes-do-concurso',
		'title' => 'Detalhes do concurso',
		'fields' => array (
			array (
				'key' => 'field_5a0f22f7093d0',
				'label' => 'Salário inicial',
				'name' => 'salario_inicial',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a0f230d093d1',
				'label' => 'Escolaridade',
				'name' => 'escolaridade',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a0f2318093d2',
				'label' => 'Vagas',
				'name' => 'vagas',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a0f2327093d3',
				'label' => 'Cargo',
				'name' => 'cargo',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a0f2337093d4',
				'label' => 'Edital',
				'name' => 'edital',
				'type' => 'file',
				'save_format' => 'url',
				'library' => 'all',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'concursos',
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
	register_field_group(array (
		'id' => 'acf_informacoes-adicionais',
		'title' => 'Informações adicionais',
		'fields' => array (
			array (
				'key' => 'field_5a0f1db9b22b0',
				'label' => 'Descrição',
				'name' => 'descricao',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a0f1dccb22b1',
				'label' => 'Link',
				'name' => 'link',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'destaque',
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
	register_field_group(array (
		'id' => 'acf_informacoes-do-curso',
		'title' => 'Informações do curso',
		'fields' => array (
			array (
				'key' => 'field_5a0f1f8c5f1c4',
				'label' => 'Preço real',
				'name' => 'preco_real',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a0f1fa95f1c5',
				'label' => 'Preço promocional',
				'name' => 'curso_preco_promocional',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a0f226981588',
				'label' => 'URL do vídeo de apresentação',
				'name' => 'url_do_video_de_apresentacao',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a0f2206bdfb9',
				'label' => 'Link para o curso no eadBox',
				'name' => 'link_para_o_curso_no_eadbox',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a0f1ffc5f1c6',
				'label' => 'Sobre',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_5a0f20285f1c7',
				'label' => 'Sobre',
				'name' => 'curso_sobre',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_5a0f25b55e890',
				'label' => 'Pré-requisitos',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_5a0f20495f1c8',
				'label' => 'Pré-requisitos',
				'name' => 'curso_pre_requisitos',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_5a0f2601b01f9',
				'label' => 'Programa',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_5a0f20835f1c9',
				'label' => 'Programa',
				'name' => 'curso_programa',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_5a0f2610b01fa',
				'label' => 'Certificação',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_5a0f20945f1ca',
				'label' => 'Certificação',
				'name' => 'curso_certificacao',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_5a0f261fb01fb',
				'label' => 'Investimento',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_5a0f21e75f1cb',
				'label' => 'Investimento',
				'name' => 'curso_investimento',
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
