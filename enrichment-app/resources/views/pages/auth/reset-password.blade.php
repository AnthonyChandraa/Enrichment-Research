@extends('template.template')

@section('title', 'E-Learning | Reset Password')

@section('content')
    <x-auth.reset-password-form :id="$id"/>
@endsection
