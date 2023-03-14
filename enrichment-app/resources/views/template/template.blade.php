<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.11.1/dist/cdn.min.js"></script>
    @notifyCss
    @vite('resources/css/app.css')
    <style>
        .notify {
            z-index: 1000000;
            align-items: end;
        }

        [x-cloak] { display: none !important; }
    </style>
</head>
<body x-data="{
    openNavDropdown: false,
    toggleNavDropdown() {this.openNavDropdown = !this.openNavDropdown},
    openNavDropdownMobile: false,
    toggleNavDropdownMobile() {this.openNavDropdownMobile = !this.openNavDropdownMobile},
    openEditUserModal: false,
    toggleEditUserModal() {this.openEditUserModal = !this.openEditUserModal},

}" x-cloak>
    <div class="min-h-screen relative w-full flex flex-col justify-between" >
        <x-navbar/>
        @include('notify::components.notify')
        @yield('content')
        @notifyJs
        @vite('resources/js/app.js')
    </div>
</body>
</html>
