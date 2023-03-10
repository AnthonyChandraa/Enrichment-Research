@extends('template.template')

@section('title', env('APP_NAME'). ' | Verify Email')

@section('content')
    <x-auth.verify-email-form :id="$id"/>
@endsection
