<?php

namespace My_Custom_Post_Type\Includes;

class Custom_Post_Type
{

    private $post_type;

    private $args;

    public function __construct($post_type, $args = array())
    {
        $this->post_type = $post_type;
        $this->args = $args;
    }

    public function register()
    {
        $args = array_merge(array(
            'public' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        ), $this->args);
        register_post_type($this->post_type, $args);
    }
}
