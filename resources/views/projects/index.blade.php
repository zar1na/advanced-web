@extends('layout')

@section('title')
                
@section('content')
<h1>Projects</h1>

<ul>
@foreach ($projects as $project)

<li>
<a href="projects/{{ $project->id }}">
{{ $project->title }}
</a>
</li>

@endforeach
</ul>

<h3><a href="projects/create">Create a new project</a></h3>


@endsection