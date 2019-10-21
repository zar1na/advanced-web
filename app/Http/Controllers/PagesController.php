<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller

{
    public function home()
    {
        // cleaner than the comment layout left on web.php
    $tasks = [
    'Go to the store',
    'Go to the market',
    'Go to work',
    'Go to the concert'
    ];
    
    return view('welcome')->withTasks($tasks);
    
    }
    
    public function contact()
    {
        return view('contact');
    }
    
    public function about()
    {
        return view('about');
    }
    
}