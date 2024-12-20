<?php

function customizer_top_header_settings($wp_customize) {
    // Add a section for the top header.
    $wp_customize->add_section('top_header_section', array(
        'title'       => __('Top Header', 'your-theme'),
        'description' => __('Settings for the top header.', 'your-theme'),
        'priority'    => 30,
    ));

    // Add setting and control for phone number.
    $wp_customize->add_setting('top_header_phone', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('top_header_phone', array(
        'label'   => __('Phone Number', 'your-theme'),
        'section' => 'top_header_section',
        'type'    => 'text',
    ));

    // Add setting and control for phone link.
    $wp_customize->add_setting('top_header_phone_link', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('top_header_phone_link', array(
        'label'   => __('Phone Link (tel:)', 'your-theme'),
        'section' => 'top_header_section',
        'type'    => 'text',
    ));

    // Add setting and control for email address.
    $wp_customize->add_setting('top_header_email', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('top_header_email', array(
        'label'   => __('Email Address', 'your-theme'),
        'section' => 'top_header_section',
        'type'    => 'text',
    ));

    // Add setting and control for email link.
    $wp_customize->add_setting('top_header_email_link', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('top_header_email_link', array(
        'label'   => __('Email Link (mailto:)', 'your-theme'),
        'section' => 'top_header_section',
        'type'    => 'text',
    ));
}
add_action('customize_register', 'customizer_top_header_settings');


