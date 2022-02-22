@extends('layouts.app')

@section('title', 'Pagina inicial - AirDrip')

@section('content')
    <div id="app">
        @if(session('warning'))
        <Login csrf_token="{{ @csrf_token()}}" sign="{{ $login }}" warning="{{session('warning')}}"></Login>
        @else
        <Login csrf_token="{{ @csrf_token()}}" sign="{{ $login }}"></Login>
        @endif
        
    </div>
@endsection

@section('script', '/js/app.js')