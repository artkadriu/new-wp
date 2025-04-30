<?php

function dstheme_customizer( $wp_customize){
// 1 copyright section
$wp_customize->add_section(
    'sec_copyright',
    array(
        'title'-> 'Copyright Settings',
        'description' -> 'Copyright Settings'
    )
    );

    $wp_customize ->add_settings(
        'set_copyright',
        array(
            'type' => 'theme_add',
            'default' => 'Copyright X- All Rights Researved'
            'sanitize_callback' => 'sanitize_text_field'
        )
        );
        $wp_customize ->add_control(
            'set_copyright',
            array(
               'label' => 'Copyright Information',
               'description' => 'Please, type youre copyright information'
               'section' => 'sec_copyright',
               'type' => 'text'
            )
            );
    

}
add_action('customize_register','dstheme_customizer');