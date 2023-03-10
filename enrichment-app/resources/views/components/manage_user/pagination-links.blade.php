<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-white sm:px-6 lg:px-8 flex items-center justify-between border-t border-gray-200 py-2">
    <div class="flex-1 flex justify-between sm:hidden">
        <a href="{{$data->previousPageUrl()}}" class="relative inline-flex items-center px-4 py-2 border border-gray-300
    text-sm font-medium rounded-md text-gray-700 bg-white hover:text-gray-500">
            Previous
        </a>
        <a href="{{$data->nextPageUrl()}}" class="ml-3 relative inline-flex items-center px-4 py-2 border
        border-gray-300 text-sm
        font-medium rounded-md text-gray-700 bg-white hover:text-gray-500">
            Next
        </a>
    </div>
    <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
        <div>
            <p class="text-sm text-gray-700">
                Showing
                <span class="font-medium">{{$data->currentPage()*$data->perPage()-$data->perPage()+1}}</span>
                to
                <span class="font-medium">{{$data->count()}}</span>
                of
                <span class="font-medium">{{$data->total()}}</span>
                results
            </p>
        </div>
        <div>
            <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                <a href="{{$data->previousPageUrl()}}" class="relative inline-flex items-center px-2 py-2 rounded-l-md
                border border-gray-300
                bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                    <span class="sr-only">Previous</span>
                    <!-- Heroicon name: solid/chevron-left -->
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                </a>
                @if($data->lastPage()>6)
                    @for($i=1; $i<=$data->lastPage(); $i++)
                        <a href="{{$data->url($i)}}" class="relative inline-flex items-center px-4 py-2 border
                        border-gray-300
                        bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                            {{$i}}
                        </a>
                    @endfor
                    <span class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700">
          ...
        </span>
                    @for($i=$data->lastPage()-3; $i<=$data->lastPage(); $i++)
                        <a href="{{$data->url($i)}}" class="relative inline-flex items-center px-4 py-2 border
                    border-gray-300
                    bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                            {{$i}}
                        </a>
                    @endfor
                @else
                    @for($i=1; $i<=$data->lastPage(); $i++)
                        <a href="{{$data->url($i)}}" class="relative inline-flex items-center px-4 py-2 border
                        border-gray-300
                        bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                            {{$i}}
                        </a>
                    @endfor
                @endif
                <a href="{{$data->nextPageUrl()}}" class="relative inline-flex items-center px-2 py-2 rounded-r-md
                border border-gray-300
                bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                    <span class="sr-only">Next</span>
                    <!-- Heroicon name: solid/chevron-right -->
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                </a>
            </nav>
        </div>
    </div>
</div>
