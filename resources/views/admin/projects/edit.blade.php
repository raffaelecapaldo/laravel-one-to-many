@extends('layouts.admin')
@section('title', 'Modifica progetto')
@section('content')
<div class="container mx-auto">
    <h3 class="text-center mb-3">Modifica {{$project->name}}</h3>
    <form class="myform" method="POST" action="{{route('admin.projects.update', $project->slug)}}">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-4">
                <label for="name" class="form-label">Nome progetto</label>
                <input type="text" required value="{{ old('name', $project->name) }}" maxlength="255" name="name"
                    class="form-control @error('name') is-invalid @enderror" placeholder="Inserisci un titolo">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-4">
                <label for="image_url" class="form-label">URL immagine progetto</label>
                <input type="url" required name="image_url"
                    class="form-control @error('image_url') is-invalid @enderror" value="{{ old('image_url', $project->image_url) }}"
                    placeholder="https://example.com" pattern="https://.*">
                @error('image_url')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-4">
                <label for="repo_url" class="form-label">URL Repository</label>
                <input type="url" name="repo_url" class="form-control @error('repo_url') is-invalid @enderror"
                    value="{{ old('repo_url', $project->repo_url) }}" placeholder="https://example.com" pattern="https://.*">
                @error('repo_url')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
                <label for="languages" class="form-label">Linguaggi</label>
                <input type="text" required maxlength="255" name="languages"
                    class="form-control @error('languages') is-invalid @enderror" value="{{ old('languages', $project->languages) }}"
                    placeholder="Linguaggi usati">
                @error('languages')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-6">
                <label for="tags" class="form-label">Tags</label>
                <input type="text" maxlength="255" name="tags"
                    class="form-control @error('tags') is-invalid @enderror" value="{{ old('tags', $project->tags) }}"
                    placeholder="Inserisci tag del progetto">
                @error('tags')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row d-flex justify-content-center mt-3">
            <div class="col-8">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="editor" name="description"
                    rows="8" cols="30" placeholder="Inserisci una breve descrizione del progetto">{{ old('description', $project->description) }}</textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="buttons mt-3 d-flex justify-content-center gap-2">
            <button type="submit" class="btn btn-primary">Modifica</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
    </form>
</div>
<script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>
@endsection

