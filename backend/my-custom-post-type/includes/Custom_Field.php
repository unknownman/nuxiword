<?php

namespace My_Custom_Post_Type\Includes;

class Custom_Field
{

    private $id;

    private $label;

    private $type;

    private $meta_key;

    public function __construct($id, $label, $type, $meta_key)
    {
        $this->id = $id;
        $this->label = $label;
        $this->type = $type;
        $this->meta_key = $meta_key;
    }

    public function render($post_id, $value)
    {
?>
        <label for="<?php echo esc_attr($this->id); ?>"><?php echo esc_html($this->label); ?></label>
        <?php switch ($this->type) {
            case 'text':
        ?>
                <input type="text" name="<?php echo esc_attr($this->meta_key); ?>" id="<?php echo esc_attr($this->id); ?>" value="<?php echo esc_attr($value); ?>">
            <?php
                break;
            case 'textarea':
            ?>
                <textarea name="<?php echo esc_attr($this->meta_key); ?>" id="<?php echo esc_attr($this->id); ?>"><?php echo esc_html($value); ?></textarea>
            <?php
                break;
            case 'checkbox':
            ?>
                <input type="checkbox" name="<?php echo esc_attr($this->meta_key); ?>" id="<?php echo esc_attr($this->id); ?>" value="1" <?php checked($value); ?>>
        <?php
                break;
        } ?>
<?php
    }

    public function sanitize($value)
    {
        switch ($this->type) {
            case 'text':
            case 'textarea':
                return sanitize_text_field($value);
            case 'checkbox':
                return (int) $value;
        }
        return $value;
    }
}
