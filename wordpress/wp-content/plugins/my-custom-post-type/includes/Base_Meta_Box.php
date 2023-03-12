<?php

namespace My_Custom_Post_Type\Includes;

abstract class Base_Meta_Box
{

    protected $post_type;

    protected $meta_box_id;

    protected $meta_box_title;

    protected $nonce_name;

    protected $nonce_action;

    public function __construct($post_type, $meta_box_id, $meta_box_title)
    {
        $this->post_type = $post_type;
        $this->meta_box_id = $meta_box_id;
        $this->meta_box_title = $meta_box_title;
        $this->nonce_name = "{$this->meta_box_id}_nonce";
        $this->nonce_action = "{$this->meta_box_id}_action";
    }

    abstract public function render($post);

    abstract public function save($post_id, $post);
}
