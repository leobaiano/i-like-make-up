<?php
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_tem-modalidade',
		'title' => 'Tem Modalidade?',
		'fields' => array (
			array (
				'key' => 'field_5a2eeb67395c7',
				'label' => 'Tem Modalidade',
				'name' => 'tem_modalidade',
				'type' => 'checkbox',
				'choices' => array (
					'sim' => 'sim',
				),
				'default_value' => '',
				'layout' => 'vertical',
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
		),
		'options' => array (
			'position' => 'side',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
