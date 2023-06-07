@extends('layouts.admin')
@section('title', 'Dashboard')
@section('content')
<div class="content d-flex align-items-center flex-column">
<h1>Benvenuto nella sezione amministrativa, {{ Auth::user()->name }}</h1>
<p>Da questo pannello postrai gestire i tuoi progetti</p>
</div>
@endsection
