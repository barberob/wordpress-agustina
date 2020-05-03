<?php


namespace App\Controllers;


use Sober\Controller\Controller;

class SingleProject extends Controller
{
    protected $acf = true;

    public function projectTechnologies() {
        $technologies = get_field('technologies');
        $formated = explode(";",$technologies);

        return $formated;
    }

    public function thumbnail() {
        return get_the_post_thumbnail_url();
    }

    public function splitTitle() {
        $title = get_the_title();

        $split = str_split($title);

        return $split;
    }




    public function nextPost() {

        $post = get_adjacent_post('','',false);

        if (empty($post)) {
            return null;
        } else {
            $title = $post->post_title;
            $link = get_permalink($post);
            $post_infos = [
                'title' => $title,
                'link'  => $link
            ];
            return $post_infos;
        }
    }
    public function previousPost() {

        $post = get_adjacent_post('','',true);

        if (empty($post)) {
            return null;
        } else {
            $title = $post->post_title;
            $link = get_permalink($post);
            $post_infos = [
                'title' => $title,
                'link'  => $link
            ];
            return $post_infos;
        }
    }
}
