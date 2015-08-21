<?php
/**
 * GENERAL ARRAY OPTIONS
 */

$general = array(

	'general'  => array(

		array(
			'title' => __( 'General Options', 'ywbt' ),
			'type' => 'title',
			'desc' => '',
			'id' => 'yith-wcfbt-general-options'
		),

		array(
			'id'        => 'yith-wfbt-form-title',
			'name'      => __( 'Box title', 'ywbt' ),
			'desc'      => __( 'Title shown on "Frequently Bought Together" box.', 'ywbt' ),
			'type'      => 'text',
			'default'   => __( 'Frequently Bought Together', 'ywbt' )
		),

		array(
			'id'        => 'yith-wfbt-total-label',
			'name'      => __( 'Total label', 'ywbt' ),
			'desc'      => __( 'This is the label shown for total price label.', 'ywbt' ),
			'type'      => 'text',
			'default'   => __( 'Price for all', 'ywbt' )
		),

		array(
			'id'        => 'yith-wfbt-button-label',
			'name'      => __( 'Button label', 'ywbt' ),
			'desc'      => __( 'This is the label shown for "Add to cart" button.', 'ywbt' ),
			'type'      => 'text',
			'default'   => __( 'Add all to Cart', 'ywbt' )
		),

		array(
			'id'        => 'yith-wfbt-button-color',
			'name'      => __( 'Button Color', 'ywbt' ),
			'desc'      => __( 'Select button background color', 'ywbt' ),
			'type'      => 'color',
			'default'   => '#222222'
		),

		array(
			'id'        => 'yith-wfbt-button-color-hover',
			'name'      => __( 'Button Hover Color', 'ywbt' ),
			'desc'      => __( 'Select button background hover color', 'ywbt' ),
			'type'      => 'color',
			'default'   => '#777777'
		),

		array(
			'id'        => 'yith-wfbt-button-text-color',
			'name'      => __( 'Button Text Color', 'ywbt' ),
			'desc'      => __( 'Select button text color', 'ywbt' ),
			'type'      => 'color',
			'default'   => '#ffffff'
		),

		array(
			'id'        => 'yith-wfbt-button-text-color-hover',
			'name'      => __( 'Button Text Hover Color', 'ywbt' ),
			'desc'      => __( 'Select button text hover color', 'ywbt' ),
			'type'      => 'color',
			'default'   => '#ffffff'
		),

		array(
			'type'      => 'sectionend',
			'id'        => 'yith-wcfbt-general-options'
		)
	)
);

return apply_filters( 'yith_wcfbt_panel_general_options', $general );