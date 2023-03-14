FROM wordpress:latest

# Install required packages
RUN apt-get update && \
    apt-get install -y unzip

# Enable REST API for custom post type
# RUN echo 'add_filter( "register_post_type_args", function( $args, $post_type ) { if ( "my_custom_post_type" === $post_type ) { $args["show_in_rest"] = true; $args["rest_base"] = "my_custom_post_type"; } return $args; }, 10, 2 );' >> /var/www/html/wp-content/themes/twentytwentyone/functions.php

# Install and activate cache plugin
# RUN curl -o /tmp/wp-super-cache.zip -SL http://downloads.wordpress.org/plugin/wp-super-cache.1.7.4.zip \
    # && unzip -q /tmp/wp-super-cache.zip -d /var/www/html/backend/wp-content/plugins \
    # && rm /tmp/wp-super-cache.zip \
    # && chown -R www-data:www-data /var/www/html/backend/wp-content/plugins 
# && echo 'define( "WPCACHEHOME", "/var/www/html/wordpress/wp-content/plugins/wp-super-cache/" );' >> /var/www/html/wordpress/wp-config-sample.php \
# && echo 'define( "WP_CACHE", true );' >> /var/www/html/wordpress/wp-config-sample.php

# Copy custom plugin files
COPY my-custom-post-type /var/www/html/backend/wp-content/plugins/my-custom-post-type

