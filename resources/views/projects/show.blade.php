@extends('layout')

@section('title')
                
@section('content')
<h1>{{ $project->title }}</h1>

<div class="content">{{ $project->description }}<div>

<div>
@foreach ($project->tasks as $task)
<div>

<form method="POST" action="/tasks/{{ $task->id }}">
{{ method_field('PATCH') }}
{{ csrf_field() }}

<label class="checkbox"  {{ $task->completed ? 'is-complete' : '' }} for="completed">
<input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
{{ $task->description }}
</label>
</form>

</div>
@endforeach
</div>

<p>
<a href="/projects/{{ $project->id }}/edit">Edit</a>
</p>


<form method="POST" action="/projects/{{ $project->id }}/tasks" class="box">
{{ csrf_field() }}

<div class="field">
<label class="label" for="description">New Task</label>

<div class="control">
<input type="text" class="input" name="description" placeholder="New Task">
</div>
</div>

<div class="field">
<div class="control">
<button type="submit" class"button is-link">Submit</button>
</div>
</div>


<div class="notification is-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>

</form>

@endsection