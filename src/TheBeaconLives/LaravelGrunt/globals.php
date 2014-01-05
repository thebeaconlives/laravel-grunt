<?php

if ( ! function_exists('grunt_stylesheet'))
{
    /**
     * Generates the necessary HTML for a
     * stylesheet link. Path should be relative
     * to the css_path config option for Grunt.
     *
     * @param  string $target
     * @return string
     */
    function grunt_stylesheet($target = null)
    {
        $publicDirName = basename(public_path());

        // Use default list or target list if specified
        if (is_null($target))
        {
            if (App::environment('local'))
            {
                $files = Config::get('laravel-grunt::css_files');
            }
            else
            {
                $files = [ Config::get('laravel-grunt::css_target_file') ];
            }
        }
        else
        {
            $targets = Config::get('laravel-grunt::targets');

            if (!array_key_exists($target, $targets))
            {
                return '';
            }

            $files = $targets[$target];
        }

        $path = Config::get('laravel-grunt::publish_path') . "/" . Config::get('laravel-grunt::css_subfolder');
        $path = str_replace($publicDirName, '', $path);

        // Build output
        $output = '';
        foreach ($files as $file)
        {
            $output .=  "<link rel='stylesheet' href='{$path}/{$file}'>\n";
        }

        return $output;
    }
}

if ( ! function_exists('grunt_script'))
{
    /**
     * Generates the necessary HTML for a
     * script link. Path should be relative
     * to the js_path config option for Grunt.
     *
     * @param  string $target
     * @return string
     */
    function grunt_script($target = null)
    {
        $publicDirName = basename(public_path());
        // Use default list or target list if specified
        if (is_null($target))
        {
            if (App::environment('local'))
            {
                $files = Config::get('laravel-grunt::js_files');
            }
            else
            {
                $files = [ Config::get('laravel-grunt::js_target_file') ];
            }
        }
        else
        {
            $targets = Config::get('laravel-grunt::targets');

            if (!array_key_exists($target, $targets))
            {
                return '';
            }

            $files = $targets[$target];
        }

        $path = Config::get('laravel-grunt::publish_path') . "/" . Config::get('laravel-grunt::javascript_subfolder');
        $path = str_replace($publicDirName, '', $path);

        // Build output
        $output = '';
        foreach ($files as $file)
        {
            $output .=  "<script src='{$path}/{$file}'></script>\n";
        }

        return $output;
    }
}