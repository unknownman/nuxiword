<?php

/**
 * Template for the simple metabox content.
 */

// Get the post meta data
$custom_meta = get_post_meta($post->ID, 'custom_meta', true);

// Output the simple custom field input
?>
<p>
	<label for="simple-custom-field">Simple Custom Field:</label>
	<input type="text" name="custom_meta[simple_custom_field]" id="simple-custom-field" value="<?php echo esc_attr($custom_meta['simple_custom_field'] ?? ''); ?>">
</p>

<?php

// Include the nonce field for security
wp_nonce_field('custom_meta_nonce', 'custom_meta_nonce');
