<?php

class ContactController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		return View::make('contact.index');
	}

	public function getContactForm()
	{
        $input = Input::all();
        
        $email = $input['email'];
        $subject = $input['subject'];

        Mail::send('emails.contact', array('input' => $input), function($message) use ($email, $subject)
        {
            $message->from($email, 'Lifequo')->subject($subject);
            $message->to('info@webneoo.com');
        });

        return View::make('contact.index');
     }

}
