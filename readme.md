# Site
Website for AberdeenPHP User Group

## Background
This is the fourth version of the AberdeenPHP website.  
The first was, I think a github pages thing, the second was WordPress, this one uses the Laravel 5.3 framework. 

## Contrubuting
One of the easiest way to contribute is to get a copy of this website working on your computer, make any changes, then create a pull request. 
If you've not a clue what that means have a look at this excellent guide from [Matt Stauffer](https://mattstauffer.co/blog/how-to-contribute-to-an-open-source-github-project-using-your-own-fork).

When you 'clone' this code to your own set up you will need to make sure this website is on its own domain name (eg aberdeenphp.dev). You'll need to set up Apache or Nginx to use `/public/` as the base directory for the site.

Once the code is downloaded and in the right place run `composer install` to fill up the `/vendor/` directory will all the stuff laravel needs.

Almost there - second to last step rename the `.env.example` to just `.env`.

In the `.env` you'll see the `APP_KEY` is blank. You need to get a value in that and the easiest way is to run `php artisan key:generate` from the command line. Get in touch if you have any problems!


## Editing a page
If you are not familiar with Laravel it can be a little confusing at first.
Chances are the html you need to change will be in `/resources/views/pages/`.
If its not there have a look at the Creating A New Page section just below. It runs through the key file locations and should help you find your way around.

## Creating a new page 

Laravel is an fully featured MVC framework. If you're new to laravel that means two things:

1. Things are in split up and put in strange places.
2. There's a LOT of code here, most of which you will never need to look at or use.

Using Laravel means we can very easily add database stuff, tests, run scheduled tasks, compile javascript or css, and much more. 
At the moment we are just sticking to the very basics though. There's a _world_ of brilliant tutorials on Laravel. This guide will assume you don't want a tutorial, you just want to add a pesky web page! 

Okay - lets run through the process, start with the 'routes' file:

#### Routes - [/routes/web.php](/routes/web.php)

This is where all the urls (endpoints) for the website are set up. It should be fairly easy to see what's happening here. You visit a certain url in the browser, and we return a 'view'.

Each view is passed some data - in this case `title` and `tagline`. No need for the dollar sign - laravel adds those for you in the 'view'.

_Normally each 'route' in this file would call a method in a controller class which would then return the view._
_For simplicity we are skipping that bit!_

Go ahead and created your new route following the same format. Once that's done lets head off to the views:

#### Views - [/resources/views/](/resources/views/)

##### Layout (ie. the template)
First, you should see a `layouts` folder with `main.blade.php` inside. 

That the template for the website.

Remember the variables we passed in from the routes file? You'll see them being used here.

The main thing to note is, right in the middle, you'll see `@yield('content')`. That will be where the content of each page gets, well, yielded.  

You probably don't need to fiddle with anything in here but it's good to know where, say, the navigation for the website is.

##### Pages

Okay .. head back up to the `/resources/views/` directory again and this time have a look in the pages directory. You'll see all the views that are being refered to in the routes file.

_Notice that the name of the files are something like `homepage.blade.php` but in the routes file you can just put `view('homepage')` and laravel fills in the rest._

This is where you can add a new page. Remember to make sure the file starts with `@extends('layouts.main')` and you put all your html within the `@section('content')` and `@endsection` tags.

#### SASS/CSS - [/resources/assets/sass/](/resources/assets/sass/)

If you are familar with Sass/SCSS this folder will make sense. Its fairly basic. 

To compile the Sass to regular css you run `gulp` from the command line.

Getting Gulp (and npm) installed can be a challenging and frustrating experience. In most cases you will only need to run `npm install` or `yarn install` from the root directory of this project and magic will happen. 

Its a bit beyond the scope of this guide to go into all that. Have a look at the [Laravel Docs](https://laravel.com/docs/5.3/elixir) or get in touch and we'll help!

#### Javascript - [/resources/assets/js/](/resources/assets/js/)

As with the SASS you'll find the the websites javascript in this folder. If you are wondering how it gets from here to the `public/js` folder, well that uses gulp too.

In fact - nows a good time to have a look at the [gulpfile.js](/gulpfile.js) and you'll see the code that points to this file.


#### Other Bits

If you are a little more familar with Laravel here's some notes:

1. There's a `ViewServiceProvider` which injects the background image url into the main layout view.
2. Yes - there's controller type stuff in the routes file. Keeping things simple here remember!
3. The views should be broken up into smaller partials but again, keeping it simple.
4. On the homepage only some Javascript is loaded for twitter. Its a bit of cheat but a simple [Stack](https://laravel.com/docs/5.3/blade#stacks) has been used here.

## Resources
* It's built using bootstrap 3.3.7, so you can use all the css and components in http://getbootstrap.com/
* I includes Font Awsome 4.6.3, so you can use all the font icons and stuff at http://fontawesome.io/icons/
* It was based on the template at https://github.com/BlackrockDigital/startbootstrap-clean-blog 
* Laravel Docs are here https://laravel.com/docs/5.3
* If you want to learn Laravel - there is no better place to start than [right here](https://laracasts.com/)
