<?php

namespace App\Http\Controllers;

use Mail;
use Redirect;
use Illuminate\Http\Request;
use App\Mail\ContactUsMessage;
use App\Http\Requests\ContactFormRequest;

class ContactFormController extends Controller
{
	public function index() { 
		
		return view('pages.contact',['title'=>"Get in touch",
								     'tagline'=>"Aberdeen PHP Contact Details"]); 
	}
    
    public function store(ContactFormRequest $request){


    	Mail::to(config('site.contactEmailAddress'))->send(new ContactUsMessage());

        return Redirect::to('/contact?sent=1');
    }


}
