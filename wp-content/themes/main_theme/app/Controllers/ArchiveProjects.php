<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class ArchiveProjects extends Controller
{
     public function allPosts() {
         $args = array(
             'post_type' => 'project',
             'order'=>'ASC'
         );

         $posts = get_posts($args);
         $posts = array_map(function ($post) {
             return [

                 'title' => apply_filters('the_title', $post->post_title),
                 'thumbnail' => get_the_post_thumbnail_url($post->ID),
                 'link' => get_permalink($post->ID),
                 // ACF Fields
                 'technology' => get_field('technology', $post),
             ];
         }, $posts);


         return $posts;
     }
}
