<div class="flex flex-wrap">
    @foreach ($units as $unit)
            <div class="max-w-xs bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 m-3" >
                <a href="#">
                    <img class="rounded-t-lg h-64 w-full object-contain" src="{{asset('images/'.$unit->unit_cover)}}" alt="unit cover" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <div class="flex justify-between">
                            <div class="flex">
                                <img src={{asset('images/icons/verified.svg')}} class=" w-8 h-8 mr-1  stroke-blue-500 fill-blue-500" alt="some" />
                                <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white " >{{$unit->sell['sell_currency']}} <span class="commas">{{$unit->sell['sell']}}</span>  </h5>
                            </div>
                        </div>
                    </a>
                    <span class="flex justify-between">
                        <div class="flex flex-col items-center  ">
                            <img src={{asset('images/icons/bed.svg')}} class="w-8 h-8 mr-auto ml-auto stroke-blue-500 fill-blue-500" alt="some" />
                            <p class="mb-1 font-normal text-gray-700 dark:text-gray-400">@if(isset($unit->bed)){{$unit->bed}}@endif </p>
                        </div>
                        <div class="flex flex-col items-center  ">
                            <img src={{asset('images/icons/bath.svg')}} class="w-8 h-8 mr-auto ml-auto stroke-blue-500 fill-blue-500" alt="some" />
                            <p class="mb-1 font-normal text-gray-700 dark:text-gray-400">@if(isset($unit->bath)){{$unit->bath}}@endif </p>
                        </div>
                        <div class="flex flex-col items-center  ">
                            <img src={{asset('images/icons/area.svg')}} class="w-8 h-8 mr-auto ml-auto stroke-blue-500 fill-blue-500" alt="some" />
                            <p class="mb-1 font-normal text-gray-700 dark:text-gray-400">@if(isset($unit->area)){{$unit->area}}@endif </p>
                        </div>
                    </span>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center ">
                            <img src={{asset('images/icons/location.svg')}} class=" w-8 h-8  mr-1 stroke-blue-500 fill-blue-500" alt="some" />
                            <p class=" font-normal text-gray-700 dark:text-gray-400">@if(isset($unit->location['location_name'])){{$unit->location['location_name']}}@endif </p>
                        </div>
                        {{-- <a href="{{route('modalShow' ,[ 'unit' => "1"])}}"> --}}
                            
                            <button data-modal-toggle="extralarge-modal" 
                                data-target="#view-modal"   
                                id="getUser" class="btn btn-sm btn-info"
                                data-url="{{route('modalShow' ,['unit' => $unit->id ] )}}"
                                >
                                    Show 
                            </button>
                            
                            {{-- </a> --}}
                        </div>
                    </div>
                    @if ($carts->where('id' , $unit->id)->count())
                        <form wire:submit.prevent="removeCart({{$unit->id}})">
                            @csrf
                            <button class="dark:text-gray-400" type="submit">Remove</button>
                        </form>
                    @else
                    <form  wire:submit.prevent="addToCart({{$unit->id}})" >
                        @csrf
                        {{-- <input wire:model='quantity.{{$unit->id}}'  value="1"> --}}
                        <button type="submit" class="dark:text-gray-400">Compare</button>
                    </form>

                    @endif
                        
            </div>
                    
    @endforeach
</div>
