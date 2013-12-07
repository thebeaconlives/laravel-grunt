<?php

if ( ! function_exists('grunt_stylesheet'))
{
    /**
     * Generates the necessary HTML for a
     * stylesheet link. Path should be relative
     * to the css_path config option for Grunt.
     *
     * @param  string $path
     * @return string
     */
    function grunt_stylesheet($path = null)
    {
        $publicDirName = basename(public_path());

        if (is_null($path))
        {
            $path = \Config::get('laravel-grunt::css_target_file');
        }

        $path = \Config::get('laravel-grunt::publish_path') . "/" . \Config::get('laravel-grunt::css_subfolder') . "/$path";
        $path = str_replace($publicDirName, '', $path);

        return "<link rel='stylesheet' href='{$path}'>";
    }
}

if ( ! function_exists('grunt_script'))
{
    /**
     * Generates the necessary HTML for a
     * script link. Path should be relative
     * to the js_path config option for Grunt.
     *
     * @param  string $path
     * @return string
     */
    function grunt_script($path = null)
    {
        $publicDirName = basename(public_path());

        if (is_null($path))
        {
            $path = \Config::get('laravel-grunt::js_target_file');;
        }
        
        $path = \Config::get('laravel-grunt::js_path') . "/" . \Config::get('laravel-grunt::javascript_subfolder') . "/$path";
        $path = str_replace($publicDirName, '', $path);

        return "<script src='$path'></script>";
    }
}