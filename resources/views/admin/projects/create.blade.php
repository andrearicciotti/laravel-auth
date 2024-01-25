@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        
        <h1 class="my-4">New project</h1>
        <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf

            @if ($errors->any())
                
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>                        
                    @endforeach
                </div>

            @endif
    
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>
            
            <button type="submit" class="btn btn-success">Save</button>
    
        </form>

    </div>
</div>
@endsection
