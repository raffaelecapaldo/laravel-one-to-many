@extends('layouts.app')
@section('content')
@guest
<h1 class="text-center mt-2">Registrati o effettua la login</h1>
@endguest
@auth
<h1 class="text-center mt-2">Benvenuto {{ Auth::user()->name }}</h1>
@endauth
@endsection
