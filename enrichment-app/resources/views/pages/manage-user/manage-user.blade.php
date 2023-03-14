@extends('template.template')

@section('title', env('APP_NAME').' | Manage Users')

@section('content')
    <div class="min-h-screen flex flex-col justify-between align-middle pt-20 w-full">
        <x-manage_user.user-table :users="$users"/>
        <x-manage_user.pagination-links :data="$users"/>
    </div>
@endsection
