@extends('template.template')

@section('title', env('APP_NAME').' | Forgot Password')

@section('content')
    <x-auth.forgot-password-form/>
@endsection
