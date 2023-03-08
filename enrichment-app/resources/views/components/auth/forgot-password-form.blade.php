<div class="min-h-screen bg-gray-100 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <h2 class="mt-2 text-center text-3xl font-extrabold text-binus-blue">
            Forgot Your Password ?
        </h2>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
            <form class="space-y-6" action="{{route('forgot_password')}}" method="POST">
                @csrf
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">
                        Email address
                    </label>
                    <div class="mt-1">
                        <input id="email" name="email" type="email" autocomplete="email" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-binus-blue focus:border-binus-blue sm:text-sm">
                    </div>
                </div>

                <div>
                    <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent
                    rounded-md shadow-sm text-sm font-medium text-white bg-binus-blue hover:bg-binus-dark-blue
                    focus:outline-none
                    focus:ring-2 focus:ring-offset-2 focus:ring-binus-blue">
                        Reset Password
                    </button>
                    <a href="{{route('index_login')}}" class="w-full mt-2 flex justify-center py-2 px-4 border
                    border-binus-blue
                    border-2
                    rounded-md shadow-sm text-sm font-medium text-binus-blue bg-white hover:bg-binus-blue hover:text-white
                    focus:outline-none
                    focus:ring-2 focus:ring-offset-2 focus:ring-binus-blue">
                        Back
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
