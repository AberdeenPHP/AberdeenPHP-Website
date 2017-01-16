<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { 

	return view('pages.homepage',['title'=>"Aberdeen PHP",
								   'tagline'=>"The heart of Aberdeen's Web development comunity"]); 

});

Route::get('/about', function () { 
	
	return view('pages.about',['title'=>'About Aberdeen PHP',
							     'tagline'=>"What's is all about at AberdeenPHP"]); 
});

Route::get('/events', function () { 

	$allevents = [
	    ['sectionname' => 'AberdeenPHP Events',
	     'events' => json_decode(file_get_contents('https://opentechcalendar.co.uk/api1/group/272/events.json'))
	    ],
	    ['sectionname' => 'Other Events in Aberdeen',
	     'events' => json_decode(file_get_contents('https://opentechcalendar.co.uk/api1/area/60/events.json'))
	    ],
	    ['sectionname' => 'PHP Events in Scotland',
	     'events' => json_decode(file_get_contents('http://opentechcalendar.co.uk/api1/curatedlist/12/events.json'))
	    ],
	];
	
	return view('pages.events',['title'=>"Events",
							    'tagline'=>"What's going on at AberdeenPHP and elsewhere",
							    'allevents'=>$allevents]); 
});

Route::get('/give-a-talk', function () { 
	
	return view('pages.talk',['title'=>"Give a talk",
							     'tagline'=>"Come and give a talk, join in and share what you know."]); 
});

Route::get('/sponsorship', function () { 
	
	return view('pages.sponsor',['title'=>"Sponsor Us",
							     'tagline'=>"Get involved and help"]); 
});

Route::get('/community', function () { 
	
	return view('pages.community',['title'=>"The Community",
							     'tagline'=>"We're always keen to share the love, there is lots of great stuff happening in Aberdeen"]); 
});

Route::get('/contact', function () { 
	
	return view('pages.contact',['title'=>"Get in touch",
							     'tagline'=>"Some legal stuff"]); 
});

Route::get('/code-of-conduct', function () { 
	
	return view('pages.codeofconduct',['title'=>"Aberdeen PHP",
							     'tagline'=>"Code of conduct - be awesome to evaryone"]); 
});

Route::get('/privacy', function () { 
	
	return view('pages.privacy',['title'=>"Aberdeen PHP",
							     'tagline'=>"Some legal stuff"]); 
});

Route::get('/terms', function () { 
	
	return view('pages.terms',['title'=>"Aberdeen PHP",
							     'tagline'=>"Some legal stuff"]); 
});







