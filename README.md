This package was adapted from the jason-morton-nz/laravel-grunt package to add handlebars support and add global functions for including scripts and styles into your views

######Note: I was not aware that you could link composer to a fork, so I changed the namespace. I have no intention to claim this as my own, but do not want to change it back at this time and I have changed the Gruntfile quite a bit.  If this is severely against etiquette, please let me know in an issue and I will rectify it.

### How to insert stylesheet and scripts

`<?php grunt_stylesheet() ?>`

Includes the main stylesheet specified in the css_target_file option in the config.  Pass in a filename as a parameter to link to another stylesheet in the css_path folder

`<?php grunt_script() ?>`

Includes the main javascript file specified in the js_target_file option in the config file.  Pass in a filename as a parameter to link to another script in the js_files path

## Contents

- [What this package includes and can do?](#what-this-package-includes-and-can-do)
- [Configuration](#configuration)
- [Installation](#installation)
- [How to use?](#how-to-use)
- [Issues - how to help](#issues---how-to-help)

### What this package includes and can do?
This package is design to help with asset management and front-end workflow when developing in Laravel 4.

The package can do the following:

- compile and minify CSS
- compile and minify JavaScript
- compile LESS
- compile SASS
- compile Stylus
- build all asset group with one command
- Live reload (watches asset files for changes and reloads the browser)
- ** NOW include support for bower! **

### Installation
To install the 'Laravel 4 + Grunt Asset Worklow Package' run the following command:

`composer require thebeaconlives/laravel-grunt`

You can also add the following to your composer.json `"require-dev"` array:

`"thebeaconlives/laravel-grunt": "dev-master"`

Then run `composer update --dev` in your terminal.

Next, add the following line to the end of you `app/config.php` "providers array":

`'TheBeaconLives\LaravelGrunt\LaravelGruntServiceProvider',`

Finally, run the following command to add the configuration file to your `app/config/packages` directory:

`php artisan grunt:config`


## Configuration
You can configure many of the settings for this package, by copying the config file to your app folder with the following command:

	`php artisan config:publish thebeaconlives/laravel-grunt`

**Note:** please try not to edit the `package.json` and `grunfile.js` directly. Instead make your required changes in the config.php file, then run `php artisan grunt:setup` to apply the changes.

### How to use?
So, how do you use this package? Well we've tried to make it as simple as possible. There's just 3 commands:

#### grunt:setup
The `grunt:setup` command is used to setup your requuired asset + grunt workflow. You use the command as follows:

`php artisan grunt:setup`

The command will ask you a selection of questions, and the rest is all done for you.

#### grunt:build
The `grunt:build` command will run the grunt task runner and lint, compile, minify all your files, according to how you want things done. You use the command as follows:

`php artisan grunt:build`

#### grunt:watch
The `grunt:watch` command is used to start a the grunt file watcher. This will watch for any changes made to your front-end workflow files (CSS, JavaScript, LESS, SASS & Stylus), and will then auto-reload your web browser to reflect those changes. You can use the command as follows:

`php artisan grunt:watch`

**Note:** That live reload will only work if you have a compatible browser (Chrome & Firefox) with the LiveReload plugin installed.

#### bower:setup
The `bower:setup` command will setup `bower.json` and `.bowerrc` files based upon the configuration settings you've specified in this packages `config.php` file. You can add a custom path for bowers vendor folder, as well as stipulate all the bower dependencies you require. All this can be done without touching a single line of JavaScript or JSON. You can use the command as follows:

`php artisan bower:setup`

#### bower:install
The `bower:install` command is used to install you bower dependecies. You can use the command as follows:

`php artisan bower:install`

#### bower:update
The `bower:update` command update your bower dependecies to newer versions if available. You can use the command as follows:

`php artisan bower:update`

## Issues - how to help?
If you find any bugs, issues errors or believe we could add further useful functionality. Let us know via the github [issues page](https://github.com/thebeaconlives/laravel-grunt/issues) for this project here - [https://github.com/thebeaconlives/laravel-grunt/issues](https://github.com/thebeaconlives/laravel-grunt/issues).

### Contributors
Here's a list of people who have helped by contributing to this project to date:

- Jason Morton : [Github](https://github.com/JasonMortonNZ) | [Twitter @JasonMortonNZ](https://twitter.com/jasonmortonnz)
- Thomas Clarkson : [Github](https://github.com/TomClarkson) | [Twitter @thomasclarkson9](https://twitter.com/thomasclarkson9)
