<?php

namespace DomenART\Theme\Services;

use DomenART\Theme\Service;
use DomenART\Theme\Service_Container;

/**
 * Class Post
 *
 * @package DomenART\Theme
 */
class Post implements Service
{

    /**
     * @param Service_Container $container
     */
    public function register(Service_Container $container): void
    {
    }

    /**
     * @param Service_Container $container
     */
    public function boot(Service_Container $container): void
    {
      \add_action('save_post', [$this, 'on_change_post']);
      \add_action('edit_post', [$this, 'on_change_post']);
    }

    public function on_change_post($post_id) {
      $sticky = \get_option('sticky_posts');
      $is_sticky = in_array($post_id, $sticky);
      if (!\update_post_meta($post_id, 'is_sticky', $is_sticky)) {
        \add_post_meta($post_id, 'is_sticky', $is_sticky, true);
      }
    }

    /**
     * @return string
     */
    public function get_service_name(): string
    {
        return 'post';
    }

}
