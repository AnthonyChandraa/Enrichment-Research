<!-- This example requires Tailwind CSS v2.0+ -->
<nav class="bg-binus-blue absolute top-0 w-full shadow-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <div class="-ml-2 mr-2 flex items-center md:hidden">
                    <!-- Mobile menu button -->
                    <button @click="toggleNavDropdownMobile()" type="button" class="inline-flex items-center
                    justify-center p-2
                    rounded-md
                    text-white hover:text-white hover:bg-binus-dark-blue focus:outline-none focus:ring-2
                    focus:ring-inset
                    focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <!--
                          Icon when menu is closed.

                          Heroicon name: outline/menu

                          Menu open: "hidden", Menu closed: "block"
                        -->
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                             fill="none"
                             viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
                <div class="flex-shrink-0 flex items-center">
                    <h2 class="text-xl font-bold text-white">{{env('APP_NAME')}}</h2>

                </div>
                <div class="hidden md:ml-6 md:flex md:items-center md:space-x-4">
                    <!-- Active: "bg-binus-dark-blue text-white", Default: "text-white hover:bg-binus-dark-blue" -->
                    <a href="{{route('index_home')}}" class="{{\Illuminate\Support\Facades\Route::currentRouteName()
                    == 'index_home' ? "bg-binus-darker-blue text-white" : "text-white hover:bg-binus-dark-blue"}} px-3 py-2
                    rounded-md text-sm font-medium"
                       aria-current="page">Home</a>

                    <a href="{{route('index_e_learning')}}"
                       class="{{\Illuminate\Support\Facades\Route::currentRouteName()
                    == 'index_e_learning' ? "bg-binus-darker-blue text-white" : "text-white hover:bg-binus-dark-blue"}}
                    px-3
                    py-2 rounded-md text-sm
                    font-medium">E-Learning</a>

                    <a href="{{route('index_journal')}}" class="{{\Illuminate\Support\Facades\Route::currentRouteName()
                    == 'index_journal' ? "bg-binus-darker-blue text-white" : "text-white hover:bg-binus-dark-blue"}}
                    px-3 py-2 rounded-md text-sm
                    font-medium">Journals</a>

                    @can('isAdmin')
                        <a href="{{route('index_manage_user')}}"
                        class="{{\Illuminate\Support\Facades\Route::currentRouteName()
                        == 'index_manage_user' ? "bg-binus-darker-blue text-white" : "text-white hover:bg-binus-dark-blue"}}
                        px-3 py-2 rounded-md text-sm font-medium">Manage User</a>
                    @endcan

                </div>
            </div>
            <div class="flex items-center">
                @if(!\Illuminate\Support\Facades\Auth::check())
                    <div class="flex-shrink-0">
                        <a href="{{route('index_login')}}" class="relative inline-flex items-center px-4 py-2 border
                    border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-binus-orange
                    hover:bg-binus-dark-orange focus:outline-none focus:ring-2 focus:ring-offset-2
                    focus:ring-offset-white">
                            <!-- Heroicon name: solid/plus -->
                            <span>Login</span>
                        </a>
                        <a href="{{route('index_register')}}" class="relative inline-flex items-center px-4 py-2 border
                    border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-binus-orange
                    hover:bg-binus-dark-orange focus:outline-none focus:ring-2 focus:ring-offset-2
                    focus:ring-offset-white">
                            <!-- Heroicon name: solid/plus -->
                            <span>Register</span>
                        </a>
                    </div>
                @endif
                @if(\Illuminate\Support\Facades\Auth::check())
                    <div class="hidden md:ml-4 md:flex-shrink-0 md:flex md:items-center">
                        <button class="bg-white p-1 rounded-full text-gray-400 hover:text-white focus:outline-none
                    focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                            <span class="sr-only">View notifications</span>
                            <!-- Heroicon name: outline/bell -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                        </button>

                        <!-- Profile dropdown -->
                        <div class="ml-3 relative">
                            <div>
                                <button @click="toggleNavDropdown()" type="button" class="bg-gray-800 flex text-sm rounded-full
                            focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                    <span class="sr-only">Open user menu</span>
                                    <img class="h-8 w-8 rounded-full" src="{{asset('storage/'.\Illuminate\Support\Facades\Auth::user()
                                    ->userDetail->profile_url)}}"
                                         alt="">
                                </button>
                            </div>

                            <!--
                              Dropdown menu, show/hide based on menu state.

                              Entering: "transition ease-out duration-200"
                                From: "transform opacity-0 scale-95"
                                To: "transform opacity-100 scale-100"
                              Leaving: "transition ease-in duration-75"
                                From: "transform opacity-100 scale-100"
                                To: "transform opacity-0 scale-95"
                            -->
                            <div x-show="openNavDropdown" x-transition.scale class="origin-top-right
                            absolute
                            right-0 mt-2
                                w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none z-30" role="menu"
                                 aria-orientation="vertical"
                                 aria-labelledby="user-menu-button" tabindex="-1">
                                <!-- Active: "bg-gray-100", Not Active: "" -->
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>

                                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>

                                <form action="{{route('logout')}}" method="POST">
                                    @csrf
                                    <button type="submit" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                       tabindex="-1" id="user-menu-item-2">Sign out</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div x-show="openNavDropdownMobile" x-transition x-cloak class="md:hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="{{route('index_home')}}" class="{{\Illuminate\Support\Facades\Route::currentRouteName()
                    == 'index_home' ? "bg-binus-darker-blue text-white" : "text-white hover:bg-binus-dark-blue "}}
                    block px-3 py-2 rounded-md
            text-base font-medium"
               aria-current="page">Home</a>

            <a href="{{route('index_e_learning')}}" class="{{\Illuminate\Support\Facades\Route::currentRouteName()
                    == 'index_e_learning' ? "bg-binus-darker-blue text-white" : "text-white hover:bg-binus-dark-blue
                    "}} block px-3 py-2 rounded-md text-base
            font-medium">E-Learning</a>

            <a href="{{route('index_journal')}}" class="{{\Illuminate\Support\Facades\Route::currentRouteName()
                    == 'index_journal' ? "bg-binus-darker-blue text-white" : "text-white hover:bg-binus-dark-blue "}}
                    block px-3 py-2 rounded-md text-base
            font-medium">Journals</a>
        </div>
        @if(\Illuminate\Support\Facades\Auth::check())
            <div class="pt-4 pb-3 border-t border-gray-700">
                <div class="flex items-center px-5 sm:px-6">
                    <div class="flex-shrink-0">
                        <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixqx=nkXPoOrIl0&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    </div>
                    <div class="ml-3">
                        <div class="text-base font-medium text-white">Tom Cook</div>
                        <div class="text-sm font-medium text-white">tom@example.com</div>
                    </div>
                    <button class="ml-auto flex-shrink-0 bg-white p-1 rounded-full text-gray-400 hover:text-white
                focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                        <span class="sr-only">View notifications</span>
                        <!-- Heroicon name: outline/bell -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                    </button>
                </div>
                <div class="mt-3 px-2 space-y-1 sm:px-3">
                    <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-binus-dark-blue">Your Profile</a>

                    <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-binus-dark-blue">Settings</a>

                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button type="submit" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                tabindex="-1" id="user-menu-item-2">Sign out</button>
                    </form>
                </div>
            </div>
        @endif
    </div>
</nav>
