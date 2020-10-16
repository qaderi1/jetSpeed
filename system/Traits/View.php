<?php

namespace System\Traits;

/**
 * 
 */
trait View
{

    protected function view($view, $vars = null)
    {

        $view = str_replace('.', '/', $view);

        extract($vars);

        $path = realpath(dirname(__FILE__) . "../../application/view/" . $view . ".php");

        if (file_exists($path)) {
            return require_once($path);
        } else {
            echo "this view [" . $view . "]  not find";
        }
    }
}