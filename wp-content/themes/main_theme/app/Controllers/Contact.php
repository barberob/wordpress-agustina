<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Contact extends Controller
{
    protected $acf = true;

    public function thumbnail() {
        return get_the_post_thumbnail_url();
    }
}
