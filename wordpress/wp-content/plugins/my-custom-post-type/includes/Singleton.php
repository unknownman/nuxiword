<?php

/**
 * Singleton trait for creating singleton classes.
 *
 * @link https://stackoverflow.com/a/20333294/1154321
 */

namespace My_Custom_Post_Type\Includes;

trait Singleton
{
    private static $instance;

    public static function get_instance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new static();
        }

        return self::$instance;
    }
}
