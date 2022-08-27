<div>
    @if (\Cart::getTotal())
        <div class="flex mt-2 justify-between bg-gray-700 dark:bg-slate-800  dark:text-gray-400 w-full rounded-xl">
            <div class="flex flex-wrap items-center  ">
                @foreach ( $all_cart as $item)
                    <div class="bg-gray-400 rounded-xl ml-4 p-1 text-gray-100 flex h-fit my-1.5 ">
                        <span class="h-fit">{{$item->name}} </span>
                        <form   wire:submit.prevent="removeCart({{$item->id}})" class="m-0 p-0 h-0">
                            @csrf
                            <button class="material-symbols-rounded ml-2">
                                cancel
                            </button>
                        </form>
                    </div>
                @endforeach
               
            </div>
            <button onclick="window.location = '{{route('compare')}}'"  class="bg-indigo-500 text-white rounded-xl p-2 mr-4 ml-4 h-fit my-1.5">Compare</button>
        </div>
    @endif
</div>