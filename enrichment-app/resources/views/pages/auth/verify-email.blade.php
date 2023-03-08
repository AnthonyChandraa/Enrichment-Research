@extends('template.template')

@section('title', 'E-Learning | Verify Email')

@section('content')
    <x-auth.verify-email-form :id="$id"/>
@endsection
