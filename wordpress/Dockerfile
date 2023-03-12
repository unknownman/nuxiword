# Use official WordPress image as base
FROM wordpress:latest

# Set environment variables
ENV WORDPRESS_CACHE_PLUGIN=${WORDPRESS_CACHE_PLUGIN}

# Disable WordPress front-end
RUN echo "add_filter('pre_option_blog_public', '__return_zero');" >> /usr/src/wordpress/wp-content/themes/twentytwenty/functions.php

# Enable REST API for custom post types
RUN echo "add_filter('register_post_type_args', function(\$args, \$post_type) { if ('my_custom_post_type' === \$post_type) { \$args['show_in_rest'] = true; } return \$args; }, 10, 2);" >> /usr/src/wordpress/wp-content/themes/twentytwenty/functions.php

# Install and activate cache plugin for REST API
RUN curl -o /tmp/${WORDPRESS_CACHE_PLUGIN}.zip -SL https://downloads.wordpress.org/plugin/${WORDPRESS_CACHE_PLUGIN}.latest-stable.zip \
    && unzip -q /tmp/${WORDPRESS_CACHE_PLUGIN}.zip -d /usr/src/wordpress/wp-content/plugins/ \
    && rm /tmp/${WORDPRESS_CACHE_PLUGIN}.zip \
    && chown -R www-data:www-data /usr/src/wordpress/wp-content/plugins/${WORDPRESS_CACHE_PLUGIN} \
    && chmod -R 755 /usr/src/wordpress/wp-content/plugins/${WORDPRESS_CACHE_PLUGIN} \
    && wp plugin activate ${WORDPRESS_CACHE_PLUGIN}

# Install and configure custom plugin boilerplate for new custom post type
RUN composer create-project --no-interaction johnpbloch/wordpress-core \
    /usr/src/wordpress/wp-content/plugins/my_custom_post_type \
    && cd /usr/src/wordpress/wp-content/plugins/my_custom_post_type \
    && composer require wpackagist-plugin/acf \
    && composer require wpackagist-plugin/acf-to-rest-api \
    && sed -i 's/Plugin Name: My Plugin/Plugin Name: My Custom Post Type/g' my-plugin.php \
    && sed -i 's/Description: My custom plugin/Description: My custom post type plugin/g' my-plugin.php \
    && sed -i '/Plugin Name:/a namespace My_Custom_Post_Type;' my-plugin.php \
    && sed -i 's/My Plugin/My Custom Post Type/g' src/Post_Type/My_Post_Type.php \
    && sed -i 's/My_Plugin/My_Custom_Post_Type/g' src/Post_Type/My_Post_Type.php \
    && sed -i 's/my-plugin/my-custom-post-type/g' composer.json \
    && wp plugin activate my_custom_post_type

# Configure custom plugin to use singleton pattern with a trait and a nice design pattern
COPY my-plugin.php /usr/src/wordpress/wp-content/plugins/my_custom_post_type/my-plugin.php
COPY Singleton.php /usr/src/wordpress/wp-content/plugins/my_custom_post_type/src/Design_Patterns/Singleton.php
COPY Singleton_Trait.php /usr/src/wordpress/wp-content/plugins/my_custom_post_type/src/Design_Patterns/Singleton_Trait.php

# Add metabox with AJAX features and simple metabox with start and end date
COPY metabox.php /usr/src/wordpress/wp-content/plugins/my_custom_post_type/src/Metaboxes/metabox.php
COPY date-range.php /usr/src/wordpress/wp-content/plugins/my_custom_post_type/src/Metaboxes/date-range.php

# Add two custom complex fields
COPY field-one.php /usr/src/wordpress/wp-content/plugins/my_custom_post_type/src/Fields/field-one.php
COPY field-two.php /usr/src/wordpress/wp-content/plugins/my_custom_post_type/src/Fields/field-two.php

# Set ownership and permissions
