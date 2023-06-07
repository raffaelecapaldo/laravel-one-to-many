@extends('layouts.admin')
@section('title', 'Lista categorie')
@section('content')
    <div class="project-list">
        <div class="container-fluid">
            <h3 class="text-center mb-2">Lista categorie</h3>
            <div class="buttons d-flex justify-content-center">
                <button class="btn btn-primary add-button">Aggiungi categoria</button>
            </div>
            @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
            @if (session('message'))
                <div class="alert alert-success text-center">
                    {{ session('message') }}
                </div>
            @endif
            <div style="max-width:900px" class="table-responsive mt-2 mx-auto">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Progetti</th>
                            <th scope="col">Azioni</th>

                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categories as $category)
                            <tr class="align-middle">
                                <th scope="row">{{ $category->id }}</th>
                                <td>{{ $category->name }}</td>
                                <td><a href="{{ route('admin.categories.show', $category->slug) }}">Visualizza progetti</a>
                                </td>

                                <td>
                                    <button class="btn btn-warning "><a class="text-black"
                                            href="{{ route('admin.projects.edit', $category->slug) }}"><i
                                                class="fa-solid fa-pen-to-square"></i></a></button>
                                    <form class="d-inline" method="POST"
                                        action="{{ route('admin.categories.destroy', $category->slug) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button data-item-type="category" data-item-name="{{ $category->name }}"
                                            type="submit" class="btn btn-danger delete-button"><i
                                                class="fa-regular fa-trash-can"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                        @endforelse

                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-end gap-2">
                {{ $categories->links() }}
            </div>
        </div>
    </div>

    @include('admin.partials.addcategorymodal')
@endsection
