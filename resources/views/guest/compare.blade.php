<x-guest-layout>
    <div class="w-4/5 mr-auto ml-auto">
    @if ($carts->count())
    <div class="relative mt-6">
        <div class="block absolute -inset-2  bg-blue-900 h-1 w-10 rounded-3xl"></div>
        <h2 class= " relative text-4xl font-bold before: ">Compare</h2>
    </div>
    <div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Unit 
                        </th>
                        @foreach ($carts as $item)
                        <th scope="col" class="px-6 py-3">
                                <img src="{{asset('images/'.$item->unit_cover)}}" class="stroke-blue-500 fill-blue-500 shadow-lg rounded-xl w-36 h-36 object-cover mb-3" alt="Bedroom" />
                                <span class="">
                                    {{$item->unit_name}}
                                </span>
                            </th>
                            
                        @endforeach
                        
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                            Bedroom
                        </th>
                        @foreach ($carts as $item)
                            <td class="px-6 py-4">
                                {{$item->bed}}
                            </td>
                        @endforeach
                        
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                            Sell
                        </th>
                        @foreach ($carts as $item)
                            <td class="px-6 py-4">
                                {{$item->sell['sell_currency']}}
                                {{$item->sell['sell']}}
                            </td>
                        @endforeach
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                            Rent
                        </th>
                        @foreach ($carts as $item)
                            <td class="px-6 py-4">
                                {{$item->rent['rent_currency']}} {{$item->rent['rent'] }} 
                            </td>
                        @endforeach
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                            Bathtoom
                        </th>
                        @foreach ($carts as $item)
                            <td class="px-6 py-4">
                                {{$item->bath}}
                            </td>
                        @endforeach
                        
                    </tr>
                    <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                            Area
                        </th>
                        @foreach ($carts as $item)
                            <td class="px-6 py-4">
                                {{$item->area}}
                            </td>
                        @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
       
        {{-- {{$carts}} --}}
    </div>
        
        
    @else
    <div class="text-center mt-8 mx-auto"></div>
        Nothing To Compare
    @endif
        @livewireScripts
    </div>
</x-guest-layout>