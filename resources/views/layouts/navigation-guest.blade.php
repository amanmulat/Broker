<nav class=" pt-2 w-4/5 mr-auto ml-auto ">
    <div class="flex items-center justify-between  ">
        <a href="{{route('home' )}}">
            <img src="{{asset('images/Logo_with_name.svg')}}" alt="Logo" class="h-12">
        </a>
        <div class="flex flex-wrap gap-2 items-center ">
            <span>List your Property</span>
            <button href="{{route('unit.show' , '1')}}" data-modal-toggle="contact-modal" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"  type="button" >
                Login
            <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
        </div>
    </div>
    <div class="text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
        <ul class="flex flex-wrap -mb-px">
            <li class="mr-2">
                <a href="{{route('catagory', ['for'=>'rent'])}}" class="inline-block p-4 pl-0 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">For Rent</a>
            </li>
            <li class="mr-2">
                <a href="#" class="inline-block p-4 text-blue-600 rounded-t-lg border-b-2 border-blue-600 active dark:text-blue-500 dark:border-blue-500" aria-current="page">Buy Home</a>
            </li>
            <li class="mr-2">
                <a href="#" class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Buy Land</a>
            </li>
            <li class="mr-2">
                <a href="#" class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Contacts</a>
            </li>
        </ul>
    </div>
    
    <form  action="{{route('search')}}" method="POST"  class="flex flex-wrap gap-5 mt-2">
        @csrf
        <div class=" w-40 min-w-fit">
            <label for="underline_select" class="sr-only">Underline select</label>
            {{-- <label for="underline_select" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Sell Price</label> --}}
            <select id="underline_select" name="region" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                <option value='0' selected value="">Choose a Region</option>
                <option value="1">United States</option>
                <option value="2">Canada</option>
                <option value="3">France</option>
                <option value="4">Germany</option>
            </select>
        </div>
        <div class=" w-40 min-w-fit">
            <label for="underline_select" class="sr-only">Underline select</label>
            <select name="catagory" id="underline_select"  class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                <option selected value="">Property Type</option>
                <option value="vl">Appartment</option>
                <option value="CA">Canada</option>
                <option value="FR">France</option>
                <option value="DE">Germany</option>
            </select>
        </div>
        <div class="flex w-40 min-w-fit">
            <label for="underline_select" class="sr-only">Underline select</label>
            <select  id="underline_select" name="minBed" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                <option selected  value="">Min Bed</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
            <select id="underline_select" name="maxBed" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                <option selected value="">Max Bed</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
        </div>
        <div class="flex w-40 min-w-fit">
            <label for="underline_select" class="sr-only">Underline select</label>
            <select id="underline_select" name="minBath" class="block py-2.5 px-0 w-24 text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                <option selected value="">Min Bath</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
            <select id="underline_select" name="maxBath" class="block py-2.5 px-0 w-24 text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                <option selected value="">Max Bath</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="">5+</option>
            </select>
        </div>
        <div class=" flex flex-col w-40 min-w-fit ">
            <label for="mulit-range" class="text-gray-500 dark:text-gray-400 text-sm ">[ <output id="num">50</output> - <output id="nummax">2000</output> ] MQ</label>
            <span class="multi-range">
                <input type="range" name="areaLower" min="50" max="2000" value="50" id="lower"  >
                <input type="range" name="areaHigher" min="50" max="2000" value="2000" id="upper"  >
            </span>
        </div>
         <div class="flex flex-col w-40 min-w-fit ">
            <label for="mulit-range" class="text-gray-500 dark:text-gray-400 text-sm ">[ <output id="mNumMin">0 </output> - <output id="mNumMax">100</output>  ] Million Birr</label>
            <span class="multi-range">
                <input type="range" name="priceLower" min="0" max="100" value="0" id="lowerMoney">
                <input type="range" name="priceHiher" min="0" max="100" value="100" id="upperMoney">
            </span>
        </div>
        <button type="submit"class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-sm hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"  type="button" >
            <span class="material-symbols-outlined mr-1">
             search
            </span>
            Search
        </button>
    </form>
    @if (session('message'))
        <div>{{session('message')}}</div>
    @endif
    @livewire('cart-counter')
      
</nav>
{{-- <div class="relative flex items-top justify-center min-h-screen  dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    Eyita
</div> --}}