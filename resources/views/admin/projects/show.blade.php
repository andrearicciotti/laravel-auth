@extends('layouts.admin')

@section('content')
    <h1>Title: {{ $project->title }}</h1>
    <p><strong>Description: </strong>{{ $project->description }}</p>
@endsection
