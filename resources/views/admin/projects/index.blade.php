@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <h1 class="text-center my-4">Projects</h1>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <td>{{ $project->title }}</td>
                            <td>{{ substr($project->description, 0, 20) }}</td>
                            <td><a href="{{ route('admin.projects.show', ['project' => $project->slug]) }}" class="btn btn-primary">Details</a>
                            </td>
                            {{-- <td>
                                <form method="POST" action="{{ route('projects.destroy', ['project' => $project->id]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" data-title="{{ $project->title }}">Delete</button>
                                </form>
                            </td>
                            <td><a href="{{ route('projects.edit', ['project' => $project->id]) }}" class="btn btn-info">Update</a>
                            </td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection