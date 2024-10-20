<?php


if (!function_exists("global_helper_test")) {
    function global_helper_test()
    {
        echo "I am a helper";
    }
}

if (!function_exists("base_path")) {

    /**
     * Root folder of the project
     * @param string $path
     * @return string
     */
    function base_path(string $path): string
    {
        return __DIR__ . '/../../' . $path;
    }
}

if(!function_exists('public_path')){
    /**
     * Public folder
     * @param string $path
     * @return string
     */
    function public_path(string $path): string
    {
        return __DIR__.'/../../public/'.$path;
    }
}

if(!function_exists('uri')){
    /**
     * Get request URI of current path
     * @return string
     */
    function uri(): string
    {
        return $_SERVER['REQUEST_URI'];
    }
}