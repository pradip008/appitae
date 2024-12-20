<?php

function customizer_top_header_settings($wp_customize) {
    // Add a section for the top header.
    $wp_customize->add_section('top_header_section', array(
        'title'       => __('Top Header', 'your-theme'),
        'description' => __('Settings for the top header.', 'your-theme'),
        'priority'    => 30,
    ));

    // Phone Number.
    $wp_customize->add_setting('top_header_phone', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('top_header_phone', array(
        'label'   => __('Phone Number', 'your-theme'),
        'section' => 'top_header_section',
        'type'    => 'text',
    ));

    // Phone Link.
    $wp_customize->add_setting('top_header_phone_link', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('top_header_phone_link', array(
        'label'   => __('Phone Link (tel:)', 'your-theme'),
        'section' => 'top_header_section',
        'type'    => 'text',
    ));

    // Email Address.
    $wp_customize->add_setting('top_header_email', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('top_header_email', array(
        'label'   => __('Email Address', 'your-theme'),
        'section' => 'top_header_section',
        'type'    => 'text',
    ));

    // Email Link.
    $wp_customize->add_setting('top_header_email_link', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('top_header_email_link', array(
        'label'   => __('Email Link (mailto:)', 'your-theme'),
        'section' => 'top_header_section',
        'type'    => 'text',
    ));
    //Facebook Link
    $wp_customize->add_setting('top_header_facebook_link', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('top_header_facebook_link', array(
        'label'   => __('Facebook Link', 'your-theme'),
        'section' => 'top_header_section',
        'type'    => 'text',
    ));
    //Instagram Link
    $wp_customize->add_setting('top_header_instagram_link', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('top_header_instagram_link', array(
        'label'   => __('Instagram Link', 'your-theme'),
        'section' => 'top_header_section',
        'type'    => 'text',
    ));

    //Linkdin Link  
    $wp_customize->add_setting('top_header_linkedin_link', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('top_header_linkedin_link', array(
        'label'   => __('Linkedin Link', 'your-theme'),
        'section' => 'top_header_section',
        'type'    => 'text',
    ));

    //Twitter Link  
    $wp_customize->add_setting('top_header_twitter_link', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('top_header_twitter_link', array(
        'label'   => __('Twitter Link', 'your-theme'),
        'section' => 'top_header_section',
        'type'    => 'text',
    ));

     
     
     // Phone Number.
     $wp_customize->add_setting('top_header_button', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('top_header_button', array(
        'label'   => __('Button Name', 'your-theme'),
        'section' => 'top_header_section',
        'type'    => 'text',
    ));

    //Menu Call to Action Button Name
    $wp_customize->add_setting('menu_header_button_link', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
        
    ));
    $wp_customize->add_control('menu_header_button_link', array(
        'label'   => __('Menu Call To Button Link', 'your-theme'),
        'section' => 'top_header_section',
        'type'    => 'text',
    ));

}
add_action('customize_register', 'customizer_top_header_settings');


