<?php

namespace My_Custom_Post_Type;

class Meta_Box_Advanced extends Base_Meta_Box
{

    use Trait_Ajax;

    protected static $instance;

    private $custom_fields = array(
        array(
            'id' => 'custom_field_advanced',
            'label' => 'Advanced Custom Field',
            'type' => 'textarea'
        )
    );

    private function __construct()
    {
        parent::__construct(
            'my_custom_post_type_advanced',
            'Advanced Meta Box',
            'my_custom_post_type',
            'advanced'
        );

        $this->add_custom_fields($this->custom_fields);

        add_action('wp_ajax_load_custom_field_advanced', array($this, 'load_custom_field_advanced'));
    }

    public static function get_instance()
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function load_custom_field_advanced()
    {
        $post_id = $_POST['post_id'];
        $value = get_post_meta($post_id, $this->custom_fields[0]['id'], true);
        echo $value;
        wp_die();
    }
}
