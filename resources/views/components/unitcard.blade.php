<div>
    <div class="max-w-xs bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 m-3" >
        <a href="#">
            <img class="rounded-t-lg h-64 w-full object-contain" src="{{asset('images/'.$unit->unit_cover)}}" alt="" />
        </a>
        <div class="p-5">
            <a href="#">
                <div class="flex justify-between">
                    <div class="flex">
                        <img src={{asset('images/icons/verified.svg')}} class=" w-8 h-8 mr-1  stroke-blue-500 fill-blue-500" alt="some" />
                        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Sell: {{$unit->sell['sell_currency']  ?? ''}} {{$unit->sell['sell'] ?? ''}}</h5>
                    </div>
                </div>
                <div class="flex justify-between">
                    <div class="flex">
                        <img src={{asset('images/icons/verified.svg')}} class=" w-8 h-8 mr-1  stroke-blue-500 fill-blue-500" alt="some" />
                        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Rent: {{$unit->rent['rent_currency'] ?? ''}} {{$unit->rent['rent'] ?? ''}}/{{$unit->rent['rent_period'] ?? ''}} </h5>
                    </div>
                </div>
            </a>
            <span class="flex justify-between">
                <div class="flex flex-col items-center  ">
                    <img src={{asset('images/icons/bed.svg')}} class="w-8 h-8 mr-auto ml-auto stroke-blue-500 fill-blue-500" alt="some" />
                    <p class="mb-1 font-normal text-gray-700 dark:text-gray-400">{{$unit->bed}}</p>
                </div>
                <div class="flex flex-col items-center  ">
                    <img src={{asset('images/icons/bath.svg')}} class="w-8 h-8 mr-auto ml-auto stroke-blue-500 fill-blue-500" alt="some" />
                    <p class="mb-1 font-normal text-gray-700 dark:text-gray-400">{{$unit->bath}}</p>
                </div>
                <div class="flex flex-col items-center  ">
                    <img src={{asset('images/icons/area.svg')}} class="w-8 h-8 mr-auto ml-auto stroke-blue-500 fill-blue-500" alt="some" />
                    <p class="mb-1 font-normal text-gray-700 dark:text-gray-400">{{{$unit->area}}}</p>
                </div>
            </span>
            <div class="flex items-center justify-between">
                <div class="flex items-center ">
                    <img src={{asset('images/icons/location.svg')}} class=" w-8 h-8  mr-1 stroke-blue-500 fill-blue-500" alt="some" />
                    <p class=" font-normal text-gray-700 dark:text-gray-400">{{$unit->location['location_name']}}</p>
                </div>
                <button href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"  type="button" data-modal-toggle="extralarge-modal">
                   <a href="{{route('unit.edit' , $unit)}}">
                       More
                   </a>
                    <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
        </div>
    </div>    
</div>