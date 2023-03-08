<div class="min-h-screen bg-gray-100 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <h2 class="mt-8 text-center text-3xl font-extrabold text-binus-blue">
            Register to {{env('APP_NAME')}}
        </h2>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
            <form class="space-y-6" action="{{route('register')}}" method="POST">
                @csrf
                <div class="flex justify-between gap-4">
                    <div>
                        <label for="firstname" class="block text-sm font-medium text-gray-700">
                            First Name
                        </label>
                        <div class="mt-1">
                            <input id="firstname" name="first_name" type="text" required
                                   class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-binus-blue focus:border-binus-blue sm:text-sm">
                        </div>
                    </div>
                    <div>
                        <label for="lastname" class="block text-sm font-medium text-gray-700">
                            Last Name
                        </label>
                        <div class="mt-1">
                            <input id="lastname" name="last_name" type="text" required
                                   class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-binus-blue focus:border-binus-blue sm:text-sm">
                        </div>
                    </div>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">
                        Email address
                    </label>
                    <div class="mt-1">
                        <input id="email" name="email" type="email" autocomplete="email" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-binus-blue focus:border-binus-blue sm:text-sm">
                    </div>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">
                        Password
                    </label>
                    <div class="mt-1">
                        <input id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-binus-blue focus:border-binus-blue sm:text-sm">
                    </div>
                </div>

                <div>
                    <label for="confirm" class="block text-sm font-medium text-gray-700">
                        Confirm Password
                    </label>
                    <div class="mt-1">
                        <input id="confirm" name="confirm" type="password" required
                               class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md
                               shadow-sm placeholder-gray-400 focus:outline-none focus:ring-binus-blue
                               focus:border-binus-blue sm:text-sm">
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="terms" name="terms" type="checkbox" class="h-4 w-4 text-binus-blue
                        focus:ring-binus-blue border-gray-300 rounded">
                        <label for="terms" class="ml-2 block text-sm text-gray-900">
                            I Agree To Terms & Conditions
                        </label>
                    </div>


                </div>

                <div>
                    <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent
                    rounded-md shadow-sm text-sm font-medium text-white bg-binus-blue hover:bg-binus-dark-blue
                    focus:outline-none
                    focus:ring-2 focus:ring-offset-2 focus:ring-binus-blue">
                        Create Account
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
