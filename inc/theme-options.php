<?php 


function fusion_theme_shortcode(){

	vc_map(array(

	'name'				=>	__('Frist Sect','fusion'),
	'description'		=>	'This is a First Sector',
	'base'				=>	'section_1',
	'icon'				=>	'fa fa-home',
	'category'			=>	'fusion',
	'params'			=>	array(


		array(

			'param_name'	=>	'fusion_title',
			'type'			=>	'textfield',
			'heading'		=>	'section One title',
			'value'			=>	'click here',
		),

		array(

			'param_name'	=>	'fusion_title_2',
			'type'			=>	'textarea',
			'heading'		=>	'section two title',
			'value'			=>	'click me',
		),




	),



));




	vc_map(array(

	'name'				=>	__('Second Sect','fusion'),
	'description'		=>	'This is a Second Sector',
	'base'				=>	'section_2',
	'icon'				=>	'fa fa-home',
	'category'			=>	'fusion',
	'params'			=>	array(


					array(

				'param_name'	=>	'fusion_title_3',
				'type'			=>	'textfield',
				'heading'		=>	'section three title',
				'value'			=>	'click me',
			),


					array(

				'param_name'	=>	'fusion_title_4',
				'type'			=>	'textarea',
				'heading'		=>	'section four title',
				'value'			=>	'click me',
			),









	),



));



 }

add_action('vc_before_init','fusion_theme_shortcode');
