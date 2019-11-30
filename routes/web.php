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

use App\Repositories\UserRepository;
Route::get('/', function (UserRepository $users) {
    dd($users);
    return view('welcome');
});




//use App\Services\Twitter;

/* v21 12:32
app()->singleton('App\Services\Twitter', function () { // class path
    return new \App\Services\Twitter('fgfghgiuuit');
});

Route::get('/', function () {
    dd(app('App\Example'));
    
    return view('welcome');
});
/*

/* want a singleton and to be equal to new instance of the twitter class
that accepts the api-key through constructor */

/* v21
app()->bind('example', function () {
    return new \App\Example;
}); // bound example into the service container 

Route::get('/', function (){
    dd(app('App\Example'));
    
    return view('welcome');
}); // displays example instance from app\example
*/ 

// WELCOME.BLADE.PHP Route::get('/', 'PagesController@home');
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


// REPRESENTS PROJECT RESOURCE
Route::resource('projects', 'ProjectsController');
// equivolant to all that below
/*
Route::get('/projects', 'ProjectsController@index');
Route::get('/projects/create', 'ProjectsController@create');
//^^ responsible for displaying a view to create a new project
Route::post('/projects', 'ProjectsController@store');
//^^ when a user makes a post request to submit data to be processed to
// the same end point then load action called store
Route::get('/projects/project', 'ProjectsController@show');
// /project represents a wildcard
Route::get('/projects/{project}/edit', 'ProjectsController@edit');
// edits a specific  project usnig the identifyer
Route::patch('/projects/{project}', 'ProjectsController@update');
// form should make patch request to end point
Route::delete('/projects/{project}', 'ProjectsController@destroy');
*/

Route::post('/projects/{project}/tasks', 'ProjectsTasksController@store');
Route::patch('/tasks/{task}', 'ProjectsTasksController@update');


/* Long winded, above is easier on the eye
Route::get('/contact', function () { // example.com/contact
    return view('contact');
});

Route::get('/about', function () { // example.com/about
    return view('about');
}); */
