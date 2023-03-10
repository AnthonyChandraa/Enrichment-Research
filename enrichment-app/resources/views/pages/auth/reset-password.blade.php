@extends('template.template')

@section('title', env('APP_NAME').' | Reset Password')

@section('content')
    <x-auth.reset-password-form :id="$id"/>
@endsection
