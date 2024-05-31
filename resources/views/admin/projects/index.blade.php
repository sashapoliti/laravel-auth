@extends('layouts.admin')
@section('title', 'Projects')

@section('content')
    <section class="mt-4 p-3">
        <div class="d-flex justify-content-between align-items-center py-4">
            <h1>Projects</h1>
            <a href="{{route('admin.projects.create')}}" class="btn btn-primary">Crea nuovo post</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Update At</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <th scope="row">{{ $project->id }}</th>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->slug }}</td>
                        <td>{{ $project->created_at }}</td>
                        <td>{{ $project->updated_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
