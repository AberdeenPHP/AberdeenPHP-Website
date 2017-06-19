<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralPagesController extends Controller
{
   
	public function home(){

		return view('pages.homepage',['title'=>"Aberdeen PHP",
									  'tagline'=>"The heart of Aberdeen's web development community",
									  'image'=>'/images/random_header_images/aberdeen_08.jpg']); 
	}

	public function about() { 
		
		return view('pages.about',['title'=>'About Aberdeen PHP',
								   'tagline'=>"What exactly is Aberdeen PHP?"]); 
	}


	public function giveatalk() { 
		
		return view('pages.talk',['title'=>"Give A Talk",
								  'tagline'=>"Come and give a talk, share your knowledge, help us grow."]); 
	}

	public function sponsorship() { 
		
		return view('pages.sponsor',['title'=>"Sponsor Us",
								     'tagline'=>"Advertise directly to your potential users"]); 
	}

	public function community() { 
		
		return view('pages.community',['title'=>"The Community",
								       'tagline'=>"We're always keen to share the love, there is lots of great stuff happening in Aberdeen"]); 
	}

	public function codeofconduct() { 
		
		return view('pages.codeofconduct',['title'=>"Aberdeen PHP",
								           'tagline'=>"Code Of Conduct - Be Awesome to Everyone!"]); 
	}

	public function privacy() { 
		
		return view('pages.privacy',['title'=>"Aberdeen PHP",
								     'tagline'=>"Our Website Privacy Policy"]); 
	}

	public function terms() { 
		
		return view('pages.terms',['title'=>"Aberdeen PHP",
								   'tagline'=>"Just Some Legal Stuff About This Website"]); 
	}

	public function cookies() { 
		
		return view('pages.cookies',['title'=>"Aberdeen PHP",
								     'tagline'=>"How Cookies Are Used On This Website"]); 
	}


}
