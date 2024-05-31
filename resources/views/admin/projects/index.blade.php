@extends('layouts.admin')

@section('content')
    <section class="container mt-4">
        <h1 class="text-center">Projects</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                  <th scope="col">#ID</th>
                  <th scope="col">Title</th>
                  <th scope="col">Description</th>
                  <th scope="col">Slug</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <th scope="row">{{ $project->id }}</th>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->description }}</td>
                        <td>{{ $project->slug }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
