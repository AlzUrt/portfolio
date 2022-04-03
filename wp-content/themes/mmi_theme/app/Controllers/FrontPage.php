<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    public function projets(){
        $args = array(
            'numberposts' => -1,
            'post_type' => 'projets',
            'order' => 'ASC',
        );
        return get_posts($args);
    }
}
