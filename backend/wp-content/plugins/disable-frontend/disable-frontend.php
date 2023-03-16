<?php

/**
 * Plugin Name: Disable Frontend
 * Description: Disables front-end for wordpress .
 * Version: 1.0
 * Author: Ali Joder
 */

// Plugin code goes here


add_filter(
    "template_include",
    function ($template) {
        if (!is_admin()) {
            die();
        }
        return $template;
    },
    1
);

add_filter("register_post_type_args", function ($args, $post_type) {
    if ("my_custom_post_type" === $post_type) {
        $args["show_in_rest"] = true;
        $args["rest_base"] = "my_custom_post_type";
    }
    return $args;
}, 10, 2);

function ws_register_images_field()
{
    register_rest_field(
        'post',
        'images',
        array(
            'get_callback'    => 'ws_get_images_urls',
            'update_callback' => null,
            'schema'          => null,
        )
    );
}

add_action('rest_api_init', 'ws_register_images_field');

function ws_get_images_urls($object, $field_name, $request)
{
    $medium = wp_get_attachment_image_src(get_post_thumbnail_id($object->id), 'medium');
    $medium_url = $medium['0'];

    $large = wp_get_attachment_image_src(get_post_thumbnail_id($object->id), 'large');
    $large_url = $large['0'];

    return array(
        'medium' => $medium_url,
        'large'  => $large_url,
    );
}
