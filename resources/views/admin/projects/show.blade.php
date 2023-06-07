@extends('layouts.admin')
@section('title')
Anteprima {{$project->name}}
@endsection
@section('content')
    <div class="container mx-auto mt-2">
        <div class="project myform">
            <h1>{{$project->name}}</h1>
            <div class="image-container">
                <img class="img-fluid project-image rounded-2" src="{{$project->image_url}}" alt="{{$project->name}}">
            </div>
            <div class="project-info w-75 mt-3 mx-auto">
              <div class="d-flex justify-content-between">

                <div class="languages">
                    <h3>Linguaggi utilizzati</h3>
                    <p>{{$project->languages}}</p>
                </div>
                @if ($project->tags)
                <div class="tags">
                    <h3>Tags associati</h3>
                    <p>{{$project->tags}}</p>
                </div>
                @endif

                @if ($project->repo_url)
                <div class="repo">
                    <div>
                    <h3 class="mb-3">Repository</h3>
                </div>
                    <a class="text-center button-view" href="{{$project->repo_url}}">Visita</a>
                </div>
                @endif

              </div>
              <div class="description mt-3">
                <h3>Descrizione</h3>
                {!! $project->description !!}
              </div>

        </div>
    </div>
@endsection
