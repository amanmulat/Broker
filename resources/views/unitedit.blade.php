<x-app-layout>
    <x-slot name="header"> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Units') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-3 md:py-6">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            @foreach ($units as $unit)
                <x-Unitcard :unit="$unit" />
            @endforeach
        </div>
    </div>
</x-app-layout>