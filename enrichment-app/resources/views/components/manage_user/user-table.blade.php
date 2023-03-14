<!-- This example requires Tailwind CSS v2.0+ -->
<div class="flex flex-col h-full ">
    <div class="-my-2 overflow-x-auto">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Email Verification Status
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Created At
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Role
                        </th>
                        <th colspan="2" scope="col">
                            <div class="w-full">
                                <label for="search" class="sr-only">Search</label>
                                <div class="relative">
                                    <form action="{{route('search_user')}}" method="get" style="z-index: 0">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center
                                        pointer-events-none">
                                            <!-- Heroicon name: solid/search -->
                                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <input id="search" name="search" class="block w-full pl-12 pr-3 py-2 border
                                    border-gray-300 rounded-md leading-5 bg-white placeholder-gray-500
                                    focus:outline-none focus:placeholder-gray-400 focus:ring-1 focus:ring-binus-blue
                                    focus:border-binus-blue sm:text-sm" placeholder="Search" type="search"
                                               value="{{app('request')->input('search') != '' ? app('request')->input
                                               ('search') : ''}}">
                                    </form>
                                </div>
                            </div>
                        </th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @if(!$users->isEmpty())
                            @foreach($users as $u)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded-full" src="{{asset('storage/'
                                            .$u->userDetail->profile_url)
                                            }}" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    {{$u->userDetail->first_name. " ".$u->userDetail->last_name}}
                                                </div>
                                                <div class="text-sm text-gray-500">
                                                    {{$u->email}}
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        @if($u->email_verified_at != null)
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                          Verified
                                        </span>
                                        @else
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                          Not Verified
                                        </span>
                                        @endif

                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{$u->created_at}}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        @foreach($u->userRoles as $ur)
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                          {{$ur->role->name}}
                                        </span>
                                        @endforeach
                                    </td>

                                    <td class="px-2 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <button x-on:click="idEditUserModal = '{{$u->id}}'" class="text-indigo-600
                                        hover:text-indigo-900">Edit</button>
                                    </td>
                                    @if($u->id != \Illuminate\Support\Facades\Auth::user()->id)
                                        <td class="pl-2 pr-4 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <form action="{{route('delete_user')}}" method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$u->id}}">
                                                <button type="submit" class="text-red-600
                                            hover:text-red-900">Delete</button>
                                            </form>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                        @else
                            <td colspan="3" class="pl-2 pr-4 py-4 whitespace-nowrap text-right text-sm font-medium">
                                No Data Found!
                            </td>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
