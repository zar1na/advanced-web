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

Route::get('/projects', 'ProjectsController@index');
Route::get('/projects/create', 'ProjectsController@create');
//^^ responsible for displaying a view to create a new project
Route::post('/projects', 'ProjectsController@store');
//^^ when a user makes a post request to submit data to be processed to
// the same end point then load action called store



/* Long winded, above is easier on the eye
Route::get('/contact', function () { // example.com/contact
    return view('contact');
});

Route::get('/about', function () { // example.com/about
    return view('about');
}); */
