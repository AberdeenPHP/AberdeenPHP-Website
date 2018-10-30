# Site
Website for AberdeenPHP User Group

## Background
This is the fourth version of the AberdeenPHP website.  
The first was, I think a Github pages thing, the second was WordPress, this one uses the Laravel 5.7 framework.

## Contributing
One of the easiest way to contribute is to get a copy of this website working on your computer, make any changes, then create a pull request. 
If you've not a clue what that means have a look at this excellent guide from [Matt Stauffer](https://mattstauffer.co/blog/how-to-contribute-to-an-open-source-github-project-using-your-own-fork).

When you 'clone' this code to your own set up you will need to make sure this website is on its own domain name (eg aberdeenphp.dev). You'll need to set up Apache or nginx to use `/public/` as the base directory for the site.

Once the code is downloaded and in the right place run `composer install` to fill up the `/vendor/` directory will all the stuff Laravel needs.

Almost there - second to last step rename the `.env.example` to just `.env`.

In the `.env` you'll see the `APP_KEY` is blank. You need to get a value in that and the easiest way is to run `php artisan key:generate` from the command line, which generates a key and puts it in the `.env` file. If you get a PHP error or a blank screen, check your file permissions, as it needs relevant permissions to write log files. Get in touch if you have any problems!

**Note: You may need to add an entry to your `.env` file for bugsnag (the bug monitoring platform). Get in touch if so!**

## Editing a page
If you are not familiar with Laravel it can be a little confusing and over complex at first.
Chances are the html you need to change will be found in `/resources/views/pages/`.
If its not there have a look at the *Creating A New Page* section just below. It runs through the key file locations and should help you find your way around.

## Creating a new page 

Laravel is an fully featured MVC framework. If you're new to Laravel that means two things:

1. Things are in split up and put in strange places.
2. There's a LOT of code here, most of which you will never need to look at or use.

Using Laravel means we can very easily add database stuff, tests, run scheduled tasks, compile JavaScript or CSS, and much more. 
At the moment we are just sticking to the very basics though. There's a _world_ of brilliant tutorials on Laravel. This guide will assume you don't want a tutorial, you just want to add a pesky web page! 

Okay - lets run through the process, start with the 'routes' file:

#### Routes - [/routes/web.php](/routes/web.php)

This is where all the url's (endpoints) for the website are set up. It should be fairly easy to see what's happening here. You visit a certain url in the browser, we head off to a controller that will do a little cleverness and give your browser a 'view'.

We've included a little sample code in the [/routes/web.php](/routes/web.php) file to get you started.

Go ahead and created your new route. Once that's done lets head off to the views:

#### Views - [/resources/views/](/resources/views/)

##### Layout (ie. the template)
First, you should see a `layouts` folder with `main.blade.php` inside. 

That the template for the website.

Remember the variables we passed in from the routes file? You'll see them being used here.

The main thing to note is, right in the middle, you'll see `@yield('content')`. That will be where the content of each page gets, well, yielded.  

You probably don't need to fiddle with anything in here but it's good to know where, say, the navigation for the website is.

##### Pages

Okay .. head back up to the `/resources/views/` directory again and this time have a look in the pages directory. You'll see all the views that are being referred to in the routes file.

_Notice that the name of the files are something like `homepage.blade.php` but in the routes file you can just put `view('homepage')` and Laravel fills in the rest._

This is where you can add a new page. Remember to make sure the file starts with `@extends('layouts.main')` and you put all your html within the `@section('content')` and `@endsection` tags.

#### SASS/CSS - [/resources/assets/sass/](/resources/assets/sass/)

If you are familiar with SASS/SCSS this folder will make sense. Its fairly basic. 

To compile the SASS to regular CSS you run `npm run dev` from the command line.

Getting Webpack (and NPM) installed can be a challenging and frustrating experience. In most cases you will only need to run `npm install` from the root directory of this project and magic will happen. 

Its a bit beyond the scope of this guide to go into all that. Have a look at the [Laravel Docs](https://laravel.com/docs/5.7/mix) or get in touch and we'll help!

#### JavaScript - [/resources/assets/js/](/resources/assets/js/)

As with the SASS you'll find the the websites JavaScript in this folder. If you are wondering how it gets from here to the `public/js` folder, well that uses webpack too.

In fact - now is a good time to have a look at the [webpack.mix.js](/webpack.mix.js) and you'll see the code that points to this file.

#### Config File

In the config directory you'll find a [/config/site.php](/config/site.php) file. This is a central place for most of contact details or links around the website. 

By placing this data in a config file it makes it almost impossible to accidentally forget to update a link buried deep on the website.

#### Tests and Build Process

When you submit a Pull Request we have Travis CI installed. This will automatically create an in-memory copy of the website and run the tests that you have added (you did add tests - right?) You can see the config for this process in the [/.travis.yml](.travis.yml) file. 

When your pull request is merged to master a deployment is triggered on the server and this also creates and css and javascript as it runs.


#### Other Bits

If you are a little more familiar with Laravel here's some notes:

1. There's a `ViewServiceProvider` which injects the background image url into the main layout view.
2. Yes - there's controller type stuff in the routes file. Keeping things simple here remember!
3. The views should be broken up into smaller partials but again, keeping it simple.
4. On the homepage only some JavaScript is loaded for twitter. Its a bit of cheat but a simple [Stack](https://laravel.com/docs/5.7/blade#stacks) has been used here.

## Resources
* It's built using bootstrap 3.3.7, so you can use all the css and components in https://getbootstrap.com/
* It includes Font Awesome 4.6.3, so you can use all the font icons and stuff at http://fontawesome.io/icons/
* It was based on the template at https://github.com/BlackrockDigital/startbootstrap-clean-blog 
* Laravel Docs are here https://laravel.com/docs/5.7
* If you want to learn Laravel - there is no better place to start than [right here](https://laracasts.com/).
