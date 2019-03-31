@extends('layouts.app')

@section('content')
<h2>to {{config('app.name')}}</h2>
<h3>{{$title}}</h3>

@if(count($services) > 0)
    <ul class="list-group">
        @foreach($services as $service)
            <li class="list-group-item">{{$service}}</li>
        @endforeach   
    </ul> 
@endif
@endsection