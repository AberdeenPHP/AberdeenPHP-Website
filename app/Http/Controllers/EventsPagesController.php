<?php

namespace App\Http\Controllers;

use Cache;

class EventsPagesController extends Controller
{
    public function index()
    {
        $events = Cache::remember('allevents', 15, function () {
            return [
                ['sectionname' => 'AberdeenPHP Events',
                    'events' => json_decode(file_get_contents('https://opentechcalendar.co.uk/api1/group/272/events.json')),
                    'logosrc' => url('images/aberdeenphp_logo.svg'),
                ],
                ['sectionname' => 'Other Events In Aberdeen',
                    'events' => json_decode(file_get_contents('https://opentechcalendar.co.uk/api1/area/60/events.json')),
                    'logosrc' => '/images/community-logos/aberdeen.jpg',
                ],
                ['sectionname' => 'PHP Events In Scotland',
                    'events' => json_decode(file_get_contents('http://opentechcalendar.co.uk/api1/curatedlist/12/events.json')),
                    'logosrc' => '/images/community-logos/scotlandphp.jpg',
                ],
            ];
        });

        return view('pages.events', ['title'=>'Events',
            'tagline'=>"What's going on at AberdeenPHP and Elsewhere",
            'events'=>$events, ]);
    }

    public function eventsAberdeen()
    {
        $events = Cache::remember('otherevents', 15, function () {
            return [
                ['sectionname' => 'Other Events In Aberdeen',
                    'events' => json_decode(file_get_contents('https://opentechcalendar.co.uk/api1/area/60/events.json')),
                    'logosrc' => '/images/community-logos/aberdeen.jpg',
                ],
            ];
        });

        return view('pages.events', [
            'title'=>'Other Events In Aberdeen',
            'tagline'=>"What's going on in Aberdeen.",
            'events'=> $events,
        ]);
    }

    public function eventsPHP()
    {
        $events = Cache::remember('phpevents', 15, function () {
            return [
                ['sectionname' => 'PHP Events In Scotland',
                    'events' => json_decode(file_get_contents('http://opentechcalendar.co.uk/api1/curatedlist/12/events.json')),
                    'logosrc' => '/images/community-logos/scotlandphp.jpg',

                ],
            ];
        });

        return view('pages.events', [
            'title'=>'PHP Events In Scotland',
            'tagline'=>"What's going on in the PHP Community.",
            'events'=> $events,
        ]);
    }
}
