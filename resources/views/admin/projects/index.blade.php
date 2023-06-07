@extends('layouts.admin')
@section('title', 'Lista progetti')
@section('content')
<div class="project-list">
<div class="container-fluid">
    <h3>Lista progetti</h3>
    @if (session('message'))
            <div class="alert alert-success text-center">
                {{ session('message') }}
            </div>
            @endif
    <div class="table-responsive mt-2">
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Immagine</th>
                <th scope="col">URL Repository</th>
                <th scope="col">Azioni</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($projects as $project)
                <tr class="align-middle">
                    <th scope="row">{{$project->id}}</th>
                    <td>{{$project->name}}</td>
                    <td><img class="preview img-thumbnail" src="{{$project->image_url}}" alt="{{$project->name}}"></td>
                    <td><a href="{{$project->repo_url}}">{{"$project->name Github"}}</a></td>
                    <td>
                        <button class="btn btn-success"><a class="text-white" href="{{route('admin.projects.show', $project->slug)}}"><i class="fa-solid fa-eye"></i></a></button>
                        <button class="btn btn-warning "><a class="text-black" href="{{route('admin.projects.edit', $project->slug)}}"><i class="fa-solid fa-pen-to-square"></i></a></button>
                       <form class="d-inline" method="POST" action="{{route('admin.projects.destroy', $project->slug)}}">
                        @csrf
                        @method('DELETE')
                        <button data-item-name="{{$project->name}}" type="submit" class="btn btn-danger delete-button"><i class="fa-regular fa-trash-can"></i></button>
                    </form>
                    </td>
                  </tr>
                @empty

                @endforelse

            </tbody>
          </table>
    </div>
    <div class="d-flex justify-content-end">
        {{ $projects->links() }}
    </div>
</div>
</div>

@include('admin.partials.deletemodal')
@endsection
