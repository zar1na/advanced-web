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

Route::get('/', 'PagesController@home');
/* Route::get('/', function () {
    
    $tasks = [
    'Go to the store',
    'Go to the market',
    'Go to work',
    'Go to the concert'
    ];
    
    return view('welcome')->withTasks($tasks);
    
});

*/
Route::get('/contact', 'PagesController@contact');
Route::get('/about', 'PagesController@about');

/* Long winded, above is easier on the eye
Route::get('/contact', function () { // example.com/contact
    return view('contact');
});

Route::get('/about', function () { // example.com/about
    return view('about');
}); */
