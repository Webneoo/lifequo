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

        dd($input);

        Mail::send('emails.contact', array('fname' => $fname, 'lname' => $lname, 'email_client' => $email_client, 'phone' => $phone, 'subject_client' => $subject_client, 'msg_client' => $msg_client, 'date_client' => $date_client, 'captcha' => $captcha), function($message) use ($email_client)
        {
            $message->from($email_client, 'Lifequo')->subject($subject_client);
            $message->to('celine.khourieh@webneoo.com');
        });

        return View::make('contact.index');
     }

}
