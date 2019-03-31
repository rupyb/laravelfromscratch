@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <h2>to {{config('app.name')}}</h2>
        <p class="btn btn-primary btn-lg" href="/login" 
        role="button">Login</p>
        <p class="btn btn-success btn-lg" href="/register" 
        role="button">Register</p>

    </div>

@endsection
