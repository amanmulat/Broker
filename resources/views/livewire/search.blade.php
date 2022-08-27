<div>
    <form  wire:submit.prevent="search()"  method="POST"  class="flex flex-wrap gap-5 mt-2">
        @csrf
        <div class=" w-40 min-w-fit">
            <label for="underline_select" class="sr-only">Underline select</label>
            <select id="underline_select"  wire:model="region" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                <option value='0' selected value="">Choose a Region</option>
                <option value="1">United States</option>
                <option value="2">Canada</option>
                <option value="3">France</option>
                <option value="4">Germany</option>
            </select>
        </div>
        <div class=" w-40 min-w-fit">
            <label for="underline_select" class="sr-only">Underline select</label>
            <select wire:model="catagory" id="underline_select"  class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                <option selected value="">Property Type</option>
                <option value="ap">Appartment</option>
                <option value="CA">Canada</option>
                <option value="FR">France</option>
                <option value="DE">Germany</option>
            </select>
        </div>
        <div class="flex w-40 min-w-fit">
            <label for="underline_select" class="sr-only">Underline select</label>
            <select  id="underline_select"  wire:model="minBed" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                <option selected  value="">Min Bed</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
            <select id="underline_select"  wire:model="maxBed" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                <option selected value="">Max Bed</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
        </div>
        <div class="flex w-40 min-w-fit">
            <label for="underline_select" class="sr-only">Underline select</label>
            <select id="underline_select"  wire:model="minBath" class="block py-2.5 px-0 w-24 text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                <option selected value="">Min Bath</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
            <select id="underline_select"  wire:model="maxBath" class="block py-2.5 px-0 w-24 text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
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
                <input type="range"  wire:model="areaLower" min="50" max="2000" value="50" id="lower"  >
                <input type="range"  wire:model="areaHigher" min="50" max="2000" value="2000" id="upper"  >
            </span>
        </div>
         <div class="flex flex-col w-40 min-w-fit ">
            <label for="mulit-range" class="text-gray-500 dark:text-gray-400 text-sm ">[ <output id="mNumMin">0 </output> - <output id="mNumMax">100</output>  ] Million Birr</label>
            <span class="multi-range">
                <input type="range"  wire:model="priceLower" min="0" max="100" value="0" id="lowerMoney">
                <input type="range"  wire:model="priceHigher" min="0" max="100" value="100" id="upperMoney">
            </span>
        </div>
        <button type="submit" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-sm hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"  type="button" >
            <span class="material-symbols-outlined mr-1">
             search
            </span>
            Search
        </button>
    </form>
</div>
