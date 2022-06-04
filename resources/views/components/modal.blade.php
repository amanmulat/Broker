<div>
    <div id="extralarge-modal" tabindex="-1" aria-hidden="true" class="modal hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
            <div class="relative p-4 w-full max-w-7xl  h-full md:h-auto">
               
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow min-h-90h dark:bg-gray-700">
                    <div class="flex justify-between items-center p-1 rounded-t border-b dark:border-gray-600">
                <div class="flex gap-3 items-center">
                    
                    {{-- <img src="{{asset('images/Logo_with_name.svg')}}" alt="Logo" class="h-12 mr-5"> --}}

                    <img src={{asset('images/icons/heart.svg')}} class="w-6 h-6 my-1 mr-auto ml-auto stroke-blue-500 fill-blue-500" alt="some" />
                    <img src={{asset('images/icons/share.svg')}} class="w-6 h-6 my-1 mr-auto ml-auto stroke-blue-500 fill-blue-500" alt="some" />
                </div>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="extralarge-modal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                </button>
            </div>
                    <!-- Modal header -->
                    <!-- Modal body -->
                <div class="">
                        <div id="dynamic-content"></div>
                   
                </div>
            </div>
        </div>
         {{-- <script src="{{asset('js/tabs.js')}}"  ></script> --}}
</div>