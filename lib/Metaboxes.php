<?php

class Metaboxes {

	public function __construct() {

		add_filter( 'cmb_meta_boxes', array( $this, 'metaboxes' ) );

	}

	public function metaboxes( array $metaboxes ) {

		$prefix = '_my_plugin_';

		$metaboxes[] = array(
			'id'         => 'test_metabox',
			'title'      => 'Test Metabox',
			'pages'      => array( 'page', ), // Post type
			'context'    => 'normal',
			'priority'   => 'high',
			'show_names' => true, // Show field names on the left
			'fields'     => array(
				array(
					'name' => 'Test Text',
					'desc' => 'field description (optional)',
					'id'   => $prefix . 'test_text',
					'type' => 'text',
				),
				array(
					'name' => 'Test Text Small',
					'desc' => 'field description (optional)',
					'id'   => $prefix . 'test_textsmall',
					'type' => 'text_small',
				),
			),
		);

		return $metaboxes;

	}

}