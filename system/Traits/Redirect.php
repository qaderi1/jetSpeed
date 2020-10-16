<?php

namespace System\Traits;

/**
 * Redirect Trait
 */
trait Redirect
{


    protected function redirect($url)
    {

        $protocol = strpos($_SERVER['SERVER_PROTOCOL'], 'https') === true ? 'https:/' : 'http://';

        header("Location: " . $protocol . $_SERVER['HTTP_hOST'] . "/jetSpeed/" . $url);
    }

    protected function back()
    {
        $http_referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : null;

        if ($http_referer != null) {
            header("Location: " . $_SERVER['HTTP_REFERER']);
        } else {
            echo 'refere not found';
        }
    }
}