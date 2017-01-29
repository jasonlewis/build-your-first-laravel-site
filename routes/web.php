<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', ['as' => 'home', function () {
    return view('home');
}]);

Route::get('about', ['as' => 'about', function () {
    return view('about');
}]);

Route::get('contact', ['as' => 'contact.form', function () {
    return view('contact');
}]);

Route::get('contact/success', ['as' => 'contact.success', function () {
    return view('success');
}]);

Route::post('contact', ['as' => 'contact.submit', function() {
	$validation = validator(
		request()->only('name', 'email', 'message'),
		[
			'name' => 'required',
			'email' => 'required|email',
			'message' => 'required'
		]
	);

	if ($validation->passes()) {
		Mail::to('jason.lewis1991@gmail.com')->send(new App\Mail\Contact(request()));

		return redirect()->route('contact.success');
	}

	return redirect()->route('contact.form')->withErrors($validation->errors())->withInput();
}]);
