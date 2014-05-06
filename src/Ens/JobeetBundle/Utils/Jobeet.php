<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 4/30/14
 * Time: 12:25 PM
 */

namespace Ens\JobeetBundle\Utils;


class Jobeet
{
    static public function slugify($text) {
        $text = preg_replace('/\W+/', '-', $text);

        $text = strtolower(trim($text, '-'));

        return $text;
    }
} 