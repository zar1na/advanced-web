@extends('layout')

@section('title', 'Welcome')

@section('content')
        <h2>I need from the store</h2>
        
        <ul>
        @foreach($tasks as $task)
        <li>{{ $task }}</li>
        @endforeach
        </ul>


        
@endsection
