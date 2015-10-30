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

        $fname = $input['fname'];
        $lname = $input['lname'];
        $email_client = $input['email'];
        $phone = $input['phone'];
        $address = $input['address'];
        $subject_client = $input['subject'];
        $msg_client = nl2br($input['msg_client']);
        $date = $input['date_client'];
        $captcha = $input['captcha'];

    	$rules = array(
	        'name'             => 'required|min:3',
	        'email'            => 'required|email',
	        'subject'          => 'required',
	        'msg_client' 	   => 'required',
	        'date_client' 	   => 'required',
	        'captcha'		   => 'required|captcha'
	    );

        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
        	$messages = $validator->messages();
        	echo '<p style="color: #ff0000;">Incorrect!</p>';
        return Redirect::to('contact')
            ->withErrors($validator);
    	}
        else {
            echo '<p style="color: #00ff30;">Matched :)</p>';
        }

        Mail::send('emails.contact', array('fname' => $fname, 'lname' => $lname, 'email_client' => $email_client, 'phone' => $phone, 'subject_client' => $subject_client, 'msg_client' => $msg_client, 'date_client' => $date_client, 'captcha' => $captcha), function($message) use ($email_client)
        {
            $message->from($email_client, 'Lifequo')->subject($subject_client);
            $message->to('celine.khourieh@webneoo.com');
        });

        return View::make('contact.index');
     }

}
