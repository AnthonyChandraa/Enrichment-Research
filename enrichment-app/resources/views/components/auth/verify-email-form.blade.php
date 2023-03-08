<div class="min-h-screen bg-gray-100 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <h2 class="mt-8 text-center text-3xl font-extrabold text-binus-blue">
            Verify Your Email
        </h2>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
            <form class="space-y-6" action="{{route('verify_email')}}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$id}}">
                <div>
                    <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent
                    rounded-md shadow-sm text-sm font-medium text-white bg-binus-blue hover:bg-binus-dark-blue
                    focus:outline-none
                    focus:ring-2 focus:ring-offset-2 focus:ring-binus-blue">
                        Verify Email
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
