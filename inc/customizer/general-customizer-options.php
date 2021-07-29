<?php
function peef_general_customize_register($wp_customize)
{
    $wp_customize->add_panel('general_panel', array(
        'title' => __('Peef General Page Options', 'peef'),
        'priority' => 30,
        'capability' => 'edit_theme_options',
        'description' => __('Content, photos and social links for the whole site', 'peef')
    ));
    
    /**
     * Start: Home Intro Section Options
     */
    $wp_customize->add_section('peef_home_section', array(
        'title' => __('Home Intro Section Options', 'peef'),
        'priority' => 30,
        'panel' => 'general_panel',
        'description' => __('Banner image, description, link and more', 'peef')
    ));

    $wp_customize->add_setting('home_section_title',
        array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
        )
    );

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'home_section_title_control',
        array(
            'label' => __('Title', 'peef'),
            'settings' => 'home_section_title',
            'priority' => 10,
            'section' => 'peef_home_section',
        )
    ));

    $wp_customize->add_setting('home_section_description',
        array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
        )
    );

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'home_section_description_control',
        array(
            'label' => __('Description', 'peef'),
            'settings' => 'home_section_description',
            'priority' => 10,
            'section' => 'peef_home_section',
        )
    ));

    $wp_customize->add_setting('home_bg',
        array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
        )
    );

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'home_bg_control',
        array(
            'label' => __('Background Image', 'peef'),
            'settings' => 'home_bg',
            'priority' => 10,
            'section' => 'peef_home_section',
        )
    ));

    $wp_customize->add_setting('home_section_cta_label',
        array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
        )
    );

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'home_section_cta_label_control',
        array(
            'label' => __('CTA Button Label', 'peef'),
            'settings' => 'home_section_cta_label',
            'priority' => 10,
            'section' => 'peef_home_section',
        )
    ));

    $wp_customize->add_setting('home_section_cta_link',
        array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
        )
    );

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'home_section_cta_link_control',
        array(
            'label' => __('CTA Button Link', 'peef'),
            'settings' => 'home_section_cta_link',
            'priority' => 10,
            'section' => 'peef_home_section',
        )
    ));

    /**
     * #End: Home Intro Section Options
     */

    /**
     * Start: Social Options
     */
    $wp_customize->add_section('peef_social_section', array(
        'title' => __('Social Options', 'peef'),
        'priority' => 30,
        'panel' => 'general_panel',
        'description' => __('Social Media Links', 'peef')
    ));

    $wp_customize->add_setting('peef_facebook',
        array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
        )
    );

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'peef_facebook_control',
        array(
            'label' => __('Facebook', 'peef'),
            'settings' => 'peef_facebook',
            'priority' => 10,
            'section' => 'peef_social_section',
            'type' => 'textarea',
        )
    ));

    $wp_customize->add_setting('peef_twitter',
        array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
        )
    );

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'peef_twitter_control',
        array(
            'label' => __('Twitter', 'peef'),
            'settings' => 'peef_twitter',
            'priority' => 10,
            'section' => 'peef_social_section',
            'type' => 'textarea',
        )
    ));

    $wp_customize->add_setting('peef_linkedin',
        array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
        )
    );

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'peef_linkedin_control',
        array(
            'label' => __('Linkedin', 'peef'),
            'settings' => 'peef_linkedin',
            'priority' => 10,
            'section' => 'peef_social_section',
            'type' => 'textarea',
        )
    ));

    $wp_customize->add_setting('peef_instagram',
        array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
        )
    );

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'peef_instagram_control',
        array(
            'label' => __('Instagram', 'peef'),
            'settings' => 'peef_instagram',
            'priority' => 10,
            'section' => 'peef_social_section',
            'type' => 'textarea',
        )
    ));

    $wp_customize->add_setting('peef_youtube',
        array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
        )
    );

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'peef_youtube_control',
        array(
            'label' => __('Youtube', 'peef'),
            'settings' => 'peef_youtube',
            'priority' => 10,
            'section' => 'peef_social_section',
            'type' => 'textarea',
        )
    ));

    /**
     * #End: Social Options
     */

    /**
     * Start: Contact Options
     */
    $wp_customize->add_section('peef_contact_section', array(
        'title' => __('Contact Options', 'peef'),
        'priority' => 30,
        'panel' => 'general_panel',
        'description' => __('Contact addresses, phone numbers, emails, and more contact options for the whole site', 'peef')
    ));

    $wp_customize->add_setting('peef_phone',
        array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
        )
    );

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'peef_phone_control',
        array(
            'label' => __('Phone', 'peef'),
            'settings' => 'peef_phone',
            'priority' => 10,
            'section' => 'peef_contact_section',
            'type' => 'textarea',
        )
    ));

    $wp_customize->add_setting('peef_email',
        array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
        )
    );

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'peef_email_control',
        array(
            'label' => __('Email', 'peef'),
            'settings' => 'peef_email',
            'priority' => 10,
            'section' => 'peef_contact_section',
            'type' => 'textarea',
        )
    ));

    /**
     * #End: Contact Options
     */
}
add_action('customize_register', 'peef_general_customize_register');

