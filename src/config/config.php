<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Assets Folder Base Path
	|--------------------------------------------------------------------------
	|
	| This is where you can specify a custom path to your assets
	| directory. We've set a sensible default, but feel free to update it.
	|
	*/
	'assets_path' => 'assets',

	/*
	|--------------------------------------------------------------------------
	| Published Assets Folder Path
	|--------------------------------------------------------------------------
	|
	| This is where you can specify a custom path to your completed compiled,
	| minified and linted assets to be published to directory. We've set a 
	| sensible default, but feel free to update it.
	|
	*/
	'publish_path' => 'public/assets',

	/*
	| Name of subfolders within the assets folder
	*/
	'css_subfolder' => 'css',
	'javascript_subfolder' => 'js',
	'image_folder' => 'img',

	/*
	|--------------------------------------------------------------------------
	| The CSS Path
	|--------------------------------------------------------------------------
	|
	| This is where you can specify a custom path to your CSS
	| directory. We've set a sensible default, but feel free to update it.
	|
	*/
	'css_path' => 'assets/css',

	/*
	|--------------------------------------------------------------------------
	| The CSS File Order
	|--------------------------------------------------------------------------
	|
	| This is where you can specify a custom order in which
	| CSS files will be concatenated, compiled and minified.
	| We've set a sensible default, but feel free to update it.
	| 
	| If you are compiling LESS or SASS files, add the compiled names
	| to this array.
	|
	*/
	'css_files' => array(
		'style_one.css',
		'style_two.css'
	),

	'css_target_file' => 'styles.min.css',

	/*
	|--------------------------------------------------------------------------
	| The JavaScript Path
	|--------------------------------------------------------------------------
	|
	| This is where you can specify a custom path to your JavaScript
	| directory. We've set a sensible default, but feel free to update it.
	|
	*/
	'js_path' => 'assets/js',

	/*
	|--------------------------------------------------------------------------
	| The JavaScript File Order
	|--------------------------------------------------------------------------
	|
	| This is where you can specify a custom order in which
	| JavaScript files will be concatenated, compiled and minified.
	| We've set a sensible default, but feel free to update it.
	|
	*/
	'js_files' => array(
		'script_one.js',
		'script_two.js'
	),

	'js_target_file' => 'scripts.min.js',

	/*
	|--------------------------------------------------------------------------
	| Targets
	|--------------------------------------------------------------------------
	|
	| Here you can define groups of assets to include with the global functions
	| It is recommended to override these values per environment. The below is
	| just an example.
	|
	| e.g. grunt_stylesheet('header-css');
	| 	outputs
	| <link rel="stylesheet" href="assets/css/header1.css" />
	| <link rel="stylesheet" href="assets/css/header2.css" />
	|
	*/
	'targets' => array(
		'header-css' => array(
			'header1.css', 'header2.css'
		),
		'footer-js' => array(
			'footer-main.js', 'footer2.js'
		),
	),

	/*
	|--------------------------------------------------------------------------
	| The LESS Path
	|--------------------------------------------------------------------------
	|
	| This is where you can specify a custom path to your LESS
	| directory. We've set a sensible default, but feel free to update it.
	|
	*/
	'less_path' => 'assets/less',

	/*
	|--------------------------------------------------------------------------
	| The Main LESS file
	|--------------------------------------------------------------------------
	|
	| This is where you can specify a custom path to your main LESS
	| file, which should include all imports to other LESS files.
	| We've set a sensible default, but feel free to update it.
	|
	| Note: you LESS will be compiled into a file named "less.css" in the
	| specified "css_path" above. So be sure to add it into your "css_files" array
	*/
	'less_file' => 'main.less',

	/*
	|--------------------------------------------------------------------------
	| The SASS Path
	|--------------------------------------------------------------------------
	|
	| This is where you can specify a custom path to your SASS
	| directory. We've set a sensible default, but feel free to update it.
	|
	*/
	'sass_path' => 'assets/sass',

	/*
	|--------------------------------------------------------------------------
	| The Main SASS file
	|--------------------------------------------------------------------------
	|
	| This is where you can specify a custom path to your main SASS
	| file, which should include all imports to other SASS files.
	| We've set a sensible default, but feel free to update it.
	|
	*/
	'sass_file' => 'main.sass',

	/*
	|--------------------------------------------------------------------------
	| The Stylus Path
	|--------------------------------------------------------------------------
	|
	| This is where you can specify a custom path to your Stylus
	| directory. We've set a sensible default, but feel free to update it.
	|
	*/
	'stylus_path' => 'assets/stylus',

	/*
	|--------------------------------------------------------------------------
	| The Main Stylus file
	|--------------------------------------------------------------------------
	|
	| This is where you can specify a custom path to your main Stylus
	| file, which should include all imports to other Stylus files.
	| We've set a sensible default, but feel free to update it.
	|
	*/
	'stylus_file' => 'main.stylus',

	/*
	|--------------------------------------------------------------------------
	| Bower Dependencies (vendor) Folder Path
	|--------------------------------------------------------------------------
	|
	| This is where you can specify a custom path for you bower dependencies to
	| reside in. We've set a sensible default, but feel free to update it.
	|
	*/
	"vendor_path" => "assets/vendor",

	/*
	|--------------------------------------------------------------------------
	| Bower Dependencies
	|--------------------------------------------------------------------------
	|
	| This is where you can specify your bower dependencies. We've set a 
	| sensible default, but feel free to update it.
	| 
	| **Note**: Please use key/value pair to represent dependency & version. Use 
	| the word "null" if you require the latest version, or don't know a version
	| number
	|
	*/
	"bower_dependencies" => array(
		"jquery"    => "~1.10.2",
		"bootstrap" => "~3"
	),

	"handlebars_folder" => "assets/templates",
	"handlebars_namespace" => "Test",
	"handlebars_filename" => 'compiled-templates.js',

);
