@extends('template.template')

@section('title', env('APP_NAME').' | Login')

@section('content')
    <x-auth.login-form/>
@endsection
