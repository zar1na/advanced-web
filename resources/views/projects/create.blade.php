<!doctype html>
<html>
<head>
<title></title>
</head>

<body>

<h1>Create a Project</h1>

<form method="POST" action="/projects">

{{ csrf_field() }}

<div class="field">
<label class="label" for="title">Project Title</label>

<div class="control">
<input type="text" class="input {{ $errors->has('title') ? 'is-danger' : '' }}" name="title" value="{{ old('title') }}">
</div>
</div>


<div class="field">
<label class="label" for="title">Project Description</label>

<div class="control">
<textarea name="description" class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}">{{ old('description') }}</textarea>
</div>
</div>0

<div>
<button type="submit">Create Project</button>
</div>

<div class="notification is-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>

<p>this view loads a form that accepts user data</p>
<p>@include ('errors') doesn't work</p>

</body>
</html>