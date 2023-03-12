<?php

/**
 * Template for the advanced metabox content.
 */

// Get the post meta data
$custom_meta = get_post_meta($post->ID, 'custom_meta', true);

// Output the advanced custom field input
?>
<p>
	<label for="advanced-custom-field">Advanced Custom Field:</label>
	<input type="text" name="custom_meta[advanced_custom_field]" id="advanced-custom-field" value="<?php echo esc_attr($custom_meta['advanced_custom_field'] ?? ''); ?>">
</p>

<?php

// Include the nonce field for security
wp_nonce_field('custom_meta_nonce', 'custom_meta_nonce');
