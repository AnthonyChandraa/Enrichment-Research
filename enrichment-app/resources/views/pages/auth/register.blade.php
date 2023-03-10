@extends('template.template')

@section('title', env('APP_NAME'). ' | Register')

@section('content')
    <x-auth.register-form/>
@endsection
