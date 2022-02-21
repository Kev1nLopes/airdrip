@extends('layouts.app')

@section('title', 'Pagina inicial - AirDrip')

@section('content')
    <Login csrf_token="{{ @csrf_token()}}"></Login>
@endsection