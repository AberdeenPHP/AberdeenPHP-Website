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
								   'tagline'=>"The heart of Aberdeen's Web development community"]); 

});

Route::get('/about', function () { 
	
	return view('pages.about',['title'=>'About Aberdeen PHP',
							     'tagline'=>"What exactly is Aberdeen PHP?"]); 
});

Route::get('/events', function () { 

	$allevents = Cache::remember('allevents',15,function() {
		return [
				    ['sectionname' => 'AberdeenPHP Events',
				     'events' => json_decode(file_get_contents('https://opentechcalendar.co.uk/api1/group/272/events.json'))
				    ],
				    ['sectionname' => 'Other Events In Aberdeen',
				     'events' => json_decode(file_get_contents('https://opentechcalendar.co.uk/api1/area/60/events.json'))
				    ],
				    ['sectionname' => 'PHP Events In Scotland',
				     'events' => json_decode(file_get_contents('http://opentechcalendar.co.uk/api1/curatedlist/12/events.json'))
				    ],
				];
	});

	return view('pages.events',['title'=>"Events",
							    'tagline'=>"What's going on at AberdeenPHP and Elsewhere",
							    'allevents'=>$allevents]); 
});

Route::get('/events/aberdeen', function () {

    $allEvents = Cache::remember('otherevents',15,function() {
    	return [
			        ['sectionname' => 'Other Events In Aberdeen',
			            'events' => json_decode(file_get_contents('https://opentechcalendar.co.uk/api1/area/60/events.json'))
			        ],
			    ];
	});

    return view('pages.events', [
        'title'=>"Other Events In Aberdeen",
        'tagline'=>"What's going on in Aberdeen.",
        'allevents'=> $allEvents
    ]);
})->name('events.aberdeen');

Route::get('/events/php', function () {

    $allEvents = Cache::remember('phpevents',15,function() {
    	return [
		        ['sectionname' => 'PHP Events In Scotland',
		            'events' => json_decode(file_get_contents('http://opentechcalendar.co.uk/api1/curatedlist/12/events.json'))
		        ],
		    ];
    });
    
    return view('pages.events', [
        'title'=>"PHP Events In Scotland",
        'tagline'=>"What's going on in the PHP Community.",
        'allevents'=> $allEvents,
        'image'=>'/images/random_header_images/dunnottar-castle_01.jpg'
    ]);
})->name('events.php');

Route::get('/give-a-talk', function () { 
	
	return view('pages.talk',['title'=>"Give A Talk",
							     'tagline'=>"Come and give a talk, share your knowledge, help us grow."]); 
});

Route::get('/sponsorship', function () { 
	
	return view('pages.sponsor',['title'=>"Sponsor Us",
							     'tagline'=>"Advertise directly to your potential users"]); 
});

Route::get('/community', function () { 
	
	return view('pages.community',['title'=>"The Community",
							     'tagline'=>"We're always keen to share the love, there is lots of great stuff happening in Aberdeen"]); 
});

Route::get('/contact', function () { 
	
	return view('pages.contact',['title'=>"Get in touch",
							     'tagline'=>"Aberdeen PHP Contact Details"]); 
});

Route::get('/code-of-conduct', function () { 
	
	return view('pages.codeofconduct',['title'=>"Aberdeen PHP",
							     'tagline'=>"Code Of Conduct - Be Awesome to Everyone!"]); 
});

Route::get('/privacy', function () { 
	
	return view('pages.privacy',['title'=>"Aberdeen PHP",
							     'tagline'=>"Our Website Privacy Policy"]); 
});

Route::get('/terms', function () { 
	
	return view('pages.terms',['title'=>"Aberdeen PHP",
							     'tagline'=>"Just Some Legal Stuff About This Website"]); 
});

Route::get('/cookies', function () { 
	
	return view('pages.cookies',['title'=>"Aberdeen PHP",
							     'tagline'=>"How Cookies Are Used On This Website"]); 
});
