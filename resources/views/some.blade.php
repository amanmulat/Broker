<div class="grid grid-cols-2 ">
        <div class="grid grid-cols-2 gap-3 col-span-1 max-h-128 overflow-y-auto mr-2">
            <img class="col-span-2 h-72 w-full object-cover" src="https://images.unsplash.com/photo-1652958466759-6475197bddfa?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=60&raw_url=true&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500" alt="">
            <img class="col-span-1 h-40 w-full object-cover" src="https://images.unsplash.com/photo-1652958466759-6475197bddfa?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=60&raw_url=true&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500" alt="">
            <img class="col-span-1 h-40 w-full object-cover" src="https://images.unsplash.com/photo-1652958466759-6475197bddfa?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=60&raw_url=true&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500" alt="">
            <img class="col-span-2 h-40 w-full object-cover" src="https://images.unsplash.com/photo-1652958466759-6475197bddfa?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=60&raw_url=true&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500" alt="">
        </div>
        <div class="col-span-1">
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
            {{-- <div id="modal-loader" 
                style="display: none; text-align: center;"> --}}
                
            
            <h5 class=" text-lg font-bold tracking-tight text-gray-900 dark:text-white">Sell</h5>
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Birr @if (isset($unit))
                {{$unit->sell['sell']}}
            @endif</h5>
            <h5 class=" text-lg font-bold tracking-tight text-gray-900 dark:text-white">Rent / Month</h5>
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Birr 10,000 / Month</h5>
            <div class="flex">
                <h5 class="mb-2 mr-2 text-base font-bold tracking-tight text-gray-700 dark:text-white">Bed 2</h5>
                <h5 class="mb-2 mr-2  text-base font-bold tracking-tight text-gray-700 dark:text-white">Bath 2</h5>
                <h5 class="mb-2 mr-2  text-base font-bold tracking-tight text-gray-700 dark:text-white">Area 2</h5>
            </div>
            <div class="flex">
                <img src={{asset('images/icons/location.svg')}} class=" w-5 h-5  mr-1 stroke-blue-500 fill-blue-500" alt="some" />
                <h5 class="mb-2 mr-2  text-base font-bold tracking-tight text-gray-700 dark:text-white">Megenagna</h5>
            </div>
                <div class="flex items-center  space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                <button data-modal-toggle="extralarge-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Book a Tour</button>
                <button data-modal-toggle="extralarge-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Message</button>
                <button class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" data-modal-toggle="contact-modal">
                    Toggle modal
                </button>
            </div>
            <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center text-gray-500 dark:text-gray-400" id="tabExample" role="tablist">
                    <li class="mr-2" role="presentation">
                        <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="profile-tab-example" type="button" role="tab" aria-controls="profile-example" aria-selected="false">Overview</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-tab-example" type="button" role="tab" aria-controls="dashboard-example" aria-selected="false">Amenities</button>
                    </li>
                    <li role="presentation">
                        <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="contacts-tab-example" type="button" role="tab" aria-controls="contacts-example" aria-selected="false">Contacts</button>
                    </li>
                </ul>
            </div>
            <div id="tabContentExample">
                <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="profile-example" role="tabpanel" aria-labelledby="profile-tab-example">
                    <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Profile tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                </div>
                <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="dashboard-example" role="tabpanel" aria-labelledby="dashboard-tab-example">
                    <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Dashboard tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                </div>
                <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="contacts-example" role="tabpanel" aria-labelledby="contacts-tab-example">
                    <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Contacts tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                </div>
            </div>
        </div>
    </div>
    
</div>
                    