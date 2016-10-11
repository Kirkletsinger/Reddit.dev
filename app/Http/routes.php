<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
    return view('welcome');
});

// creates new page
// call the page up enter reddit.dev/sayhello in the URL
Route::get('/say-hello', function () {
	$a = 5;
	$b = 6;
	// this is all it will put on a page
	return "Hello, Codeup! " . $a * $b;
});

// dont use capitals, use - instead
Route::get('/say-hello/{name}', function($name)
{
    return "Hello, $name!";
});

// optional perams
// hits the first path when nothing is passed in for the name
	// so in other words comment out the first Route::get and it will work
Route::get('/say-hello/{name?}', function($name = 'World') {
	return "Hello, $name!";
});


// redirecting
Route::get('say-hello/{name}', function($name) {
	if ($name == "steven") {
		return redirect('/');
	}
	return "Hello, $name";
});

Route::get('/uppercase/{word?}', function($word = "word") {
	$data ['word'] = $word;
  return view ('uppercase') ->with($data);
});

Route::get('/increment/{num?}', function($num = 2) {
	return ++$num;
});

Route::get('/add/{a?}/{b?}', function($a = 1, $b = 1) {
	return $a + $b;
});
