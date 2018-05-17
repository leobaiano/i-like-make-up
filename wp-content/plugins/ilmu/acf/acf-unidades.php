<?php
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_dados-da-unidade',
		'title' => 'Dados da unidade',
		'fields' => array (
			array (
				'key' => 'field_5a3c1d7803c31',
				'label' => 'Endereço',
				'name' => 'unidade_endereco',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a3c1d8f03c32',
				'label' => 'Telefone',
				'name' => 'unidade_telefone',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a3c1da103c33',
				'label' => 'E-mail',
				'name' => 'unidade_email',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a3c1dad03c34',
				'label' => 'Link para o mapa',
				'name' => 'unidade_mapa',
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
					'value' => 'unidades',
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
